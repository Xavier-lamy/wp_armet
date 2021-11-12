<footer>
    <div class="company">
        <a href="<?php echo home_url('/') ?>" class="logo">
            <img src="<?php echo get_template_directory_uri() ?>/assets/images/icons/logo-armet.svg" alt="Logo Armet" width="100" height="50">
        </a>
        <p>Armet give you all the latest news for your <br> 
        favorites historical and strategical games.</p>
        <form action="#" method="post" class="newsletter">
            <label for="newsletter" aria-label="newsletter">Join Armet Newsletter</label>
            <div>
                <input type="email" id="newsletter" name="newsletter" placeholder="Insert your mail here">
                <input type="submit" value="Join!" class="button">
            </div>
        </form>
    </div>
    <div class="infos">
        <div class="infos__contacts">
            <h3>Contacts</h3>
            <ul>
                <li><a href="#"><i class="fas fa-map-marker-alt fa-lg"></i><span>133 Dadao Road, DaCheng, Taiwan</span></a></li>
                <li><a href="#"><i class="fas fa-envelope fa-lg"></i><span>armet@contact.com</span></a></li>
                <li><a href="#"><i class="fas fa-phone-alt fa-lg"></i><span>+833 386-456-428</span></a></li>
            </ul>
        </div>
        <div class="infos__about">
            <?php $menu_name = wp_get_nav_menu_name('footer'); ?>
            <h3><?php echo $menu_name; ?></h3>
            <?php wp_nav_menu( 
                array( 
                    'theme_location' => 'footer',
                    'container' => 'ul', 
                ) 
            ); ?>
        </div>
        <div class="infos__follow">
            <h3>Follow us</h3>
            <ul>
                <li><a href="#" aria-label="Facebook"><i class="fab fa-facebook fa-lg"></i><span>Facebook</span></a></li>
                <li><a href="#" aria-label="Twitter"><i class="fab fa-twitter fa-lg"></i><span>Twitter</span></a></li>
                <li><a href="#" aria-label="Instagram"><i class="fab fa-instagram fa-lg"></i><span>Instagram</span></a></li>
                <li><a href="#" aria-label="TikTok"><i class="fab fa-tiktok fa-lg"></i><span>TikTok</span></a></li>
            </ul>
        </div>
    </div>
    <div class="copyright">
        <small>&copy; Copyright 2021 Armet.com</small>
    </div>
</footer>
<?php wp_footer(); ?>
<footer class="footer">

        </footer>

    </body>
</html>