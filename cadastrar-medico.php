<h1>cadastrar medico</h1>
<form action="?page=salvar-medico" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
        <label>nome</label>
        <input type="text" name="nome_medico" class="form-control">
    </div>    
    <div class="mb-3">
        <label>CRM</label>
        <input type="text" name="crm_medico" class="form-control">
    </div>    
    <div class="mb-3">
        <label>Especialidade</label>
        <input type="text" name="especialidade_medico" class="form-control">
    </div>    
    <div class="mb-3">
        <button type="submit" class="bnt bnt-success">salvar</button>
    </div>    
</form>