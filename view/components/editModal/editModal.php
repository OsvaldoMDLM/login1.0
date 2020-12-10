
<div class="modal" id="editmodal">
    <div class="modal-background"></div>
    <form action="" method="POST">
        <div class="modal-card">
            <header class="modal-card-head">
                <p class="modal-card-title">Modal title</p>
                <button class="delete close-modal" aria-label="close"></button>
                </header>
            <section class="modal-card-body">

            <div class="field">
                        <div class="control">
                            <input class="input" type="hidden" id="idH" name="id">
                        </div>
                </div>

                <div class="field">
                    <label class="label">nombre</label>
                        <div class="control">
                            <input class="input" type="text" id="nombreH" name="nombreH" placeholder="e.g Alex Smith">
                        </div>
                </div>

                <div class="field">
                    <label class="label">correo</label>
                        <div class="control">
                            <input class="input" type="email" id="correoH" name="correoH" placeholder="e.g. alexsmith@gmail.com">
                        </div>
                </div>

                <div class="field">
                    <label class="label">login</label>
                        <div class="control">
                            <input class="input" type="text"  id="loginH" name="loginH" placeholder="e.g. alexsmith@gmail.com">
                        </div>
                </div>


            </section>

            <footer class="modal-card-foot">
                <button class="button is-success" id="editarUsuario" name="editarUsuario">Save changes</button>
                <button class="button close-modal">Cancel</button>
            </footer>
        </div>
    </form>
</div>
