<?php get_template_part('templates/header'); ?>

<?php while (have_posts()): ?>
<?php the_post(); ?>

<div class="post">
	<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
	<time datetime="<?php the_time('Y-m-d'); ?>"><?php the_date(); ?> <?php the_time(); ?></time> 
	<?php the_content(); ?>
</div>

<?php endwhile; ?>

<?php get_template_part('templates/footer'); ?>
