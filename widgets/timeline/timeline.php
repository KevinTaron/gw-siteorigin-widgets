<?php
/*
Widget Name: GW Timeline
Description: A timeline widget
Author: Gutwerker
Author URI: https://gutwerker.com
*/

class GW_Widget_Timeline_Widget extends SiteOrigin_Widget {
	function __construct() {
		parent::__construct(
			'gw-timeline',
			__('Gutwerker Timeline', 'gw-so-widget'),
			array(
				'description' => __('A responsive timeline widget.', 'gw-so-widget'),
				'panels_title' => false,
			),
			array(),
			false,
			plugin_dir_path(__FILE__)
		);
	
	}

	/**
	 * Register all the frontend scripts and styles for the base slider.
	 */
	function initialize() {
	}


	function initialize_form() {
		return array(
			'frames' => array(
				'type' => 'repeater',
				'label' => __('Timeline Items', 'gw-so-widget'),
				'item_name' => __('Item', 'gw-so-widget'),
				'item_label' => array(
					'selector' => "[id*='frames-url']",
					'update_event' => 'change',
					'value_method' => 'val'
				),
				'fields' => array(
					'date' => array(
						'type' => 'text',
						'description' => __('Anfangszahl in der Timeline. Zahl zwischen 01-31.', 'gw-so-widget'),
						'label' => __('Datum', 'gw-so-widget')
					),
					'month' => array(
						'type' => 'text',
						'description' => __('z.B. Januar 2019', 'gw-so-widget'),
						'label' => __('Monat Jahr', 'gw-so-widget')
					),
					'title' => array(
						'type' => 'text',
						'label' => __('Titel', 'gw-so-widget')
					),
					'color' => array(
						'type' => 'color',
						'label' => __('Kopffarbe', 'so-widgets-bundle'),
					),
					'text' => array(
						'type' => 'tinymce',
						'label' => __('Text', 'gw-so-widget'),
					),
				),
			)
		);
	}



	/**
	 * The less variables to control the design of the slider
	 *
	 * @param $instance
	 *
	 * @return array
	 */
	function get_less_variables($instance) {
		$less = array();

		return $less;
	}


	public function get_template_variables( $instance, $args ) {
		if( empty( $instance ) ) return array();
		
		$frames = empty( $instance['frames'] ) ? array() : $instance['frames'];

		return array(
			'frames' => $frames
		);
	}


}

siteorigin_widget_register('gw-timeline', __FILE__, 'GW_Widget_Timeline_Widget');
