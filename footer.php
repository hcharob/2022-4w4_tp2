<footer class="site__footer">
    <!-- Première rangée de colonne -->
    <div class="site__footer__colonne">
        <section class="footer__article">
            <?php get_sidebar('footer_colonne_1'); ?>
        </section>
        <section class="footer__adresse">
        <?php get_sidebar('footer_colonne_2'); ?>
    </section>
        <section class="footer__liens">
        <?php get_sidebar('footer_colonne_3'); ?>
       
    </section>
    </div>

    <!-- Section de plusieurs lignes -->
    <div class="site__footer__ligne">
        <section class="footer__description">
            <section class="footer__nav"> </section>
            <section class="footer__sociaux">
                <?php get_sidebar('footer_ligne_1'); ?> 
            </section>
            <section class="copyright"> </section>
            <section class="footer__auteur"> </section>
        </section>
    </div>

    <h2 class="footer__titre">3800 Rue Sherbrooke E, Montréal, QC H1X 2A2</h2>
    <h3 class="footer__author">Fait par Hervée Charbonneau-Robichaud</h3>
    <p class="footer__presentation">© Tous droits réservés</p>
    <?php get_search_form() ?>
    <?php 

$icone = '<svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" color="#000"><path d="M0 0h24v24H0z" fill="none"></path><path d="M8 5v14l11-7z"></path></svg>';
wp_nav_menu(array(
                    "menu"=>"simple",
                    "container"=>"nav",
                    "container_class"=>"site__footer__menu",
                    "menu_class"=>"site__footer__menu__ul",

                    "link_before"=>$icone)); ?>
    
</footer>

<?php wp_footer(); ?>
</body>
</html>