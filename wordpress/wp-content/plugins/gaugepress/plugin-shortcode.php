<?php

class GaugePressShortcode {

	/**
	 * Constructor
	 */
	public function __construct() {
		add_action('init', array(&$this, 'register_gaugepress_shortcode'));
	}

	/**
	 * Registers the shortcode
	 */
	function register_gaugepress_shortcode() {
		add_shortcode('gauge', array(&$this, 'gaugepress_shortcode'));
	}

	/**
	 * Creates the shortcode
	 */
	function gaugepress_shortcode($atts) {

		$width = (isset($atts['width'])) ? $atts['width'] : '300px';
		$height = (isset($atts['height'])) ? $atts['height'] : '200px';
		$value = (isset($atts['value'])) ? $atts['value'] : '50';
		
		$min = (isset($atts['min'])) ? $atts['min'] : '0';
		$max = (isset($atts['max'])) ? $atts['max'] : '100';
		
		$title = (isset($atts['title'])) ? $atts['title'] : 'The title';
		$label = (isset($atts['label'])) ? $atts['label'] : 'label';
		
		$hideMinMax = (isset($atts['hideminmax'])) ? $atts['hideminmax'] : 'false';
		$counter = (isset($atts['counter'])) ? $atts['counter'] : 'true';
		$decimals = (isset($atts['decimals'])) ? $atts['decimals'] : '0';
		$format = (isset($atts['format'])) ? $atts['format'] : 'true';
			
		$color = (isset($atts['color'])) ? $atts['color'] : '#D26041';
		$levelColorsGradient = 'false';
		if (strpos($color,',') !== false) {
			$color = str_replace(',', '","', $color);
			$levelColorsGradient = 'true';
		}
		
		$backcolor = (isset($atts['backcolor'])) ? $atts['backcolor'] : '#EDEBEB';
		$widthscale = (isset($atts['widthscale'])) ? $atts['widthscale'] : '1';
		$titleFontColor = (isset($atts['titlecolor'])) ? $atts['titlecolor'] : '#000';
		$valueFontColor = (isset($atts['valuecolor'])) ? $atts['valuecolor'] : '#000';
		
		$responsive = (isset($atts['responsive'])) ? $atts['responsive'] : 'true';
		
		$gid = rand(1, 9999);
		
		$gauge = '<div id="g'.$gid.'" class="gaugePress" style="height:'.$height.';width:'.$width.';"></div>';

		$gauge .='<script>

		var g'.$gid.';

		';

		$gauge .= '
		var $gp = jQuery.noConflict();
		$gp(function() {
		var g'.$gid.' = new JustGage({
				id: "g'.$gid.'", 
				value: '.$value.', 
				min: '.$min.',
				max: '.$max.',
				title: "'.$title.'", 
				label: "'.$label.'", 
				hideMinMax: '.$hideMinMax.',
				gaugeColor: "'.$backcolor.'",
				levelColors: ["'.$color.'"],
				levelColorsGradient: '.$levelColorsGradient.',
				gaugeWidthScale: '.$widthscale.',
				counter: '.$counter.',
				decimals: '.$decimals.',
				formatNumber: '.$format.',
				titleFontColor: "'.$titleFontColor.'", 
				valueFontColor: "'.$valueFontColor.'",
				relativeGaugeSize: "'.$responsive.'",
			});
		});	
		</script>
		';

		return $gauge;
	}

}