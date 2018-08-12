<?php
/**
 *  Template name: Coin Laundry
 *
 *  The template is about coin laundry service
 *
 *  @package WordPress
 *  @subpackage illdy
 */
?>

<?php get_header(); ?>
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="page-header">
                <h3 style="color: #1cb9e2;text-transform: uppercase">Coin Laundry Service</h3>
            </div>
        </div><!--/.col-sm-12-->
    </div><!--/.row-->
    <div class="row">
        <div class="col-sm-12">
                <h4 style="color: #1e73be;;text-transform: uppercase">Inside Our Store</h4>
        </div><!--/.col-sm-12-->
    </div><!--/.row-->
    <div class="row">
        <div class="col-sm-4">
            <div class="dry-clean-terms-section" style="text-align: center ;margin: 45px 0;">
                <img src="<?php echo esc_url( get_template_directory_uri() . '/layout/images/coinlaundry_img_1.jpg' ) ?>" style="width:100%;transform: rotate(90deg);"/>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="dry-clean-terms-section" style="text-align: center ;margin: 45px 0;">
                <img src="<?php echo esc_url( get_template_directory_uri() . '/layout/images/coinlaundry_img_2.jpg' ) ?>" style="width:100%;transform: rotate(90deg);"/>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="dry-clean-terms-section" style="text-align: center ;margin: 45px 0;">
                <img src="<?php echo esc_url( get_template_directory_uri() . '/layout/images/coinlaundry_img_3.jpg' ) ?>" style="width:100%;transform: rotate(180deg);"/>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div style="margin: 40px 0 0;">
                <h4 style="color: #1e73be;;text-transform: uppercase">Coin Laundry Service Detail</h4>
            </div>
        </div><!--/.col-sm-12-->
    </div><!--/.row-->
    <div class="row">
        <div class="col-sm-12">
            <div class="dry-clean-terms-section" style="text-align: center ;margin: 45px 0;">
                <img src="<?php echo esc_url( get_template_directory_uri() . '/layout/images/coinlaundry-part1.jpg' ) ?>" style="width:100%"/>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="dry-clean-terms-section" style="text-align: center ;margin: 45px 0;">
                <img src="<?php echo esc_url( get_template_directory_uri() . '/layout/images/coinlaundry-part2.jpg' ) ?>" style="width:100%"/>
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
