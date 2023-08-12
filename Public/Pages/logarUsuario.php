  <title class="mt-3">Login</title>
  <h1>Logar</h1>

    <form action="../../Server/Controler/userControler.php" method="POST">
        <div class="mb-3">
            <label>Email</label>
            <input type="text" name="email" class="form-control">
        </div>
        <input type="hidden" name="page" value="logar">
        <div class="mb-3">
            <label>Senha</label>
            <input type="password" name="senha" class="form-control" required />
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Enviar</button>
            <button type="submit" class="btn btn-danger ">Esqueci a Senha</button>
        </div>

    </form>