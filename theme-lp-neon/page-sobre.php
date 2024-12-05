<?php 
// Template name: Sobre
?>
<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


<section style="background-color:blue;">
<h1>Pagina Sobre</h1>
</section>

<?php include(TEMPLATEPATH .'/includes/section-uso.php')?>

<?php endwhile; else: endif; ?>
<?php get_footer(); ?>