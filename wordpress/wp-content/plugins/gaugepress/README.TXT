=== GaugePress ===
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

GaugePress is a handy WordPress plugin for generating and animating nice and clean gauges.

== Description ==

GaugePress is a handy WordPress plugin for generating and animating nice and clean gauges.

= Key Features =

* Fully customizable gauges
* Animated bars
* Cross-browser functionality
* Adjustable colors

== Installation ==

1. Upload the entire gaugepress folder to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress

== Frequently Asked Questions ==

= How do i create a gauge? = 

The plugin supports the functionality to insert a gauge with settings attributes in the shortcode. A full working example with all possible attributes is as following:

`[gauge width="400px" height="220px" value="95" min="0" max="150" title="First Gauge" label="km" hideMinMax="true" color="#E16300" backcolor="#EDEDED" widthscale="0.8" counter="true" decimals="2" format="true" titlecolor="#386365" valuecolor="#613C62"]`

An example with level colors is as following:

`[gauge width="400px" height="220px" value="50" min="0" max="150" title="First Gauge" label="km" hideMinMax="true" color="#F14343,#85D75E,#52AFE2,#7862D2,#BD60D5" backcolor="#EDEDED" widthscale="0.8"]`


The parameters are:

* width: the width of the whole gauge
* height: the height of the whole gauge
* value: the current value of the gauge
* min: the min value of the gauge
* max: the max value of the gauge
* title: the title of the gauge
* label: the label of the values of the gauge
* hideMinMax: to hide or not the min and max values
* color: the color of the value bar (if you enter comma separated colors, it will be level colors from lower to upper, eg. #F14343,#85D75E,#52AFE2,#7862D2,#BD60D5)
* backcolor: the color of the background
* widthscale: the width of the value bar
* counter: animate level number change
* decimals: number of digits after floating point
* format: formats numbers with commas where appropriate
* titlecolor: title text color 
* valuecolor: value text color
* responsive: responsive gauges

== Screenshots ==

1. Gauges examples
2. Gauges additional examples
3. Various shortcodes

== Changelog ==

= 0.3.4 =
* added responsive option

= 0.3.3 =
* added titlecolor and valuecolor options

= 0.3.2 =
* added gaugePress class to element
* added format option to format numbers with commas where appropriate

= 0.3.1 =
* fixed minor bug

= 0.3 =
* added decimals option
* added counter option
* showMinMax changed to hideMinMax

= 0.2.1 =
* added level colors support
* script update

= 0.2 =
* Script update
* WordPress 3.8.1 compatibility

= 0.1 = 
* Initial Release

== Upgrade Notice ==

Initial Release