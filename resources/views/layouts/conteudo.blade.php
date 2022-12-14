@section('content')
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h1>Bem vindo ao aplicativo Controle de Tarefas!</h1>
                <h5>Monitore e registre suas tarefas agora mesmo com o nosso sistema criado em laravel.</h5>
                <p>Nosso app utiliza o motor blade no front-end e criptografia nativa laravel.</p>
                <p>Receba um e-mail confirmando que a tarefa foi cadastrada.</p>
            </div>
            <div class="col-md-4 d-none d-md-block">
                <img src="{{ asset('img/logo.png') }}" class="img-fluid" alt="logo">
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <p>Aplicativo criado por: <a href="https://www.linkedin.com/in/yanvl/" target="_blank">Yan Vitor</a></p>
                </div>
            </div>
        </div>
    </div>
@endsection