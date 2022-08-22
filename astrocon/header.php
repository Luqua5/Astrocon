<?php $langue = pll_current_language(); ?>

<html lang="fr">
<head>
  <meta charset="utf-8">
  <?php wp_head(); ?>
</head>
<header id= main-header>
    <div id="logo">
        <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/06/logo-icone-blanc.png">
        <div>
            <span id="date">10 > 13 <?php if($langue=="fr"){echo"août";} else {echo "august";} ?> 2023</span>
            <span id="place">parc expo tour</span>
        </div>
    </div>

    <div class="header-toggle">
      <div class="header-toggle-open">
            <a href ="#main-header">   <i class="bx bx-menu"></i></a>
        </div>
        <div class="header-toggle-close">
            <a href ="#"><i class="bx bx-x"></i></a>
      </div>
    </div>
    <?php wp_nav_menu(["theme_location" => ""]); ?> 
    
  <div id="remonter"> <a href="#main-header"><img src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/06/Launch.png" alt="remonter en haut de la page"></a>  </div>

</header>
</html>