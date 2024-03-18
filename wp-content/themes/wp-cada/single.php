<?php get_header(); ?>

<div id="contentsArea">
<div class="mainImg"><img src="/img/mainimg.jpg" alt=""/></div>

<?php if(have_posts()): while(have_posts()):the_post(); ?>
<h1 class="h_1"><?php the_title(); ?></h1>
<div class="news_date"><?php the_time('Y.m.d'); ?></div>
<div class="news_icon">
<?php
$posttags = get_the_tags();
if ($posttags) {
foreach($posttags as $tag) {
echo $tag->name . ' ';
} 
} else if ( !$posttags ) {
echo '更新情報';
}
?>
</div>

<p><?php the_content('Read more'); ?></p>
<?php endwhile; endif; ?>


<div class="aC" style="padding: 20px;">
<?php previous_post_link('%link','＜　古い記事へ'); ?>
&nbsp;
<?php next_post_link('%link','新しい記事へ　＞'); ?>
</div>


<div class="pagetop"><a href="#header"><img src="/img/pagetop.png" alt="ページ上部へ戻る"/></a></div>
</div>

<?php get_footer(); ?>
