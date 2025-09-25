<?php include("theme.php"); ?>
<!DOCTYPE html>
<html lang="pt-BR" class="<?php echo isset($theme) ? htmlspecialchars($theme) : ''; ?>">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>O que é Blockchain? - CriptoFuturo</title>
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
      <h1>📖 O que é Blockchain?</h1>
      <p>
        A <strong>Blockchain</strong> é uma tecnologia de registro distribuído que funciona como um 
        <em>livro-razão público e imutável</em>. Cada transação registrada é validada por uma rede de computadores 
        e adicionada em blocos encadeados de forma cronológica e segura.
      </p>

      <section class="guia-secao">
        <h2>✨ Principais características</h2>
        <ul class="guia-lista">
          <li>📌 <strong>Descentralização:</strong> não há uma autoridade central controlando os dados.</li>
          <li>🔒 <strong>Segurança:</strong> as informações são protegidas por criptografia avançada.</li>
          <li>📂 <strong>Imutabilidade:</strong> uma vez registrada, a informação não pode ser alterada.</li>
          <li>🌍 <strong>Transparência:</strong> todos os participantes podem verificar as transações.</li>
        </ul>
      </section>

      <section class="guia-secao">
        <h2>🚀 Aplicações</h2>
        <p>
          Além das criptomoedas, a blockchain é usada em áreas como:
        </p>
        <ul class="guia-lista">
          <li>⚖️ Contratos inteligentes (<em>Smart Contracts</em>)</li>
          <li>🗳️ Sistemas de votação digital</li>
          <li>📦 Rastreamento de cadeias de suprimento</li>
          <li>🪪 Gestão de identidades digitais</li>
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
        });
      });
    });
  </script>
</body>
</html>
