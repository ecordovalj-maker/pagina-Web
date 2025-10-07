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
  <!-- CONTÁCTANOS -->
  <section id="contacto" style="
    background:#faf9f7;
    background-image: radial-gradient(#ffffff 1px, transparent 1px);
    background-size: 24px 24px;  /* textura sutil tipo mármol/papel */
    padding:60px 0;
    border-top:1px solid #e8dfd2;
    font-family:Inter, sans-serif;
  ">
    <div class="container" style="max-width:1100px; margin:auto; display:grid; grid-template-columns:1.2fr 0.8fr; gap:40px;">
      
      <!-- Formulario -->
      <div style="background:#fff; border:1px solid #e8dfd2; border-radius:12px; padding:30px; box-shadow:0 10px 25px rgba(0,0,0,0.05);">
        <h2 style="font-family:'Playfair Display', serif; font-size:28px; letter-spacing:.1em; text-transform:uppercase; margin-top:0; color:#1f1f1f;">
          Contáctanos
        </h2>
        <p style="color:#6b6b6b; margin-bottom:24px;">Envíanos un mensaje y te responderemos lo antes posible.</p>

        <form action="#" method="post" style="display:grid; gap:16px;">
          <input type="text" name="nombre" placeholder="Nombre completo" required style="padding:12px; border:1px solid #ddd; border-radius:6px; font-size:15px;">
          <input type="email" name="correo" placeholder="Correo electrónico" required style="padding:12px; border:1px solid #ddd; border-radius:6px; font-size:15px;">
          <input type="text" name="asunto" placeholder="Asunto" required style="padding:12px; border:1px solid #ddd; border-radius:6px; font-size:15px;">
          <textarea name="mensaje" placeholder="Escribe tu mensaje aquí..." rows="5" required style="padding:12px; border:1px solid #ddd; border-radius:6px; font-size:15px; resize:none;"></textarea>
          <button type="submit" style="
            background:#c6a571; 
            color:white;
            border:none; 
            border-radius:6px; 
            padding:12px 16px; 
            font-weight:600; 
            letter-spacing:.05em;
            cursor:pointer;
            font-size:15px;
          ">
            Enviar mensaje
          </button>
        </form>
      </div>

      <!-- Info lateral -->
      <aside style="display:grid; gap:18px; align-content:start;">

        <!-- WhatsApp -->
        <a href="https://wa.me/5210000000000" target="_blank" style="
          display:inline-flex; 
          align-items:center; 
          gap:10px; 
          background:#25d366;
          color:#fff; 
          padding:10px 16px; 
          border-radius:6px; 
          text-decoration:none;
          font-weight:600;
          font-size:14px;
        ">
          <span style="font-size:18px;">💬</span> WhatsApp
        </a>

        <!-- Datos -->
        <div style="color:#1f1f1f; line-height:1.7;">
          <p style="margin:0;"><b>Dirección:</b> Av. de la Plata 123, CDMX</p>
          <p style="margin:0;"><b>Teléfono:</b> +52 55 0000 0000</p>
          <p style="margin:0;"><b>Correo:</b> contacto@lumiere.mx</p>
          <p style="margin:0;"><b>Horario:</b> Lunes a Sábado · 10:00 a 19:00 hrs</p>
        </div>

        <!-- Mapa / imagen en blanco -->
        <div style="
          background:#fff;
          border:1px solid #e8dfd2;
          border-radius:10px;
          height:200px;
          display:grid;
          place-items:center;
          color:#6b6b6b;
          font-size:14px;
        ">
          Mapa / imagen de ubicación (en blanco)
        </div>
      </aside>
    </div>

    <!-- versión apilada en móvil -->
    <style>
      @media (max-width:900px){
        #contacto > .container { grid-template-columns: 1fr; }
      }
    </style>
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


