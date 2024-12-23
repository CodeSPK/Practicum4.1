<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agendar una Cita - Hospital Isidro Ayora</title>
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
                    <li class="nav-item"><a class="nav-link text-white" href="#">Mis Citas</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="#">Perfil</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Formulario de Agendar Cita -->
    <div class="container py-5">
        <h2 class="text-center text-primary mb-4">Agendar una Cita</h2>
        <form action="/appointments" method="POST" class="mx-auto" style="max-width: 600px;">
            <!-- Selección de Especialidad -->
            <div class="mb-3">
                <label for="specialty" class="form-label">Especialidad</label>
                <select class="form-select" id="specialty" name="specialty" required>
                    <option value="" selected>Seleccione una especialidad</option>
                    <option value="medicina-general">Medicina General</option>
                    <option value="pediatria">Pediatría</option>
                    <option value="ginecologia">Ginecología</option>
                    <option value="cardiologia">Cardiología</option>
                </select>
            </div>
            <!-- Selección de Médico -->
            <div class="mb-3">
                <label for="doctor" class="form-label">Médico</label>
                <select class="form-select" id="doctor" name="doctor" required>
                    <option value="" selected>Seleccione un médico</option>
                    <option value="dr-perez">Dr. Juan Pérez</option>
                    <option value="dra-lopez">Dra. María López</option>
                    <option value="dr-gomez">Dr. Carlos Gómez</option>
                </select>
            </div>
            <!-- Selección de Fecha -->
            <div class="mb-3">
                <label for="date" class="form-label">Fecha</label>
                <input type="date" class="form-control" id="date" name="date" required>
            </div>
            <!-- Selección de Hora -->
            <div class="mb-3">
                <label for="time" class="form-label">Hora</label>
                <select class="form-select" id="time" name="time" required>
                    <option value="" selected>Seleccione un horario</option>
                    <option value="08:00">08:00 AM</option>
                    <option value="09:00">09:00 AM</option>
                    <option value="10:00">10:00 AM</option>
                    <option value="11:00">11:00 AM</option>
                </select>
            </div>
            <!-- Botón de Confirmación -->
            <button type="submit" class="btn btn-primary w-100">Agendar Cita</button>
        </form>
    </div>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-3">
        <p>&copy; 2024 Hospital Isidro Ayora - Todos los derechos reservados.</p>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
