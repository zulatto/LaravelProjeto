@extends('main')

<div class="container">
            <div class="row">
                <div class="col">
                    <h2>Editar Container</h2>
                    <form action="{{route('updateCntr', $container->id)}}"  method="POST">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="cliente">Nome</label>
                                <input type="text" class="form-control" name="cliente" required value="{{$container->cliente}}">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="container">Numero do container</label>
                                <input type="text" class="form-control" name="container" 
                                maxlength="11"
                                pattern="[A-Z]{3}.[0-9]{7}" 
                                title="4 letras e 7 numeros" 
                                onkeyup="this.value = this.value.toUpperCase()"
                                required
                                value="{{$container->container}}">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="tipo">Tipo</label>
                                <select name="tipo" class="form-control">
                                    <option value="0" {{$container->tipo == 0 ? "selected" : ""}}>20</option>
                                    <option value="1" {{$container->tipo == 1 ? "selected" : ""}}>40</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="Data criação">Data de criação</label>
                                <input type="date" class="form-control" name="data" required value="{{$container->data}}">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Salvar</button>
                        @csrf 
                        @method("PUT")
                    </form>
                    <a href="{{route('container.index')}}" class="btn btn-danger">Cancelar</a>
                </div>
            </div>
        </div>
    </body>
</html>