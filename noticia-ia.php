<?php include("theme.php"); ?>
<!DOCTYPE html>
<html lang="pt-BR" class="<?php echo isset($theme) ? htmlspecialchars($theme) : 'dark-mode'; ?>">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>IA e Cripto: Projetos de inteligência artificial explodem em 2025 - CriptoFuturo</title>
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
        <img src="img/ia.jpg" alt="Integração de IA e criptomoedas">
        <h1>IA e Cripto: Projetos de inteligência artificial explodem no mercado, com ganhos de até 500%</h1>
        <p class="subtitulo">A fusão de IA e blockchain cria novos tokens que atraem bilhões, mas levanta debates sobre bolha especulativa.</p>
      </div>

      <div class="resumo">
        <h3>📌 Pontos-chave</h3>
        <ul>
          <li>Tokens de IA sobem 500% em média.</li>
          <li>Projetos como Fetch.ai e SingularityNET lideram.</li>
          <li>Riscos de hype e regulação pendente.</li>
        </ul>
      </div>

      <article>
        <p>
          Em 2025, a interseção entre <strong>Inteligência Artificial (IA)</strong> e criptomoedas gerou um boom de projetos, com tokens como FET e AGIX registrando ganhos de mais de 500%. Plataformas que usam IA para otimização de trading e previsão de mercados estão atraindo investidores globais.
        </p>

        <p>
          A narrativa "IA + Crypto" é impulsionada por avanços em machine learning na blockchain, permitindo aplicações como oráculos inteligentes e automação DeFi.
        </p>

        <blockquote>
          “Essa é a próxima grande onda, mas precisamos de fundamentos sólidos para evitar outra bolha.” — <em>Investidor de Venture Capital</em>.
        </blockquote>

        <p>
          Apesar do entusiasmo, reguladores europeus e americanos investigam possíveis manipulações de mercado. Especialistas aconselham pesquisa profunda antes de investir em narrativas emergentes.
        </p>
      </article>
    </section>
  </main>

  <footer>
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