<section id="services" class="py-5 bg-light">
    <div class="container">
        <h2 class="display-4 mb-4 fade-in">Serviços</h2>
        <div class="row">
            @foreach($services as $service)
                <div class="col-lg-4 mb-4 fade-in">
                    <div class="card h-100">
                        <div class="card-body">
                            <h3 class="card-title">{{ $service['title'] }}</h3>
                            <p class="card-text">{{ $service['description'] }}</p>
                        </div>
                        <div class="card-footer text-center">
                            <button type="button" class="btn btn-custom" data-bs-toggle="modal" data-bs-target="#serviceModal{{$loop->index}}">
                                Leia mais
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="serviceModal{{$loop->index}}" tabindex="-1" aria-labelledby="serviceModalLabel{{$loop->index}}" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="serviceModalLabel{{$loop->index}}">{{ $service['title'] }}</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <p>{{ $service['description'] }}</p>
                                <!-- Adicione mais conteúdo aqui, se necessário -->
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>