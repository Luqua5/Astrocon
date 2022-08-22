<?php 
get_header();$langue = pll_current_language();


if($langue=="fr"){ ?>
<section class="homepage haut" id="homepage-front" style="background-image: url(<?php echo get_site_url() ?>/wp-content/uploads/2022/06/Fond-ASTROCON-site-1.png">  

    <div>
        <div class="haut-titre">
            <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/06/banniere-blanc.png">
            <h2>Le convention de l'espace et de l'astronomie en Europe</h2>
        </div>
        <a href="#home-information"><i class='bx bx-chevron-down'></i></a>
    </div>
</section>



<section id="home-information">
    
    <div id="home-info1" class="home-info">
        <div id="heure" class="part part-div">
            <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/06/Hour.png">
            <div>
                <p class="int">10 > 13 août 2023</p>
                <p class="int">Jour et nuit</p>
            </div>
        </div>
        <div id="place" class="part part-simple">
            <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/06/Pinpoint.png">
            <p class="int">Parc Expo Tour</p>
        </div>
    </div>

    <div id="home-info2" class="home-info">
        <div id="visiteur" class="part part-simple">
            <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/06/Logo-visiteurs.png">
            <p class="int">45 000 visiteurs attendus</p>
            
        </div>
        <div id="expo" class="part part-simple">
            <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/06/Logo-visiteurs2.png">
            <p class="int">95 exposants</p>
        </div>
    </div>
    
    <div id="home-info3" class="home-info">
        <div id="asteroide" class="part part-div">
            <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/06/Etoiles-filantes.png">
            <div>
                <p class="int">Pluie d'étoiles filantes</p>
                <p class="int int-petit">Samedi 12 août 2022</p>
            </div>
        </div>
        <div id="interieur" class="part part-simple">
            <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/06/Logo-place.png">
            <p class="int">22 000m<sup>2</sup> d'intérieur</p>
        </div>
    </div>

</section>

<section id="thomas">
    <div class="centre">
        <div>
            <h1>  10<span class="titre-petit"><span class="bleu">ème</span> édition  </span></h1>
            <p>    À l’occasion du 10ème anniversaire de l’AstroCon, Thomas Pesquet est notre invité de marque. Il participera à l’ouverture de la convention lors d’une conférence sur la place de la France dans l’industrie mondiale de l’aéronotique et du spatiale. Il sera présent durant les 4 jours de la convention.</p>
        </div>
        <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/06/image-1.png">
    </div>
</section>
<?php } 



else { ?>
    <section class="homepage haut" id="homepage-front" style="background-image: url(<?php echo get_site_url() ?>/wp-content/uploads/2022/06/Fond-ASTROCON-site-1.png">  

    <div>
        <div class="haut-titre">
            <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/06/banniere-blanc.png">
            <h2>THE space and astronomy convention in Europe</h2>
        </div>
        <a href="#home-information"><i class='bx bx-chevron-down'></i></a>
    </div>
</section>



<section id="home-information">
    
    <div id="home-info1" class="home-info">
        <div id="heure" class="part part-div">
            <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/06/Hour.png">
            <div>
                <p class="int">10 > 13 august 2023</p>
                <p class="int">Day and night</p>
            </div>
        </div>
        <div id="place" class="part part-simple">
            <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/06/Pinpoint.png">
            <p class="int">Parc Expo Tour</p>
        </div>
    </div>

    <div id="home-info2" class="home-info">
        <div id="visiteur" class="part part-simple">
            <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/06/Logo-visiteurs.png">
            <p class="int">45 000 visitors expected</p>
            
        </div>
        <div id="expo" class="part part-simple">
            <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/06/Logo-visiteurs2.png">
            <p class="int">95 exhibitors</p>
        </div>
    </div>
    
    <div id="home-info3" class="home-info">
        <div id="asteroide" class="part part-div">
            <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/06/Etoiles-filantes.png">
            <div>
                <p class="int">Shootting stars rain</p>
                <p class="int int-petit">Saturday 12th august 2022</p>
            </div>
        </div>
        <div id="interieur" class="part part-simple">
            <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/06/Logo-place.png">
            <p class="int">22 000m<sup>2</sup> interior</p>
        </div>
    </div>

</section>

<section id="thomas">
    <div class="centre">
        <div>
            <h1>  10<span class="titre-petit"><span class="bleu">th</span> edition  </span></h1>
            <p>         For the 10th anniversary of AstroCon, Thomas Pesquet is our guest of honour. He will participate in the opening of the convention during a conference on the place of France in the global aerospace industry. He will be present during the 4 days of the convention.</p>
        </div>
        <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/06/image-1.png">
    </div>
</section>
<?php } ?>



<?php



$args = array( //requête qui récupère les articles de la categorie précisé et les affiches, ainsi les articles peuvent aussi s'afficher dans les pages
    'post_type' => 'post' ,
    'category_name' => 'accueil',
  ); 
  $q = new WP_Query($args);
  if ( $q->have_posts() ) { 
    while ( $q->have_posts() ) {
      $q->the_post();
      afficheArticle($post);
    }
  }


get_footer();
?>