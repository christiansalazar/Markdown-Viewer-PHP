<?php

if( isset($_GET['adv']) ) {
	$folder	= 'php-markdown-extra-1.2.4';

} else {
	$folder	= 'php-markdown-1.0.1n';

}

if( isset($_GET['src']) ) {
	require($folder.'/markdown.php');

	$src	=	$_GET['src'];
	$file	=	@fopen($src, 'r');

	if( $file !== false ){

		$fSize	=	filesize($src);
		$text	=	fread($file, $fSize);
		fclose($file);

		$title 	=	'Markdown of "'.$src.'"';
		$html	=	Markdown($text);

	} else {

		$title 	=	'Could not find "'.$src.'"';
		$html	=	'<p>The file could not be found; please check that the file directory is correct</p>';

	}

} else {

	$title	=	'No src Defined';
	$html	= 	'<h1>'.$title.'</h1>'.
				'<p>Please make sure you have the query <code>src=FOLDER/FILE</code> in the URL</p>';
}
?><!DOCTYPE html>
<html>

<head>
	<title><?php echo $title ?></title>
	<style>
		body{
			font-family:	Helvetica, Verdana, serif;
			margin:			0;
			padding:		0;
		}
		header{
			border-bottom:	1px solid #CCC;
			background:		#333;
		}
		header p{
			font-size:		2em;
			line-height:	2em;
			margin:			0;
			text-align:		center;
			color:			#EFEFEF;
		}
		header span{
			<?php 
				if( isset($_GET['adv']) ) :
					echo 'display: block;';
				else :
					echo 'display: none;';
				endif;
			?>
		}
		article{
			width:			80%;
			padding:		1em;
			border:			1px solid #CCC;
			margin:			2em auto;
		}
	</style>
</head>

<body>

	<header>
		<p><?php echo $title ?> <span>Advance View</span></p>
	</header>

	<article>
		<?php echo $html ?>
	</article>

	<footer>
		
	</footer>

</body>

</html>