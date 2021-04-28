<?php
include_once 'views/header.php';
include_once 'config/conexion.php';
include_once 'functions.php';

if ($_POST) {
    $args = array(
        'name' => isset($_POST['name']) && $_POST['name'] != '' ? $_POST['name'] : 'Default Name',
        'lastname' => isset($_POST['lastname']) && $_POST['lastname'] != '' ? $_POST['lastname'] : 'Default Lastname',
        'email' => isset($_POST['email']) ? $_POST['email'] : 'NULL',
        'telephone' => isset($_POST['telephone']) && $_POST['telephone'] != '' ? $_POST['telephone'] : '5555555555',
        'red' => isset($_POST['red']) ? $_POST['red'] : 0,
        'day' => isset($_POST['day']) ? $_POST['day'] : 'NOW()',
        'schedule' => isset($_POST['schedule']) ? $_POST['schedule'] : 'NOW()',
    );
} else {
    return header('Location: index.php?error=faltan parametros');
}
?>
<div class='container'>
    <div class="row justify-content-md-center">
        <div class="col col-lg-8">
            <div class="card">
                <div class="card-header text-center" id="card-header-color">
                    <h2>Registro</h2>
                </div>
                <div class="card-body  text-center">
                    <?php
                    if(saveAsist($args, $conn)):
                    ?>
                    <h1>Registro exitoso</h1>
                    <?php
                    else:
                    ?>
                    <h1>Registro fallido</h1>
                    <?php 
                    endif;
                    ?>
                    <a href="index.php">Registrar otra persona</a>
                </div>
                <div class="card-footer text-center">
                </div>
            </div>
        </div>
    </div>

</div>