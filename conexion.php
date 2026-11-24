<?php

function obtenerConexion(): PDO
{
    static $conexion = null;

    if ($conexion === null) {
        $directorio = dirname(__DIR__) . DIRECTORY_SEPARATOR . basename(__DIR__) . '-data';
        if (!is_dir($directorio) && !@mkdir($directorio, 0700, true) && !is_dir($directorio)) {
            throw new RuntimeException('No se pudo crear el directorio de datos.');
        }

        $conexion = new PDO('sqlite:' . $directorio . DIRECTORY_SEPARATOR . 'comentarios.sqlite');
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $conexion->exec(
            'CREATE TABLE IF NOT EXISTS comentarios (
                id INTEGER PRIMARY KEY AUTOINCREMENT,
                nombre TEXT NOT NULL,
                comentario TEXT NOT NULL,
                fecha TEXT NOT NULL DEFAULT CURRENT_TIMESTAMP
            )'
        );
    }

    return $conexion;
}
