<div class="card text-start|center|end">
  <div class="card-body">
    <h4 class="card-title bg-info text-center p-3">Formulaire de connexion</h4>
    <p class="card-text ml-5 col-5">
    <form action="<?= $Constantes::WEB_ROOT."login"?>" method="post">
      <!-- <input type="hidden" name="controller" action="SecurityController">
      <input type="hidden" name="action" action="authentification"> -->
      <div class="mb-3">
        <label for="Login" class="form-label">Login</label>
        <input type="text" class="form-control is-valid|is-invalid" name="login" id="login" aria-describedby="emailHelpId" placeholder="login">
        <div class="invalid-feedback">
          Veuillez un login correct!
        </div>
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control is-valid|is-invalid" name="password" id="password" placeholder="Password">
        <div class="invalid-feedback">
          Veuillez un password correct!
        </div>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
      </p>
    </form>
  </div>
</div>
