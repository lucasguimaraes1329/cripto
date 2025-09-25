<?php include("theme.php"); ?>
<!DOCTYPE html>
<html lang="pt-BR" class="<?php echo isset($theme) ? htmlspecialchars($theme) : ''; ?>">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Entre em contato com a equipe do CriptoFuturo para dúvidas, sugestões ou parcerias.">
  <title>Contato - CriptoFuturo</title>
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
        <li><a href="guias.php">Guias</a></li>
        <li><a href="contato.php" class="ativo" aria-current="page">Contato</a></li>
        <li><a href="simulador.php">Simulador</a></li>
        <li><a href="desenvolvedores.php">Desenvolvedores</a></li>
      </ul>
    </nav>
    <button id="toggle-theme" aria-label="Alternar tema">🌙</button>
  </header>

  <!-- Conteúdo -->
  <main class="conteudo">
    <div class="container">
      <h1>📩 Contato</h1>
      <p>Compartilhe sua opinião, sugestão ou ideia para o CriptoFuturo 🚀</p>

      <form class="formulario" action="#" method="post">
        <label for="nome">Nome</label>
        <input type="text" id="nome" name="nome" placeholder="Digite seu nome" required>

        <label for="email">Email</label>
        <input type="email" id="email" name="email" placeholder="Digite seu email" required>

        <label for="mensagem">Mensagem</label>
        <textarea id="mensagem" name="mensagem" rows="5" placeholder="Escreva sua mensagem..." required></textarea>

        <button type="submit">Enviar Mensagem</button>
      </form>
    </div>
  </main>

  <!-- Footer -->
  <footer>
    <div class="container">
      <p class="copy">© 2025 CriptoFuturo - Todos os direitos reservados</p>
    </div>
  </footer>

  <!-- Script Tema -->
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
