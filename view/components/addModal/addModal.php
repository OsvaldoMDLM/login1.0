<div class="modal" id="addmodal">
  <div class="modal-background close-modal"></div>
  <form action="" method="POST" class="">
    <div class="modal-card">
      <header class="modal-card-head">
        <p class="modal-card-title has-text-centered">Agregar Usuario</p>
        <button class="delete close-modal" aria-label="close"></button>
      </header>
      <section class="modal-card-body">

        <div class="field">
          <label class="label">Nombre de usuario</label>
          <div class="control">
            <input class="input" name="nombreC" id="nombreC" type="text" placeholder="Nombre">
          </div>
        </div>


        <div class="field">
          <label class="label">correo</label>
          <div class="control">
            <input class="input" name="correoC" id="correoC" type="email" placeholder="@">
          </div>
        </div>
        <div class="field">
          <label class="label">login</label>
          <div class="control">
            <input class="input" name="loginC" id="loginC" type="text" placeholder="nombre">
          </div>
        </div>
      </section>
      <footer class="modal-card-foot">
        <button class="button is-success" id="crearUsuario" name="crearUsuario">Agregar</button>
        <button class="button close-modal">Cancelar</button>
      </footer>
  </form>
</div>
</div>