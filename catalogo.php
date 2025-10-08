<?php
  $title = 'LUMIÈRE — Catálogo';
  $year  = date('Y');
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo htmlspecialchars($title); ?></title>

  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500;700&family=Inter:wght@400;500;700&display=swap" rel="stylesheet">
  <style>
    body {
      margin: 0;
      font-family: Inter, sans-serif;
      background: #f4efe9;
      color: #1f1f1f;
    }
    header {
      background: #f4efe9;
      border-bottom: 1px solid #e8dfd2;
      padding: 14px 0;
      text-align: center;
      font-family: "Playfair Display", serif;
      letter-spacing: 0.15em;
      font-size: 24px;
      font-weight: 700;
    }
    .container {
      width: min(1100px, 92%);
      margin: 40px auto;
    }
    h2 {
      text-transform: uppercase;
      letter-spacing: .2em;
      font-family: "Playfair Display", serif;
      margin-bottom: 20px;
    }
    .grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
      gap: 20px;
    }
    .card {
      background: #fffaf3;
      border: 1px solid #e8dfd2;
      border-radius: 12px;
      overflow: hidden;
      transition: transform .2s ease;
    }
    .card:hover {
      transform: translateY(-5px);
    }
    .img {
      background: #fff;
      border-bottom: 1px solid #e8dfd2;
      aspect-ratio: 1/1;
      display: grid;
      place-items: center;
      color: #6b6b6b;
      font-size: 14px;
    }
    .info {
      padding: 14px 16px;
    }
    .btn {
      display: block;
      margin: 12px auto 16px;
      width: fit-content;
      background: #c6a571;
      color: white;
      border: none;
      border-radius: 6px;
      padding: 10px 18px;
      text-decoration: none;
      font-weight: 600;
      letter-spacing: .05em;
    }
    .btn-regresar {
      position: fixed;
      top: 18px;
      left: 18px;
      z-index: 1000;
      background: #fffaf3;
      color: #c6a571;
      border: 2px solid #c6a571;
      border-radius: 8px;
      padding: 8px 18px;
      font-weight: 600;
      font-size: 15px;
      text-decoration: none;
      box-shadow: 0 2px 8px rgba(0,0,0,0.04);
      transition: background .2s, color .2s;
    }
    .btn-regresar:hover {
      background: #c6a571;
      color: #fff;
    }
    footer {
      text-align: center;
      padding: 20px;
      font-size: 14px;
      color: #6b6b6b;
      border-top: 1px solid #e8dfd2;
      margin-top: 40px;
    }
  </style>
</head>
<body>
  <a href="index.php" class="btn-regresar">&larr; Regresar a página principal</a>
  <header>LUMIÈRE — Catálogo</header>

  <div class="container">
    <h2>Colección: Marea Alta</h2>
    <div class="grid">
      <?php
        $productos = [
          ["Anillo Arena en la Marea", "Acabado mate con brillo sutil.", "$250 MXN"],
          ["Collar Brisa Marina", "Minimalista, ligero y versátil.", "$300 MXN"],
          ["Pulsera Coral Dorado", "Texturas orgánicas inspiradas en coral.", "$220 MXN"],
          ["Aretes Perla de Marea", "Brillo sutil y elegante.", "$260 MXN"],
          ["Choker Marea Baja", "Ajustado, líneas limpias.", "$190 MXN"],
          ["Anillo Luna Nueva", "Curvas suaves y acabado pulido.", "$280 MXN"],
          ["Tobillera Orilla del Mar", "Ligera y cómoda para diario.", "$170 MXN"],
          ["Pulsera Nudo de Marea", "Detalle tipo nudo marinero.", "$210 MXN"],
        ];

        foreach ($productos as $p) {
          echo "
          <article class='card'>
            <div class='img'>Imagen en blanco</div>
            <div class='info'>
              <h3 style='font-family:\"Playfair Display\", serif; margin:0 0 6px;'>{$p[0]}</h3>
              <p style='margin:0 0 8px; color:#6b6b6b; font-size:14px;'>{$p[1]}</p>
              <b>{$p[2]}</b>
            </div>
            <a href='index.php#contacto' class='btn'>Contáctanos</a>
          </article>";
        }
      ?>
    </div>
  </div>

  <footer>© <?php echo $year; ?> LUMIÈRE</footer>
</body>
</html>
