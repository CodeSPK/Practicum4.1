<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Administrativo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center mb-4">Dashboard Administrativo</h2>
        
        <!-- Panel de Estadísticas -->
        <div class="row mb-4">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        Citas Programadas vs Canceladas
                    </div>
                    <div class="card-body">
                        <canvas id="appointmentsChart"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header bg-success text-white">
                        Pacientes Atendidos
                    </div>
                    <div class="card-body">
                        <h3 class="text-center">150</h3>
                        <p class="text-center">Pacientes atendidos este mes</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Resumen de Actividad -->
        <div class="card">
            <div class="card-header bg-secondary text-white">
                Resumen de Actividad
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Médico</th>
                            <th>Citas Programadas</th>
                            <th>Citas Canceladas</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Dr. Juan Pérez</td>
                            <td>30</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Dra. María López</td>
                            <td>25</td>
                            <td>3</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Script para el gráfico -->
    <script>
        const ctx = document.getElementById('appointmentsChart').getContext('2d');
        new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Programadas', 'Canceladas'],
                datasets: [{
                    label: 'Citas',
                    data: [120, 10],
                    backgroundColor: ['#007bff', '#dc3545']
                }]
            }
        });
    </script>
</body>
</html>
