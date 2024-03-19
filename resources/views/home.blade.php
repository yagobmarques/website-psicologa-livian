<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{env("APP_NAME")}}</title>
    <!-- Bootstrap CSS -->
    <link href="resources/css/app.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        html,
        body,
        .carousel,
        .carousel-inner,
        .carousel-item {
            height: 100%;
        }

        .carousel-item img {
            object-fit: cover;
        }

        #instagram-posts .col img {
            width: 100%;
            height: auto;
        }

        .btn-custom {
            background-color: #BB7C9E; /* Altere para a cor desejada */
            color: white; /* Altere para a cor do texto desejada */
            /* Adicione outros estilos personalizados conforme necessário */
        }

        .btn-custom:hover {
            background-color: rgb(117, 5, 5); /* Altere para a cor desejada no hover */
            /* Adicione outros estilos de hover conforme necessário */
        }
        /* Estilo Atraente */
        .navbar {
            background-color: #f8f9fa; /* Cor de fundo */
            border-bottom: 1px solid #dee2e6; /* Bordas inferiores */
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Sombra */
        }

        .navbar-brand {
            color: #343a40; /* Cor do texto do logotipo */
            font-weight: bold; /* Negrito */
            font-size: 24px; /* Tamanho da fonte */
        }

        .navbar-nav .nav-link {
            color: #343a40; /* Cor do texto dos links */
        }

        /* Botão de Rolagem para o Topo */
        #back-to-top {
        display: none; /* Esconder por padrão */
        position: fixed;
        bottom: 20px;
        right: 20px;
        z-index: 99;
        font-size: 18px;
        border: none;
        outline: none;
        background-color: #BB7C9E;
        color: #fff;
        cursor: pointer;
        width: 50px; /* Definir largura igual à altura para torná-lo redondo */
        height: 50px; /* Definir altura igual à largura para torná-lo redondo */
        border-radius: 50%; /* Tornar o botão redondo */
        transition: background-color 0.3s ease-in-out;
        text-align: center; /* Centralizar o conteúdo do botão */
        line-height: 50px; /* Centralizar verticalmente o conteúdo do botão */
        }

        #back-to-top:hover {
            background-color: #7c4e67; /* Mudança de cor ao passar o mouse */
        }

        .fade-in {
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.5s ease, transform 2s ease;
        }

        .fade-in.visible {
            opacity: 1;
            transform: translateY(0);
        }
    </style>
</head>
<body>
    <x-header />
    <div class="container">
        <x-carousel />
        <x-about-me />
        <x-instagram-posts />
        <x-services :services="$services" />
        <x-clinic-map />
        <x-contact :apiwpp="$apiwpp" />

    </div>
    <x-footer />
    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }

        // Mostrar o botão de rolagem para o topo quando o usuário rolar para baixo
        window.onscroll = function() {
            scrollFunction();
        };

        function scrollFunction() {
            var backToTopBtn = document.getElementById("back-to-top");
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                backToTopBtn.style.display = "block";
            } else {
                backToTopBtn.style.display = "none";
            }
        }
    </script>
    <script>
        var lastScrollTop = 0;
      
        window.addEventListener("scroll", function() {
          var currentScroll = window.pageYOffset || document.documentElement.scrollTop;
          
          if (currentScroll > lastScrollTop) {
            // Deslizando para baixo
            document.querySelector("nav").style.top = "-80px"; // Altura do seu header
          } else {
            // Deslizando para cima
            document.querySelector("nav").style.top = "0";
          }
          
          lastScrollTop = currentScroll <= 0 ? 0 : currentScroll; // Para lidar com o scroll para cima no topo da página
        });

        window.addEventListener('scroll', function() {
            var navbarNav = document.getElementById('navbarNav');
            var isDropdownOpen = navbarNav.classList.contains('show');
            if (isDropdownOpen) {
                var togglerButton = document.querySelector('.navbar-toggler');
                togglerButton.click();
            }
        });

        document.addEventListener("DOMContentLoaded", function() {
        var fadeIns = document.querySelectorAll('.fade-in');
        var scrollPosition = window.innerHeight;

        function checkPosition() {
            for (var i = 0; i < fadeIns.length; i++) {
                var element = fadeIns[i];
                var positionFromTop = element.getBoundingClientRect().top;

                if (positionFromTop - scrollPosition <= 0) {
                    element.classList.add('visible');
                }
            }
        }

        window.addEventListener('scroll', checkPosition);
        checkPosition();
        });
      </script>
</body>
</html>
