<?php include("theme.php"); ?>
<!DOCTYPE html>
<html lang="pt-BR" class="<?php echo isset($theme) ? htmlspecialchars($theme) : 'dark-mode'; ?>">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ETFs de Ethereum aprovados pela SEC - CriptoFuturo</title>
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
        <img src="img/efts.webp" alt="Aprovação de ETFs Ethereum">
        <h1>ETFs de Ethereum finalmente aprovados pela SEC: Impacto no mercado</h1>
        <p class="subtitulo">A decisão histórica abre portas para bilhões em investimentos institucionais, impulsionando o preço do ETH em 12% nas últimas 24 horas.</p>
      </div>

      <div class="resumo">
        <h3>📌 Pontos-chave</h3>
        <ul>
          <li>Aprovação de spot ETFs para Ethereum.</li>
          <li>Alta de 12% no preço do ETH.</li>
          <li>Previsões de influxo de US$ 10 bilhões.</li>
        </ul>
      </div>

      <article>
        <p>
          A <strong>SEC dos EUA</strong> aprovou os primeiros ETFs de Ethereum spot, permitindo que investidores tradicionais acessem o ETH sem necessidade de wallets ou exchanges. A notícia causou uma euforia imediata, com o preço do Ethereum saltando para acima de US$ 3.800.
        </p>

        <p>
          Fundos como BlackRock e Fidelity lideram as aprovações, prevendo influxos de até US$ 10 bilhões nos próximos meses, similar ao impacto dos ETFs de Bitcoin em 2024.
        </p>

        <blockquote>
          “Isso marca o amadurecimento do Ethereum como ativo institucional.” — <em>Analista da Bloomberg</em>.
        </blockquote>

        <p>
          No entanto, reguladores alertam para riscos de volatilidade, e o mercado DeFi pode ver um boom em adoção. Investidores devem monitorar volumes de trading para sinais de consolidação.
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