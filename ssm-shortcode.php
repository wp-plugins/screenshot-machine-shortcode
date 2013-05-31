<?php
/*
Plugin Name: Screenshot Machine Shortcode
Plugin URI: http://surniaulula.com/extend/plugins/ssm-shortcode/
Author: Jean-Sebastien Morisset
Author URI: http://surniaulula.com/
Description: Shortcode for Screenshot Machine Images
Version: 1.0

Copyright 2013 - Jean-Sebastien Morisset - http://surniaulula.com/

This script is free software; you can redistribute it and/or modify it under
the terms of the GNU General Public License as published by the Free Software
Foundation; either version 3 of the License, or (at your option) any later
version.

This script is distributed in the hope that it will be useful, but WITHOUT ANY
WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A
PARTICULAR PURPOSE. See the GNU General Public License for more details at
http://www.gnu.org/licenses/.
*/

if ( ! defined( 'ABSPATH' ) ) 
	die( 'Sorry, you cannot call this webpage directly.' );

if ( ! class_exists( 'ScreenShotMachineShortCode' ) ) {

	class ScreenShotMachineShortCode {  

		protected $api_url = 'http://api.screenshotmachine.com/';  

		public function __construct()  {  
			add_shortcode('ssm', array($this, 'shortcode'));
		}  

		public function shortcode($atts, $content = NULL){
			extract( shortcode_atts( array(
				'key' => '',
				'size' => 'T',
				'url' => '',
				'title' => '',
				'link' => true,
				'blank' => true,
				'refresh' => true,
			), $atts ) );

			$size = strtoupper( $size );
			$blank = filter_var($blank, FILTER_VALIDATE_BOOLEAN);
			$link = filter_var($link, FILTER_VALIDATE_BOOLEAN);
			$refresh = filter_var($refresh, FILTER_VALIDATE_BOOLEAN);

			switch ( $size ) {
				case 'T' : $width=120; $height=90; break;
				case 'S' : $width=200; $height=150; break;
				case 'E' : $width=320; $height=240; break;
				case 'N' : $width=400; $height=300; break;
				case 'M' : $width=640; $height=480; break;
				case 'L' : $width=800; $height=600; break;
				case 'X' : $width=1024; $height=768; break;
			}

			$output = '';
			$img_url = $this->api_url.'?key='.$key.'&url='.urlencode($url).'&size='.$size;
			$classnames = array( 'ssm' );

			if ($refresh)  {
			    	$classnames[] = 'ssm_refresh';
				wp_register_script( 'ssm_refresh', plugins_url( 'ssm-shortcode.js' , __FILE__ ) ); 
   					wp_enqueue_script( 'ssm_refresh', array('jquery'), '1.0.0', TRUE );
			}

			if ($link == true) {
				$output .= '<a href="'. $url .'" title="'. $title .'" class="ssm_link" ';
				if ($blank == true) $output .= ' target="_blank" ';
				$output .= ' >';
			}

			$output .= '<img alt="'.$title.'" class="'.implode (' ', $classnames).'" data-refreshcounter="0" 
				data-src="'.$img_url.'" data-width="'.$width.'" data-height="'.$height.'" 
				src="'.$img_url.'" width="'.$width.'" height="'.$height.'" />';

			if ($link == true) $output .= '</a>';

			return $output;
		}  
	}	 

	$_ScreenShotMachineShortCode = new ScreenShotMachineShortCode(); 
}

?>
