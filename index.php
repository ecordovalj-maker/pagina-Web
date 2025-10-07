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
    html, body{ margin:0; padding:0; scroll-behavior:smooth; }
    body{
      background: var(--bg);
      color: var(--ink);
      font-family: Inter, system-ui, -apple-system, Segoe UI, Roboto, Arial, sans-serif;
      line-height: 1.6;
    }

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
    .btn{ display: inline-block; padding: 10px 16px; border: 1px solid var(--ink); background: transparent; color: var(--ink); text-decoration: none; border-radius: 6px; font-weight: 600; font-size: 14px; cursor:pointer; }
    .btn.primary{ background: var(--accent); border-color: var(--accent); color: #fff; }
    .hero-illustration{ background: var(--card); border: 1px dashed #e0d7c9; min-height: 220px; border-radius: 10px; display: grid; place-items: center; color: var(--muted); font-size: 14px; }

    /* --- Colección (oculta por defecto) --- */
    .coleccion {
      display: none;               /* 🚫 oculta inicialmente */
      opacity: 0;
      transform: translateY(20px);
      transition: all 0.5s ease;
    }
    .coleccion.active {
      display: block;              /* 👀 se muestra cuando tiene la clase active */
      opacity: 1;
      transform: translateY(0);
    }

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

  <!-- HERO -->
  <section class="hero" id="sobre">
    <div class="container hero-grid">
      <div>
        <h2>Sobre Lumiére</h2>
        <h1>Inspirados en la magia de la luna y la belleza atemporal</h1>
        <p>En Lumiére diseñamos piezas únicas que capturan momentos, emociones y memorias.</p>
        <p>Cada joya combina técnicas tradicionales con un enfoque moderno.</p>
        <div class="cta-row">
          <button class="btn primary" id="verColeccion">Ver colección</button>
          <a class="btn" href="#contacto">Contáctanos</a>
        </div>
      </div>
      <div class="hero-illustration">Imagen en blanco</div>
    </div>
  </section>

  <!-- COLECCIÓN (oculta hasta que se haga clic) -->
    <!-- COLECCIÓN (oculta hasta que se haga clic) -->
  <section class="coleccion" id="coleccion">
    <div class="container">
      <h2 style="font-family:'Playfair Display', serif; letter-spacing:.15em; text-transform:uppercase;">
        Colección: Marea Alta
      </h2>
      <p style="color:var(--muted); max-width:600px;">
        Piezas inspiradas en el mar: brillos sutiles, texturas orgánicas y elegancia minimalista.
      </p>

      <div style="display:grid; grid-template-columns:repeat(auto-fit,minmax(240px,1fr)); gap:22px; margin-top:28px;">

        <!-- 1 -->
        <article style="background:var(--card); border:1px solid #e8dfd2; border-radius:12px; overflow:hidden;">
          <div style="background:#fff; aspect-ratio:1/1; border-bottom:1px solid #e8dfd2; display:grid; place-items:center; color:var(--muted); font-size:14px;">Imagen en blanco</div>
          <div style="padding:14px 16px;">
            <h3 style="margin:0 0 6px; font-family:'Playfair Display', serif;">Anillo Arena en la Marea</h3>
            <p style="margin:0 0 8px; color:var(--muted); font-size:14px;">Acabado mate con brillo sutil.</p>
            <b>$250 MXN</b>
          </div>
          <a href="#contacto" class="btn" style="margin:12px; text-align:center;">Añadir al carrito</a>
        </article>

        <!-- 2 -->
        <article style="background:var(--card); border:1px solid #e8dfd2; border-radius:12px; overflow:hidden;">
          <div style="background:#fff; aspect-ratio:1/1; border-bottom:1px solid #e8dfd2; display:grid; place-items:center; color:var(--muted); font-size:14px;">Imagen en blanco</div>
          <div style="padding:14px 16px;">
            <h3 style="margin:0 0 6px; font-family:'Playfair Display', serif;">Collar Brisa Marina</h3>
            <p style="margin:0 0 8px; color:var(--muted); font-size:14px;">Minimalista, ligero y versátil.</p>
            <b>$300 MXN</b>
          </div>
          <a href="#contacto" class="btn" style="margin:12px; text-align:center;">Añadir al carrito</a>
        </article>

        <!-- 3 -->
        <article style="background:var(--card); border:1px solid #e8dfd2; border-radius:12px; overflow:hidden;">
          <div style="background:#fff; aspect-ratio:1/1; border-bottom:1px solid #e8dfd2; display:grid; place-items:center; color:var(--muted); font-size:14px;">Imagen en blanco</div>
          <div style="padding:14px 16px;">
            <h3 style="margin:0 0 6px; font-family:'Playfair Display', serif;">Pulsera Coral Dorado</h3>
            <p style="margin:0 0 8px; color:var(--muted); font-size:14px;">Texturas orgánicas inspiradas en coral.</p>
            <b>$220 MXN</b>
          </div>
          <a href="#contacto" class="btn" style="margin:12px; text-align:center;">Añadir al carrito</a>
        </article>

        <!-- 4 -->
        <article style="background:var(--card); border:1px solid #e8dfd2; border-radius:12px; overflow:hidden;">
          <div style="background:#fff; aspect-ratio:1/1; border-bottom:1px solid #e8dfd2; display:grid; place-items:center; color:var(--muted); font-size:14px;">Imagen en blanco</div>
          <div style="padding:14px 16px;">
            <h3 style="margin:0 0 6px; font-family:'Playfair Display', serif;">Aretes Perla de Marea</h3>
            <p style="margin:0 0 8px; color:var(--muted); font-size:14px;">Brillo sutil y elegante.</p>
            <b>$260 MXN</b>
          </div>
          <a href="#contacto" class="btn" style="margin:12px; text-align:center;">Añadir al carrito</a>
        </article>

        <!-- 5 -->
        <article style="background:var(--card); border:1px solid #e8dfd2; border-radius:12px; overflow:hidden;">
          <div style="background:#fff; aspect-ratio:1/1; border-bottom:1px solid #e8dfd2; display:grid; place-items:center; color:var(--muted); font-size:14px;">Imagen en blanco</div>
          <div style="padding:14px 16px;">
            <h3 style="margin:0 0 6px; font-family:'Playfair Display', serif;">Choker Marea Baja</h3>
            <p style="margin:0 0 8px; color:var(--muted); font-size:14px;">Ajustado, líneas limpias.</p>
            <b>$190 MXN</b>
          </div>
          <a href="#contacto" class="btn" style="margin:12px; text-align:center;">Añadir al carrito</a>
        </article>

        <!-- 6 -->
        <article style="background:var(--card); border:1px solid #e8dfd2; border-radius:12px; overflow:hidden;">
          <div style="background:#fff; aspect-ratio:1/1; border-bottom:1px solid #e8dfd2; display:grid; place-items:center; color:var(--muted); font-size:14px;">Imagen en blanco</div>
          <div style="padding:14px 16px;">
            <h3 style="margin:0 0 6px; font-family:'Playfair Display', serif;">Anillo Luna Nueva</h3>
            <p style="margin:0 0 8px; color:var(--muted); font-size:14px;">Curvas suaves y acabado pulido.</p>
            <b>$280 MXN</b>
          </div>
          <a href="#contacto" class="btn" style="margin:12px; text-align:center;">Añadir al carrito</a>
        </article>

        <!-- 7 -->
        <article style="background:var(--card); border:1px solid #e8dfd2; border-radius:12px; overflow:hidden;">
          <div style="background:#fff; aspect-ratio:1/1; border-bottom:1px solid #e8dfd2; display:grid; place-items:center; color:var(--muted); font-size:14px;">Imagen en blanco</div>
          <div style="padding:14px 16px;">
            <h3 style="margin:0 0 6px; font-family:'Playfair Display', serif;">Tobillera Orilla del Mar</h3>
            <p style="margin:0 0 8px; color:var(--muted); font-size:14px;">Ligera y cómoda para diario.</p>
            <b>$170 MXN</b>
          </div>
          <a href="#contacto" class="btn" style="margin:12px; text-align:center;">Añadir al carrito</a>
        </article>

        <!-- 8 -->
        <article style="background:var(--card); border:1px solid #e8dfd2; border-radius:12px; overflow:hidden;">
          <div style="background:#fff; aspect-ratio:1/1; border-bottom:1px solid #e8dfd2; display:grid; place-items:center; color:var(--muted); font-size:14px;">Imagen en blanco</div>
          <div style="padding:14px 16px;">
            <h3 style="margin:0 0 6px; font-family:'Playfair Display', serif;">Pulsera Nudo de Marea</h3>
            <p style="margin:0 0 8px; color:var(--muted); font-size:14px;">Detalle central tipo nudo marinero.</p>
            <b>$210 MXN</b>
          </div>
          <a href="#contacto" class="btn" style="margin:12px; text-align:center;">Añadir al carrito</a>
        </article>

      </div>
    </div>
  </section>


  <footer>
    <div class="container">© <?php echo htmlspecialchars($year); ?> LUMIÉRE</div>
  </footer>

  <script>
    // 🔹 Mostrar la colección solo cuando se hace clic en "Ver colección"
    const btn = document.getElementById('verColeccion');
    const coleccion = document.getElementById('coleccion');

    btn.addEventListener('click', () => {
      coleccion.classList.add('active');
      coleccion.scrollIntoView({ behavior: 'smooth' }); // desplazamiento suave
    });
  </script>
</body>
</html>


