<?php
/*
Template Name: page-top
*/
?>


<?php get_header(); ?>

<div id="contentsArea">
<div class="mainImg"><img src="/img/mainimg.jpg" alt=""/></div>
<h1 class="h_1">現代美術商協同組合について</h1>
<p class="mb30">
現代美術商協同組合は2014年に行政庁より認可を受けて発足いたしました。<br>				
全国の現代美術を取扱う美術商によって構成されております。<br>
組合を発足する以前より日本現代美術の先駆的役割を果たされた南画廊の志水楠男氏を顕彰する交換会の開催を十数年<br>続け、その活動は大きな組織へと成長を遂げました。
</p>
<p class="mb30">		
今後も交換会を通して現代美術の認知度、社会的信用度の向上
美術商相互の情報交換や取引を行いながら情報配信を<br>続けて
次なる世代へ向けて文化の振興と現代美術の更なる発展を目指しております。
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
<h2 class="h_1">現代美術商協同組合からのお知らせ</h2>
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
</div>
-->
<div class="pagetop"><a href="#header"><img src="/img/pagetop.png" alt="ページ上部へ戻る"/></a></div>
</div>
<?php get_footer(); ?>