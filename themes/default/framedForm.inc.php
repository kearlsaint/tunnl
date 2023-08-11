<style type="text/css">
@import url(./css/lato/typefaces.css);
#Garlic, #Garlic * {
	box-sizing: border-box;
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	-o-box-sizing: border-box;
	-ms-box-sizing: border-box;
	font-family: -apple-system, BlinkMacSystemFont, "HelveticaNeue-Light", "Helvetica Neue Light", "Lato", "Segoe UI Light", "Segoe UI", "Open Sans", "Helvetica", "Lucida Grande", "Tahoma", serif !important;
	font-size: 12px;
	font-weight: 400;
}
#Garlic {
	position: fixed;
	z-index: 100001;
	top: 0px;
	left: 0px;
	display: block;
	width: 100%;
	background: #555;
}
#Garlic * {
	min-height: 44px;
	max-height: 44px;
	height: 44px;
	line-height: 44px;
	vertical-align: middle;
	padding: 0;
	margin: 0;
}
#Garlic form{
	max-width: 960px;
	min-width: 300px;
	margin: 0px auto;
	display: flex !important;
	flex-wrap: no-wrap;
}
#Garlic > form > a :hover {
	background: #000;
}
#Garlic > form > a {
	text-decoration: none;
	margin-left: 5px;
	margin-right: 5px;
	margin-top: -1px;
	background: transparent;
	display: inline-block;
}
#Garlic input{
	border: 0.5px solid #000 !important;
	border-radius: 4px !important;
	background: #666 !important;
	color: #fff !important;
	outline: none !important;
	display: inline-block !important;
	line-height: 20px !important;
	max-height: 32px !important;
	min-height: 32px !important;
	height: 32px !important;
	margin-top: 5px !important;
	margin-right: 5px !important;
	-webkit-appearance: none !important;
}
#Garlic input:hover,
#Garlic input:active,
#Garlic input:focus{
	border-bottom:1px solid #ffc926 !important;
	background: #6f6f6f !important;
}
#Garlic [type=text] {
	flex-grow: 3 !important;
	padding-left: 5px !important;
	padding-right: 5px !important;
}
#Garlic [type=submit] {
	padding-left:10px !important;
	padding-right:10px !important;
	font-size: 16px !important;
}
#Garlic [type=button] {
	position: relative !important;
	left: -81px !important;
	margin-right: -32px !important;
	width: 32px !important;
	border-color: transparent !important;
	background-color: transparent !important;
	font-size: 20px !important;
}
body{
	margin-top: 44px !important;
}
</style>
<div id="Garlic">
	<form action="<?=$proxy?>/includes/process.php?action=update" target="_top" method="post" onsubmit="return updateLocation(this);">
		<a href="<?=$proxy?>"><img src="garlic.png" alt="Garlic." title="Home"></a>
		<input type="text" name="u" id="Garlic_Url" value="<?=$url?>" placeholder="http://" formnovalidate="formnovalidate">
		<input type="submit" value="&rarr;">
		<input type="button" value="&times;" id="Garlic_Clear">
		<!--a href="{$proxy}/includes/process.php?action=clear-cookies&return={$return}" target="_top">clear cookies</a-->
		<div style="display:none;visibility:hidden;">
		<?php foreach($toShow as $details) { ?>
			<input type="checkbox" name="<?=$details['name']?>" id="<?=$details['name']?>"<?=$details['checked']?> />
		<?php } ?>
		</div>
	</form>
	<script>$(function() {$("#Garlic_Clear").on("click tap", function(e) { $('#Garlic_Url').val('http://').focus(); })})</script>
</div>
<!--[proxied]-->