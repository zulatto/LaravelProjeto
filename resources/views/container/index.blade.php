@extends('main')

<div class="container">
        <div class="row">
            <div class="col">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Container</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('create')}}">Cadastro</a>
      </li>
    </ul>
  </div>
</nav>
    <table class="table table-hover">
    <thead>
        <tr>
        <th scope="col">Cliente</th>
        <th scope="col">Numero container</th>
        <th scope="col">Tipo</th>
        <th scope="col">Data criação</th>
        <th scope="col">Funções</th>
        </tr>
    </thead>
    <tbody>
      @foreach($containers as $container)
      @php
        $container->valor = floatval($container->valor);
      @endphp
                <tr>
                  <td data-label="Cliente">{{$container->cliente}}</td>
                  <td data-label="Container">{{$container->container}}</td>
                  <td data-label="Tipo">{{$container->tipo == 0 ? "20" : "40"}}</td>
                  <td data-label="Data de criação">{{$container->data}}</td>

                  <td>
                      <a href="{{route('update',$container->id)}}" class='btn btn-success btn-sm'>Editar</a>

                      <a href='#' class='btn btn-danger btn-sm' data-toggle='modal' data-target='#confirmDelete'
                      onclick="getData('{{$container->id}}')"
                      >Excluir</a>
                  </td>
                </tr>
                @endforeach
    </tbody>
    </table>
            </div>
        </div>
    </div>
    <!-- Modal -->
    @if(isset ($container))
    <div class="modal fade" id="confirmDelete" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Confirmação de exclusão</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
            <form action="{{route('delete',$container->id)}}" method="POST">
                <p>Deseja realmente excluir o container?</p>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Não</button>
                <input type="hidden" name="id" id="cd_container" value="">
            <button type="submit" class="btn btn-danger">Sim</button>
            @method('DELETE')
            @csrf
            </form>
            </div>
        </div>
        </div>
    </div>
@endif
    <script type="text/javascript">
        function getData(id){
            document.getElementById('cd_container').value = id;
        }
    </script>
    </body>
</html>