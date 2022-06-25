 <?php
 /**
 * The template for displaying search.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Eluxem
 */

// No direct access, please
if (!defined('ABSPATH')) exit; // Exit if accessed directly

?>
<div class="search-head">
<form role="search" method="get" action="<?php echo home_url( '/' ); ?>" >
    <input type="search" class="form-control" placeholder="|   ENTER YOUR SEARCH HERE:" value="<?php echo get_search_query() ?>" name="s" >
</form>
<a class="csd-icon csd-search" href="#"></a>
</div>

