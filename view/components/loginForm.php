<div class="container">
        <div class="columns is-centered">
            <div class="column is-three-fifths is-offset-one-fifth">       
                <h1 class="title is-1">Ingresar al sistema</h1>

                <form name="frmdatos" action="" method="POST">
                    <div class="field">
                        <label class="label">Nombre</label>
                        <div class="control">
                            <div class="columns">
                                <div class="column is-three-fifths"><input class="input" type="text" id="nombre" name="nombre" placeholder="e.g Alex Smith" required ></div>
                                </div>
                            </div>
                        </div>

                        <div class="field">
                        <label class="label">Email</label>
                        <div class="control"><div class="columns">
                            <div class="column is-two-fifths">
                            <input class="input" type="email" id="correo" name="correo" placeholder="e.g. alexsmith@gmail.com" required ></div>
                            </div>
                        </div>
                    </div>

                    <div class="control">
                        <button id="login" name="login" class="button is-success">&nbsp;Enviar datos&nbsp;</button>
                    </div>
                </form>
            </div>
        </div>
    </div>