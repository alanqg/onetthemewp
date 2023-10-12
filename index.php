<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mdelo W3schools</title>
</head>
<?php wp_head(); ?>
<body>
    
<header>
    <h2>Blog</h2>
    <nav>
      <ul>
        <li><a href="index.html">Home</a></li>
        <li><a href="blog.html">Blog</a></li>
        <li><a href="contato.html">Contato</a></li>
      </ul>
    </nav>
</header>
    <main>
        <div class="row">
            <div class="leftcolumn">
              <div class="card">
                <h2>Primeiro Titulo</h2>
                <h5>Autor, Dec 7, 2023</h5>
                <div class="fakeimg" style="height:200px;">Image</div>
                <p>Pequeno texto...</p>
                <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
              </div>
              <div class="card">
                <h2>Titilo Segundo Posts</h2>
                <h5>Autor, Dec 7, 2023</h5>
                <div class="fakeimg" style="height:200px;">Image</div>
                <p>Pequeno texto...</p>
                <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
              </div>
            </div>
            <div class="rightcolumn">
              <div class="card">
                <h2>Sobre Nos</h2>
                <div class="fakeimg" style="height:100px;">Image</div>
                <p>Some text about me in culpa qui officia deserunt mollit anim..</p>
              </div>
              <div class="card">
                <h3>Posts mais Populares</h3>
                <div class="fakeimg">Image</div><br>
                <div class="fakeimg">Image</div><br>
                <div class="fakeimg">Image</div>
              </div>
              <div class="card">
                <h3>Me Siga</h3>
                <p>Some text..</p>
              </div>
            </div>
          </div>
    </main>
  <footer>
    <h2>Footer</h2>
  </footer>
  <?php wp_footer(); ?>
</body>
</html>