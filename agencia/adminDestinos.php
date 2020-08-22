<?php

    include 'includes/header.php';
?>
    
    <main class="container">
        <h1>Panel de administración de destinos</h1>
        
        <table class="table table-border table-hover table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>id</th>
                    <th>Destino (aeropuerto)</th>
                    <th>Región</th>
                    <th>Precio</th>
                    <th>Asientos</th>
                    <th>Disponibles</th>
                    <th colspan="2">
                        <a href="" class="btn btn-dark">
                            Agregar
                        </a>
                    </th>
                </tr>
            </thead>
            <tbody>
<?php

?>
                <tr>
                    <td>id</td>
                    <td>destino</td>
                    <td>region</td>
                    <td>precio</td>
                    <td>asientos</td>
                    <td>disponibles</td>
                    <td>
                        <a href="" class="btn btn-outline-secondary">
                            Modificar
                        </a>
                    </td>
                    <td>
                        <a href="" class="btn btn-outline-secondary">
                            Eliminar
                        </a>
                    </td>
                </tr>
<?php

?>
            </tbody>
        </table>


    </main>
<?php
    include 'includes/footer.php';
?>