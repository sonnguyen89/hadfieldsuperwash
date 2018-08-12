<?php
/**
 *  Template name: Wash & Fold template
 *
 *  The template is about wash, fold and dry service
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
                <p>We ARE providing a professional, excellent, personalised wash, dry and fold laundry service.
                    We very carefully inspect each item and follow the manufacturer’s recommended care instructions.
                </p>
                <p>We wash, dry and fold anything! (we can also hang dry if you want us to) Bring us your dirty laundry and we'll wash them and  make them look anew.</p>

                <p>We care about your garments and health, so we use Australian made Tri-Nature washing products.</p>

                <p>Turn around time from 8am to 6pm working days, 8am to 1pm on Satursday. Orders placed on Satursday are delivered back Monday.</p>

                <p>Express same day cleaning service is also available.</p>

                <a href="/contact" class="contact-btn btn btn-info">CONTACT TO BOOK NOW</a>
            </div>
        </div>
        <div class="col-sm-5">
            <div style="text-align: right ;margin: 45px 0;">
                <img src="<?php echo esc_url( get_template_directory_uri() . '/layout/images/wash-fold.jpg' ) ?>" style="width: 100%;"/>
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
