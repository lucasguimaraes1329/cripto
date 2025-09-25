<?php include("theme.php"); ?>
<!DOCTYPE html>
<html lang="pt-BR" class="<?php echo isset($theme) ? htmlspecialchars($theme) : 'dark-mode'; ?>">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Solana enfrenta nova interrupção de rede - CriptoFuturo</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <div class="logo" aria-label="Logo CriptoFuturo">Cripto<span>Futuro</span></div>
    <nav>
      <ul>
        <li><a href="index.php">Início</a></li>
        <li><a href="noticias.php" class="ativo" aria-current="page">Notícias</a></li>
        <li><a href="comparador.php">Comparador</a></li>
        <li><a href="guias.php">Guias</a></li>
        <li><a href="contato.php">Contato</a></li>
        <li><a href="simulador.php">Simulador</a></li>
        <li><a href="desenvolvedores.php">Desenvolvedores</a></li>
      </ul>
    </nav>
    <button id="toggle-theme" aria-label="Alternar tema">🌙</button>
  </header>

  <main>
    <section class="materia">
      <div class="hero-materia">
        <img src="img/solana.jpg" alt="Rede Solana interrompida">
        <h1>Solana enfrenta nova interrupção de rede e perde US$ 2 bilhões em valor de mercado</h1>
        <p class="subtitulo">A blockchain de alta velocidade sofreu uma queda de 8 horas, levantando preocupações sobre estabilidade em meio ao crescimento de DeFi.</p>
      </div>

      <div class="resumo">
        <h3>📌 Pontos-chave</h3>
        <ul>
          <li>Interrupção de 8 horas na rede Solana.</li>
          <li>Perda de US$ 2 bilhões em capitalização.</li>
          <li>Comunidade questiona escalabilidade.</li>
        </ul>
      </div>

      <article>
        <p>
          A <strong>Solana (SOL)</strong> enfrentou sua terceira interrupção significativa em 2025, com a rede paralisada por quase 8 horas devido a um congestionamento causado por transações de memecoins. O incidente resultou em uma queda de 15% no preço do SOL, apagando US$ 2 bilhões em valor de mercado.
        </p>

        <p>
          Desenvolvedores atribuem o problema ao alto volume de transações em plataformas DeFi e bots de trading, destacando os desafios de escalabilidade mesmo para blockchains de alta performance.
        </p>

        <blockquote>
          “A velocidade da Solana é sua força, mas também sua fraqueza em momentos de pico.” — <em>Desenvolvedor Blockchain Independente</em>.
        </blockquote>

        <p>
          A equipe da Solana anunciou uma atualização emergencial para mitigar futuros outages, mas a confiança dos investidores permanece abalada. Analistas recomendam diversificação para evitar riscos concentrados em uma única chain.
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
          <li><a href="comparador.htphpml">Comparador</a></li>
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

    document.addEventListener('DOMContentLoaded', () => {
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
        fetch('save_theme.php', {
          method: 'POST',
          headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
          body: `theme=${isLight ? 'light' : 'dark'}`
        }).catch(error => console.error('Erro ao salvar tema:', error));
      });
    });
  </script>
</body>
</html>