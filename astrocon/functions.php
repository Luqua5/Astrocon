<?php 

add_action('init', function(){
    register_taxonomy('classe', 'post', [
      'labels' => [
        'name' => 'classe',
      ],
      'show_in_rest' => true,
      'hierarchical' => true,
      ]);
});

add_action( 'after_setup_theme', function() {
    register_nav_menu( 'mainAstro-menu', 'mainAstro' );
    add_theme_support( 'post-thumbnails' );
  });

add_action('wp_enqueue_scripts', function(){
  wp_enqueue_style('mon_style', get_template_directory_uri(). '/style.css', false);
  wp_enqueue_style('box-icon-min','https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css');
  wp_enqueue_script('gsap','https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/gsap.min.js', $in_footer = true);
  wp_enqueue_script('scroll-trigger','https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/ScrollTrigger.min.js', $in_footer = true);
  wp_enqueue_script('anim', get_template_directory_uri(). '/anim.js', $in_footer = true);
});

function traitement_formulaire() {

	if (isset($_POST['mailSubmit']) && isset($_POST['verif']) && isset($_POST['message']) && isset($_POST['mail']))  {
		if (wp_verify_nonce($_POST['verif'], 'envoie-mail')) {
        $entete = 'From: contactastrocon@gmail.com' . "\r\n";
        $entete .= 'Reply-to: ' . $_POST['mail'];
        $to ="contactastrocon@gmail.com";
        $subject ="Envoi depuis page Contact";
        $message = '<h1>Message envoyé depuis la page Contact du site Astrocon</h1>
        <p><b>Email : </b>' . $_POST['mail'] . '<br>
        <b>Message : </b>' . htmlspecialchars($_POST['message']) . '</p>';
        $retour = wp_mail($to, $subject, strip_tags($message), $entete);
         if($retour){
             echo '<p>Votre message a bien été envoyé.</p>';
           }
         else {
           echo '<p>Votre message a bien été pas envoyé.</p>';
         }
		 }

	}
}

