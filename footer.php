<footer>
        <div class="container-footer">
            <div class="copyright">Copyright</div>
            <nav class="footer">
              <?php 
                wp_nav_menu(
                    array(
                        'theme_location' => 'menu_footer'
                    )
                );
              ?>
            </nav>
        </div>
    </footer>
    <script>
      function typeWrite(elemento){
    const textoArray = elemento.innerHTML.split('');
    elemento.innerHTML = ' ';
    textoArray.forEach(function(letra, i){   
      
    setTimeout(function(){
        elemento.innerHTML += letra;
    }, 75 * i)

  });
}
const titulo = document.querySelector('.titulo-principal');
typeWrite(titulo);
    </script>
    <?php wp_footer(); ?>
</body>
</html>