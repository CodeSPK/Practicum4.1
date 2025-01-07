<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Hospital Isidro Ayora</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="#">Hospital Isidro Ayora</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Agendar Cita</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#login">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <header class="hero">
        <div>
            <h1>Bienvenidos al Hospital Isidro Ayora</h1>
            <p>Atención médica integral para la región sur del país.</p>
        </div>
    </header>

    <div class="container services">
        <h2 class="text-center text-primary mb-4">Nuestros Servicios</h2>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body text-center">
                        <h5 class="card-title text-info">Consulta Externa</h5>
                        <p class="card-text">Atención especializada para diversas áreas médicas.</p>
                        <a href="#" class="btn btn-info">Más Información</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body text-center">
                        <h5 class="card-title text-success">Emergencias</h5>
                        <p class="card-text">Atención inmediata las 24 horas del día.</p>
                        <a href="#" class="btn btn-success">Más Información</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body text-center">
                        <h5 class="card-title text-danger">Hospitalización</h5>
                        <p class="card-text">Cuidados personalizados para pacientes internados.</p>
                        <a href="#" class="btn btn-danger">Más Información</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="login" class="container login-section">
        <h2 class="text-center text-primary">Login</h2>
        <div class="card login-card">
            <form>
                <div class="mb-3">
                    <label for="role" class="form-label">Seleccione su rol</label>
                    <select class="form-select" id="role">
                        <option value="patient">Paciente</option>
                        <option value="secretary">Secretaria</option>
                        <option value="manager">Gerencia</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Correo Electrónico</label>
                    <input type="email" class="form-control" id="email" placeholder="Ingrese su correo">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Contraseña</label>
                    <input type="password" class="form-control" id="password" placeholder="Ingrese su contraseña">
                </div>
                <button type="submit" class="btn btn-primary w-100">Ingresar</button>
                <p class="text-center mt-3">¿Eres nuevo? <a href="#register" class="text-primary">Regístrate aquí</a></p>
            </form>
        </div>
    </div>

    <footer class="text-center">
        <p>&copy; {{ date('Y') }} Hospital Isidro Ayora. Todos los derechos reservados.</p>
        <p>Contacto: 0962 613 613 | Email: info@hospitalisidroayora.com</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
