<div class="cms-carousel-layout-clients">
	<h2><?php echo esc_attr($atts['custom_heading']); ?></h2>
	<div class=" cms-carousel <?php echo esc_attr($atts['template']);?>" id="<?php echo esc_attr($atts['html_id']);?>">
		<?php
		$posts = $atts['posts'];
		while($posts->have_posts()){
			$posts->the_post();
			$team_meta=cms_post_meta_data();
			?>
			<div class="cms-clients-item ">
				<div class="cms-clients-item-wrap">
					<?php 
						if(has_post_thumbnail() && !post_password_required() && !is_attachment() &&  wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'medium-rectangle', false)):
							$class = ' has-thumbnail';
							$thumbnail = get_the_post_thumbnail(get_the_ID(),'medium-rectangle');
						else:
							$class = ' no-image';
							$thumbnail = '<img src="'.THEME_IMAGES.'no-image.jpg" alt="'.get_the_title().'" />';
						endif;
						echo $thumbnail;
					?>
				</div>
			</div>
			<?php
		}
		?>

	</div>
</div>
