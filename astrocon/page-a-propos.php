<?php get_header(); ?>

<section class="homepage haut" id="homepage-contact" style="background-image: url('<?php echo get_site_url(); ?>/wp-content/uploads/2022/06/nouveau-fond.png')">
    <div class="haut-titre">
        <h2> <?php the_title(); ?></h2>
    </div>
    <a href="#astro"><i class='bx bx-chevron-down'></i> </a>
</section>

<section class="blanc" id="astro" > 
        <div class="centre">
            <div> 
                <h3 class="trait-dessous">Qu'est ce que l'Astrocon ?</h3>
                <p>L'astrocon est LA convention européenne dédié à l'astronomie et l'espace. Elle se déroule dans la ville de Tours en France. Vous pourrez </p>
            </div>
            <iframe src="https://www.youtube.com/embed/SWBGqxL_YB0" height="300" width="800" title="Trailer Astrocon 2023" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>   
        </div>
        </section>



<section class="noir texte-droite" id="video-promo">
    <div class="centre">
        <div id="para-date">
            <div>
                <h3 class="trait-dessous">Interview avec l'organisateur</h3>
            </div>
            <p>A l’occasion de la 10 édition de l’Astrocon, Sarah, une habituée de l’événement, a interviewé Philippe Tarmani, chargé de l’organisation et de la préparation de l’événement.</p>
        </div>
        <iframe src="https://www.youtube.com/embed/XeIvKhQi4tY" height="300" width="2000" title="Trailer Astrocon 2023" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>   
    </div>
</section>

<section class="blanc centrer" id="affiche">
        <div class="centre">
            <h3 class="trait-dessous">Affiche publicitaire</h3>
            <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/06/affiche-Francais-2.png" alt ="affiche publicitaire">  
            <a href="<?php echo get_site_url(); ?>/wp-content/uploads/2022/06/affiche-Francais-2.png" class="telecharger" download="affiche-Francais-2.png">Télécharger l'affiche</a>             

        </div>
</section>

<section class="noir centrer" id="billets">
        <div class="centre">
            <div>
                <h3 class="trait-dessous">Les billets</h3>
                <div>
                    <div>
                        <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/06/Billet.png" alt="billet un">
                        <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/06/Billet2.png" alt="billet deux">
                    </div>
                    <div>
                        <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/06/billet-model-dos-sans-nom-1.png" alt="billet trois">
                        <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/06/billet-model-dos-bleu-1.png" alt="billet quatre">
                    </div>
                </div>  
            </div>
            <a href="<?php echo get_site_url(); ?>/wp-content/uploads/2022/06/affiche-Francais-2.png" class="telecharger telblanc" download="affiche-Francais-2.png">Télécharger les billets</a>             

        </div>
</section>

<section class="blanc centrer" id="astrocoin">
        <div class="centre">
            <h3 class="trait-dessous">Affiche publicitaire</h3>
            <p class="alinea">Les Astrocoins et les ecocup font eux aussi peau neuve! Pour rappel les ecocup vont seront fournis gratuitement au village restauration et les Astrocoins seront disponibles aux différentes bornes à l’intérieur de la convention.</p>
            <div>
                <div>
                    <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/06/3D_ASTRO_RENDU-1.png" alt="image d'un rendu 3d des astrocoins et des écocups">  
                    <a href="<?php echo get_site_url(); ?>/wp-content/uploads/2022/06/3D_ASTRO_RENDU-1.png" class="telecharger" download="3D_ASTRO_RENDU-1.png">Télécharger</a>             
                </div>
                <div>
                    <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/06/image-19.png" alt="image du kit">  
                    <a href="<?php echo get_site_url(); ?>/wp-content/uploads/2022/06/Kit-documents-publicitaires-1-avec-compression.pdf" class="telecharger" download="Kit-documents-publicitaires-1-avec-compression.pdf">Télécharger</a>             
                </div>
            </div>
        </div>
</section>

<?php
$args = array( //requête qui récupère les articles de la categorie précisé et les affiches, ainsi les articles peuvent aussi s'afficher dans les pages
    'post_type' => 'post' ,
    'category_name' => 'propos',
  ); 
  $dessous =2;
  $q = new WP_Query($args);
  if ( $q->have_posts() ) { 
    while ( $q->have_posts() ) {
      $q->the_post();
      afficheArticle($post, $dessous);
    }
  }

get_footer(); ?>