<?php

function saveAsist($args, $conn)
{
    $query = "INSERT INTO `asistentes`(`nombre`, `apellido`, `correo`, `telefono`, `red`, `dia`, `horario`, `asistio`, `qr`, `insert_at`) VALUES ('$args[name]', '$args[lastname]', $args[email], '$args[telephone]', '$args[red]', '" . date('Y-m-d H:i:s', strtotime($args['day'])) . "', '$args[schedule]', NULL, NULL, '" . date('Y-m-d H:i:s') . "')";
    $result = mysqli_query($conn, $query);
    return $result ? $result : false;
}
