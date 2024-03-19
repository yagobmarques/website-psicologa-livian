<?php

use App\View\Components\Services;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $services = [
        [
            'title' => 'Aplicação de ABA em Crianças',
            'description' => 'Apoio no desenvolvimento e implementação de programas de Análise do Comportamento Aplicada para crianças.'
        ],
        [
            'title' => 'Orientação Profissional',
            'description' => 'Apoio na escolha de carreira e planejamento profissional.'
        ],
        [
            'title' => 'Aconselhamento Individual',
            'description' => 'Sessões individuais para ajudar a lidar com desafios pessoais e emocionais.'
        ],
        [
            'title' => 'Terapia de Casal',
            'description' => 'Sessões para casais que desejam melhorar a comunicação e resolver conflitos.'
        ],
        [
            'title' => 'Terapia Familiar',
            'description' => 'Sessões em grupo para melhorar relacionamentos e resolver problemas familiares.'
        ],
        [
            'title' => 'Psicoterapia Infantil',
            'description' => 'Terapia focada em crianças para ajudar a lidar com problemas comportamentais e emocionais.'
        ]
    ];

    $psychologistDescription = "Sou uma psicóloga dedicada a ajudar meus pacientes a alcançarem o bem-estar emocional e a superarem desafios da vida. Tenho experiência em uma variedade de áreas, incluindo aconselhamento individual, terapia de casal e terapia familiar. Meu objetivo é criar um ambiente de apoio e compreensão, onde meus pacientes possam explorar suas emoções e encontrar soluções para seus problemas.";
    $apiwpp = "";

    $url = 'https://api.whatsapp.com/send';
    $queryParams = http_build_query([
        'phone' => '84994930330',
        'text' => 'Olá, eu gostaria de conversar sobre psicoterapia!
        Com certeza evoluiremos juntos!!!!!!
        '
    ]);
    $apiwpp = $url . '?' . $queryParams;

    return view('home', compact(["services", "apiwpp"]));
});
