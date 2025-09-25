<?php include("theme.php"); ?>
<!DOCTYPE html>
<html lang="pt-BR" class="<?php echo isset($theme) ? $theme : ''; ?>">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ethereum 2.0 traz mudanças para o mercado - CriptoFuturo</title>
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
  </header>

  <main>
    <section class="materia">
      <div class="hero-materia">
        <img src="img/ethereum.jpg" alt="Ethereum 2.0">
        <h1>Ethereum 2.0 traz mudanças para o mercado</h1>
        <p class="subtitulo">A atualização mais esperada do Ethereum promete menor consumo de energia e maior escalabilidade.</p>
      </div>

      <div class="resumo">
        <h3>📌 Pontos-chave</h3>
        <ul>
          <li>Transição de Proof of Work (PoW) para Proof of Stake (PoS).</li>
          <li>Redução do consumo de energia em 99%.</li>
          <li>Escalabilidade e taxas menores.</li>
        </ul>
      </div>

      <article>
        <p>
          O <strong>Ethereum 2.0</strong> finalmente chegou, marcando uma mudança histórica no segundo maior blockchain do mundo. 
          A transição do <em>Proof of Work</em> para o <em>Proof of Stake</em> trouxe não apenas maior eficiência, mas também 
          um impacto ambiental positivo, com redução de mais de <strong>99% no consumo de energia</strong>.
        </p>

        <blockquote>
          “Essa mudança era fundamental para garantir a sustentabilidade a longo prazo do Ethereum.” — <em>Marina Costa, desenvolvedora blockchain</em>.
        </blockquote>

        <p>
          Além disso, os usuários já estão percebendo <strong>melhorias nas taxas de transação</strong> e um aumento na capacidade da rede, 
          o que deve abrir espaço para novos projetos DeFi e NFTs.
        </p>
      </article>
    </section>
  </main>

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

  <script>
    function getCookie(name) {
      const value = `; ${document.cookie}`;
      const parts = value.split(`; ${name}=`);
      if (parts.length === 2) return parts.pop().split(';').shift();
      return null;
    }

    const btnTheme = document.getElementById("toggle-theme");

    window.addEventListener('DOMContentLoaded', () => {
      const theme = getCookie('site_theme');
      if (theme === 'light') {
        document.body.classList.add('light-mode');
        btnTheme.textContent = "☀️";
      } else if (theme === 'dark') {
        document.body.classList.remove('light-mode');
        btnTheme.textContent = "🌙";
      } else {
        btnTheme.textContent = document.documentElement.classList.contains('light-mode') ? "☀️" : "🌙";
      }
    });

    btnTheme.addEventListener("click", () => {
      const isLight = document.body.classList.toggle("light-mode");
      btnTheme.textContent = isLight ? "☀️" : "🌙";
      fetch('save_theme.php', {
        method: 'POST',
        headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
        body: `theme=${isLight ? 'light' : 'dark'}`
      });
    });
  </script>
</body>
</html>