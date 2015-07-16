<?php
/**
 * Created by PhpStorm.
 * User: Ben
 * Date: 7/16/2015
 * Time: 1:35 PM
 */

class CdsSearchSidebarWidget extends WP_Widget {
    /**
     * Sets up the Widgets name etc
     */
    public function __construct() {
        parent::__construct(
            'cds_search_sidebar_widget',
            __('CDS Search Sidebar', 'cds_integration'),
            array('description' => __('Shows the CDS faceted search sidebar', 'cds_integration'))
        );
    }

    /**
     * Outputs the content of the widget
     *
     * @param array $args
     * @param array $instance
     */
    public function widget( $args, $instance ) {
        echo cds_integration_search_sidebar();
    }
}