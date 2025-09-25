<?php include("theme.php"); ?>
<!DOCTYPE html>
<html lang="pt-BR" class="<?php echo isset($theme) ? htmlspecialchars($theme) : ''; ?>">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DeFi explicado - CriptoFuturo</title>
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
        <li><a href="guias.php" class="ativo">Guias</a></li>
        <li><a href="contato.php">Contato</a></li>
      </ul>
    </nav>
    <button id="toggle-theme" aria-label="Alternar tema">🌙</button>
  </header>

  <!-- Conteúdo principal -->
  <main class="conteudo guia-detalhe">
    <article>
      <h1>💡 DeFi explicado</h1>
      <p>
        O termo <strong>DeFi</strong> significa <em>Finanças Descentralizadas</em>. 
        Ele se refere a um ecossistema de aplicativos financeiros construídos sobre blockchain, 
        sem a necessidade de intermediários como bancos ou corretoras.
      </p>

      <section class="guia-secao">
        <h2>🔑 Como funciona?</h2>
        <p>
          O DeFi utiliza <strong>smart contracts</strong> (contratos inteligentes) para automatizar transações e serviços. 
          Isso inclui empréstimos, trocas de ativos, seguros e até sistemas de poupança digital.
        </p>
      </section>

      <section class="guia-secao">
        <h2>🌍 Benefícios</h2>
        <ul class="guia-lista">
          <li>⚡ <strong>Acessibilidade:</strong> qualquer pessoa com internet pode participar.</li>
          <li>💸 <strong>Custos menores:</strong> elimina taxas de intermediários.</li>
          <li>🔒 <strong>Transparência:</strong> tudo é registrado na blockchain.</li>
          <li>🌐 <strong>Global:</strong> transações em qualquer lugar do mundo.</li>
        </ul>
      </section>

      <section class="guia-secao">
        <h2>⚠️ Riscos</h2>
        <ul class="guia-lista">
          <li>🐞 <strong>Bugs em smart contracts</strong> podem comprometer fundos.</li>
          <li>📉 <strong>Alta volatilidade</strong> dos ativos envolvidos.</li>
          <li>⚖️ <strong>Falta de regulamentação</strong> em muitos países.</li>
        </ul>
      </section>

      <a href="guias.php" class="btn-voltar">← Voltar para Guias</a>
    </article>
  </main>

  <!-- Footer -->
  <footer>
    <p class="copy">© 2025 CriptoFuturo - Todos os direitos reservados</p>
  </footer>

  <!-- Script de tema -->
  <script>
    function getCookie(name) {
      const value = `; ${document.cookie}`;
      const parts = value.split(`; ${name}=`);
      if (parts.length === 2) return parts.pop().split(';').shift();
      return null;
    }

    document.addEventListener('DOMContentLoaded', () => {
      const btnTheme = document.getElementById("toggle-theme");
      if (!btnTheme) return; // evita erro se botão não existir

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
