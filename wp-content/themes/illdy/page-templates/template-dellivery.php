<?php
/**
 *  Template name: Delivery
 *
 *  The template for Delivery
 *
 *  @package WordPress
 *  @subpackage illdy
 */
?>
<?php get_header(); ?>
<div class="container delivery-container">
    <div class="row">
        <div class="col-sm-12">
            <div class="page-header">
                <h3 style="color: #1cb9e2;text-transform: uppercase">Delivery Details</h3>
            </div>
        </div><!--/.col-sm-12-->
    </div><!--/.row-->
    <div class="row">
        <div class="col-sm-4">
            <div class="call-pickup-section">
                <img src="<?php echo esc_url( get_template_directory_uri() . '/layout/images/call-pickup.png' ) ?>" style="width:100%"/>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="collect-section">
                <img src="<?php echo esc_url( get_template_directory_uri() . '/layout/images/collect.png' ) ?>" style="width:100%"/>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="delivery-section">
                <img src="<?php echo esc_url( get_template_directory_uri() . '/layout/images/delivery.png' ) ?>" style="width:100%"/>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-8">
        <h6 style="font-color:#28c2e5">
            Free delivery/pick up for any booking order has or more $50
        </h6>
        </div>
        <div class="col-sm-4">
            <a href="/contact" class="contact-btn btn btn-info">BOOK NOW</a>
        </div>
    </div>
</div><!--/.container-->
<?php get_footer(); ?>
