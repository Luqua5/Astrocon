<?php get_header(); ?>

<section class="homepage haut" id="homepage-contact" style="background-image: url('<?php echo get_site_url(); ?>/wp-content/uploads/2022/06/nouveau-fond.png')">
    <div class="haut-titre">
        <h2> <?php the_title(); ?></h2>
    </div>
    <a href="#date-horaire"><i class='bx bx-chevron-down'></i> </a>
</section>

<section class="blanc" id="date-horaire">
    <div class="centre">
        <div id="para-date">
            <h3 class="trait-dessous">Dates & horaires</h3>
            <p class="alinea">Nous vous attendrons au Parc Expo de Tours du 10 au 13 août 2023 ! </p><p class="alinea"> L'Astrocon sera ouvert à partir de 9h00 le 10 août 2023 et sera ouvert 24h/24. Il fermera ses portes le 13 août 2023 à 22h30.</p>
        </div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3690.6881638789514!2d0.7218589194702943!3d47.377955791576454!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sfr!2sfr!4v1655376554165!5m2!1sfr!2sfr" width="400rem" height="400rem" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</section>

<section class="noir centrer" id="tarifs">
    <h3 class="trait-dessous">Tarifs</h3>
    <div>
        <table>
            <thead>
                <tr>
                    <td></td>
                    <td class="trait-bas">Adultes</td>
                    <td class="trait-bas">Enfants</td>
                    <td class="trait-bas">étudiants</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Jour + Nuit</td>
                    <td class="trait-bas">30 €</td>
                    <td class="trait-bas">18 €</td>
                    <td class="trait-bas">25 €</td>
                </tr>
                <tr>
                    <td>Nuit</td>
                    <td class="trait-bas">13 €</td>
                    <td class="trait-bas">Gratuit</td>
                    <td class="trait-bas">9€</td>
                </tr>
                <tr>
                    <td>Week end</td>
                    <td class="trait-bas">50 €</td>
                    <td class="trait-bas">30 €</td>
                    <td class="trait-bas">40 €</td>
                </tr>
                <tr>
                    <td>Complet</td>
                    <td class="trait-bas">70 €</td>
                    <td class="trait-bas">40 €</td>
                    <td class="trait-bas">55 €</td>
                </tr>
            </tbody>
        </table>

        <div id="options">
            <h1>options</h1>
            <p class="obelixEstLa" id="obelix1">Location de téléscope: 30 €*</p>
            <p class="asterixEstLa">* +18 ans, uniquement la nuit</p>
            <p class="obelixEstLa" id="obelix1">Entrée concours: 20 €**</p>
            <p class="asterixEstLa">** Gratuit pour les étudiants</p>
            <div><i class="bx bxs-parking"></i> <p class="obelixEstLa" id="obelix2">Parking gratuit</p></div>
        </div>
    </div>
</section>

<section class="blanc" id="event">
    
        <div class="centre">
            <div>
                <h3 class="trait-dessous">évènement</h3>
                <p class="alinea">Venez observer la pluie d'étoiles filantes le samedi 12 août 2023 avec nos animateurs. Il sera possible de louer des téléscopes au prix de 30€ et à la condition d'être majeur.</p>
            </div>
            <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/06/pluie.png" alt="étoile filante">
        </div>
</section>
    
