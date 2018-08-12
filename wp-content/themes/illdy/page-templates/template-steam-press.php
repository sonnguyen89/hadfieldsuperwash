<?php
/**
 *  Template name: Steam and Press template
 *
 *  The template is about steam and press service
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
              <p>It is very possible for the household to turn into a place of unending cleaning and upkeep chores.
                  If you want to take a break from the day to day cleaning exercises, bring us all the dirty and wrinkled clothes and we will take care of them.<br/>
                  Every clothes we return to you will be steam pressed and ironed to ensure that they are ready for use immediately you leave our shop.
              </p>
              <p>With our ironing and steam pressing services,
                  you will get back some precious time you need from your daily busy schedule.
                  The experience you get from us is so personalized that you will think that we work for you and you alone.
                 </p>

                <a href="/contact" class="contact-btn btn btn-info">CONTACT TO BOOK NOW</a>
            </div>
        </div>
        <div class="col-sm-5">
            <div style="text-align: right ;margin: 45px 0;">
                <img src="<?php echo esc_url( get_template_directory_uri() . '/layout/images/steam-press-detail.jpg' ) ?>" style="width:380px"/>
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
