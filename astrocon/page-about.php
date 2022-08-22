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
                <h3 class="trait-dessous">What is Astrocon ?</h3>
                <p>The AstroCon is the European convention taking place in the city of Tours in France dedicated to space and astronomy .</p>
            </div>
            <iframe src="https://www.youtube.com/embed/4mJNfLE7Ojg" height="300" width="800" title="Trailer Astrocon 2023" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>   
        </div>
        </section>



<section class="noir texte-droite" id="video-promo">
    <div class="centre">
        <div id="para-date">
            <div>
                <h3 class="trait-dessous">Interview with the organizer</h3>
            </div>
            <p>On the occasion of the 10th edition of the Astrocon, Sarah, a regular of the event interviewed a Philippe Tarmani, responsible for the organization and preparation of the event.</p>
        </div>
        <iframe src="https://www.youtube.com/embed/N3trdOubows" height="300" width="800" title="Trailer Astrocon 2023" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>   
    </div>
</section>

<section class="blanc centrer" id="affiche">
        <div class="centre">
            <h3 class="trait-dessous">Print</h3>
            <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/06/Copie-de-anglais4-min-1-1.png" alt ="affiche publicitaire">  
            <a href="<?php echo get_site_url(); ?>/wp-content/uploads/2022/06/Copie-de-anglais4-min-1-1.png" class="telecharger" download="Copie-de-anglais4-min-1-1.png">Download the print</a>             

        </div>
</section>

<section class="noir centrer" id="billets">
        <div class="centre">
            
                <h3 class="trait-dessous">The tickets</h3>
                <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/06/Copie-de-anglais.png" alt="the ticket"> 
            
            <a href="<?php echo get_site_url(); ?>/wp-content/uploads/2022/06/Copie-de-anglais.png" class="telecharger telblanc" download="Copie-de-anglais.png">Download the ticket</a>             

        </div>
</section>

<section class="blanc centrer" id="astrocoin">
        <div class="centre">
            <h3 class="trait-dessous">Astrocoins and ecopcups</h3>
            <p class="alinea">Astrocoins and ecocups are also getting a makeover! As a reminder, the ecocups will be provided free of charge at the catering village and the Astrocoins will be available at the different terminals inside the convention.</p>
            <div>
                <div>
                    <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/06/3D_ASTRO_RENDU-1.png" alt="image d'un rendu 3d des astrocoins et des écocups">  
                    <a href="<?php echo get_site_url(); ?>/wp-content/uploads/2022/06/3D_ASTRO_RENDU-1.png" class="telecharger" download="3D_ASTRO_RENDU-1.png">Download</a>             
                </div>
                <div>
                    <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/06/image-19.png" alt="image du kit">  
                    <a href="<?php echo get_site_url(); ?>/wp-content/uploads/2022/06/Kit-documents-publicitaires-1-avec-compression.pdf" class="telecharger" download="Kit-documents-publicitaires-1-avec-compression.pdf">Download</a>             
                </div>
            </div>
        </div>
</section>

<?php
$args = array( //requête qui récupère les articles de la categorie précisé et les affiches, ainsi les articles peuvent aussi s'afficher dans les pages
    'post_type' => 'post' ,
    'category_name' => 'about',
  ); 
  $dessous = 2;
  $q = new WP_Query($args);
  if ( $q->have_posts() ) { 
    while ( $q->have_posts() ) {
      $q->the_post();
      afficheArticle($post, $dessous);
    }
  }

get_footer(); ?>