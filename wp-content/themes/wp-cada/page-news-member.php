<?php
/*
Template Name: page-news-member
*/
?>


<?php get_header(); ?>

<div id="contentsArea">
<div class="mainImg"><img src="/img/mainimg.jpg" alt=""/></div>
<h1 class="h_1">会員向け専用ページ</h1>

<div class="mb50">

<?php query_posts('post_type=member'); ?>
 
<?php if(have_posts()): while(have_posts()): the_post(); ?>
<div class="events_contents">
<h2 class="<?php echo esc_attr(get_post_type()); ?>"><a href="<?php the_permalink(); ?>" ><?php the_title(); ?></a></h2>
<?php if(has_post_thumbnail()): ?>
<p><a href="<?php the_permalink(); ?>" ><?php the_post_thumbnail('medium'); ?></a></p>
<?php endif; ?>
</div><!-- end of .events_contents -->
<?php endwhile; endif; ?>
 
 
</div>

<div class="pagetop"><a href="#header"><img src="/img/pagetop.png" alt="ページ上部へ戻る"/></a></div>
</div>
<?php get_footer(); ?>