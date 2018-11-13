        </main>

        <?php $footer = get_field('footer', 20); ?>

        <footer class="footer" *ngIf="showFooter">
            <!-- Logo -->
            <div class="footer__logo">
                <a routerLink="/"><img src="<?php echo get_template_directory_uri();?>/images/sis-logo.png"/></a>
            </div>
            <!-- navigation -->
            <div class="row footer__nav">
                <!-- Nav links -->
                <div><p><a routerLink="">Home</a></p></div>
                <div><p><a routerLink="/" fragment="services">Services</a></p></div>
                <div><p><a routerLink="/about">About Us</a></p></div>
                <div><p><a routerLink="/contact">Contact</a></p></div>
            </div>

            <div class="row footer__rel">
                <a href="https://alexwiley.co.uk">
                    <p>Designed & Developed By</p>
                    <img src="<?php echo get_template_directory_uri();?>/images/aw-logo.png"/>
                    <span>Alex Wiley</span>
                </a>
            </div>

            <div class="row footer__rel">
                <a href="https://alexwiley.co.uk">
                    <p>Copyright © Security And Intelligence Services</p>
                </a>
            </div>
        </footer>

        <?php wp_footer(); ?>
    </body>
</html>
