<?php
/*
Template Name: product_main_page
*/
?>


<?php get_header(); ?>

<!-- #EndLibraryItem --><div id="title_product_idx">
<h1><img src="/products/img/title.png" alt="製品情報"/></h1>

<div id="title_product_idx_menu">
<ul>
<li class="menu01">
<a href="/products_smartpulse">
<div class="about_menu_name">Smart Pulse<br>（スマートパルス）</div>
<div class="about_menu_more"><i class="fa fa-chevron-circle-right" aria-hidden="true"></i>&nbsp;詳しく見る</div>
</a>
</li>
<li class="menu04">
<a href="/products_peek-a-body">
<div class="about_menu_name">peek a body<br>（ピーク・ア・ボディ）</div>
<div class="about_menu_more"><i class="fa fa-chevron-circle-right" aria-hidden="true"></i>&nbsp;詳しく見る</div>
</a>
</li>
<li class="menu03">
<a href="/products_body_conditioner">
<div class="about_menu_name">THE BODY CONDITIONER<br>（ザ・ボディコンディショナー）</div>
<div class="about_menu_more"><i class="fa fa-chevron-circle-right" aria-hidden="true"></i>&nbsp;詳しく見る</div>
</a>
</li>
<li class="menu05">
<a href="/products_anatap">
<div class="about_menu_name">ANA Tap<br>（ANAタップ）</div>
<div class="about_menu_more"><i class="fa fa-chevron-circle-right" aria-hidden="true"></i>&nbsp;詳しく見る</div>
</a>
</li>
<li class="menu07">
<a href="/products_physical_care">
<div class="about_menu_name">Physical Care<br>（フィジカルケアー）</div>
<div class="about_menu_more"><i class="fa fa-chevron-circle-right" aria-hidden="true"></i>&nbsp;詳しく見る</div>
</a>
</li>
<li class="menu08">
<a href="/products_seminar">
<div class="about_menu_name">Seminar / Exercise<br>（セミナー／エクササイズ）</div>
<div class="about_menu_more"><i class="fa fa-chevron-circle-right" aria-hidden="true"></i>&nbsp;詳しく見る</div>
</a>
</li>
<li class="menu06">
<a href="/products_lavigo">
<div class="about_menu_name">LAVIGO<br>（ラヴィゴ）</div>
<div class="about_menu_more"><i class="fa fa-chevron-circle-right" aria-hidden="true"></i>&nbsp;詳しく見る</div>
</a>
</li>
<li class="menu02">
<a href="/products_led_sunshine_light">
<div class="about_menu_name">LED Sunshine Light<br>（LEDサンシャインライト）</div>
<div class="about_menu_more"><i class="fa fa-chevron-circle-right" aria-hidden="true"></i>&nbsp;詳しく見る</div>
</a>
</li>
<li class="menu09">
<a href="/products_whitemark">
<div class="about_menu_name">ホワイトマーク認定<br>（安全衛生優良企業公表制度）</div>
<div class="about_menu_more"><i class="fa fa-chevron-circle-right" aria-hidden="true"></i>&nbsp;詳しく見る</div>
</a>
</li>
</ul>
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