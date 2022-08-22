<footer style="background-image: url('<?php echo get_site_url() ?>/wp-content/uploads/2022/06/footer.png')">

<div id='layoutFooter'>

    <div id="partieUn">
        <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/06/banniere-blanc.png">
        <form action=""  method="GET" class="newsletter">
            <label for="newsletter">Inscrivez-vous à notre newsletter</label>
            <div>
                <input type="text" name="newsletter" id="entreeNews" value="E-mail" required>
                <input type="submit" id="bouton" value="M'inscrire">
            </div>
        </form>
        <div>
            <div>
                <p>astro.com@event.com</p>
                <p>Rue Désiré Lecompte</p>
                <p>CS 84311</p>
                <p>37043 TOURS CEDEX 1</p>
            </div>
            
            <?php wp_nav_menu(['theme_location' => '']); ?>
            
        </div>
    </div>
    <div id="partieDeux">
        <div id=" numeros_all">
            <p class="titre"> besoin d'aides ? </p>
            <div class='numero'> <i class='bx bxs-phone bx-md'></i><p class="bleu-footer">+32(0) 11 22 33 44</p></div>
            <p class="titre">réservations </p>
            <div class="numero"><i class='bx bxs-phone bx-md'></i><p class="bleu-footer">+32(0) 55 66 77 88</p></div>
        </div>
        <div id="réseaux_all">
            <p class="titre">réseaux sociaux</p>
            <div id="reseaux">
                <a href=""><i class='bx bxl-facebook-square bx-md'></i></a>
                <a href=""><i class='bx bxl-twitter bx-md'></i></a>
                <a href=""><i class='bx bxl-instagram-alt bx-md'></i></a>
                <a href="https://www.youtube.com/channel/UCNq1T9RT1gPMVOgaOAcYkVA"><i class='bx bxl-youtube bx-md'></i></a>
            </div>
        </div>
        <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/06/Dionys_B.png"> 
    
    </div>

</div>



</footer>
</body>
<?php
wp_footer();
?>
</html>

