<?php
include_once 'views/header.php'
?>
<div class='container'>
    <div class="row justify-content-md-center">
        <div class="col col-lg-8">
            <div class="card">
                <div class="card-header text-center" id="card-header-color">
                    <h2>Registro</h2>
                </div>
                <div class="card-body">
                    <form action='register.php'>
                        <div class="row">
                            <div class="col-sm-12 col-lg-6">
                                <div class="mb-3">
                                    <label for="name" class="form-label">Nombre(s)</label>
                                    <input type="text" class="form-control" id="name" aria-describedby="name" placeholder="Introduce tu(s) nombre(s)">
                                </div>
                            </div>

                            <div class="col">
                                <div class="mb-3">
                                    <label for="lastname" class="form-label">Apellido(s)</label>
                                    <input type="text" class="form-control" id="lastname" aria-describedby="lastname" placeholder="Apellidos(s)">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 col-lg-6">
                                <div class="mb-3">
                                    <label for="telephone" class="form-label">Teléfono</label>
                                    <input type="text" class="form-control" id="telephone" aria-describedby="telephone" placeholder="Introduce tu número ej. 5510210478">
                                </div>
                            </div>

                            <div class="col">
                                <div class="mb-3">
                                    <label for="red" class="form-label">Red</label>
                                    <select name="red" id="red" class="form-select" id="red" aria-describedby="red">
                                        <option selected disabled>
                                            Introduce la red a la que perteneces
                                        </option>
                                        <?php
                                        foreach ($reds as $red) {
                                            echo '<option value="' . $red . ' ">' .
                                                $red .
                                                '</option>';
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="red" class="form-label">Dia</label>
                                <select name="red" id="red" class="form-select" id="red" aria-describedby="red">
                                    <option selected disabled>
                                        Introduce el dia en el que asistiras
                                    </option>
                                    <?php

                                    foreach ($servicios as $servicio) {
                                        $date =  new DateTime($servicio);

                                        echo '<option value="' . $servicio . ' ">' .
                                            date($servicio) .
                                            '</option>';
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="col">
                                <label for="red" class="form-label">Horario</label>
                                <select name="red" id="red" class="form-select" id="red" aria-describedby="red">
                                    <option selected disabled>
                                        Introduce el horario en el que asistiras
                                    </option>
                                    <?php
                                    foreach ($horarios as $horario) {
                                        echo '<option value="' . $horario . ' ">' .
                                            $horario . ' A.M
                                                </option>';
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <br>
                        <div class="row text-center">
                            <div class="col">
                                <button type="submit" class="btn btn-primary ">Enviar</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="card-footer text-center">
                    <div id="emailHelp" class="form-text">*No compartimos tu información con nadie.</div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js" type="text/javascript"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.6/jquery-ui.min.js" type="text/javascript"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
<script type="text/javascript">
    // Javavscript here
</script>
</body>

</html>