<?php include("theme.php"); ?>
<!DOCTYPE html>
<html lang="pt-BR" class="<?php echo isset($theme) ? $theme : ''; ?>">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Explore nossos guias educacionais sobre criptomoedas, blockchain e DeFi.">
  <title>Guias - CriptoFuturo</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
   <!-- Header -->
   <header>
    <div class="logo" aria-label="Logo CriptoFuturo">Cripto<span>Futuro</span></div>
    <nav>
      <ul>
        <li><a href="index.php">Início</a></li>
        <li><a href="noticias.php">Notícias</a></li>
        <li><a href="comparador.php">Comparador</a></li>
        <li><a href="guias.php" class="ativo" aria-current="page">Guias</a></li>
        <li><a href="contato.php">Contato</a></li>
        <li><a href="simulador.php">Simulador</a></li>
        <li><a href="desenvolvedores.php">Desenvolvedores</a></li>
      </ul>
    </nav>
    <button id="toggle-theme" aria-label="Alternar tema">🌙</button>
  </header>

  <main class="conteudo">
    <div class="container">
      <h1>Guias Educacionais</h1>
      <div class="cards">
        <div class="card guia">
          <a href="guia-blockchain.php">
            <img src="img/blockchain.webp" alt="Blockchain">
            <h3>O que é Blockchain?</h3>
          </a>
        </div>
        <div class="card guia">
          <a href="guia-investimento.php">
            <img src="img/seguranca.jpg" alt="Investimento seguro">
            <h3>Como investir em criptomoedas com segurança</h3>
          </a>
        </div>
        <div class="card guia">
          <a href="guia-defi.php">
            <img src="img/defi.jpg" alt="DeFi">
            <h3>DeFi explicado</h3>
          </a>
        </div>
        <div class="card guia">
          <a href="guia-wallets.php">
            <img src="img/wallets.jpg" alt="Wallets">
            <h3>Wallets para Criptomoedas</h3>
          </a>
        </div>
        <div class="card guia">
          <a href="guia-nfts.php">
            <img src="img/nft.jfif" alt="nft">
            <h3>NFTs em 2025</h3>
          </a>
        </div>
        <div class="card guia">
          <a href="guia-staking.php">
            <img src="img/staking.png" alt="nft">
            <h3>Staking de Criptomoedas</h3>
          </a>
        </div>
      </div>
    </div>
  </main>

  <footer>
    <div class="container">
      <p class="copy">© 2025 CriptoFuturo - Todos os direitos reservados</p>
    </div>
  </footer>

  <script>
    document.addEventListener('DOMContentLoaded', () => {
      const btnTheme = document.getElementById("toggle-theme");
      const getCookie = (name) => {
        const value = `; ${document.cookie}`;
        const parts = value.split(`; ${name}=`);
        return parts.length === 2 ? parts.pop().split(';').shift() : null;
      };

      const theme = getCookie('site_theme');
      if (theme === 'light') {
        document.body.classList.add('light-mode');
        btnTheme.textContent = "☀️";
      } else {
        btnTheme.textContent = "🌙";
      }

      btnTheme.addEventListener("click", () => {
        const isLight = document.body.classList.toggle("light-mode");
        btnTheme.textContent = isLight ? "☀️" : "🌙";
        fetch('save_theme.php', {
          method: 'POST',
          headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
          body: `theme=${isLight ? 'light' : 'dark'}`
        });
      });
    });
  </script>
</body>
</html>
