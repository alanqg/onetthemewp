<footer>
        <div class="container-footer">
            <div class="copyright">Copyright</div>
            <nav class="footer">
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="blog.html">Blog</a></li>
                </ul>
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