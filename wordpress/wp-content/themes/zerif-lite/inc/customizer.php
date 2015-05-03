<?php

/**
 * zerif Theme Customizer
 *
 * @package zerif
 */



/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */



function zerif_customize_register( $wp_customize ) {

	class Zerif_Customize_Textarea_Control extends WP_Customize_Control {
		public $type = 'textarea';
	 
		public function render_content() {
			?>
			<label>
			<span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
			<textarea rows="5" style="width:100%;" <?php $this->link(); ?>><?php echo esc_textarea( $this->value() ); ?></textarea>
			</label>
			<?php
		}
	}

	class Zerif_Customizer_Number_Control extends WP_Customize_Control {



		public $type = 'number';



		public function render_content() {

		?>

			<label>

				<span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>

				<input type="number" <?php $this->link(); ?> value="<?php echo intval( $this->value() ); ?>" />

			</label>

		<?php

		}

	}


	class Zerif_Theme_Support extends WP_Customize_Control
	{
		public function render_content()
		{
			echo __('Check out the <a href="https://themeisle.com/themes/zerif-pro-one-page-wordpress-theme/">PRO version</a> for full control over the frontpage sections order!','zerif-lite');
		}

	} 
	
	class Zerif_Theme_Support_Colors extends WP_Customize_Control
	{
		public function render_content()
		{
			echo __('Check out the <a href="https://themeisle.com/themes/zerif-pro-one-page-wordpress-theme/">PRO version</a> for full control over the color scheme !','zerif-lite');
		}

	} 
	
	class Zerif_Theme_Support_Googlemap extends WP_Customize_Control
	{
		public function render_content()
		{
			echo __('Check out the <a href="https://themeisle.com/themes/zerif-pro-one-page-wordpress-theme/">PRO version</a> to add a google maps section !','zerif-lite');
		}

	} 
	
	class Zerif_Theme_Support_Pricing extends WP_Customize_Control
	{
		public function render_content()
		{
			echo __('Check out the <a href="https://themeisle.com/themes/zerif-pro-one-page-wordpress-theme/">PRO version</a> to add a pricing section !','zerif-lite');
		}

	} 


	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';

	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';

	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';



	$wp_customize->remove_section('colors');


	/**********************************************/
	/*************** ORDER ************************/
	/**********************************************/
	
	$wp_customize->add_section( 'zerif_order_section' , array(

					'title'       => __( 'Sections order', 'zerif-lite' ),

					'priority'    => 28

	));
	
	$wp_customize->add_setting(
        'zerif_order_section',array('sanitize_callback' => 'zerif_sanitize_pro_version')
	);
	
	$wp_customize->add_control( new Zerif_Theme_Support( $wp_customize, 'zerif_order_section',
	    array(
	        'section' => 'zerif_order_section',
	   )
	));
	
	/**********************************************/
	/*************** COLORS ************************/
	/**********************************************/
	
	$wp_customize->add_section( 'zerif_colors_section' , array(

					'title'       => __( 'Colors', 'zerif-lite' ),

					'priority'    => 29

	));
	
	$wp_customize->add_setting(
        'zerif_colors_section', array('sanitize_callback' => 'zerif_sanitize_pro_version')
	);
	
	$wp_customize->add_control( new Zerif_Theme_Support_Colors( $wp_customize, 'zerif_colors_section',
	    array(
	        'section' => 'zerif_colors_section',
	   )
	));


	/***********************************************/

	/************** GENERAL OPTIONS  ***************/

	/***********************************************/





	$wp_customize->add_section( 'zerif_general_section' , array(

			'title'       => __( 'General options', 'zerif-lite' ),

    	  	'priority'    => 30,

    	  	'description' => __('Zerif theme general options','zerif-lite'),

	));



	/* LOGO	*/

	$wp_customize->add_setting( 'zerif_logo', array('sanitize_callback' => 'esc_url_raw'));



	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'themeslug_logo', array(

	      	'label'    => __( 'Logo', 'zerif-lite' ),

	      	'section'  => 'zerif_general_section',

	      	'settings' => 'zerif_logo',

			'priority'    => 1,

	)));
	
	/* Disable preloader */
	
	$wp_customize->add_setting( 'zerif_disable_preloader', array('sanitize_callback' => 'zerif_sanitize_text'));

	$wp_customize->add_control(

			'zerif_disable_preloader',

			array(

				'type' => 'checkbox',

				'label' => __('Disable preloader?','zerif-lite'),

				'section' => 'zerif_general_section',

				'priority'    => 2,

			)

	);



	/* COPYRIGHT */



	$wp_customize->add_setting( 'zerif_copyright', array('sanitize_callback' => 'zerif_sanitize_text'));



	$wp_customize->add_control( 'zerif_copyright', array(

			'label'    => __( 'Copyright', 'zerif-lite' ),

	      	'section'  => 'zerif_general_section',

	      	'settings' => 'zerif_copyright',

			'priority'    => 3,

	));



	/* facebook */

	$wp_customize->add_setting( 'zerif_socials_facebook', array('sanitize_callback' => 'esc_url_raw','default' => '#'));



	$wp_customize->add_control( 'zerif_socials_facebook', array(

			'label'    => __( 'Facebook link', 'zerif-lite' ),

	      	'section'  => 'zerif_general_section',

	      	'settings' => 'zerif_socials_facebook',

			'priority'    => 4,

	));



	/* twitter */

	$wp_customize->add_setting( 'zerif_socials_twitter', array('sanitize_callback' => 'esc_url_raw','default' => '#'));



	$wp_customize->add_control( 'zerif_socials_twitter', array(

			'label'    => __( 'Twitter link', 'zerif-lite' ),

	      	'section'  => 'zerif_general_section',

	      	'settings' => 'zerif_socials_twitter',

			'priority'    => 5,

	));



	/* linkedin */

	$wp_customize->add_setting( 'zerif_socials_linkedin', array('sanitize_callback' => 'esc_url_raw','default' => '#'));



	$wp_customize->add_control( 'zerif_socials_linkedin', array(

			'label'    => __( 'Linkedin link', 'zerif-lite' ),

	      	'section'  => 'zerif_general_section',

	      	'settings' => 'zerif_socials_linkedin',

			'priority'    => 6,

	));



	/* behance */

	$wp_customize->add_setting( 'zerif_socials_behance', array('sanitize_callback' => 'esc_url_raw','default' => '#'));



	$wp_customize->add_control( 'zerif_socials_behance', array(

			'label'    => __( 'Behance link', 'zerif-lite' ),

	      	'section'  => 'zerif_general_section',

	      	'settings' => 'zerif_socials_behance',

			'priority'    => 7,

	));



	/* dribbble */

	$wp_customize->add_setting( 'zerif_socials_dribbble', array('sanitize_callback' => 'esc_url_raw','default' => '#'));



	$wp_customize->add_control( 'zerif_socials_dribbble', array(

			'label'    => __( 'Dribbble link', 'zerif-lite' ),

	      	'section'  => 'zerif_general_section',

	      	'settings' => 'zerif_socials_dribbble',

			'priority'    => 8,

	));


	/* email - ICON */
	$wp_customize->add_setting( 'zerif_email_icon', array('sanitize_callback' => 'esc_url_raw','default' => get_template_directory_uri().'/images/envelope4-green.png'));

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'zerif_email_icon', array(

				'label'    => __( 'Email section - icon', 'zerif-lite' ),

				'section'  => 'zerif_general_section',

				'settings' => 'zerif_email_icon',

				'priority'    => 9,

	)));
		
	/* email */   

	$wp_customize->add_setting( 'zerif_email', array( 'sanitize_callback' => 'zerif_sanitize_text','default' => __('support@codeinwp.com','zerif-lite')) );
    $wp_customize->add_control( new Zerif_Customize_Textarea_Control( $wp_customize, 'zerif_email', array(
            'label'   => __( 'Email', 'zerif-lite' ),
            'section' => 'zerif_general_section',
            'settings'   => 'zerif_email',
            'priority' => 10
    )) );
	
	/* phone number - ICON */
	$wp_customize->add_setting( 'zerif_phone_icon', array('sanitize_callback' => 'esc_url_raw','default' => get_template_directory_uri().'/images/telephone65-blue.png'));

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'zerif_phone_icon', array(

				'label'    => __( 'Phone number section - icon', 'zerif-lite' ),

				'section'  => 'zerif_general_section',

				'settings' => 'zerif_phone_icon',

				'priority'    => 11,

	)));

	/* phone number */
		
	$wp_customize->add_setting( 'zerif_phone', array('sanitize_callback' => 'zerif_sanitize_number','default' => __('Phone number','zerif-lite')) );
    $wp_customize->add_control(new Zerif_Customize_Textarea_Control( $wp_customize, 'zerif_phone', array(
            'label'   => __( 'Phone number', 'zerif-lite' ),
            'section' => 'zerif_general_section',
            'settings'   => 'zerif_phone',
            'priority' => 12
    )) );

	
	/* address - ICON */
	$wp_customize->add_setting( 'zerif_address_icon', array('sanitize_callback' => 'esc_url_raw','default' => get_template_directory_uri().'/images/map25-redish.png'));

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'zerif_address_icon', array(

				'label'    => __( 'Address section - icon', 'zerif-lite' ),

				'section'  => 'zerif_general_section',

				'settings' => 'zerif_address_icon',

				'priority'    => 13,

	)));

	/* address */
		
	$wp_customize->add_setting( 'zerif_address', array( 'sanitize_callback' => 'zerif_sanitize_text', 'default' => __('24B, Fainari Street, Bucharest, Romania','zerif-lite') ) );
    $wp_customize->add_control( new Zerif_Customize_Textarea_Control( $wp_customize, 'zerif_address', array(
            'label'   => __( 'Address', 'zerif-lite' ),
            'section' => 'zerif_general_section',
            'settings'   => 'zerif_address',
            'priority' => 14
    )) ) ;







	/*****************************************************/

    /**************	BIG TITLE SECTION *******************/

	/****************************************************/







	$wp_customize->add_section( 'zerif_bigtitle_section' , array(

			'title'       => __( 'Big title section', 'zerif-lite' ),

    	  	'priority'    => 31

	));



	/* show/hide */

	$wp_customize->add_setting( 'zerif_bigtitle_show', array('sanitize_callback' => 'zerif_sanitize_text'));

    $wp_customize->add_control(

		'zerif_bigtitle_show',

		array(

			'type' => 'checkbox',

			'label' => __('Hide big title section?','zerif-lite'),

			'section' => 'zerif_bigtitle_section',

			'priority'    => 1,

		)

	);



	/* title */

	$wp_customize->add_setting( 'zerif_bigtitle_title', array('sanitize_callback' => 'zerif_sanitize_text','default' => __('To add a title here please go to Customizer','zerif-lite')));



	$wp_customize->add_control( 'zerif_bigtitle_title', array(

			'label'    => __( 'Title', 'zerif-lite' ),

	      	'section'  => 'zerif_bigtitle_section',

	      	'settings' => 'zerif_bigtitle_title',

			'priority'    => 2,

	));



	/* red button */

	$wp_customize->add_setting( 'zerif_bigtitle_redbutton_label', array('sanitize_callback' => 'zerif_sanitize_text','default' => __('One button','zerif-lite')));



	$wp_customize->add_control( 'zerif_bigtitle_redbutton_label', array(

			'label'    => __( 'Red button label', 'zerif-lite' ),

	      	'section'  => 'zerif_bigtitle_section',

	      	'settings' => 'zerif_bigtitle_redbutton_label',

			'priority'    => 3,

	));



	$wp_customize->add_setting( 'zerif_bigtitle_redbutton_url', array('sanitize_callback' => 'esc_url_raw','default' => '#'));



	$wp_customize->add_control( 'zerif_bigtitle_redbutton_url', array(

			'label'    => __( 'Red button link', 'zerif-lite' ),

	      	'section'  => 'zerif_bigtitle_section',

	      	'settings' => 'zerif_bigtitle_redbutton_url',

			'priority'    => 4,

	));



	/* green button */

	$wp_customize->add_setting( 'zerif_bigtitle_greenbutton_label', array('sanitize_callback' => 'zerif_sanitize_text','default' => __('Another button','zerif-lite')));



	$wp_customize->add_control( 'zerif_bigtitle_greenbutton_label', array(

			'label'    => __( 'Red button label', 'zerif-lite' ),

	      	'section'  => 'zerif_bigtitle_section',

	      	'settings' => 'zerif_bigtitle_greenbutton_label',

			'priority'    => 5,

	));



	$wp_customize->add_setting( 'zerif_bigtitle_greenbutton_url', array('sanitize_callback' => 'esc_url_raw','default' => '#'));



	$wp_customize->add_control( 'zerif_bigtitle_greenbutton_url', array(

			'label'    => __( 'Green button link', 'zerif-lite' ),

	      	'section'  => 'zerif_bigtitle_section',

	      	'settings' => 'zerif_bigtitle_greenbutton_url',

			'priority'    => 6,

	));







	/********************************************************************/

	/*************  OUR FOCUS SECTION **********************************/

	/********************************************************************/



	$wp_customize->add_section( 'zerif_ourfocus_section' , array(

			'title'       => __( 'Our focus section', 'zerif-lite' ),

    	  	'priority'    => 32

	));



	/* show/hide */

	$wp_customize->add_setting( 'zerif_ourfocus_show', array('sanitize_callback' => 'zerif_sanitize_text'));

    $wp_customize->add_control(

		'zerif_ourfocus_show',

		array(

			'type' => 'checkbox',

			'label' => __('Hide our focus section?','zerif-lite'),

			'section' => 'zerif_ourfocus_section',

			'priority'    => 1,

		)

	);

	/* our focus title */

	$wp_customize->add_setting( 'zerif_ourfocus_title', array('sanitize_callback' => 'zerif_sanitize_text','default' => __('Our Focus','zerif-lite')));

			

		$wp_customize->add_control( 'zerif_ourfocus_title', array(

				'label'    => __( 'Title', 'zerif-lite' ),

				'section'  => 'zerif_ourfocus_section',

				'settings' => 'zerif_ourfocus_title',

				'priority'    => 2,

	));

	/* our focus subtitle */

	$wp_customize->add_setting( 'zerif_ourfocus_subtitle', array('sanitize_callback' => 'zerif_sanitize_text','default' => __('Add a subtitle in Customizer, "Our focus section"','zerif-lite')));



	$wp_customize->add_control( 'zerif_ourfocus_subtitle', array(

			'label'    => __( 'Our focus subtitle', 'zerif-lite' ),

	      	'section'  => 'zerif_ourfocus_section',

	      	'settings' => 'zerif_ourfocus_subtitle',

			'priority'    => 3,

	));










	/************************************/

	/******* ABOUT US SECTION ***********/

	/************************************/



	$wp_customize->add_section( 'zerif_aboutus_section' , array(

			'title'       => __( 'About us section', 'zerif-lite' ),

    	  	'priority'    => 34

	));



	/* about us show/hide */

	$wp_customize->add_setting( 'zerif_aboutus_show', array('sanitize_callback' => 'zerif_sanitize_text'));

    $wp_customize->add_control(

		'zerif_aboutus_show',

		array(

			'type' => 'checkbox',

			'label' => __('Hide about us section?','zerif-lite'),

			'section' => 'zerif_aboutus_section',

			'priority'    => 1,

		)

	);

	/* title */

	$wp_customize->add_setting( 'zerif_aboutus_title', array('sanitize_callback' => 'zerif_sanitize_text','default' => __('About Us','zerif-lite')));

	$wp_customize->add_control( 'zerif_aboutus_title', array(

				'label'    => __( 'Title', 'zerif-lite' ),

				'section'  => 'zerif_aboutus_section',

				'settings' => 'zerif_aboutus_title',

				'priority'    => 2,

	));

	/* subtitle */

	$wp_customize->add_setting( 'zerif_aboutus_subtitle', array('sanitize_callback' => 'zerif_sanitize_text','default' => __('Add a subtitle in Customizer, "About us section"','zerif-lite')));



	$wp_customize->add_control( 'zerif_aboutus_subtitle', array(

			'label'    => __( 'Subtitle', 'zerif-lite' ),

	      	'section'  => 'zerif_aboutus_section',

	      	'settings' => 'zerif_aboutus_subtitle',

			'priority'    => 3,

	));



}

