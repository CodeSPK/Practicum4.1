<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Programación de Citas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center mb-4">Programación de Citas</h2>
        <form method="POST" action="/appointments">
            @csrf
            <div class="mb-3">
                <label for="date" class="form-label">Fecha</label>
                <input type="date" class="form-control" id="date" name="date" required>
            </div>
            <div class="mb-3">
                <label for="time" class="form-label">Hora</label>
                <select class="form-select" id="time" name="time" required>
                    <option value="" selected>Selecciona un horario</option>
                    <option value="08:00">08:00 AM</option>
                    <option value="09:00">09:00 AM</option>
                    <option value="10:00">10:00 AM</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="doctor" class="form-label">Médico</label>
                <select class="form-select" id="doctor" name="doctor" required>
                    <option value="" selected>Selecciona un médico</option>
                    <option value="Dr. Juan Pérez">Dr. Juan Pérez</option>
                    <option value="Dra. María López">Dra. María López</option>
                    <option value="Dr. Carlos Gómez">Dr. Carlos Gómez</option>
                </select>
            </div>
            <button type="submit" class="btn btn-success w-100">Programar Cita</button>
        </form>
    </div>
</body>
</html>
