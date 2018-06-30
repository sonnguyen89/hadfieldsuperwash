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
                <h3>Standard Price List</h3>
            </div>
            <table class="table">
                <thead>
                <tr>
                    <th>Weight</th>
                    <th>Wash</th>
                    <th>Deter</th>
                    <th>Dry</th>
                    <th>Fold</th>
                </tr>
                </thead>

                <tbody>
                <tr class="info">
                    <th scope="row">5 kg</th>
                    <td>$5</td>
                    <td>$2</td>
                    <td>$4</td>
                    <td>$15</td>
                </tr>
                <tr>
                    <th scope="row">7 kg</th>
                    <td>$7</td>
                    <td>$2</td>
                    <td>$4</td>
                    <td>$17</td>
                </tr>
                <tr class="active">
                    <th scope="row">10 kg</th>
                    <td>$9</td>
                    <td>$2</td>
                    <td>$5</td>
                    <td>$20</td>
                </tr>
                </tbody>
            </table>



        </div><!--/.col-sm-12-->
    </div><!--/.row-->
    <div class="row">
        <div class="col-sm-12">
            <div class="doona-wash-section" style="text-align: center ;margin: 45px 0;">
              <img src="<?php echo esc_url( get_template_directory_uri() . '/layout/images/superwash_doona_wash.jpg' ) ?>"/>
            </div>
        </div>
    </div>
</div><!--/.container-->
<?php get_footer(); ?>
