<?php
/**
 *
 * Template Name: Blog
 * This file handles blog post listings within a page.
 *
 * @author Teague Nelson
 * @link /
 * @package Genesis
 */

remove_action( 'genesis_entry_header', 'genesis_do_posts_page_heading' );
remove_action( 'genesis_entry_footer', 'genesis_do_date_archive_title' );

genesis();
