

<div class="modal" id="editmodal">
    <div class="modal-background"></div>

    <form action="" method="POST">
        <div class="modal-card">
            <header class="modal-card-head">
                <p class="modal-card-title">Actualizar Usuario</p>
                <button class="delete close-modal" aria-label="close"></button>
                </header>
            <section class="modal-card-body">

                <div class="field">
                    <label class="label">nombre</label>
                        <div class="control">
                            <input class="input" type="text" id="nombre" name="nombre" placeholder="e.g Alex Smith">
                        </div>
                </div>

                <div class="field">
                    <label class="label">correo</label>
                        <div class="control">
                            <input class="input" type="email" id="correo" name="correo"  placeholder="e.g. alexsmith@gmail.com">
                        </div>
                </div>

                <div class="field">
                    <label class="label">login</label>
                        <div class="control">
                            <input class="input" type="text"  id="login" name="login" placeholder="e.g. Alex">
                        </div>
                </div>


                <div class="field">
                        <div class="control">
                            <input class="input" type="hidden" hidden="" id="id" name="id" >
                        </div>
                </div>


            </section>

            <footer class="modal-card-foot">
                <a class="button is-success"  id="actualizadatos" name="actualizadatos">Save changes</a>
                <button class="button close-modal">Cancel</button>
            </footer>
        </div>
    </form>
</div>
