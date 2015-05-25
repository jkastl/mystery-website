<?php

/**

 * The template for displaying the footer.

 *

 * Contains the closing of the #content div and all content after

 *

 * @package zerif

 */

?>



<footer id="footer">

<div class="container">



	<?php
		$footer_sections = 0;
		$zerif_address = get_theme_mod('zerif_address','5908 Swope Pkwy<br />Kansas City, MO 64130');
		$zerif_address_icon = get_theme_mod('zerif_address_icon',get_template_directory_uri().'/images/map25-redish.png');
		$maps_link = 'https://www.google.com/maps/place/5908+Swope+Pkwy,+Kansas+City,+MO+64130/@39.0177202,-94.5431631,17z/data=!3m1!4b1!4m2!3m1!1s0x87c0e598c0e8923f:0x63d54dbddec64f3f';
		
		$zerif_email = get_theme_mod('zerif_email','urcinfo@urckc.org');
		$zerif_email_icon = get_theme_mod('zerif_email_icon',get_template_directory_uri().'/images/envelope4-green.png');
		
		$zerif_phone = get_theme_mod('zerif_phone','(816) 333-6455');
		$zerif_phone_icon = get_theme_mod('zerif_phone_icon',get_template_directory_uri().'/images/telephone65-blue.png');

		$zerif_socials_facebook = get_theme_mod('zerif_socials_facebook','#');
		$zerif_socials_twitter = get_theme_mod('zerif_socials_twitter','#');
		$zerif_socials_linkedin = get_theme_mod('zerif_socials_linkedin','#');
		$zerif_socials_behance = get_theme_mod('zerif_socials_behance','#');
		$zerif_socials_instagram = get_theme_mod('zerif_socials_instagram','#');
			
		$zerif_copyright = get_theme_mod('zerif_copyright');

		if(!empty($zerif_address) || !empty($zerif_address_icon)):
			$footer_sections++;
		endif;
		
		if(!empty($zerif_email) || !empty($zerif_email_icon)):
			$footer_sections++;
		endif;
		
		if(!empty($zerif_phone) || !empty($zerif_phone_icon)):
			$footer_sections++;
		endif;
		if(!empty($zerif_socials_facebook) || !empty($zerif_socials_twitter) || !empty($zerif_socials_linkedin) || !empty($zerif_socials_behance) || !empty($zerif_socials_instagram) || 
		!empty($zerif_copyright)):
			$footer_sections++;
		endif;
		
		if( $footer_sections == 1 ):
			$footer_class = 'col-md-12';
		elseif( $footer_sections == 2 ):
			$footer_class = 'col-md-6';
		elseif( $footer_sections == 3 ):
			$footer_class = 'col-md-4';
		elseif( $footer_sections == 4 ):
			$footer_class = 'col-md-3';
		else:
			$footer_class = 'col-md-3';
		endif;
		
		/* COMPANY ADDRESS */
		if( !empty($zerif_address) ):
			echo '<a href="' . $maps_link . '" target="_blank"><div class="'.$footer_class.' company-details">';
				echo '<div class="icon-top red-text">';
					if( !empty($zerif_address_icon) ) echo '<img src="'.esc_url(__($zerif_address_icon,'zerif-lite')).'">';
				echo '</div>';
				echo $zerif_address;
			echo '</div></a>';
		endif;
		
		/* COMPANY EMAIL */
		
		
		if( !empty($zerif_email) ):
			echo '<a href="mailto:' . $zerif_email . '"><div class="'.$footer_class.' company-details">';
				echo '<div class="icon-top green-text">';
					
					if( !empty($zerif_email_icon) ) echo '<img src="'.esc_url(__($zerif_email_icon,'zerif-lite')).'">';
				echo '</div>';
				echo $zerif_email;
			echo '</div></a>';
		endif;
		
		/* COMPANY PHONE NUMBER */
		
		
		if( !empty($zerif_phone) ):
			echo '<div class="'.$footer_class.' company-details">';
				echo '<div class="icon-top blue-text">';
					if( !empty($zerif_phone_icon) ) echo '<img src="'.esc_url(__($zerif_phone_icon,'zerif-lite')).'">';
				echo '</div>';
				echo $zerif_phone;
			echo '</div>';
		endif;
		
		if( !empty($zerif_socials_facebook) || !empty($zerif_socials_twitter) || !empty($zerif_socials_linkedin) || !empty($zerif_socials_behance) || !empty($zerif_socials_instagram) || 
		!empty($zerif_copyright)):
		
					echo '<div class="'.$footer_class.' copyright">';
					if(!empty($zerif_socials_facebook) || !empty($zerif_socials_twitter) || !empty($zerif_socials_linkedin) || !empty($zerif_socials_behance) || !empty($zerif_socials_instagram)):
						echo '<ul class="social">';
						
						/* facebook */
						if( !empty($zerif_socials_facebook) ):
							echo '<li><a target="_blank" href="https://www.facebook.com/UrbanRangerCorps"><i class="fa fa-facebook"></i></a></li>';
						endif;
						/* twitter */
						if( !empty($zerif_socials_twitter) ):
							echo '<li><a target="_blank" href="https://twitter.com/UrbanRangerCorp"><i class="fa fa-twitter"></i></a></li>';
						endif;
						if( !empty($zerif_socials_instagram) ):
							echo '<li><a target="_blank" href="#"><i class="fa fa-instagram"></i></a></li>';
						endif;
						echo '</ul>';
					endif;	
			
			
					if( !empty($zerif_copyright) ):
						echo esc_attr($zerif_copyright);
					endif;
					
					echo '<div class="zerif-copyright-box"><a href="/wp-content/themes/zerif-lite/pdf/2014-urban-ranger-corps-990-signed.pdf" target="_blank">Form 990</a></div>';
					echo '</div>';
			
		endif;
	?>

</div> <!-- / END CONTAINER -->

</footer> <!-- / END FOOOTER  -->



<?php wp_footer(); ?>



</body>

</html>
