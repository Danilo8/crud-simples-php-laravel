<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Agenda PHP Laravel</title>

        <!--cdn Bootstrap CSS-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

        <!--cdn Bootstrap JS-->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

        <!--Add icon library-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <style>
        .nav-link.active{
            border-bottom: 4px solid white;
        }
    </style>
    <body>
        <!--Barra de Navegação-->
        <nav class="navbar navbar-expand-lg navbar-light bg-info">
            <a class="navbar-brand ml-5 text-white" href="{{url('/')}}">
                <i style="font-size: 30px" class="fa fa-code"></i> 
                <span style="vertical-align: top">
                    CRUD | PHP Laravel
                </span>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse nav justify-content-end mr-5" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-item nav-link text-white" href="{{url('/')}}">Agenda <span class="sr-only">(current)</span></a>
                    <a class="nav-item nav-link active text-white" href="{{url('/cadastro')}}">Cadastrar Contato</a>
                </div>
            </div>
        </nav>

        @if(session('success'))
            <script type='text/javascript'>
                swal({
                    type: 'success',
                    showConfirmButton: false,
                    title: {{session('success')}},
                    timer: 2000,
                })
            </script>
        @endif
        
        <!--Div que vai conter a Tabela-->
        <div class="container">
            <h1 class="text-center mt-3">Cadastrar Contato</h1>
            <div style="margin-left: 25%;margin-right: 25%;margin-top: 50px">
                <form action="{{url('/store')}}" method="post">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="name">Nome:</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Nome">
                    </div>
                    <div class="form-group">
                        <label for="phone">Telefone:</label>
                        <input type="text" class="form-control" id="phone" name="phone" placeholder="Telefone">
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-block btn-lg btn-success">Cadastrar</button>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>