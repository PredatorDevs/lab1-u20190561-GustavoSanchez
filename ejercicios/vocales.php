<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contador de Vocales (U20190561)</title>
  <!-- Incluyendo Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card">
          <div class="card-header">
            <h3 class="text-center">Contador de Vocales</h3>
          </div>
          <div class="card-body">
            <form action="vocales.php" method="post">
              <div class="mb-3">
                <label for="texto" class="form-label">Texto</label>
                <textarea name="texto" class="form-control" placeholder="Ingresa una cadena de texto" rows="4" required></textarea>
              </div>
              <div class="d-grid">
                <button type="submit" class="btn btn-primary">Contar Vocales</button>
              </div>
            </form>
          </div>
        </div>

        <?php
          if (isset($_POST['texto'])) {
            // Obtenemos el valor que viene del formulario de arriba
            $texto = strtolower($_POST['texto']);
            
            // Con esto podemos empezar a contabilizar las vocales
            $vocales = ['a' => 0, 'e' => 0, 'i' => 0, 'o' => 0, 'u' => 0];

            // Desglozamos la cadena de texto para ir caracter por caracter
            foreach (str_split($texto) as $caracter) {
              // Si el caracter está presente entre las vocales entonces se aumenta el contador de dicha vocal
              if (array_key_exists($caracter, $vocales)) {
                $vocales[$caracter]++;
              }
            }

            // Imprimimos en pantalla los resultados
            echo "<div class='alert alert-info mt-4'>";
            echo "<p>Texto: {$texto}</p>";
            echo "<p>Resultados:</p>";
            foreach ($vocales as $vocal => $cantidad) {
              echo "<p><strong>{$vocal}</strong> = {$cantidad}</p>";
            }
            echo "</div>";
            echo "<div class='alert alert-success mt-4'>
                Ejercicio hecho por Gustavo Sánchez U20190561
              </div>";
          }
        ?>
      </div>
    </div>
  </div>

  <!-- Incluyendo Bootstrap JS y Popper.js -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
