<?php get_header(); ?>
<main>

<section class="banner" id="fotobanner">
    <h2>Desenvolvimento Web</h2>
     <a href="http://localhost/sites/hospesites/blog/">Blog</a>
</section>

<section class="sobre" id="sobre">
    <h2 class="tsobre">Sobre</h2>

    <div class="container-text">
        <p class="psobre1">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium alias blanditiis recusandae eum itaque sed ratione eveniet, tempore consequuntur quas unde provident aliquid quae excepturi consequatur iusto incidunt nemo velit! 
        </p>
        <p class="psobre2">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium, necessitatibus expedita. Non omnis eveniet, unde consectetur voluptatum cum quaerat repellendus, quia libero iste ex, illo maiores est temporibus repellat tempore.
        </p>
    </div>
</section>



<section class="banner2" id="fotobanner2">
    <h2>AqGoEs</h2>
</section>


<section class="container">
    <div class="formrs">
        <h3>Falo Conosco</h3>

        <div class="container-contato">
            <form action="">
                <label for="fname">Nome</label>
                <input type="text" id="fnome" name="fnome" placeholder="Seu nome">
                <label for="lname">Sobreome</label>
                    <input type="text" id="lname" name="lname" placeholder="Sobrenome">
                    <label for="deonde">De onde fala?</label>
                    <select name="deonde" id="deonde">
                        <option value="guara">Guará</option>
                        <option value="plano">Plano Piloto</option>
                        <option value="paranoa">Paranoá</option>
                    </select>
                    <label for="mensagem">Mensagem</label>
                    <textarea name="texto" id="texto" placeholder="Sua mensagem" style="height:200px"></textarea>
                    <input type="submit" value="Submit">
            </form>
        </div>
    </div> 
</section>
</main>

<?php get_footer(); ?>