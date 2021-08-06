<?php
/**
 * @file
 * This file is for making custom posts front end of theme.
 * 
 * @category  Post
 * @package   Posts
 * @author    Smit <smit.rathod@gmail.com>
 * @copyright 2021 Smit
 * @license   GNU General Public License version 2 or later; see LICENSE
 * @link      http://arch.local/
 */
?>
<?php get_header();
while (have_posts()) {
    the_post();
    ?>
        <div class="area" >
            <div class="context">
                <h1><?php the_title(); ?></h1>
            </div>
            <ul class="circles">
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
            </ul>
        </div >
        <div class="container">
            <?php the_content();
            ?>
        </div>
<?php } get_footer();
?>
