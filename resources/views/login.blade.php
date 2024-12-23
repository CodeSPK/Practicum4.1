<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital Isidro Ayora</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-primary">
        <div class="container">
            <a class="navbar-brand text-white" href="#">Hospital Isidro Ayora</a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link text-white" href="#">Quiénes Somos</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="#">Servicios</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="#">Contacto</a></li>
                    <!-- Dropdown para inicio de sesión -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white" href="#" id="loginDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Iniciar Sesión
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/login?role=paciente">Paciente</a></li>
                            <li><a class="dropdown-item" href="/login?role=medico">Médico</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="bg-light text-center py-5">
        <h1 class="text-primary">Bienvenidos al Hospital Isidro Ayora</h1>
        <p>Comprometidos con la excelencia y la atención médica de calidad.</p>
    </div>

    <!-- Services Section -->
    <div class="container py-5">
        <h2 class="text-center mb-4">Nuestros Servicios</h2>
        <div class="row">
            <div class="col-md-4 mb-3">
                <div class="card p-3">
                    <h5 class="text-center">Consulta Externa</h5>
                    <p>Atención médica especializada para todas las edades.</p>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card p-3">
                    <h5 class="text-center">Hospitalización</h5>
                    <p>Instalaciones modernas y cómodas para su recuperación.</p>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card p-3">
                    <h5 class="text-center">Emergencias</h5>
                    <p>Atención rápida y eficiente las 24 horas del día.</p>
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
