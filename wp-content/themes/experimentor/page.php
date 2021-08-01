<?php
/**
 * @file
 * This file is for making pages of theme.
 * 
 * @category  Page
 * @package   Pages
 * @author    Smit <smit.rathod@gmail.com>
 * @copyright 2021 Smit
 * @license   GNU General Public License version 2 or later; see LICENSE
 * @link      http://arch.local/
 */
?>
<?php get_header();
while (have_posts()) {
    the_post(); ?>
    <div class="container">
    <?php the_content(); ?>
    </div>     
<?php } get_footer();
?>
