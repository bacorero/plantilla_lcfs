<?php get_header() ?>

<section id="main">
		<div id="no-slide">
			<?php include(TEMPLATEPATH. '/slideshow.php');?>
		</div>

		<section id="articles_list">
			<?php if( have_posts() ): while( have_posts() ): the_post();?>

				<article>
					<div class="thumb"><a href="<?php the_permalink(); ?>">
						<?php if( has_post_thumbnail() ) { the_post_thumbnail( 'list_articles_thumbs' ); } ?></a>
					</div>

						<hgroup><h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2></hgroup>
						<p class="date"><?php the_date(); ?><a href="#"><?php the_category(); ?></a></p> 
						<div class="extract"> <?php the_excerpt(); ?> </div>
				</article>

			<?php endwhile; else: ?>
						//No hay entradas
			<?php endif; ?>
		</section>

		<?php get_sidebar()?>

		</section>
		
		<?php get_footer() ?>