<section class="noir centrer" id="complementaire">
        <h3 class="trait-dessous">Informations pratiques</h3>
        <div class="centre">
            <div class="noir">
                <h2>Où se nourrir ?</h2>
                <p class="alinea">Il sera possible de se restaurer dans le restaurant du village. Le paiement dans le restaurant ne se fait que par astrocoin. Des distributeurs seront disponibles partout pour retirer des astrocoins.</p>
                <p class="alinea">Vous pourrez aussi prendre votre propre nourriture.</p>
            </div>
            <div class="noir">
                <h2>Où dormir ?</h2>
                <p class="alinea">Il sera possible de campé à l'exterieur près de l'ISS si vous souhaitez dormir à la belle étoile. Notre parc peut contenir 300 tentes, merci de reserver sur les lieux. Notre partenariat avec les hôtels IBIS de Tours nous permet de vous proposez une réduction de 20%.</p>
            </div>
            <div class="noir">
                <h2>Où se garer ?</h2>
                <p class="alinea">Un parking gratuit de 5000 places se situe juste à côté du Parc Expo. Il sera aussi possible de vous garer en périphérie du Parc Expo.</p>
            </div>
            <div class="noir">
                <h2>Comment venir ?</h2>
                <p class="alinea">  Situé à la sortie d’un carrefour près de l’A10, le parc expo Tours dispose d’un parking de 5000 places au niveau de l’entrée principale du parc et également d’un accès arrière. Etant donné la superficie du parc des espaces de parking exposants, et de navettes peuvent être créées. Pour ce qui est du contrôle des tickets, des balises de contrôle seront installées à chaque accès piéton des parkings.</p>
                <p class="alinea">  L’aéroport Tours Val-de-Loire permet d’accéder à la ville depuis des pays à l’étranger comme Londres, Dublin ou des villes françaises éloignées comme Marseille.</p>
                <p class="alinea">  Le réseau de TGV de Tours dispose de 2 gares reliant les grandes villes de France (Lyon, Bordeaux, Paris, Strasbourg…)</p>            
            </div>
        </div>
</section>


<section class="blanc centrer" id="plan"> 

        <div class="centre">
            <h3 class="trait-dessous">Plan</h3>
            <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/06/carte.png" alt="le plan">
            <a href="<?php echo get_site_url(); ?>/wp-content/uploads/2022/06/carte.png" class="telecharger" download="carte.png">Télécharger le plan</a>
        </div>

</section>

<section class="blanc titre-ext liste-image" id="partenaire">
        <h3 class="trait-dessous">Partenaires</h3>

        <div class="centre">
            <div>
                <div>
                    <div>
                        <div class="frame">    <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/06/0x0.png" alt="logovaonis"> </div>
                        <div class="frame">    <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/06/1200px-Logo_ESA.png" alt="logo ESA"></div>
                    </div>
                    <div>
                        <div class="frame">     <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/06/1280px-Logo_Centre_Val_Loire_2015.png" alt="logo centre val de loire"></div>
                        <div class="frame">     <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/06/tours.png" alt="logo de la ville de tours"></div>
                    </div>
                </div>

                <div>
                    <div>
                        <div class="frame"><img src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/06/arte_logo.png" alt="logo de arte"></div>
                        <div class="frame"><img src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/06/1984px-Fnac_Logo.png" alt="logo de fnac"></div>
                    </div>
                    <div>
                        <div class="frame"><img src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/06/Dolby-Atmos-1-1.png" alt="logo de Dolby Atmos"></div>
                        <div class="frame"><img src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/06/image-10.png" alt="logo de l'euro space center"></div>
                    </div>
                </div>

                <div>
                    <div>
                        <div class="frame"><img src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/06/image-11.png" alt="logo de la société astronomique de touraine"></div>
                        <div class="frame"><img src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/06/image-12.png" alt="logo de NRJ"></div>
                    </div>
                    <div>
                        <div class="frame"><img src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/06/spacefox.png" alt="logo de spacefox"></div>
                        <div class="frame"><img src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/06/image-9.png" alt="logo de rhinoshield"></div>
                    </div>
                </div>

                <div>
                    <div class="frame"><img src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/06/logo-coca-cola.png" alt="logo de coca cola"></div>
                    <div class="frame"><img src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/06/Logo-Ibis.png" alt="logo de Ibis"></div>
                </div>
            </div>
        </div>
</section>


<?php 
$args = array( //requête qui récupère les articles de la categorie précisé et les affiches, ainsi les articles peuvent aussi s'afficher dans les pages
    'post_type' => 'post' ,
    'category_name' => 'info',
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