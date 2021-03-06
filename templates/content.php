<?php
/**
 * Pure's basic post template
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> itemscope itemtype="Article">
	<header>
		<?php pure_post_thumbnail(); ?>
		<?php the_title( sprintf( '<h1 class="entry-title" itemprop="name"><a href="%s" rel="bookmark" itemprop="url">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>
		<?php pure_meta(); ?>
	</header>
	<div class="entry-content" itemprop="articleBody">
		<?php the_content( __( 'Read More <span class="meta-nav">&rarr;</span>', 'pure' ) ); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'pure' ),
				'after'  => '</div>',
			) );
		?>
	</div>
</article>
