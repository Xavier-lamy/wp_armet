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
    <?php
        $contact_id = url_to_postid('contact');
        $address = get_field('address', $contact_id);
        $mail = get_field('mail', $contact_id);
        $phone = get_field('phone', $contact_id);
        $facebook = get_field('facebook', $contact_id);
        $twitter = get_field('twitter', $contact_id);
        $instagram = get_field('instagram', $contact_id);
        $youtube = get_field('youtube', $contact_id);
    ?>
    <div class="infos">
        <div class="infos__contacts">
            <h3>Contacts</h3>
            <ul>
                <li><a href="#"><i class="fas fa-map-marker-alt fa-lg"></i><span><?php echo $address; ?></span></a></li>
                <li><a href="#"><i class="fas fa-envelope fa-lg"></i><span><?php echo $mail; ?></span></a></li>
                <li><a href="#"><i class="fas fa-phone-alt fa-lg"></i><span><?php echo $phone; ?></span></a></li>
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
                <li><a href="<?php echo $facebook; ?>" aria-label="Facebook" target="_blank"><i class="fab fa-facebook fa-lg"></i><span>Facebook</span></a></li>
                <li><a href="<?php echo $twitter; ?>" aria-label="Twitter" target="_blank"><i class="fab fa-twitter fa-lg"></i><span>Twitter</span></a></li>
                <li><a href="<?php echo $instagram; ?>" aria-label="Instagram" target="_blank"><i class="fab fa-instagram fa-lg"></i><span>Instagram</span></a></li>
                <li><a href="<?php echo $youtube; ?>" aria-label="Youtube" target="_blank"><i class="fab fa-youtube fa-lg"></i><span>Youtube</span></a></li>
            </ul>
        </div>
    </div>
    <div class="copyright">
        <?php
            $current_year = date('Y');
            $site_name = get_bloginfo('name')
        ?>
        <small>&copy; Copyright <?php echo $current_year . ' ' . $site_name ; ?></small>
    </div>
</footer>
<?php wp_footer(); ?>
    </body>
</html>