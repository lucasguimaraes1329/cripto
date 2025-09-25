<?php include("theme.php"); ?>
<!DOCTYPE html>
<html lang="pt-BR" class="<?php echo isset($theme) ? htmlspecialchars($theme) : ''; ?>">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Desenvolvedores - CriptoFuturo</title>
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
        <li><a href="simulador.php">Simulador</a></li>
        <li><a href="desenvolvedores.php" class="ativo">Desenvolvedores</a></li>
      </ul>
    </nav>
    <button id="toggle-theme" aria-label="Alternar tema">🌙</button>
  </header>

  <!-- Conteúdo -->
  <main class="conteudo desenvolvedores">
    <h1>👨‍💻 Equipe de Desenvolvedores</h1>
    <p class="intro">
      Conheça os integrantes responsáveis pela criação do <strong>CriptoFuturo</strong>.
    </p>

    <div class="dev-grid">
      <!-- Integrante 1 -->
      <div class="dev-card">
        <img src="img/lucas.jpg" alt="Foto de Lucas Gabriel">
        <h2>Lucas Gabriel</h2>
        <p><strong>Turma:</strong> 2ºB Informática</p>
        <p><strong>Interesse:</strong> Desenvolvimento Front-End</p>
      </div>

      <!-- Integrante 2 -->
      <div class="dev-card">
        <img src="img/duda.jpg" alt="Foto de Maria Eduarda">
        <h2>Maria Eduarda</h2>
        <p><strong>Turma:</strong> 2ºB Informática</p>
        <p><strong>Interesse:</strong> Segurança da Informação</p>
      </div>

      <!-- Integrante 3 -->
      <div class="dev-card">
        <img src="img/mateus.jpg" alt="Foto de Mateus Eduardo">
        <h2>Mateus Eduardo</h2>
        <p><strong>Turma:</strong> 2ºB Informática</p>
        <p><strong>Interesse:</strong> Blockchain & Criptoativos</p>
      </div>
    </div>
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
