<?php
/**
 *  Template name: Terms and Conditions
 *
 *  The template for displaying Price
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
                <h3 style="color: #1cb9e2;text-transform: uppercase">Coin Laundry Terms</h3>
            </div>
        </div><!--/.col-sm-12-->
    </div><!--/.row-->
    <div class="row">
        <div class="col-sm-12">
            <div class="dry-clean-terms-section" style="text-align: center ;margin: 45px 0;">
                <img src="<?php echo esc_url( get_template_directory_uri() . '/layout/images/coinlaundry-terms.jpg' ) ?>"/>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="page-header">
                <h3 style="color: #1cb9e2;text-transform: uppercase">Dry Cleaner Terms</h3>
            </div>
        </div><!--/.col-sm-12-->
    </div><!--/.row-->
    <div class="row">
        <div class="col-sm-12">
            <div class="dry-clean-terms-section" style="text-align: center ;margin: 45px 0;">
                <img src="<?php echo esc_url( get_template_directory_uri() . '/layout/images/drycleaner-terms.jpg' ) ?>"/>
            </div>
        </div>
    </div>
</div><!--/.container-->
<?php get_footer(); ?>
