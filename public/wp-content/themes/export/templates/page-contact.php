<?php
/**
 * Template Name: Contact
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Theme
 * @since Theme 2018
 */

get_header(); ?>


<main class="contact">

    <!-- Background -->
    <div class="contact__background">
        <div class="contact__background-left">

            <!-- Box Left -->
            <div class="contact__box-left">

                <!-- Content -->
                <div class="contact__details-text">
                    <h1 class="heading--small"><?php echo get_field('title');?></h1>
                </div>

                <p class="contact--form-submitted"><?php echo get_field('form_submitted');?></p>

                <form class="contact__form container" action="https://formspree.io/info@sislondon.com" method="POST">

                    <div class="row">

                        <div class="col-md-6 col-12">
                            <!-- Name -->
                            <fieldset>
                                <label>Name</label>
                                <input required required name="Name"/>
                            </fieldset>
                        </div>

                        <div class="col-md-6 col-12">
                            <!-- Company -->
                            <fieldset>
                                <label for="company">Company</label>
                                <input required id="company" name="Company"/>
                            </fieldset>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-md-6 col-12">
                            <!-- Email -->
                            <fieldset>
                                <label for="email">Email</label>
                                <input required id="email" type="email" name="Email"/>
                            </fieldset>
                        </div>

                        <div class="col-md-6 col-12">
                            <!-- Telephone -->
                            <fieldset>
                                <label for="tel-num">Telephone Number</label>
                                <input id="tel-num" type="tel" name="Telephone Number"/>
                            </fieldset>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 col-12">
                            <!-- Job Description -->
                            <fieldset>
                                <label for="job-desc">Job Description</label>
                                <input id="job-desc" name="Job Description"/>
                            </fieldset>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <!-- Message -->
                            <fieldset>
                                <label for="message">Message</label>
                                <textarea required id="message" name="Name"></textarea>
                            </fieldset>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <input type="submit" value="Send">
                        </div>
                    </div>

                    <input type="hidden" name="_next" value="/contact?status=done" />

                </form>

            </div>

        </div>

        <div class="contact__background-right">

            <!-- Box Right -->
            <div class="contact__box-right" style="background-image: url(<?php echo get_field('image');?>)">
                <div class="contact__box-right--overlay"></div>
            </div>

        </div>
    </div>

</main>


<?php get_footer();
