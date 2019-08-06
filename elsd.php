<?php
/*
Plugin Name: Tablet to Small Desktop switch
Description: 
Author: Dima Minka, CDK
Version: 0.0.1
Author URI: https://dima.mk
*/

function elsd_styles() {
    wp_register_style( 'elsd-style', false );
	wp_enqueue_style( 'elsd-style' );
    $custom_css = "
            body.elementor-device-tablet #elementor-preview-responsive-wrapper {
                width: 1366px;
                height: 700px;
            }
            .elementor-panel .elementor-panel-footer-sub-menu-item .eicon-device-tablet + .elementor-title,
            .elementor-panel .elementor-panel-footer-sub-menu-item .eicon-device-tablet + .elementor-title + .elementor-description {
                font-size:0;
            }
            .elementor-panel .elementor-panel-footer-sub-menu-item .eicon-device-tablet + .elementor-title:before {
                content: 'Small Desktop';
                font-size: 13px;
            }
            .elementor-panel .elementor-panel-footer-sub-menu-item .eicon-device-tablet + .elementor-title + .elementor-description:before {
                content: 'Preview for 1366px';
                font-size: 11px;
            }";
    wp_add_inline_style( 'elsd-style', $custom_css );
}
add_action( 'elementor/editor/before_enqueue_styles', 'elsd_styles' );
