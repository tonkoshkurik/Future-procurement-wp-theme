<?php
/**
 * @package materialwp
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="card">
		<div class="entry-img">
			<?php if ( has_post_thumbnail() ) : ?>
				<?php the_post_thumbnail(); ?>
			<?php endif; ?>
		</div>

		<div class="entry-container">
			<header class="entry-header">
				<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

				<div class="entry-meta">
					<?php materialwp_posted_on(); ?>
				</div><!-- .entry-meta -->
			</header><!-- .entry-header -->

			<div class="entry-content">
				<?php the_content(); ?>
				<?php
					wp_link_pages( array(
						'before' => '<div class="page-links">' . __( 'Pages:', 'materialwp' ),
						'after'  => '</div>',
					) );
				?>
			</div><!-- .entry-content -->

			<footer class="entry-footer">
                <hr>
                <div class="card-profile card-plain">
              <div class="row">
                <div class="col-md-2">
                  <div class="card-avatar">
                    <a href="#pavlo">
											<?php
											$id_or_email = get_the_author_meta( 'ID' );
											$size = 100;
											$args = array(
												'class' => 'img'

											);
											echo get_avatar( $id_or_email, $size, '', 'Robert Freeman - procurement expert', $args); ?>

                      <!-- <img class="img" src="<?php bloginfo('stylesheet_directory'); ?>/img/pavlo-100.jpg"> -->
                    </a>
                  <div class="ripple-container"></div></div>
                </div>
                <div class="col-md-8">
                  <h4 class="card-title">Robert Freeman</h4>
                  <p class="description">
										<?php echo nl2br(get_the_author_meta('description')); ?>
									</p>
                </div>
                <div class="col-md-2">
                  <button type="button" class="btn btn-default pull-right btn-round">Follow</button>
                </div>
              </div>
            </div>
				<?php materialwp_entry_footer(); ?>
			</footer><!-- .entry-footer -->
		</div> <!-- .entry-container -->
	</div> <!-- .card -->
</article><!-- #post-## -->
