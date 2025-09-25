<?php include("theme.php"); ?>
<!DOCTYPE html>
<html lang="pt-BR" class="<?php echo isset($theme) ? $theme : ''; ?>">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Comparador e Conversor - CriptoFuturo</title>
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
        <li><a href="comparador.php" class="ativo">Comparador</a></li>
        <li><a href="guias.php">Guias</a></li>
        <li><a href="contato.php">Contato</a></li>
        <li><a href="simulador.php">Simulador</a></li>
        <li><a href="desenvolvedores.php">Desenvolvedores</a></li>
      </ul>
    </nav>
    <button id="toggle-theme">🌙</button>
  </header>

  <!-- COMPARADOR -->
  <section class="conteudo">
    <h1>Comparador de Criptomoedas</h1>
    <p>Selecione duas criptomoedas para comparar preços e variações.</p>
    <div class="comparador-box">
      <div class="comparador-form">
        <select id="moeda1">
          <option value="BTC">BTC</option>
          <option value="ETH">ETH</option>
          <option value="SOL">SOL</option>
          <option value="DOGE">DOGE</option>
        </select>
        <select id="moeda2">
          <option value="ETH">ETH</option>
          <option value="BTC">BTC</option>
          <option value="SOL">SOL</option>
          <option value="DOGE">DOGE</option>
        </select>
        <button onclick="comparar()">Comparar</button>
      </div>
      <div class="resultado" id="resultadoComparacao">
        <h3>Resultado</h3>
        <p>Escolha duas moedas para visualizar a comparação.</p>
      </div>
    </div>
  </section>

  <!-- CONVERSOR -->
  <section class="conteudo">
    <h1>Conversor de Criptomoedas</h1>
    <p>Converta de criptomoedas para Real, Dólar, Euro e Libra.</p>
    <div class="conversor-box">
      <div class="conversor-form">
        <select id="cripto">
          <option value="BTC">BTC</option>
          <option value="ETH">ETH</option>
          <option value="SOL">SOL</option>
          <option value="DOGE">DOGE</option>
        </select>
        <input type="number" id="valor" placeholder="Quantidade" min="0" step="any">
        <button onclick="converter()">Converter</button>
      </div>
      <div class="resultado" id="resultadoConversao">
        <h3>Resultado</h3>
        <p>Digite um valor e selecione uma moeda para converter.</p>
      </div>
    </div>
  </section>

  <footer>
    <p class="copy">© 2025 CriptoFuturo - Todos os direitos reservados</p>
  </footer>

  <script>
    // Valores fictícios de referência (em USD)
    const taxas = {
      BTC: 72000,
      ETH: 3600,
      SOL: 220,
      DOGE: 0.18
    };

    const moedasFiat = {
      USD: 1,
      BRL: 5.2,
      EUR: 0.92,
      GBP: 0.78
    };

    // Função do Comparador
    function comparar() {
      const moeda1 = document.getElementById("moeda1").value;
      const moeda2 = document.getElementById("moeda2").value;

      if (moeda1 === moeda2) {
        document.getElementById("resultadoComparacao").innerHTML = "<p>Selecione duas moedas diferentes para comparar.</p>";
        return;
      }

      const valor1 = taxas[moeda1];
      const valor2 = taxas[moeda2];

      const diferenca = valor1 - valor2;
      const percentual = ((diferenca / valor2) * 100).toFixed(2);

      let resultado = `<h3>Resultado da Comparação</h3>`;
      resultado += `<p><strong>${moeda1}:</strong> $${valor1.toLocaleString()}</p>`;
      resultado += `<p><strong>${moeda2}:</strong> $${valor2.toLocaleString()}</p>`;
      resultado += `<p><strong>Diferença:</strong> $${diferenca.toLocaleString()} (${percentual}%)</p>`;

      document.getElementById("resultadoComparacao").innerHTML = resultado;
    }

    // Função do Conversor
    function converter() {
      const cripto = document.getElementById("cripto").value;
      const valor = parseFloat(document.getElementById("valor").value);

      if (isNaN(valor) || valor <= 0) {
        document.getElementById("resultadoConversao").innerHTML = "<p>Digite um valor válido.</p>";
        return;
      }

      const valorUSD = valor * taxas[cripto]; // Converte cripto para USD

      let resultado = `<h3>Resultado</h3>`;
      resultado += `<p>${valor} ${cripto} equivale a:</p>`;
      resultado += `<ul>
        <li><strong>USD:</strong> $${valorUSD.toFixed(2)}</li>
        <li><strong>BRL:</strong> R$${(valorUSD * moedasFiat.BRL).toFixed(2)}</li>
        <li><strong>EUR:</strong> €${(valorUSD * moedasFiat.EUR).toFixed(2)}</li>
        <li><strong>GBP:</strong> £${(valorUSD * moedasFiat.GBP).toFixed(2)}</li>
      </ul>`;

      document.getElementById("resultadoConversao").innerHTML = resultado;
    }

    // Tema
    const btnTheme = document.getElementById("toggle-theme");
    function getCookie(name) {
      const value = `; ${document.cookie}`;
      const parts = value.split(`; ${name}=`);
      if (parts.length === 2) return parts.pop().split(';').shift();
      return null;
    }

    window.addEventListener('DOMContentLoaded', () => {
      const theme = getCookie('site_theme');
      if (theme === 'light') {
        document.body.classList.add('light-mode');
        btnTheme.textContent = "☀️";
      } else if (theme === 'dark') {
        document.body.classList.remove('light-mode');
        btnTheme.textContent = "🌙";
      } else {
        // Se não houver cookie, manter padrão do PHP
        if (document.documentElement.classList.contains('light-mode')) {
          btnTheme.textContent = "☀️";
        } else {
          btnTheme.textContent = "🌙";
        }
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