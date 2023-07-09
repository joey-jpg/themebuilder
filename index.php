<!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mijn WordPress Thema</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <div class="container">
      <h1>Mijn WordPress Thema</h1>
      <nav>
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="About_Us.php">Over Ons</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <main>
    <div class="container">
      <section>
        <h2>Welkom bij mijn thema</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ultricies eget ligula vel faucibus.</p>
        <a href="#" class="button">Meer lezen</a>
      </section>

      <section>
        <h2>Contact ons</h2>
        <form>
          <div>
            <label for="name">Naam:</label>
            <input type="text" id="name" name="name" required>
          </div>
          <div>
            <label for="email">E-mail:</label>
            <input type="email" id="email" name="email" required>
          </div>
          <div>
            <label for="message">Bericht:</label>
            <textarea id="message" name="message" required></textarea>
          </div>
          <button type="submit">Verzenden</button>
        </form>
      </section>
    </div>
  </main>

  <footer>
    <div class="container">
      <p>&copy; <?php echo date('Y'); ?> Joey's WordPress Thema. Alle rechten voorbehouden.</p>
    </div>
  </footer>
</body>
</html>