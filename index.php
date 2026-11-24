<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal Web - Sistema de Comentarios</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- Estilos personalizados -->
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body class="bg-light">

    <!-- BARRA DE NAVEGACIÓN (Integrante 1) -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold" href="index.php">
                <i class="bi bi-shop me-2"></i>Portal Comercial
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menuPrincipal" aria-controls="menuPrincipal" aria-expanded="false" aria-label="Alternar navegación">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="menuPrincipal">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Tiendas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Categorías</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Ofertas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contactos</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- ENCABEZADO PRINCIPAL -->
    <header class="bg-white border-bottom py-4 mb-4">
        <div class="container text-center">
            <h1 class="display-6 fw-bold text-dark">Bienvenido a Nuestro Portal</h1>
            <p class="lead text-muted mb-0">Comparte tu experiencia y revisa las opiniones de nuestros usuarios.</p>
        </div>
    </header>

    <!-- CONTENIDO PRINCIPAL -->
    <main class="container my-4">
        <div class="row g-4">
            
            <!-- COLUMNA IZQUIERDA: ZONA DE FORMULARIO (Integrante 2) -->
            <div class="col-lg-5">
                <div class="card shadow-sm border-0">
                    <div class="card-header bg-white py-3">
                        <h5 class="card-title mb-0 fw-semibold">
                            <i class="bi bi-chat-dots text-primary me-2"></i>Deja tu comentario
                        </h5>
                    </div>
                    <div class="card-body">
                        <!-- ========================================================= -->
                        <!-- INICIO ZONA INTEGRANTE 2: FORMULARIO Y VALIDACIONES JS    -->
                        <!-- ========================================================= -->
                        <form id="formComentario" action="guardar_comentario.php" method="POST" novalidate>
                            <div class="mb-3">
                                <label for="nombre" class="form-label fw-semibold">Nombre</label>
                                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Escribe tu nombre" maxlength="50">
                                <div class="invalid-feedback">Por favor escribe tu nombre.</div>
                            </div>

                            <div class="mb-3">
                                <label for="comentario" class="form-label fw-semibold">Comentario</label>
                                <textarea class="form-control" id="comentario" name="comentario" rows="4" placeholder="Escribe tu comentario" maxlength="500"></textarea>
                                <div class="invalid-feedback">Por favor escribe tu comentario.</div>
                            </div>

                            <button type="submit" class="btn btn-primary w-100">
                                <i class="bi bi-send me-2"></i>Enviar
                            </button>
                        </form>
                        <!-- ========================================================= -->
                        <!-- FIN ZONA INTEGRANTE 2                                     -->
                        <!-- ========================================================= -->
                    </div>
                </div>
            </div>

            <!-- COLUMNA DERECHA: ZONA DE COMENTARIOS PUBLICADOS (Integrante 4) -->
            <div class="col-lg-7">
                <div class="card shadow-sm border-0">
                    <div class="card-header bg-white py-3 d-flex justify-content-between align-items-center">
                        <h5 class="card-title mb-0 fw-semibold">
                            <i class="bi bi-people text-primary me-2"></i>Comentarios publicados
                        </h5>
                        <!-- Contador total de comentarios para que el Integrante 4 lo actualice con PHP -->
                        <span class="badge bg-primary rounded-pill fs-6">Total: 1</span>
                    </div>
                    <div class="card-body">
                        <!-- ========================================================= -->
                        <!-- INICIO ZONA INTEGRANTE 4: VISUALIZACIÓN DE COMENTARIOS    -->
                        <!-- ========================================================= -->
                        <div class="comentario-item p-3 mb-3 bg-light rounded border-start border-4 border-primary">
                            <div class="d-flex justify-content-between align-items-center mb-1">
                                <strong class="text-dark"><i class="bi bi-person-circle me-1"></i>Ejemplo de Usuario</strong>
                                <small class="text-muted">19/11/2026</small>
                            </div>
                            <p class="mb-0 text-secondary">Este es un diseño de ejemplo para mostrar los comentarios de forma elegante.</p>
                        </div>
                        <!-- ========================================================= -->
                        <!-- FIN ZONA INTEGRANTE 4                                     -->
                        <!-- ========================================================= -->
                    </div>
                </div>
            </div>

        </div>
    </main>

    <!-- PIE DE PÁGINA -->
    <footer class="bg-dark text-white text-center py-3 mt-5">
        <div class="container">
            <small>&copy; 2026 Portal Comercial - Práctica Grupal Desarrollo Web</small>
        </div>
    </footer>

    <!-- Bootstrap 5 JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Archivo JS reservado para el Integrante 2 -->
    <script src="js/validacion.js"></script>
</body>
</html>