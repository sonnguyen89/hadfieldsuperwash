<?php
/**
 *  Template name: Repair and Alteration  template
 *
 *  The template is about repair and alter clothes
 *
 *  @package WordPress
 *  @subpackage illdy
 */
?>

<?php get_header(); ?>
<div class="container">
    <div class="row">
        <div class="col-sm-7">
            <div class="dry-clean-terms-section" style="text-align: left ;margin: 45px 0;">
                <p>We are professional tailors dedicated to fix and alterate your clothes fit you perfectly.
                    We will be able to tailor your clothes (any clothes).
                    We can do hemming, take waist in and out, shorten sleeves, put a patch on your favorite jeans, replace zippers and buttons.
                    You tell us how you want your clothes to fit!</p>

                <a href="/contact" class="contact-btn btn btn-info">CONTACT TO BOOK NOW</a>
            </div>
        </div>
        <div class="col-sm-5">
            <div style="text-align: right ;margin: 45px 0;">
                <img src="<?php echo esc_url( get_template_directory_uri() . '/layout/images/repair-alter-clothes.jpg' ) ?>" style="width:380px"/>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <?php
            if ( comments_open() || get_comments_number() ) :
                comments_template();
            endif;
            ?>
        </div>
    </div>
</div><!--/.container-->
<?php get_footer(); ?>
