<?php
/*
  Plugin Name: GaugePress
  Plugin URI: http://wordpress.org/extend/plugins/gaugepress/
  Author URI: http://www.kouratoras.gr
  Author: Konstantinos Kouratoras
  Contributors: kouratoras
  Tags: gauges,gauge,visualization,metric,bar,counter
  Requires at least: 3.2
  Tested up to: 4.0
  Stable tag: 0.3.4
  Version: 0.3.4
  License: GPLv2 or later
  Description: GaugePress is a handy WordPress plugin for generating and animating nice and clean gauges.

  Copyright 2012 Konstantinos Kouratoras (kouratoras@gmail.com)

  This program is free software; you can redistribute it and/or modify
  it under the terms of the GNU General Public License, version 2, as
  published by the Free Software Foundation.

  This program is distributed in the hope that it will be useful,
  but WITHOUT ANY WARRANTY; without even the implied warranty of
  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
  GNU General Public License for more details.

  You should have received a copy of the GNU General Public License
  along with this program; if not, write to the Free Software
  Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
 */

define('GP_PLUGIN_DIR_NAME', 'gaugepress');

class GaugePress {

	/* -------------------------------------------------- */
	/* Constructor
	  /*-------------------------------------------------- */

	public function __construct() {

		load_plugin_textdomain('gaugepress', false, plugin_dir_path(__FILE__) . '/lang/');
		
		//Register scripts and styles
		add_action('wp_enqueue_scripts', array(&$this, 'register_plugin_scripts'));
		add_action('wp_enqueue_scripts', array(&$this, 'register_plugin_styles'));

		//Shortcode
		require_once( plugin_dir_path(__FILE__) . '/plugin-shortcode.php' );
		new GaugePressShortcode();
	}

	/* -------------------------------------------------- */
	/* Registers and enqueues scripts.
	  /* -------------------------------------------------- */

	public function register_plugin_scripts() {

		wp_enqueue_script('jquery');

		wp_register_script('justgage', plugins_url(GP_PLUGIN_DIR_NAME . '/js/justgage.js'), '', '', true);
		wp_enqueue_script('justgage');
		
		wp_register_script('raphael', plugins_url(GP_PLUGIN_DIR_NAME . '/js/raphael.2.1.0.min.js'), '', '', true);
		wp_enqueue_script('raphael');
		
//		wp_register_script('waypoints', plugins_url(GP_PLUGIN_DIR_NAME . '/js/waypoints.min.js'));
//		wp_enqueue_script('waypoints');
	}

	/* -------------------------------------------------- */
	/* Registers and enqueues styles.
	  /* -------------------------------------------------- */

	public function register_plugin_styles() {

	}

}

new GaugePress();