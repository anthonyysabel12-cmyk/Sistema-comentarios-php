<?php

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Allow: POST');
    http_response_code(405);
    exit('Solo se permite el método POST.');
}

$nombre = $_POST['nombre'] ?? null;
$comentario = $_POST['comentario'] ?? null;

function longitudFormulario(string $valor): int
{
    $caracteres = preg_match_all('/./us', $valor);
    $suplementarios = preg_match_all('/[\x{10000}-\x{10FFFF}]/u', $valor);

    return $caracteres === false || $suplementarios === false
        ? -1
        : $caracteres + $suplementarios;
}

if (!is_string($nombre) || !is_string($comentario)) {
    http_response_code(400);
    exit('El nombre y el comentario son obligatorios.');
}

$nombre = trim($nombre);
$comentario = trim($comentario);
$longitudNombre = longitudFormulario($nombre);
$longitudComentario = longitudFormulario($comentario);

if ($longitudNombre < 1 || $longitudNombre > 50 || $longitudComentario < 1 || $longitudComentario > 500
    || preg_match('/\S/u', $nombre) !== 1 || preg_match('/\S/u', $comentario) !== 1) {
    http_response_code(400);
    exit('El nombre y el comentario deben contener texto válido y respetar los límites del formulario.');
}

try {
    require_once __DIR__ . DIRECTORY_SEPARATOR . 'conexion.php';
    $consulta = obtenerConexion()->prepare(
        'INSERT INTO comentarios (nombre, comentario) VALUES (:nombre, :comentario)'
    );
    $consulta->execute([':nombre' => $nombre, ':comentario' => $comentario]);
} catch (Throwable $error) {
    error_log('Error al guardar el comentario: ' . $error->getMessage());
    http_response_code(500);
    exit('No se pudo guardar el comentario.');
}

header('Location: index.php', true, 303);
exit;
