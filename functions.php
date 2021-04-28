<?php

function saveAsist($args, $conn)
{
    $query = "INSERT INTO `asistentes`(`nombre`, `apellido`, `correo`, `telefono`, `red`, `dia`, `horario`, `asistio`, `qr`, `insert_at`) VALUES ('$args[name]', '$args[lastname]', $args[email], '$args[telephone]', '$args[red]', '" . date('Y-m-d H:i:s', strtotime($args['day'])) . "', '$args[schedule]', NULL, NULL, '" . date('Y-m-d H:i:s') . "')";
    $result = mysqli_query($conn, $query);
    return $result ? $result : false;
}

function getAsistantsFirst($servicios, $conn){
    $query = "SELECT COUNT(*) as asistants FROM asistentes WHERE horario = 9 AND dia = '" . date('Y-m-d H:i:s', strtotime($servicios[0])) . "'";
    $result = mysqli_query($conn, $query);
    $asistants = $result->fetch_assoc();
    return $asistants ? intval($asistants['asistants']) : false;
}

function getAsistantsSecond($servicios, $conn){
    $query = "SELECT COUNT(*) as asistants FROM asistentes WHERE horario = 11 AND dia = '" . date('Y-m-d H:i:s', strtotime($servicios[0])) . "'";
    $result = mysqli_query($conn, $query);
    $asistants = $result->fetch_assoc();
    return $asistants ? intval($asistants['asistants']) : false;
}
