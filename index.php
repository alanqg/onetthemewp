
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mdelo W3schools</title>
</head>
<?php wp_head(); ?>
<body>
    
<header class="header-blog">
    <h2>Blog</h2>
    <nav>
   <?php
      wp_nav_menu(
         array(
            'theme_location' => 'menu_principal'
         )
      )

   ?>
    </nav>
</header>
    <main>
        <div class="row">
            <div class="leftcolumn">
              <div class="card">
              <?php 

                    $featured = new WP_Query( 'post_type=post&posts_per_page=2&cat=3,6' );

                    if( $featured->have_posts() ):
                      while( $featured->have_posts() ): $featured->the_post();
                    ?>

               <?php get_template_part( 'template-parts/content', 'destaque', get_post_format() ); ?>
              </div>
              <?php
										endwhile;
										wp_reset_postdata();
									endif;
                  ?>
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
  <footer class="footer-blog">
    <h2>Footer</h2>
  </footer>
  <?php wp_footer(); ?>
</body>
</html>