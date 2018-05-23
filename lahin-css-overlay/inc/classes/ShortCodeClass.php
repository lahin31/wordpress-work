<?php
/**
 * @package Image Overlay Plugin
 */

namespace LahinOverlay\Classes;

class ShortCodeClass 
{
	public function register($atts, $content = null) {
		extract(shortcode_atts(array(
			'text' => 'Wordpress is awesome'
		), $atts));

		$s = <<<EOF
			<div id="lahin_css_overlay">
				<div id="lahin_overlay_text">$text</div>
			</div>'
EOF;
		return $s;
	}
}