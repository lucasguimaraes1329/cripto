<?php include("theme.php"); ?>
<!DOCTYPE html>
<html lang="pt-BR" class="<?php echo isset($theme) && in_array($theme, ['light-mode', 'dark-mode']) ? $theme : 'dark-mode'; ?>">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Simulador de Investimentos - CriptoFuturo</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <!-- Header -->
  <header>
    <div class="logo">Cripto<span>Futuro</span></div>
    <nav>
      <ul>
        <li><a href="index.php">Início</a></li>
        <li><a href="noticias.php">Notícias</a></li>
        <li><a href="comparador.php">Comparador</a></li>
        <li><a href="guias.php">Guias</a></li>
        <li><a href="contato.php">Contato</a></li>
        <li><a href="simulador.php" class="ativo">Simulador</a></li>
        <li><a href="desenvolvedores.php">Desenvolvedores</a></li>
      </ul>
    </nav>
    <button id="toggle-theme">🌙</button>
  </header>

  <!-- Simulador -->
  <section class="conteudo simulador">
    <h1>💹 Simulador de Investimentos</h1>
    <p>Veja quanto você teria hoje se tivesse investido no passado.</p>

    <div class="simulador-box">
      <input type="number" id="valorInvestido" placeholder="Valor em USD" min="0.01" step="0.01">
      <select id="moedaInvestimento">
        <option value="BTC">BTC</option>
        <option value="ETH">ETH</option>
        <option value="SOL">SOL</option>
        <option value="DOGE">DOGE</option>
      </select>
      <select id="anoInvestimento">
        <option value="2018">2018</option>
        <option value="2019">2019</option>
        <option value="2020">2020</option>
        <option value="2021">2021</option>
      </select>
      <button onclick="simular()">Simular</button>
    </div>

    <div class="resultado" id="resultadoSimulador">
      <h3>Resultado</h3>
      <p>Digite um valor, selecione uma moeda e um ano para simular.</p>
    </div>
  </section>

  <!-- Footer -->
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
    // Histórico fictício (USD)
    const historico = {
      BTC: { 2018: 4000, 2019: 7000, 2020: 10000, 2021: 30000 },
      ETH: { 2018: 100, 2019: 200, 2020: 400, 2021: 1200 },
      SOL: { 2018: 2, 2019: 3, 2020: 5, 2021: 50 },
      DOGE: { 2018: 0.002, 2019: 0.003, 2020: 0.005, 2021: 0.07 }
    };

    // Preços atuais fictícios
    const atuais = {
      BTC: 72000,
      ETH: 3600,
      SOL: 220,
      DOGE: 0.18
    };

    // Mensagens de erro
    const mensagens = {
      valorInvalido: "Digite um valor válido (maior que 0).",
      moedaInvalida: "Selecione uma criptomoeda válida.",
      anoInvalido: "Selecione um ano válido."
    };

    function simular() {
      const valorInvestido = parseFloat(document.getElementById("valorInvestido").value);
      const moeda = document.getElementById("moedaInvestimento").value;
      const ano = document.getElementById("anoInvestimento").value;

      // Validações
      if (isNaN(valorInvestido) || valorInvestido <= 0) {
        document.getElementById("resultadoSimulador").innerHTML = `<p>${mensagens.valorInvalido}</p>`;
        return;
      }
      if (!historico[moeda]) {
        document.getElementById("resultadoSimulador").innerHTML = `<p>${mensagens.moedaInvalida}</p>`;
        return;
      }
      if (!historico[moeda][ano]) {
        document.getElementById("resultadoSimulador").innerHTML = `<p>${mensagens.anoInvalido}</p>`;
        return;
      }

      const precoAntigo = historico[moeda][ano];
      const precoAtual = atuais[moeda];

      // Cálculo com precisão para evitar erros de ponto flutuante
      const quantidade = valorInvestido / precoAntigo;
      const valorHoje = quantidade * precoAtual;

      // Formatação com toLocaleString para valores monetários
      document.getElementById("resultadoSimulador").innerHTML = `
        <h3>Resultado</h3>
        <p>Se você tivesse investido <strong>$${valorInvestido.toLocaleString('en-US', { minimumFractionDigits: 2, maximumFractionDigits: 2 })}</strong> em ${moeda} em ${ano},</p>
        <p>hoje teria aproximadamente <strong>$${valorHoje.toLocaleString('en-US', { minimumFractionDigits: 2, maximumFractionDigits: 2 })}</strong>.</p>
      `;
    }

    // Função para ler cookie
    function getCookie(name) {
      const value = `; ${document.cookie}`;
      const parts = value.split(`; ${name}=`);
      if (parts.length === 2) return parts.pop().split(';').shift();
      return null;
    }

    // Tema
    const btnTheme = document.getElementById("toggle-theme");

    window.addEventListener('DOMContentLoaded', () => {
      const theme = getCookie('site_theme');
      if (theme === 'light') {
        document.body.classList.add('light-mode');
        btnTheme.textContent = "☀️";
      } else {
        document.body.classList.remove('light-mode');
        btnTheme.textContent = "🌙";
      }
    });

    btnTheme.addEventListener("click", () => {
      const isLight = document.body.classList.toggle("light-mode");
      btnTheme.textContent = isLight ? "☀️" : "🌙";
      fetch('save_theme.php', {
        method: 'POST',
        headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
        body: `theme=${isLight ? 'light' : 'dark'}`
      }).catch(error => console.error('Erro ao salvar tema:', error));
    });
  </script>
</body>
</html>