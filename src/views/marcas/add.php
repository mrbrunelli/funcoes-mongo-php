<div class="container" style="margin-top: 5em;">
    <h3>Cadastros - Adicionar Novo Usuário</h3>
    <div class="row">
        <form method="POST" action="marcas_save" class="col-lg-10">

            <div class="form-group">
                <label for="marca">Marca</label>
                <input type="text" name="marca" id="marca" class="form-control">
            </div>

            <div class="form-group">
                <label for="descricao">Descrição</label>
                <textarea row="5" name="descricao" id="descricao" class="form-control"></textarea>
            </div>

            <div class="form-group">
                <a href="marcas" id="cancelar" class="btn btn-raised btn-danger">Cancelar</a>
                <button type="submit" class="btn btn-raised btn-success">Salvar</button>

            </div>
        </form>
    </div>
</div>