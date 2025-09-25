<?php include("theme.php"); ?>
<!DOCTYPE html>
<html lang="pt-BR" class="<?php echo isset($theme) ? htmlspecialchars($theme) : 'dark-mode'; ?>">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Guia completo sobre staking de criptomoedas: como funciona, plataformas e riscos.">
  <title>Guia de Staking: Ganhe Recompensas com Criptomoedas - CriptoFuturo</title>
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

  <!-- Conteúdo do Guia -->
  <main class="guia-detalhe">
    <h1>Guia Completo de Staking de Criptomoedas</h1>

    <p>Staking é uma forma de ganhar recompensas ao bloquear suas criptomoedas para apoiar a segurança e operação de uma blockchain. Este guia explica como funciona, as melhores plataformas e como evitar riscos.</p>

    <div class="guia-secao">
      <h2>O que é Staking?</h2>
      <ul class="guia-lista">
        <li>Staking envolve bloquear criptomoedas em uma wallet para validar transações em redes Proof of Stake (PoS).</li>
        <li>Você ganha recompensas, geralmente em forma de mais tokens, como uma espécie de "juros".</li>
        <li>Exemplos de moedas populares para staking: Ethereum, Cardano, Solana e Polkadot.</li>
      </ul>
    </div>

    <div class="guia-secao">
      <h2>Plataformas Populares para Staking</h2>
      <ul class="guia-lista">
        <li><strong>Binance:</strong> Oferece staking flexível e bloqueado com retornos de até 10% APY.</li>
        <li><strong>Kraken:</strong> Interface simples e suporte para várias moedas PoS.</li>
        <li><strong>Lido Finance:</strong> Staking líquido para Ethereum, permitindo uso dos tokens bloqueados.</li>
        <li><strong>Rocket Pool:</strong> Opção descentralizada para staking de ETH com nós próprios.</li>
      </ul>
    </div>

    <div class="guia-secao">
      <h2>Riscos e Melhores Práticas</h2>
      <p>Embora o staking seja relativamente seguro, há riscos como slashing (perda de tokens por mau comportamento do validador) e volatilidade de preço. Dicas:</p>
      <ul class="guia-lista">
        <li>Escolha plataformas auditadas com histórico confiável.</li>
        <li>Entenda os períodos de bloqueio (lock-up) antes de comprometer fundos.</li>
        <li>Diversifique entre várias moedas para reduzir riscos.</li>
        <li>Use wallets seguras e ative autenticação de dois fatores (2FA).</li>
      </ul>
    </div>

    <div class="guia-secao">
      <h2>Como Começar</h2>
      <p>Escolha uma moeda PoS, configure uma wallet compatível (ex.: MetaMask para ETH), e selecione uma plataforma de staking. Comece com valores pequenos e monitore os retornos regularmente.</p>
    </div>

    <a href="guias.php" class="btn-voltar">← Voltar aos Guias</a>
  </main>

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