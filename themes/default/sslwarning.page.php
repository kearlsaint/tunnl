<!DOCTYPE html>
<html>
<head>
<title>Garlic</title>
<meta name="author" content="kearlsaint@gmail.com">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">

<meta name="author" content="kearlsaint@gmail.com">
<meta name="support" content="http://m.me/kearlsaint">
<meta name="copyright" content="<?=date('Y')?>">


<base href="<?php echo PHPROXY_URL; ?>/">

<meta name="apple-mobile-web-app-title" content="Garlic.">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta property="og:title" content="Garlic."> 
<meta property="og:description" content="don't cry | free website proxy"> 
<meta property="og:url" content="<?=$_SERVER["SERVER_NAME"]?>" >

<meta property="og:image" content="garlic.png">
<link rel="apple-touch-icon" href="/ios-touch-icon.png">
<link rel="shortcut icon" href="/garlic.png" sizes="16x16 32x32" type="image/png">
<link rel="icon" href="/garlic.png" sizes="16x16 32x32" type="image/png">
<link rel="icon"href="/favicon.ico" type="image/x-icon">

<script src="./$.js"></script>
<?=injectionJS();?>

<script type="text/javascript">
window.addDomReadyFunc(function() {
	document.getElementById('options').style.display = 'none';
	document.getElementById('input').focus();
});
disableOverride();
</script>
<link rel="stylesheet" href="/css/normalize.css">
<link rel="stylesheet" href="/css/lato/typefaces.css">
<link rel="stylesheet" href="/css/site.css">

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-57422211-3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-57422211-3');
</script>

</head>
<body>
<section>
	<header><img src="./garlic.png" alt="Garlic." style="max-height: 100%"></header>
	<article>
		You will now be on a secure connection[SSL]<br><br>
		<form action="includes/process.php" method="get">
			<input type="button" value="&larr; BACK" onclick="window.location='.';" >
			<input type="hidden" name="action" value="sslagree" >
			<input type="submit" value="OK &rarr;" >
		</form>
	</article>
	<footer style="padding: 44px 0">
		<a href="http://kearlsaint.com/">&ldquo;It's just garlic; don't cry<hr style="border-top: none">Made with &hearts; from PH<br>&copy; <?=date('Y')?></a>
	</footer>
</section>
</body>
</html>