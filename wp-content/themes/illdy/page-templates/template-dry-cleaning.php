<?php
/**
 *  Template name: Dry Cleaning template
 *
 *  The template is about dry cleaning service
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
                <p>We can dry clean anything and everything! Let us know if you would like to leave a special instruction to clean your favorite garment.</p>
                <p>   We will do our best to maintain the quality of your clothes. </p>
                 <p>  Your clothes are safe with us! Our professional dry cleaning will ensure the quality of the service you will be getting from us!&nbsp;.</p>
                <p> using industry leading dry cleaning technology to provide you with the deepest, most thorough clean.
                    From stylish suits to stunning gowns, you can count on our dry cleaners in Hadfield Superwash to never compromise the quality of your fabrics</p>

                <a href="/contact" class="contact-btn btn btn-info">CONTACT TO BOOK NOW</a>
            </div>
        </div>
        <div class="col-sm-5">
            <div style="text-align: right ;margin: 45px 0;">
                <img src="<?php echo esc_url( get_template_directory_uri() . '/layout/images/dry-cleaning-detail.jpg' ) ?>" style="width:380px"/>
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
