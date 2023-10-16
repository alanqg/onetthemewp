<div class="row">
    <div class="leftcolumn">                     
    <div class="card">
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <h5><?php the_author_posts_link(); ?><?php echo get_the_date(); ?></h5>
    <div class="fakeimg" style="height:200px;">
        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
    </div>
    </div>
    </div>
</div>