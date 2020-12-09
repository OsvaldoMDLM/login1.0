

<div class="container" >
        <div class="table-container">
            <table class="table is-striped is-narrow is-hoverable is-fullwidth">
                <thead class="has-background-link-light">
                    <tr>
                    <th class="pr-6">#</th>
                    <th class="px-6">Nombre</th>
                    <th class="px-6">Correo</th>
                    <th class="px-6">Login</th>
                    <th class="px-6">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while($row = mysqli_fetch_array($elements)){  ?>
                <tr>
                    <td><?php echo $row["id"]; ?></td>
                    <td class="px-6"><?php echo $row["nombre"]; ?></td>
                    <td class="px-6"><?php echo $row["correo"]; ?></td>
                    <td class="px-6"><?php echo $row["login"]; ?></td>
                    <td>
                        <button type="button" class="button is-link">Editar</button>
                        <a class="button is-danger">Eliminar</a>
                    </td>
                </tr>
                    <?php }?>
                </tbody>
            </table>
        </div>
    </div>