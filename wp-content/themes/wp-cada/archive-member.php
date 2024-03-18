<?php
/*
Template Name: archive-member
*/
?>

<?php get_header(); ?>

<div id="contentsArea">
<div class="mainImg"><img src="/img/mainimg.jpg" alt=""/></div>
<h1 class="h_1">会員向け専用ページ</h1>

<div class="mb50">

<ul class="newsList">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<li>
		<a href="<?php the_permalink(); ?>">
		<div class="news-list-time"><?php the_time('Y.m.d'); ?></div>

		<div class="news-list-title"><?php the_title(); ?></div>
		</a>
	</li>
<?php endwhile; endif; ?>
</ul>  
</div>

<div class="pagetop"><a href="#header"><img src="/img/pagetop.png" alt="ページ上部へ戻る"/></a></div>
</div>
<?php get_footer(); ?>