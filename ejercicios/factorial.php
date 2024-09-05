<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Factorial de un Número (U20190561)</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card">
          <div class="card-header">
            <h3 class="text-center">Calcular Factorial</h3>
          </div>
          <div class="card-body">
            <form action="factorial.php" method="post">
              <div class="mb-3">
                <label for="numero" class="form-label">Número</label>
                <input type="number" name="numero" min="0" class="form-control" placeholder="Ingresa un número" required>
              </div>
              <div class="d-grid">
                <button type="submit" class="btn btn-primary">Calcular Factorial</button>
              </div>
            </form>
          </div>
        </div>

        <?php
          if (isset($_POST['numero'])) {
            // Obtenemos el número que viene del formulario
            $numero = $_POST['numero'];
            
            // Colocamos el valor inicial del factorial
            $factorial = 1;
            // Hacemos un recorrido multiplicando el número por el antecesor respectivamente
            for ($i = 1; $i <= $numero; $i++) {
              $factorial *= $i;
            }

            // Imprimimos en pantalla los resultados
            echo "
              <div class='alert alert-success mt-4'>
                El factorial de <strong>{$numero}</strong> es <strong>{$factorial}</strong>.
              </div>
              <div class='alert alert-success mt-4'>
                Ejercicio hecho por Gustavo Sánchez U20190561
              </div>
            ";
          }
        ?>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
