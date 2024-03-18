<?php
/*
Template Name: page-top_en
*/
?>


<?php get_header(en); ?>
f
<div id="contentsArea">
<div class="mainImg"><img src="/img/mainimg.jpg" alt=""/></div>
<h1 class="h_1">About Contemporary Art Dealers Association</h1>
<p class="mb30">
The Contemporary Art Dealers Association had launched<br>in 2014 upon receiving approval by the government.<br>
The members of the Association are based and consisted by numerous art dealers throughout Japan.<br>
 Prior to launching of the Association,the Modern Art field was led by Mr. Kusuo Shimizu of the Minami gallery. He started the Modern Art scenes by operating exchange dealers meetings for over decades. These meetings blossomed successfully, and was inherited by our Association in order to honor his accomplishments.
</p>
<p class="mb30">
 We hereby declare to continue to enhance and further establish the Modern Art scenes throughout constantly communicate and exchange information among art dealers.
And we will contribute ourselves to the future of the Modern Art scenes.
</p>

<div class="imageList mb40">
<!--
<ul>
<li><img src="/img/top01.jpg" alt=""/></li>
<li><img src="/img/top02.jpg" alt=""/></li>
<li><img src="/img/top03.jpg" alt=""/></li>
</ul>
-->
</div>
<!--
<h2 class="h_1">News Information</h2>
<div class="top-newsBox">
<ul>
<?php $paged = get_query_var('paged'); ?>
<?php query_posts("posts_per_page=10&paged=$paged"); ?>
<?php if (have_posts()) : while(have_posts()) : the_post(); ?>
	<li>
		<a href="<?php the_permalink(); ?>">
		<span class="top-newsDate"><?php the_time('Y.m.d'); ?></span>
		<span class="top-newsTitle"><?php the_title(); ?></span>
		</a>
	</li>
<?php endwhile; ?>
<?php else: ?>
<?php endif; ?>
</ul>
<div class="top-btn-newsList"><a href="/archive">新着情報一覧を見る</a></div>
</div>
<div class="top-bannerArea imageList">
<ul>
<li><a href="#"><img src="/img/dmy1.png" alt=""/></a></li>
<li><a href="#"><img src="/img/dmy1.png" alt=""/></a></li>
<li><a href="#"><img src="/img/dmy1.png" alt=""/></a></li>
</ul>
-->
</div>
<div class="pagetop"><a href="#header"><img src="/img/pagetop.png" alt="ページ上部へ戻る"/></a></div>
</div>


<?php get_footer(en); ?>