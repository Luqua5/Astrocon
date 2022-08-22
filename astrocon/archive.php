<?php get_header(); $langue = pll_current_language();  ?>
    

<section class="homepage haut" id="homepage-contact" style="background-image: url('<?php echo get_site_url(); ?>/wp-content/uploads/2022/06/nouveau-fond.png')">
    <div class="haut-titre">
        <h2><?php echo single_cat_title( '', false ); ?></h2>
    </div>
    <a href="#premier"><i class="bx bx-chevron-down"></i> </a>
</section> <?php

$dessous = 1;
if (have_posts()) :
    while ( have_posts() ) : the_post();


        afficheArticle($post, $dessous);
        $dessous = $dessous +1;
endwhile;
else :
    
    echo "<p>Pas d'article. (logiquement ça n'arrive jamais)</p>";
    
endif;

get_footer(); 
?>