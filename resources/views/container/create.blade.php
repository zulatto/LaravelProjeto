@extends('main')

    <div class="container">
            <div class="row">
                <div class="col">
                    <h2>Cadastrar Container</h2>
                    <form action="#">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="cliente">Nome</label>
                                <input type="text" class="form-control" name="cliente" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="container">Numero do container</label>
                                <input type="text" class="form-control" name="container" 
                                maxlength="11" placeholder="ABCD1234567" 
                                pattern="[a-z]{3}.[0-9]{7}" 
                                title="4 letras e 7 numeros" 
                                style='text-transform:uppercase'
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
                                <label for="Data criação">Categoria</label>
                                <input type="datetime-local" class="form-control" name="data" required>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Salvar</button>
                    </form>
                    <a href='#' class="btn btn-danger">Cancelar</a>
                </div>
            </div>
        </div>
    </body>
</html>