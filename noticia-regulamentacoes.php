<?php include("theme.php"); ?>
<!DOCTYPE html>
<html lang="pt-BR" class="<?php echo isset($theme) ? $theme : ''; ?>">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bitcoin ultrapassa nova máxima histórica - CriptoFuturo</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <div class="logo">Cripto<span>Futuro</span></div>
    <nav>
      <ul>
        <li><a href="index.php">Início</a></li>
        <li><a href="noticias.php" class="ativo">Notícias</a></li>
        <li><a href="comparador.php">Comparador</a></li>
        <li><a href="guias.php">Guias</a></li>
        <li><a href="contato.php">Contato</a></li>
      </ul>
    </nav>
    <button id="toggle-theme" aria-label="Alternar tema">🌙</button>
  </header>
    <section class="materia">
        <div class="hero-materia">
            <img src="img/regulamentacoes.jpg" alt="Regulamentação Cripto">
            <h1>Novas regulamentações podem impactar investidores</h1>
            <p class="subtitulo">Projetos de lei em diferentes países podem mudar a forma como o mercado de criptomoedas funciona.</p>
        </div>

        <div class="resumo">
            <h3>📌 Pontos-chave</h3>
            <ul>
            <li>Exchanges terão mais exigências regulatórias.</li>
            <li>Investidores precisarão declarar criptoativos com mais rigor.</li>
            <li>Especialistas temem fuga de capital em excesso de regulação.</li>
            </ul>
        </div>

        <article>
            <p>
            Nos últimos meses, governos de todo o mundo estão acelerando as <strong>regulamentações sobre criptomoedas</strong>. 
            O objetivo é aumentar a segurança do mercado e proteger investidores contra golpes.
            </p>

            <blockquote>
            “Regulação é necessária, mas o excesso pode sufocar a inovação.” — <em>Pedro Silva, economista</em>.
            </blockquote>

            <p>
            Enquanto alguns acreditam que a maior fiscalização dará mais confiança a grandes empresas, outros apontam que 
            investidores menores podem ser prejudicados por burocracias e impostos mais altos.
            </p>
        </article>
    </section>
  <footer>
    <div class="footer-container">
      <div class="footer-col">
        <h4>Links</h4>
        <ul>
          <li><a href="index.php">Início</a></li>
          <li><a href="noticias.php">Notícias</a></li>
          <li><a href="comparador.php">Comparador</a></li>
          <li><a href="guias.php">Guias</a></li>
          <li><a href="contato.php">Contato</a></li>
        </ul>
      </div>
      <div class="footer-col">
        <h4>Siga-nos</h4>
        <ul>
          <li><a href="#">Twitter</a></li>
          <li><a href="#">LinkedIn</a></li>
          <li><a href="#">YouTube</a></li>
        </ul>
      </div>
    </div>
    <p class="copy">© 2025 CriptoFuturo - Todos os direitos reservados</p>
  </footer>
</body>
<script>
  function getCookie(name) {
    const value = `; ${document.cookie}`;
    const parts = value.split(`; ${name}=`);
    if (parts.length === 2) return parts.pop().split(';').shift();
    return null;
  }

  document.addEventListener('DOMContentLoaded', () => {
    const btnTheme = document.getElementById("toggle-theme");
    if (!btnTheme) return;

    const theme = getCookie('site_theme');
    if (theme === 'light') {
      document.body.classList.add('light-mode');
      btnTheme.textContent = "☀️";
    } else {
      document.body.classList.remove('light-mode');
      btnTheme.textContent = "🌙";
    }

    btnTheme.addEventListener("click", () => {
      const isLight = document.body.classList.toggle("light-mode");
      btnTheme.textContent = isLight ? "☀️" : "🌙";
      document.cookie = `site_theme=${isLight ? 'light' : 'dark'}; path=/`;

      fetch('save_theme.php', {
        method: 'POST',
        headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
        body: `theme=${isLight ? 'light' : 'dark'}`
      });
    });
  });
</script>
</html>