function afficheArticle($post, $dessous) {

    $classes = get_the_terms(get_the_ID(), 'classe'); // j'ai récupère les termes cocher de la taxonomie "classe"
    $centre = FALSE;
    $droite = FALSE;
    $listeImage = FALSE;
    foreach($classes as $classe) {
        $truc = $classe -> name;
        if($truc == "centrer"){ //je teste pour savoir ce que la personne à cocher pour pouvoir generer un html différent selon la classe
            $centre = TRUE;
        } 
        if($truc == "texte-droite"){
            $droite = TRUE;
        } 
        if($truc == "liste-article"){
            $listeImage = TRUE;
        } 
        if($truc == "noir"){ //je stock la couleur qu'il a coché dans une valeure pour la rappeler dans des endroits où il est compliqué d'appeler "noir" ou "blanc" seul
            $couleur = "noir";
        }
        if($truc == "blanc"){
            $couleur = "blanc";
        }
        
    }  
    if($centre && !$droite && !$listeImage ){ //CENTRER
        echo "
        <section class=\" "; $classes = get_the_terms(get_the_ID(), 'classe'); foreach($classes as $classe) {echo $classe -> name.' '; } echo ' " id="'; if ($dessous==1){echo "premier";} else{echo $post_slug = get_post_field( 'post_name', get_post() );} echo '" > 
        <div class="centre">
            <h3 class="trait-dessous">'; the_title(); echo "</h3> ";
                echo get_the_content();            echo"          
        </div>
        </section>";
    }

    elseif(!$centre && !$droite && !$listeImage) { //TEXTE NORMAL A GAUCHE
        $blocks = parse_blocks( $post->post_content ); 
        echo '
        <section class="'; $classes = get_the_terms(get_the_ID(), 'classe'); foreach($classes as $classe) {echo $classe -> name.' '; } echo ' " id=" '; if ($dessous==1){echo "premier";} else{echo $post_slug = get_post_field( 'post_name', get_post() );} echo ' " > 
        <div class="centre">
            <div class="interieur"> 
                <h3 class="trait-dessous">'; the_title(); echo "</h3> ";
                foreach( $blocks as $block ) {if($block['blockName'] == 'core/paragraph'){ echo render_block( $block );break;}}   echo"   
            </div> ";
            foreach( $blocks as $block ) {if($block['blockName'] == 'core/image'){ echo render_block( $block );break;}} echo "  
        </div>
        </section>";
    }

    elseif(!$centre && $droite && !$listeImage) { //TEXTE NORMAL A DROITE
        $blocks = parse_blocks( $post->post_content );
        echo "
        <section class=\""; $classes = get_the_terms(get_the_ID(), 'classe'); foreach($classes as $classe) {echo $classe -> name.' '; } echo ' " id=" '; if ($dessous==1){echo "premier";} else{echo $post_slug = get_post_field( 'post_name', get_post() );} echo ' " > 
        <div class="centre">
            <div> 
                <div class="interieur">
                    <h3 class="trait-dessous">'; the_title(); echo "</h3> 
                </div> ";
                foreach( $blocks as $block ) {if($block['blockName'] == 'core/paragraph'){ echo render_block( $block );break;}}   echo"   
            </div> ";
            foreach( $blocks as $block ) {if($block['blockName'] == 'core/image'){ echo render_block( $block );break;}} echo "  
        </div>
        </section>";
    }

    elseif(!$centre && !$droite && $listeImage) {  //LISTE DE PETIT ARTICLE
        $blocks = parse_blocks( $post->post_content ); //cette fonction permet de séparer en différent block le contenu de l'article. Tout est stocker dans un tableau associatif. Maintenant je peux séparer les pararaphes, des images, des titres etc...
        $compte= count($blocks); //je compte le nombre de bloc dans l'article
        echo //je génère d'abord le haut de l'article
        "<section class=\""; $classes = get_the_terms(get_the_ID(), 'classe'); foreach($classes as $classe) {echo $classe -> name.' '; } echo ' " id=" '; if ($dessous==1){echo "premier";} else{echo $post_slug = get_post_field( 'post_name', get_post() );} echo ' " > 
            <div class=" chapeau centrer " > 
            <div class="centre">
                <h3 class="trait-dessous gros-titre">'; the_title(); echo '</h3>';
                    echo render_block( $blocks[0]);        echo'          
            </div>
        </div>';
            $j = 2;
            $compte = (($compte -1)/6);//je soustrait un pour retirer le chapeau de l'article et je diviser par 6 car chaque article contient 6 blocs(titre, paragraphe, image et 3 blocs vides pour une raison que j'ignore)
            for($i = 0; $i < ($compte); $i++){ //Cette boucle me permet de parcourir le tableau associatif et récupérer chaque bloc, j'affiche ensuite le bloc souhaité avec render_block
                if($i%2 == 0){ //pour pouvoir alterner, un coup le texte et à gauche et le coup suivant il est à droite
                echo '
                    <div class=" '; echo $couleur; echo ' " >                
                        <div class="centre">
                            <div>
                                <div class="trait-dessous sous-titre">'; echo render_block( $blocks[$j]); echo "</div> ";
                                echo render_block( $blocks[$j+2]); echo'
                            </div>';
                            echo render_block( $blocks[$j+4]); 
                            echo'         
                        </div>
                    </div> ';
                }
                if($i%2==1){
                    echo '
                    <div class=" '; echo $couleur; echo ' texte-droite">                
                        <div class="centre ">
                            <div>
                                <div>
                                    <div class="trait-dessous sous-titre">'; echo render_block( $blocks[$j]); echo '</div> 
                                </div>';  
                            echo render_block( $blocks[$j+2]); echo'
                            </div> ';
                            echo render_block( $blocks[$j+4]);             
                            echo'    
                        </div>
                    </div> ';
                }
                $j = $j + 6;
        }  
        echo "</section>";
    }
    
} 


add_action('template_redirect', 'traitement_formulaire');


?>