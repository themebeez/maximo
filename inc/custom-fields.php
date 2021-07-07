<?php
/**
 * Class for creating custom meta fields for page and post.
 *
 * @package Maximo
 */

if( ! class_exists( 'Maximo_Custom_Fields' ) ) :

	class Maximo_Custom_Fields {

		public function __construct() {

			// Register post meta fields and save meta fields values.
			add_action( 'admin_init', array( $this, 'register_post_meta' ) );
			add_action( 'save_post', array( $this, 'save_theme_post_meta' ) );
		}

		/**
		 * Register post custom meta fields.
		 *
		 * @since    1.0.0
		 */
		public function register_post_meta() {   

		    add_meta_box( 
		    	'theme_post_meta', 
		    	__( 'Post Options', 'maximo' ), 
		    	array( $this, 'theme_post_meta_template' ), 
		    	array( 'post', 'page' ), 
		    	'side', 
		    	'default' 
		    );
		}

		/**
		 * Custom Sidebar Post Meta.
		 *
		 * @since    1.0.0
		 */
		public function theme_post_meta_template() {

			global $post;

			$sidebar_position = get_post_meta( $post->ID, 'maximo_post_sidebar_position', true );

			$content_layout = get_post_meta( $post->ID, 'maximo_post_content_layout', true );

			$disable_default_header = get_post_meta( $post->ID, 'maximo_post_disable_default_header', true );

			$disable_default_footer = get_post_meta( $post->ID, 'maximo_post_disable_default_footer', true );

			$disable_breadcrumb = get_post_meta( $post->ID, 'maximo_post_disable_breadcrumb', true );

			$disable_tranparent_header = get_post_meta( $post->ID, 'maximo_post_disable_transparent_header', true );

			$disable_page_header = get_post_meta( $post->ID, 'maximo_post_disable_page_header', true );

			$disable_featured_img = get_post_meta( $post->ID, 'maximo_post_disable_featured_image', true );

		    wp_nonce_field( 'maximo_post_meta_nonce', 'maximo_post_meta_nonce_id' );

		    $sidebar_choices = array(
		    	'default' => __( 'Default (From Customizer)', 'maximo' ),
		        'right-sidebar' => esc_html__( 'Right', 'maximo' ),
		        'left-sidebar' => esc_html__( 'Left', 'maximo' ),
		        'no-sidebar' => esc_html__( 'Fullwidth', 'maximo' ),
		    );

		    $content_layout_choices = array(
		    	'default' => __( 'Default (From Customizer)', 'maximo' ),
		        'maximo-fullwidth-contained' => __( 'Fullwidth: Contained', 'maximo' ),
				'maximo-fullwidth-stretched' => __( 'Fullwidth: Stretched', 'maximo' ),
				'maximo-boxed-contain' => __( 'Boxed: Contain', 'maximo' ),
				'maximo-boxed' => __( 'Boxed', 'maximo' ),
		    );
		    ?>
		    <table width="100%" border="0" class="options" cellspacing="5" cellpadding="5">
		        <tr>
		        	<td>
		        		<label for="maximo-sidebar-position-meta"><?php echo __( 'Sidebar Position', 'maximo' ); ?></label>
			        	<select name="maximo-sidebar-position-meta" id="maximo-sidebar-position-meta" class="maximo-select-field">
			        		<?php
			        		foreach( $sidebar_choices as $key => $choice ) {
			        			?>
			        			<option value="<?php echo esc_attr( $key ); ?>" <?php selected( $sidebar_position, $key ); ?>><?php echo esc_html( $choice ); ?></option>
			        			<?php
			        		}
			        		?>
			        	</select>
		        	</td>
		        </tr>

		        <tr>
		        	<td>
		        		<label for="maximo-content-layout-position-meta"><?php echo __( 'Content Layout', 'maximo' ); ?></label>
			        	<select name="maximo-content-layout-position-meta" id="maximo-content-layout-position-meta" class="maximo-select-field">
			        		<?php
			        		foreach( $content_layout_choices as $key => $choice ) {
			        			?>
			        			<option value="<?php echo esc_attr( $key ); ?>" <?php selected( $content_layout, $key ); ?>><?php echo esc_html( $choice ); ?></option>
			        			<?php
			        		}
			        		?>
			        	</select>
		        	</td>
		        </tr>

		        <tr>
		        	<td>
		        		<label for="maximo-default-header-meta">
		        			<input type="checkbox" name="maximo-default-header-meta" id="maximo-default-header-meta" <?php checked( $disable_default_header, true ); ?>>
		        			<?php echo __( 'Disable Default Header', 'maximo' ); ?>
		        		</label>
			        	
		        	</td>
		        </tr>

		        <tr>
		        	<td>
		        		<label for="maximo-default-footer-meta">
		        			<input type="checkbox" name="maximo-default-footer-meta" id="maximo-default-footer-meta" <?php checked( $disable_default_footer, true ); ?>>
		        			<?php echo __( 'Disable Default Footer', 'maximo' ); ?>
		        		</label>
			        	
		        	</td>
		        </tr>

		        <tr>
		        	<td>
		        		<label for="maximo-breadcrumb-meta">
		        			<input type="checkbox" name="maximo-breadcrumb-meta" id="maximo-breadcrumb-meta" <?php checked( $disable_breadcrumb, true ); ?>>
		        			<?php echo __( 'Disable Breadcrumb', 'maximo' ); ?>
		        		</label>
			        	
		        	</td>
		        </tr>

		        <tr>
		        	<td>
		        		<label for="maximo-transparent-header-meta">
		        			<input type="checkbox" name="maximo-transparent-header-meta" id="maximo-transparent-header-meta" <?php checked( $disable_tranparent_header, true ); ?>>
		        			<?php echo __( 'Disable Transparent Header', 'maximo' ); ?>
		        		</label>
		        	</td>
		        </tr>

		        <tr>
		        	<td>
		        		<label for="maximo-page-header-meta">
		        			<input type="checkbox" name="maximo-page-header-meta" id="maximo-page-header-meta" <?php checked( $disable_page_header, true ); ?>>
		        			<?php echo __( 'Disable Page Header', 'maximo' ); ?>
		        		</label>
		        	</td>
		        </tr>

		        <tr>
		        	<td>
		        		<label for="maximo-featured-img-meta">
		        			<input type="checkbox" name="maximo-featured-img-meta" id="maximo-featured-img-meta" <?php checked( $disable_featured_img, true ); ?>>
		        			<?php echo __( 'Disable Featured Image', 'maximo' ); ?>
		        		</label>
		        	</td>
		        </tr> 
		    </table>   
		    <?php   
		}

		/**
		 * Save Custom Sidebar Position Post Meta.
		 *
		 * @since    1.0.0
		 */
		public function save_theme_post_meta() {

		    global $post;  

		    // Bail if we're doing an auto save
		    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {

		        return;
		    }
		    
		    // if our nonce isn't there, or we can't verify it, bail
		    if ( ! isset( $_POST['maximo_post_meta_nonce_id'] ) || ! wp_verify_nonce( sanitize_key( $_POST['maximo_post_meta_nonce_id'] ), 'maximo_post_meta_nonce' ) ) {

		        return;
		    }
		    
		    // if our current user can't edit this post, bail
		    if ( ! current_user_can( 'edit_post', $post->ID ) ) {

		        return;
		    } 

		    if ( isset( $_POST['maximo-sidebar-position-meta'] ) ) {

				update_post_meta( $post->ID, 'maximo_post_sidebar_position', sanitize_text_field( wp_unslash( $_POST['maximo-sidebar-position-meta'] ) ) ); 
			}

			if ( isset( $_POST['maximo-content-layout-position-meta'] ) ) {

				update_post_meta( $post->ID, 'maximo_post_content_layout', sanitize_text_field( wp_unslash( $_POST['maximo-content-layout-position-meta'] ) ) ); 
			}

			update_post_meta( $post->ID, 'maximo_post_disable_default_header', ( ( isset( $_POST['maximo-default-header-meta']  ) ) ? true : false ) );

			update_post_meta( $post->ID, 'maximo_post_disable_default_footer', ( ( isset( $_POST['maximo-default-footer-meta']  ) ) ? true : false ) );

			update_post_meta( $post->ID, 'maximo_post_disable_breadcrumb', ( ( isset( $_POST['maximo-breadcrumb-meta']  ) ) ? true : false ) );

			update_post_meta( $post->ID, 'maximo_post_disable_transparent_header', ( ( isset( $_POST['maximo-transparent-header-meta']  ) ) ? true : false ) );

			update_post_meta( $post->ID, 'maximo_post_disable_page_header', ( ( isset( $_POST['maximo-page-header-meta']  ) ) ? true : false ) );

			update_post_meta( $post->ID, 'maximo_post_disable_featured_image', ( ( isset( $_POST['maximo-featured-img-meta']  ) ) ? true : false ) );
		}
	}
endif;

$maximo_custom_fields = new Maximo_Custom_Fields();