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
                    <a class="nav-item nav-link text-white" href="{{url('/cadastro')}}">Cadastrar Contato</a>
                </div>
            </div>
        </nav>
        
        <!--Div que vai conter a Tabela-->
        <div class="container">
            <h1 class="text-center mt-3">Vizualizar Contato</h1>
            <a href="{{url('/')}}" class="btn btn-dark">
                <i class="fa fa-angle-double-left"></i> Ver Todos os Contatos
            </a>
            <div style="margin-left: 25%;margin-right: 25%;margin-top: 50px">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="name">Nome:</label>
                    <input readonly type="text" class="form-control" id="name" name="name" placeholder="Nome" value="{{$contato->name}}">
                </div>
                <div class="form-group">
                    <label for="phone">Telefone:</label>
                    <input readonly type="text" class="form-control" id="phone" name="phone" placeholder="Telefone" value="{{$contato->phone}}">
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input readonly type="email" class="form-control" id="email" name="email" placeholder="Email" value="{{$contato->email}}">
                </div>
                <div class="text-center">
                    <a href="{{url('/editar', $contato->id)}}" class="btn btn-lg btn-success">Editar esse Contato</a>
                    ou
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModalCenter" data-id="{{$contato->id}}" data-name="{{$contato->name}}">
                        Deletar esse Contato
                    </button>
                </div>
            </div>
        </div>

        <!-- Modal de confirmação de Exclusão-->
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalCenterTitle">
                            <i style="font-size: 30px" class="fa fa-code"></i> 
                            <span style="vertical-align: top">
                                CRUD | PHP Laravel
                            </span>
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form id="form" action="" method="post">
                        <div class="modal-body text-center">
                            {{csrf_field()}}
                            <input type="hidden" name="_method" value="DELETE">
                            <h5 id="pergunta"></h5> 
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn btn-danger">Sim</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <script>
            $('#exampleModalCenter').on('show.bs.modal', function (event) {
                var button = $(event.relatedTarget)
                var contato_name = button.data('name')
                var contato_id = button.data('id')
            
                var modal = $(this)
                modal.find('#pergunta').text('Tem certeza que deseja excluir o contato de ' + contato_name + '?')
                modal.find('#form').attr('action', '/deletar/'+contato_id)
            });
        </script>
    </body>
</html>