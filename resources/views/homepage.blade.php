@extends('layout.home')
@section('content')
    <div class='container mt-5'>
        <div class="row">
            <div class="col-md-6">
                <h1 class="display-4">Bem-vindo ao {{ str_replace('_', ' ', config('app.name')) }}</h1>
                <p class="lead">Sua saúde em primeiro lugar. Agende consultas, conheça nossos médicos e aproveite nossos
                    serviços de qualidade.</p>
                <a href="#" class="btn btn-primary btn-lg">Agende uma Consulta</a>
            </div>
            <div class="col-md-6">
                <img src="https://placehold.co/500x300?text=Sa%C3%BAde" alt="Imagem de Saúde" class="img-fluid rounded">
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-md-4">
                <h3>Área do Paciente</h3>
                <p>Acesse seus dados, histórico de consultas e resultados de exames de forma segura e fácil.</p>
                <a href="#" class="btn btn-outline-secondary">Acessar Área do Paciente</a>
            </div>
            <div class="col-md-4">
                <h3>Conheça nossos Médicos</h3>
                <p>Encontre o médico ideal para suas necessidades e agende uma consulta com facilidade.</p>
                <a href="#" class="btn btn-outline-secondary">Conhecer Médicos</a>
            </div>
            <div class="col-md-4">
                <h3>Nossos Serviços</h3>
                <p>Oferecemos uma ampla gama de serviços para cuidar da sua saúde de forma completa.</p>
                <a href="#" class="btn btn-outline-secondary">Ver Serviços</a>
            </div>
        </div>
    @endsection
