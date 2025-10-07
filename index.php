<?php
  $title = 'LUMIÉRE — Joyería';
  $year  = date('Y');

  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title><?php echo htmlspecialchars($title); ?></title>

  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500;700&family=Inter:wght@400;500;700&display=swap" rel="stylesheet">

  <style>
    :root{
      --bg: #f4efe9;
      --ink: #1f1f1f;
      --muted: #6b6b6b;
      --accent: #c6a571;
      --card: #fffaf3;
    }
    *{ box-sizing: border-box; }
    html, body{ margin:0; padding:0; }
    body{
      background: var(--bg);
      color: var(--ink);
      font-family: Inter, system-ui, -apple-system, Segoe UI, Roboto, Arial, sans-serif;
      line-height: 1.6;
    }
    img{ max-width: 100%; display:block; }

    .container{ width: min(1100px, 92%); margin: 0 auto; }

    header{
      border-bottom: 1px solid #e8dfd2;
      background: var(--bg);
      position: sticky; top: 0; z-index: 10;
    }
    .topbar{ display: flex; align-items: center; justify-content: space-between; padding: 14px 0; }
    .brand{
      font-family: "Playfair Display", serif;
      letter-spacing: 0.18em;
      font-weight: 700; font-size: 26px;
    }
    .tagline{ font-size: 12px; color: var(--muted); margin-left: 8px; letter-spacing: .2em; text-transform: uppercase; }

    nav ul{ list-style: none; margin:0; padding:0; display: flex; gap: 18px; }
    nav a{ text-decoration: none; color: var(--ink); font-weight: 500; }
    nav a:hover{ color: var(--accent); }

    .hero{ padding: 42px 0 28px; border-bottom: 1px solid #e8dfd2; }
    .hero-grid{ display: grid; grid-template-columns: 1.2fr 0.8fr; gap: 28px; align-items: start; }
    .hero h1{ font-family: "Playfair Display", serif; font-size: clamp(28px, 4vw, 40px); margin: 0 0 8px; letter-spacing: .08em; }
    .hero h2{ font-family: "Playfair Display", serif; font-size: 18px; letter-spacing: .25em; text-transform: uppercase; color: var(--muted); margin: 0 0 12px; }
    .hero p{ margin: 0 0 14px; }
    .cta-row{ margin-top: 16px; display: flex; gap: 12px; flex-wrap: wrap; }
    .btn{ display: inline-block; padding: 10px 16px; border: 1px solid var(--ink); background: transparent; color: var(--ink); text-decoration: none; border-radius: 6px; font-weight: 600; font-size: 14px; }
    .btn.primary{ background: var(--accent); border-color: var(--accent); color: #fff; }
    .hero-illustration{ background: var(--card); border: 1px dashed #e0d7c9; min-height: 220px; border-radius: 10px; display: grid; place-items: center; color: var(--muted); font-size: 14px; }

    footer{ border-top: 1px solid #e8dfd2; text-align: center; padding: 18px 0 40px; color: var(--muted); font-size: 14px; margin-top: 36px; }
    @media (max-width: 800px){ .hero-grid{ grid-template-columns: 1fr; } }
  </style>
</head>
<body>

  <header>
    <div class="container topbar">
      <div>
        <span class="brand">LUMIÉRE</span>
        <span class="tagline">joyería</span>
      </div>

      <nav aria-label="principal">
        <ul>
          <li><a href="#registrarte">Registrarte</a></li>
          <li><a href="#sobre">Sobre nosotros</a></li>
          <li><a href="#contacto">Contáctanos</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <!-- Hero -->
  <section class="hero" id="sobre">
    <div class="container hero-grid">
      <div>
        <h2>Sobre Lumiére</h2>
        <h1>Inspirados en la magia de la luna y la belleza atemporal</h1>
        <p>En Lumiére diseñamos piezas únicas que capturan momentos, emociones y memorias.</p>
        <p>Cada joya combina técnicas tradicionales con un enfoque moderno. Desde anillos de compromiso hasta piezas personalizadas.</p>
        <div class="cta-row">
          <a class="btn primary" href="#coleccion">Ver colección</a>
          <a class="btn" href="#contacto">Contáctanos</a>
        </div>
      </div>
      <div class="hero-illustration">Imagen en blanco</div>
    </div>
  </section>

  <!-- Colección -->
  <section class="coleccion" id="coleccion">
    <div class="container">
      <h2 style="font-family:'Playfair Display', serif; letter-spacing:.15em; text-transform:uppercase;">
        Colección: Marea Alta
      </h2>
      <p style="color:var(--muted); max-width:600px;">
        Una colección inspirada en los reflejos del mar, la serenidad de la arena y el brillo sutil del dorado.
      </p>

      <div style="display:grid; grid-template-columns:repeat(auto-fit,minmax(240px,1fr)); gap:22px; margin-top:28px;">
        <article style="background:var(--card); border:1px solid #e8dfd2; border-radius:12px; overflow:hidden;">
          <div style="background:#fff; aspect-ratio:1/1; border-bottom:1px solid #e8dfd2; display:grid; place-items:center; color:var(--muted); font-size:14px;">Imagen en blanco</div>
          <div style="padding:14px 16px;">
            <h3 style="margin:0 0 6px; font-family:'Playfair Display', serif;">Anillo Arena en la Marea</h3>
            <p style="margin:0 0 8px; color:var(--muted); font-size:14px;">Acero inoxidable con acabado mate y brillo natural.</p>
            <b>$250 MXN</b>
          </div>
          <a href="#contacto" class="btn" style="margin:12px; text-align:center;">Añadir al carrito</a>
        </article>

        <article style="background:var(--card); border:1px solid #e8dfd2; border-radius:12px; overflow:hidden;">
          <div style="background:#fff; aspect-ratio:1/1; border-bottom:1px solid #e8dfd2; display:grid; place-items:center; color:var(--muted); font-size:14px;">Imagen en blanco</div>
          <div style="padding:14px 16px;">
            <h3 style="margin:0 0 6px; font-family:'Playfair Display', serif;">Collar Brisa Marina</h3>
            <p style="margin:0 0 8px; color:var(--muted); font-size:14px;">Diseño ligero con detalles minimalistas en tonos dorados.</p>
            <b>$300 MXN</b>
          </div>
          <a href="#contacto" class="btn" style="margin:12px; text-align:center;">Añadir al carrito</a>
        </article>

        <article style="background:var(--card); border:1px solid #e8dfd2; border-radius:12px; overflow:hidden;">
          <div style="background:#fff; aspect-ratio:1/1; border-bottom:1px solid #e8dfd2; display:grid; place-items:center; color:var(--muted); font-size:14px;">Imagen en blanco</div>
          <div style="padding:14px 16px;">
            <h3 style="margin:0 0 6px; font-family:'Playfair Display', serif;">Pulsera Coral Dorado</h3>
            <p style="margin:0 0 8px; color:var(--muted); font-size:14px;">Inspirada en las formas del coral, con un toque moderno y elegante.</p>
            <b>$220 MXN</b>
          </div>
          <a href="#contacto" class="btn" style="margin:12px; text-align:center;">Añadir al carrito</a>
        </article>

        <article style="background:var(--card); border:1px solid #e8dfd2; border-radius:12px; overflow:hidden;">
          <div style="background:#fff; aspect-ratio:1/1; border-bottom:1px solid #e8dfd2; display:grid; place-items:center; color:var(--muted); font-size:14px;">Imagen en blanco</div>
          <div style="padding:14px 16px;">
            <h3 style="margin:0 0 6px; font-family:'Playfair Display', serif;">Aretes Perla de Marea</h3>
            <p style="margin:0 0 8px; color:var(--muted); font-size:14px;">Aretes minimalistas que reflejan el brillo de la marea y la luna.</p>
            <b>$260 MXN</b>
          </div>
          <a href="#contacto" class="btn" style="margin:12px; text-align:center;">Añadir al carrito</a>
        </article>
      </div>
    </div>
  </section>

  <footer>
    <div class="container">© <?php echo htmlspecialchars($year); ?> LUMIÉRE</div>
  </footer>
</body>
</html>

