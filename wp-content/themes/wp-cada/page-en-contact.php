<?php
/*
Template Name: page-en-contact
*/
?>


<?php get_header(en); ?>

<div id="contentsArea">
<div class="mainImg"><img src="/img/mainimg.jpg" alt=""/></div>
<h1 class="h_1">Contact Us</h1>
<div class="contact mb40">
<form id="contactform" name="contactform" method="post" action="/contact/mail_e.php">

<div class="formBlock clearfix">
<label for="yourname">First name※</label>
<div><input type="text" name="First name" id="yourname"></div>
</div>
<div class="formBlock clearfix">
<label for="yourname_kana">last name※</label>
<div><input type="text" name="last name" id="yourname_kana"></div>
</div>
<div class="formBlock clearfix">
<label>Address※</label>
<div><span>zip code<input type="text" name="zip code" class="postalcode" size="10" maxlength="8" onKeyUp="AjaxZip3.zip2addr(this,'','都道府県','区市町村名以下');"></span>
<span>Country&nbsp;<input type="text" name="Country" class="postalcode" size="20"></span>
<span>state&nbsp;<input type="text" name="state" class="addressform" size="60"></span>
</div>
</div>
<div class="formBlock clearfix">
<label for="yourmail">your mail address※</label>
<div><input type="email" name="your mail address" id="yourmail"></div>
</div>
<div class="formBlock clearfix">
<label for="msg">Content of inquiry※</label>
<div><textarea name="Content of inquiry" id="msg"></textarea></div>
</div>
<div style="margin-bottom:20px;">
· Depending on the content of the inquiry, we may not be able to respond to your request or when we receive your time.<br>
· If you use Domain Designation Reception, please set the reception permission from domain cada2014.jp.<br>
· Please refer to here for inquiries regarding our <a href="/policy_en">privacy policy</a> and personal information. <br>
If you agree with the above, please click on the "Confirm" below and proceed to the next screen.
</div>
<div class="contactForm_submit"><input id="chk" type="submit" value="confirm"></div>
</form>
</div>
<div class="pagetop"><a href="#header"><img src="/img/pagetop.png" alt="ページ上部へ戻る"/></a></div>
</div>
<?php get_footer(en); ?>