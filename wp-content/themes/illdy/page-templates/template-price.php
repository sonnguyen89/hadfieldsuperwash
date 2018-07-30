<?php
/**
 *  Template name: Price
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
                <h3>Laundry Service Price List</h3>
                <p>(Customer Drop and Go)</p>
            </div>
            <table class="table">
                <thead>
                <tr>
                    <th>Weight</th>
                    <th>Wash</th>
                    <th>Deter</th>
                    <th>Dry</th>
                    <th>Bag</th>
                    <th>Total</th>
                </tr>
                </thead>

                <tbody>
                <tr class="info">
                    <th scope="row">10 kg</th>
                    <td>$5</td>
                    <td>$2</td>
                    <td>$4</td>
                    <td>$1</td>
                    <td>$12</td>
                </tr>
                <tr>
                    <th scope="row">12 kg</th>
                    <td>$7</td>
                    <td>$2</td>
                    <td>$5</td>
                    <td>$1</td>
                    <td>$15</td>
                </tr>
                <tr class="info">
                    <th scope="row">14 kg</th>
                    <td>$9</td>
                    <td>$2</td>
                    <td>$6</td>
                    <td>$1</td>
                    <td>$18</td>
                </tr>
                </tbody>
            </table>
            <p>
               Note: Free labour service. If you supply your own laundry  detergent, we will give you discounted price
            </p>
        </div><!--/.col-sm-12-->
    </div><!--/.row-->
    <div class="row">
        <div class="col-sm-12">
            <div class="page-header">
                <h3>Dry Cleaner Services Price List</h3>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <ul class="list-group">
                <li class="list-group-item list-group-item-action list-group-item-info">Doona Wash  $25</li>
                <li class="list-group-item">** 4 Garment $20</li>
                <li class="list-group-item list-group-item-action list-group-item-info">Shirt Press only $3.00 each</li>
            </ul>
            <p>
                **exclusion applies.
            </p>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="page-header">
                <h3>Detergent Price List</h3>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <ul class="list-group">
                <li class="list-group-item list-group-item-action list-group-item-info">20 Litter for $50</li>
                <li class="list-group-item">Fill up $3.00 per litter</li>
            </ul>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="doona-wash-section" style="text-align: center ;margin: 45px 0;">
              <img style="width: 100%;" src="<?php echo esc_url( get_template_directory_uri() . '/layout/images/superwash_doona_wash.jpg' ) ?>"/>
            </div>
        </div>
    </div>
</div><!--/.container-->
<?php get_footer(); ?>
