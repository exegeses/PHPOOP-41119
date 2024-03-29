<?php

    require 'config/config.php';
    include 'includes/header.php';
?>
    
    <main class="container">
        <h1>Ingreso a sistema</h1>

        <div class="alert bg-light border col-6 mx-auto">
            <form action="login.php" method="post">
                Usuario: <br>
                <input type="text" name="usuEmail" class="form-control">
                <br>
                Contraseña: <br>
                <input type="password" name="usuClave" class="form-control">

                <button class="btn btn-dark btn-block my-3">
                    Ingresar a sistema
                </button>
            </form>
        </div>

<?php
        if(isset($_GET['error'])){
?>
            <script>
                Swal.fire(
                    'Error de logueo',
                    'Usuario y/o Clave incorrectos',
                    'error'
                );
            </script>
<?php
        }
?>

    </main>
<?php
    include 'includes/footer.php';
?>