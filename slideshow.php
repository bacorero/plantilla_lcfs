<section id="slideshow">
	<?php if( have_posts() ): while( have_posts() ): the_post();?>
				<div class="slide">
					<div class="thumb"><a href="<?php the_permalink(); ?>">
						<?php if( has_post_thumbnail() ) { the_post_thumbnail( 'slider_thumbs' ); } ?></a>
					</div>
					<article>
						<hgroup><h2><a href="#">Título de slider</a></h2></hgroup>
						<p class="date">30 de Junio de 2017 <a href="#">Categoría 2</a></p>
						<p class="extract">"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
					</article>
				</div>
	<?php endwhile; else: ?>
						//No hay entradas
	<?php endif; ?>
				
</section>

