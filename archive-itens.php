<?php get_header( 'colecao' ); ?>

<?php get_sidebar( 'itens' ); ?>

	<div id="primary-colecao" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
			<?php

			?>
			<div class="titulo-taxonomy"><h1 class="entry-categoria">Cole&ccedil;&atilde;o</h1></div>

			</header><!-- .page-header -->

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

			<div class="cada-item">
				<a class="a-cada-item" href="<?php the_permalink(); ?>">
						<?php if ( has_post_thumbnail() ) {
						the_post_thumbnail( 'colecao-thumb' );
						} else { ?>
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/aqua-itens-default.jpg" alt="<?php the_title(); ?>" />
						<?php } ?>
				</a><!-- a-cada-item -->
				<div class="titulo-cada-item"><?php the_title(); ?></div>
			</div><!-- cada-item -->

			<?php endwhile; ?>

			<?php //wp_pagenavi(); ?>

		<?php else : ?>

			<?php get_template_part( 'no-results', 'archive' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary-colecao -->
<?php get_footer(); ?>
