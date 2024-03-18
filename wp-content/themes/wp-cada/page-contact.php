<?php
/*
Template Name: page-contact
*/
?>


<?php get_header(); ?>

<div id="contentsArea">
<div class="mainImg"><img src="/img/mainimg.jpg" alt=""/></div>
<h1 class="h_1">お問合せ</h1>
<div class="contact mb40">
<form id="contactform" name="contactform" method="post" action="/contact/mail.php">

<div class="formBlock clearfix">
<label for="yourname">お名前※</label>
<div><input type="text" name="お名前" id="yourname"></div>
</div>
<div class="formBlock clearfix">
<label for="yourname_kana">お名前（カナ）※</label>
<div><input type="text" name="お名前（カナ）" id="yourname_kana"></div>
</div>
<div class="formBlock clearfix">
<label>ご住所※</label>
<div><span>郵便番号（ハイフンなしの７桁）<input type="text" name="郵便番号" class="postalcode" size="10" maxlength="8" onKeyUp="AjaxZip3.zip2addr(this,'','都道府県','区市町村名以下');"></span>
<span>都道府県&nbsp;<input type="text" name="都道府県" class="postalcode" size="20"></span>
<span>区市町村名以下&nbsp;<input type="text" name="区市町村名以下" class="addressform" size="60"></span>
</div>
</div>
<div class="formBlock clearfix">
<label for="yourmail">メールアドレス※</label>
<div><input type="email" name="メールアドレス" id="yourmail"></div>
</div>
<div class="formBlock clearfix">
<label for="msg">お問い合わせ内容※</label>
<div><textarea name="お問い合わせ内容" id="msg"></textarea></div>
</div>
<div style="margin-bottom:20px;">
・お問い合わせの内容により、回答にお時間をいただく場合や、ご要望にお応えできない場合がございます。<br>
・ドメイン指定受信をご利用の場合は、ドメインcada2014.jpからの受信許可設定をお願いいたします。<br>
・弊社のプライバシーポリシー、個人情報に関するお問い合わせ先については、<a href="/policy">こちら</a>をご参照ください。<br>
<span style="margin-top:10px; font-weight:strong; font-size:0.9em;">上記についてご同意いただける場合は、下記の「確認」をクリックしていただき、次画面にお進みください。</span>
</div>
<div class="contactForm_submit"><input id="chk" type="submit" value="確認"></div>
</form>

</div>


<div class="pagetop"><a href="#header"><img src="/img/pagetop.png" alt="ページ上部へ戻る"/></a></div>
</div>
<?php get_footer(); ?>