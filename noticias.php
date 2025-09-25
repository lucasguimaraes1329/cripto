<?php include("theme.php"); ?>
<!DOCTYPE html>
<html lang="pt-BR" class="<?php echo isset($theme) ? $theme : ''; ?>">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Confira as últimas notícias sobre criptomoedas e o mercado financeiro.">
  <title>Notícias - CriptoFuturo</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<!-- Header -->
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

  <main class="conteudo">
    <div class="container">
      <h1>Últimas Notícias</h1>
      <div class="cards">
        <div class="card">
          <a href="noticia-bitcoin.php">
            <img src="img/bitcoin.webp" alt="Bitcoin">
            <h3>Bitcoin ultrapassa nova máxima histórica</h3>
            <p>Investidores celebram a nova máxima histórica do BTC...</p>
          </a>
        </div>
        <div class="card">
          <a href="noticia-ethereum.php">
            <img src="img/ethereum.jpg" alt="Ethereum">
            <h3>Ethereum 2.0 traz mudanças para o mercado</h3>
            <p>A atualização promete taxas menores e maior escalabilidade...</p>
          </a>
        </div>
        <div class="card">
          <a href="noticia-regulamentacoes.php">
            <img src="img/regulamentacoes.jpg" alt="Regulamentações">
            <h3>Novas regulamentações podem impactar investidores</h3>
            <p>Medidas de fiscalização podem mudar a forma como investidores atuam...</p>
          </a>
        </div>
        <div class="card">
          <a href="noticia-solana.php">
            <img src="img/solana.jpg" alt="Solana">
            <h3>Solana enfrenta nova interrupção de rede e perde US$ 2 bilhões em valor de mercado</h3>
            <p>A blockchain de alta velocidade sofreu uma queda de 8 horas...</p>
          </a>
        </div>
        <div class="card">
          <a href="noticia-etfs.php">
            <img src="img/efts.webp" alt="Solana">
            <h3>ETFs de Ethereum finalmente aprovados pela SEC: Impacto no mercado</h3>
            <p>A decisão histórica abre portas para bilhões em investimentos institucionais...</p>
          </a>
        </div>
        <div class="card">
          <a href="noticia-ia.php">
            <img src="img/ia.jpg" alt="Solana">
            <h3>IA e Cripto: Projetos de inteligência artificial explodem no mercado, com ganhos de até 500%</h3>
            <p>A fusão de IA e blockchain cria novos tokens que atraem bilhões...</p>
          </a>
        </div>
      </div>
    </div>
  </main>

  <<footer>
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

    document.addEventListener('DOMContentLoaded', () => {
      const btnTheme = document.getElementById("toggle-theme");
      const theme = getCookie('site_theme');
      const isLightMode = theme === 'light';

      document.body.classList.toggle('light-mode', isLightMode);
      btnTheme.textContent = isLightMode ? "☀️" : "🌙";

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