add_action( 'customize_register', 'zerif_customize_register' );



/**

 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.

 */

function zerif_customize_preview_js() {

	wp_enqueue_script( 'zerif_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20130508', true );

}

add_action( 'customize_preview_init', 'zerif_customize_preview_js' );



function zerif_sanitize_text( $input ) {

    return wp_kses_post( force_balance_tags( $input ) );

}

function zerif_sanitize_pro_version( $input ) {

    return $input;

}

function zerif_sanitize_number( $input ) {

    return force_balance_tags( $input );

}



function zerif_registers() {

    wp_register_script( 'zerif_jquery_ui', '//code.jquery.com/ui/1.10.4/jquery-ui.js', array("jquery"), '20120206', true  );

	wp_enqueue_script( 'zerif_jquery_ui' );



	wp_register_style( 'zerif_jquery_ui_css', '//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css');

	wp_enqueue_style( 'zerif_jquery_ui_css' );



	wp_register_script( 'zerif_customizer_script', get_template_directory_uri() . '/js/zerif_customizer.js', array("jquery","zerif_jquery_ui"), '20120206', true  );

	wp_enqueue_script( 'zerif_customizer_script' );
	
	wp_localize_script( 'zerif_customizer_script', 'objectL10n', array(
		
		'documentation' => __( 'Documentation', 'zerif-lite' ),
		'pro' => __('View PRO version','zerif-lite')
		
	) );

}

add_action( 'customize_controls_enqueue_scripts', 'zerif_registers' );



