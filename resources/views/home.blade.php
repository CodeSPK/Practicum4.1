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
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Agendar Cita</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('patients.index') }}">Pacientes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('doctors.index') }}">Doctores</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <header class="hero text-center text-white py-5" style="background-color: #007bff;">
        <div class="container">
            <h1 class="display-4 fw-bold">Bienvenidos al Hospital Isidro Ayora</h1>
            <p class="lead">Atención médica integral para la región sur del país.</p>
        </div>
    </header>

    <div class="container my-5">
        <h2 class="text-center text-primary mb-4">Nuestros Servicios</h2>
        <div class="row justify-content-center g-4 text-center">
            <div class="col-md-3">
                <div class="card border-0">
                    <img src="{{ asset('images/consulta.png') }}" alt="Consulta Externa" class="card-img-top mx-auto" style="width: 50%;">
                    <div class="card-body">
                        <h5 class="card-title">Consulta Externa</h5>
                        <p class="card-text">Atención especializada para diversas áreas médicas.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card border-0">
                    <img src="{{ asset('images/emergencias.png') }}" alt="Emergencias" class="card-img-top mx-auto" style="width: 50%;">
                    <div class="card-body">
                        <h5 class="card-title">Emergencias</h5>
                        <p class="card-text">Atención inmediata las 24 horas del día.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card border-0">
                    <img src="{{ asset('images/hospitalizacion.png') }}" alt="Hospitalización" class="card-img-top mx-auto" style="width: 50%;">
                    <div class="card-body">
                        <h5 class="card-title">Hospitalización</h5>
                        <p class="card-text">Cuidados personalizados para pacientes internados.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card border-0">
                    <img src="{{ asset('images/farmacia.png') }}" alt="Farmacia" class="card-img-top mx-auto" style="width: 50%;">
                    <div class="card-body">
                        <h5 class="card-title">Farmacia</h5>
                        <p class="card-text">Suministro de medicamentos y productos farmacéuticos.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="bg-dark text-white py-4">
        <div class="container text-center">
            <div class="row">
                <div class="col-md-4 mb-3">
                    <h5>Contacto</h5>
                    <p>Teléfono: 0962 613 613</p>
                    <p>Email: info@hospitalisidroayora.com</p>
                </div>
                <div class="col-md-4 mb-3">
                    <h5>Dirección</h5>
                    <p>Av. Principal, Loja, Ecuador</p>
                </div>
                <div class="col-md-4 mb-3">
                    <h5>Redes Sociales</h5>
                    <a href="#" class="text-white me-3">Facebook</a>
                    <a href="#" class="text-white me-3">Twitter</a>
                    <a href="#" class="text-white">Instagram</a>
                </div>
            </div>
            <p class="mt-3">&copy; {{ date('Y') }} Hospital Isidro Ayora. Todos los derechos reservados.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
