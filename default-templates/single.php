<div class="slz-blog-detail slz-post-single slz-sidebar-left slz-posts">

	<div class="row">
		<div id="page-content" class="col-md-8 col-sm-12 slz-content-column">

			<?php
			while ( have_posts() ) : the_post();
			?>

				<div class="blog-detail-wrapper slz-posts single-default">
					<?php holycross_post_detail_thumbnail(); ?>
					<?php the_title( '<h1 class="title">', '</h1>' ); ?>

					<ul class="block-info">
						<?php
							holycross_entry_meta();
						?>
					</ul>
					<div class="entry-content">
						<?php
							the_content( '<a href="%s" class="read-more">%s<i class="fa fa-angle-right"></i></a>',
											esc_url( get_permalink() ),
											esc_html__( 'Read more', 'holycross' )
									);

							wp_link_pages( array(
								'before' => '<div class="page-links"><span class="page-links-title">' . esc_html__( 'Pages:', 'holycross' ) . '</span>',
								'after' => '</div>',
								'link_before' => '<span>',
								'link_after' => '</span>',
							) );
						?>
					</div>
					
					<div class="entry-meta">
						<?php holycross_categories_meta();?>
						<?php holycross_tags_meta();?>
						<?php holycross_post_nav();?>
					</div>

					<?php
						if ( is_single() && get_the_author_meta( 'description' ) ) :
							get_template_part( 'default-templates/author-bio' );
						endif;
					?>
					<?php
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;
					?>
				</div>

			<?php endwhile; ?>

		</div>
		<div id="page-sidebar" class="col-md-4 col-sm-12 slz-sidebar-column  slz-widgets">
			<?php dynamic_sidebar('holycross-custom-sidebar'); ?>
		</div>
		<div class="clearfix"></div>
	</div>
</div>