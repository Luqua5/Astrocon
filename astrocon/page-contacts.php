<?php get_header(); ?>

<section class="homepage haut" id="homepage-contact" style="background-image: url('<?php echo get_site_url(); ?>/wp-content/uploads/2022/06/nouveau-fond.png')">
    <div class="haut-titre">
        <h2> <?php the_title(); ?></h2>
    </div>
    <a href="#form-contact"><i class='bx bx-chevron-down'></i> </a>
</section>


<section class="noir centrer" id="form-contact">
        <div class="centre">
                <h3 class="trait-dessous">contact form</h3>
                <div>
                    <p class="alinea">A question, a remark ? All your questions will be answered with this form! A person will take care of you within 48 hours, you can communicate with by mail. </p>
                </div>
                <form action="#"  method="POST" class="contact">
                    <?php wp_nonce_field('envoie-mail', 'verif'); ?>
                    <label for="mail">Mail :</label>
                    <input type="text" name="mail" id="email" placeholder="E-mail" required>
                    <label for="message">Message :</label>
                    <textarea id="message" name="message"rows="5" cols="63" placeholder="Your message"> </textarea>
                    <input type="submit" id="bouton" name="mailSubmit" value="Send">
                </form>
        </div>
</section>

<section class="blanc centrer" id="reseaux">
        <div class="centre">
                <h3 class="trait-dessous">Social network</h3>
                <div>
                    <a href=""><i class='bx bxl-facebook-square'></i></a>
                    <a href=""><i class='bx bxl-twitter'></i></a>
                    <a href=""><i class='bx bxl-instagram-alt'></i></a>
                    <a href="https://www.youtube.com/channel/UCNq1T9RT1gPMVOgaOAcYkVA"><i class='bx bxl-youtube'></i></a>
                </div>
        </div>
</section>

<section class="noir centrer equipe" id="contact-equipe">
        <div class="centre">
                <h3 class="trait-dessous">Team contact</h3>
                <div>
                    <div>
                        <div> <div class="frame"><img src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/06/Adresse.png" alt="adresse"></div> <div><p>Rue Désiré Lecomte, CS 84311 </p><p> 37043 TOURS CEDEX 1 </p></div> </div>
                        <div> <div class="frame"><img src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/06/Subtract.png" alt="adresse mail"></div><p>astro.con@gmail.com</p> </div>
                    </div>
                    <div>
                        <div> <div class="frame"><img src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/06/phone.png" alt="premier numéro"></div> <p>+32(0) 11 22 33 44</p> </div>
                        <div> <div class="frame"><img src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/06/phone.png" alt="deuxième numéro"></div> <p>+32(0) 55 66 77 88</p> </div>
                    </div>
                </div>
        </div>
</section>

<section class="blanc centrer" id="contact-equipe">
        <div class="centre">
                <h3 class="trait-dessous">presse contact</h3>
                <h2>Grégoire Demailly</h2>
                <div>
                        <div> <div class="frame"><img src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/06/phonenoir.png" alt="adresse"></div> <p>contactpresse.astrocon@gmail.com</p> </div>
                        <div> <div class="frame"><img src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/06/Subtractnoir.png" alt="adresse mail"></div><p>06 83 18 38 74</p> </div>
                </div>
        </div>
</section>
<section class="blanc centrer" id="communiquer">
        <div class="centre">
            <p></p>
            <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/06/communique-de-presse-anglais-1.png" alt="image du communique de presse">
            <a href="<?php echo get_site_url(); ?>/wp-content/uploads/2022/06/communique-de-presse-anglais-1.pdf" class="telecharger" download="communique-de-presse-anglais-1.pdf">Download</a>             
        </div>
</section>



<?php 
$args = array( //requête qui récupère les articles de la categorie précisé et les affiches, ainsi les articles peuvent aussi s'afficher dans les pages
    'post_type' => 'post' ,
    'category_name' => 'contacts',
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