<?php get_header(); ?>


<!-- #EndLibraryItem --><div class="whiteTitle">
<h1><img src="/search/img/title.png" alt="検索結果"/></h1>
</div>

<div class="contentsArea2">
<div class="contentsInner">
<?php if (have_posts()){ ?>
	<?php
	if (isset($_GET['s']) && empty($_GET['s'])) {
	echo '検索キーワードが入力されていません'; // 検索キーワードが未入力の場合のテキストを指定
	} else {
	echo '“'.$_GET['s'] .'”の検索結果：'.$wp_query->found_posts .'件'; // 検索キーワードと該当件数を表示
	}
	?>


	<?php if (isset($_GET['s']) && empty($_GET['s'])) {} else { ?>
	<?php query_posts($query_string.'&posts_per_page=50'); ?>
	<?php while(have_posts()): the_post(); ?>
	<div class="search_result">
	<h2 class="headerStyle4"><a href="<?php the_permalink(); ?>"><?php echo get_the_title(); ?></a></h2>
	<p><?php the_excerpt(); ?></p>
	</div>
	<?php endwhile; ?>
	<?php } ?>





<?php }else{ ?>
	検索されたキーワードにマッチする記事はありませんでした
<?php } ?>
</div>
</div>
</div>
</div>

<!--contactForm-->
<div id="contactFormArea">
<div id="contactForm">
<h2><img src="../common/img/title_contact.png" alt="お問い合わせ"/></h2>
<div>※必須項目</div>
<form id="footer_contact" name="footer_contact" method="post" action="../contact/mail.php">
<div class="formBlock">
<label for="compname">御社名※</label>
<div><input type="text" name="御社名" id="compname"></div>
</div>
<div class="formBlock">
<label for="compsection">所属部署名</label>
<div><input type="text" name="所属部署名" id="compsection"></div>
</div>
<div class="formBlock">
<label for="yourname">お名前（漢字）※</label>
<div><input type="text" name="お名前" id="yourname"></div>
</div>
<div class="formBlock">
<label for="yourname_kana">お名前（カナ）※</label>
<div><input type="text" name="お名前（カナ）" id="yourname_kana"></div>
</div>
<div class="formBlock">
<label for="yourmail">メールアドレス※</label>
<div><input type="email" name="メールアドレス" id="yourmail"></div>
</div>
<div class="formBlock">
<label for="yourmail2">メールアドレス（再入力）※</label>
<div><input type="email" name="メールアドレス（再入力）" id="yourmail2"></div>
</div>
<div class="formBlock">
<label for="tel">お電話番号</label>
<div><input type="tel" name="お電話番号" id="tel"></div>
</div>
<div class="formBlock">
<label for="msg">お問い合わせ内容※<br><span class="txtS">（200文字まで）</span></label>
<div><textarea name="お問い合わせ内容" id="msg" maxlength="200"></textarea></div>
</div>
<div class="contactForm_submit"><input id="chk" type="button" value="確認"></div>
</form>
</div>
</div>
<!--/contactForm-->

<?php get_footer(); ?>


