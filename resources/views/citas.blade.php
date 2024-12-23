<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Programación de Citas - Hospital Isidro Ayora</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-primary">
        <div class="container">
            <a class="navbar-brand text-white" href="#">Hospital Isidro Ayora</a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link text-white" href="#">Inicio</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="#">Servicios</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="#">Contacto</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="bg-light text-center py-4">
        <h1 class="text-primary">Programación de Citas</h1>
        <p>Seleccione su tipo de acceso para continuar con la programación de su cita.</p>
    </div>

    <!-- Section for Users -->
    <div class="container py-5">
        <div class="row">
            <!-- New Users Section -->
            <div class="col-md-6 mb-4">
                <div class="card p-4 text-center">
                    <h3 class="text-primary">Soy un Usuario Nuevo</h3>
                    <p>Si es la primera vez que programa una cita, por favor regístrese.</p>
                    <a href="/register" class="btn btn-success w-100">Registrarse</a>
                </div>
            </div>
            <!-- Existing Users Section -->
            <div class="col-md-6 mb-4">
                <div class="card p-4 text-center">
                    <h3 class="text-primary">Ya Tengo una Cuenta</h3>
                    <p>Inicie sesión para continuar con la programación de su cita.</p>
                    <a href="/login" class="btn btn-primary w-100">Iniciar Sesión</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-3">
        <p>&copy; 2024 Hospital Isidro Ayora - Todos los derechos reservados.</p>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
