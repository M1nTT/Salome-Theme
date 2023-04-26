<?php
/**
 * Newsletter
 *
 * @package custom
 */
 $this->need('header.php'); ?>

<div align=center>
    <div style="max-width: 600px;">

<!-- 以下代码来源于Mailchimp,请先建立自动推送，再更新以下代码 -->

<!-- Begin Mailchimp Signup Form -->
<link href="//cdn-images.mailchimp.com/embedcode/classic-071822.css" rel="stylesheet" type="text/css">
<style type="text/css">
	#mc_embed_signup{background:#FFF; clear:left; font:14px Helvetica,Arial,sans-serif; }
	/* Add your own Mailchimp form style overrides in your site stylesheet or in this style block.
	   We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
</style>
<div id="mc_embed_signup">
    <form action="https://tongmingzhi.us21.list-manage.com/subscribe/post?u=0e624b115b5d1899bf7065374&amp;id=ff98014394&amp;f_id=00c4afe1f0" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
        <div id="mc_embed_signup_scroll">
        <h2>邮件订阅博客 - Newsletter</h2>
        <div class="indicates-required"><span class="asterisk">*</span> 必须输入 </div>
<div class="mc-field-group">
	<label for="mce-EMAIL"> 邮箱地址 <span class="asterisk">*</span>
</label>
	<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL" required>
	<span id="mce-EMAIL-HELPERTEXT" class="helper_text"></span>
</div>
	<div id="mce-responses" class="clear foot">
		<div class="response" id="mce-error-response" style="display:none"></div>
		<div class="response" id="mce-success-response" style="display:none"></div>
	</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_0e624b115b5d1899bf7065374_ff98014394" tabindex="-1" value=""></div>
        <div class="optionalParent">
            <div class="clear foot">
                <input type="submit" value="提交" name="subscribe" id="mc-embedded-subscribe" class="button">

                <br>
                <br>
                <br>
                
            </div>
        </div>
    </div>
</form>
</div>
<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';fnames[3]='ADDRESS';ftypes[3]='address';fnames[4]='PHONE';ftypes[4]='phone';fnames[5]='BIRTHDAY';ftypes[5]='birthday';}(jQuery));var $mcj = jQuery.noConflict(true);</script>

        <div align="center">
        <p class="brandingLogo"><a href="http://eepurl.com/ipvu5E" title="Mailchimp - email marketing made easy and fun"><img src="https://eep.io/mc-cdn-images/template_images/branding_logo_text_dark_dtp.svg"></a></p>
        </div> 
        <br>
 <!--End mc_embed_signup-->

<!-- 以上代码来源于Mailchimp,请先建立自动推送，再更新以上代码 -->

    </div>
 </div>

        <?php $this->need('footer.php'); ?>