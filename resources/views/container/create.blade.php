@extends('main')

    <div class="container">
            <div class="row">
                <div class="col">
                    <h2>Cadastrar Container</h2>
                    <form action="{{route('createCntr')}}"  method="POST">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="cliente">Nome</label>
                                <input type="text" class="form-control" name="cliente" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="container">Numero do container</label>
                                <input type="text" class="form-control" name="container" 
                                maxlength="11" placeholder="ABCD1234567" 
                                pattern="[A-Z]{3}.[0-9]{7}" 
                                title="4 letras e 7 numeros" 
                                onkeyup="this.value = this.value.toUpperCase()"
                                required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="tipo">Tipo</label>
                                <select name="tipo" class="form-control">
                                    <option value="0">20</option>
                                    <option value="1">40</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="Data criação">Data de criação</label>
                                <input type="date" class="form-control" name="data" required>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Salvar</button>
                        @csrf
                    </form>
                    <a href="{{route('container.index')}}" class="btn btn-danger">Cancelar</a>
                </div>
            </div>
        </div>
    </body>
</html>