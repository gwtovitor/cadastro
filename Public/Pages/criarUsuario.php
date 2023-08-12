<title>Cadastrar</title>

 <h1>Cadastrar Usuario</h1>

<form action="../../Server/Controler/userControler.php" method="POST">
    <div class="mb-3">
        <label>Nome</label>
        <input type="text" name="nome" class="form-control">
    </div>
    <input type="hidden" name="page" value="cadastrar">
    <div class="mb-3">
        <label>Email</label>
        <input type="text" name="email" class="form-control">
    </div>
    <div class="mb-3">
        <label>Telefone</label>
        <input type="tel" class="form-control" name="telefone" maxlength="11" required />
    </div>
    <div class="mb-3">
        <label>Sexo</label>
        <select name="sexo" class="form-control" required>
            <option value="masculino">Masculino</option>
            <option value="feminino">Feminino</option>
            <option value="nao-declarar">Prefiro não declarar</option>
        </select>
    </div>
    <div class="mb-3">
        <label>Data de Nascimento</label>
        <input type="date" class="form-control" name="data-nascimento" required />
    </div>
    <div class="mb-3">
        <label>Senha</label>
        <input type="password" name="senha" class="form-control" required />
    </div>
    <div class="mb-3">
        <label>Confirma Senha</label>
        <input type="password" name="senha" class="form-control" required />
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</form>