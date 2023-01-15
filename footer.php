</div><!-- .page-content -->
<!-- <img src="<?php echo get_stylesheet_directory_uri() ?>/images/adresse_boutique_blanc.svg" alt=""> -->

<!-- Page Footer -->
<footer id="page-footer" class="<?php echo esc_attr(bard_options( 'general_footer_width' )) === 'boxed' ? 'boxed-wrapper ': ''; ?>clear-fix">
  <div class="footer__col">
    <h6 class="footer__title">Paiement sécurisé</h6>
    <img class="footer__logo" src="<?php echo get_stylesheet_directory_uri() ?>/images/PayPal.svg" alt="PayPal Logo">
    <h6 class="footer__title">Livraison</h6>
    <img class="footer__logo" src="<?php echo get_stylesheet_directory_uri() ?>/images/Colissimo.svg" alt="Colissimo Logo">
  </div>
  <div class="footer__col">
    <h6 class="footer__title">A Propos</h6>
    <a class="footer__link" href="<?php echo site_url('/soin-bijou'); ?>">Pour prendre soin de votre bijou</a>
    <h6 class="footer__title">Mes Labels</h6>
    <img class="footer__logo-labels" src="<?php echo get_stylesheet_directory_uri() ?>/images/MesLabels.png" alt="">
  </div>
  <div class="footer__col">
    <h6 class="footer__title">Pour Vous Informer</h6>
    <div class="footer__link-container">
      <a class="footer__link" href="<?php echo site_url('/mentions-legales'); ?>">mentions légales</a>
      <a class="footer__link" href="<?php echo site_url('/conditions-generales-de-vente'); ?>">conditions générales de vente</a>
      <a class="footer__link" href="<?php echo site_url('/mentions-legales'); ?>">protection des données</a>
    </div>
    <h6 class="footer__title">Mes Reseaux Sociaux</h6>
    <div class="footer__logo--socials-container">
      <a href="https://www.facebook.com/profile.php?id=100030724736732" target="_blank">
        <img class="footer__logo" src="<?php echo get_stylesheet_directory_uri() ?>/images/justine-fb.png" alt="facebook logo">
      </a>
      <a href="https://www.instagram.com/justinetheodor/" target="_blank">
        <img class="footer__logo" src="<?php echo get_stylesheet_directory_uri() ?>/images/justine-insta.png" alt="instagram logo">
      </a>
    </div>
  </div>
  <div class="footer__col">
    <h6 class="footer__title">Pour me contacter</h6>
    <p class="footer__text">
      <strong>justinetheodor.bijoux@gmail.com</strong>
      ou bien par la rubrique
      <a href="<?php echo site_url('/contactez-moi'); ?>">contact</a>
    </p>
    <img class="footer__logo-address" src="<?php echo get_stylesheet_directory_uri() ?>/images/adresse_boutique_blanc.svg" alt="Social Network logos">
    <p class="footer__text">
      atelier boutique <strong>espace lune</strong> 34 rue de la lune 75002
    <br>
      lundi au samedi sauf mercredi de 11h00 à 13h00 et de 14h00 à 18h00
    </p>
  </div>
</footer><!-- #page-footer -->

</div><!-- #page-wrap -->

<?php wp_footer(); ?>

</body>
</html>
