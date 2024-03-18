<?php
/*
Template Name: archive-common
*/
?>


<?php get_header(); ?>

<div id="contentsArea">
<div class="mainImg"><img src="/img/mainimg.jpg" alt=""/></div>
<h1 class="h_1">現代美術商協会からのお知らせ</h1>

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