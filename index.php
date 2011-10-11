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

		$title 	=	'Markdown of<br /><code>'.$src.'</code>';
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
	<title>Markdown Viewer</title>
	<style>
		body{
			font-family:	Helvetica, Verdana, serif;
			margin:			0;
			padding:		0;
			background:		#EFEFEF;
		}
		header{
			border-bottom:	1px solid #CCC;
			background:		#333;
			box-shadow:		0 0 10px rgba(0,0,0,0.7);
		}
		header p{
			font-size:		1.6em;
			padding:		30px 5px;
			line-height:	1em;
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
			font-size:		0.4em;
			margin-top:		-2em;
		}
		article{
			background:		#FFF;	
			width:			80%;
			padding:		1.5em;
			border:			1px solid #EFEFE;
			margin:			2em auto;
			position:			relative;
			background:			#FFF;
			box-shadow:			0 1px 4px rgba(0, 0, 0, 0.3), 0 0 20px rgba(0, 0, 0, 0.1) inset;
			-moz-border-radius:	2px; 
			border-radius:		2px;
		}
		article:before,
		article:after{
			content:			'';
			position:			absolute; 
			z-index:			-2;
			bottom:				15px;
			left:				10px;
			width:				50%;
			height:				20%;
			max-width:			300px;
			-webkit-box-shadow:	0 15px 10px rgba(0, 0, 0, 0.7);   
			-moz-box-shadow:	0 15px 10px rgba(0, 0, 0, 0.7);
			box-shadow:			0 15px 10px rgba(0, 0, 0, 0.7);
			-webkit-transform:	rotate(-3deg);    
			-moz-transform:		rotate(-3deg);   
			-ms-transform:		rotate(-3deg);   
			-o-transform:		rotate(-3deg);
			transform:			rotate(-3deg);
		}
		article::after {
			right:				10px; 
			left:				auto;
			-webkit-transform:	rotate(3deg);   
			-moz-transform:		rotate(3deg);  
			-ms-transform:		rotate(3deg);  
			-o-transform:		rotate(3deg);
			transform:			rotate(3deg);
		}
		footer{
			font-size:		0.7em;
			border-top		1px solid #CCC;
			text-align:		center;
		}
		footer span{
			font-size:		2em;
			font-family:	serif;
			padding-top:	-2em;
			line-height:	2em	;
			margin:			0 0.3em;
			position:		relative;
			vertical-align:	baseline;
			top: -0.7em;
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
		<p><a href="https://github.com/WolfieZero/Markdown-Viewer-PHP">Markdown Viewer PHP</a> by <a href="http://wolfiezero.com/">Neil Sweeney</a> is licensed under a <a href="http://creativecommons.org/licenses/by-sa/3.0/">Creative Commons Attribution-ShareAlike 3.0 Unported License</a></p>
		<p><a href="http://michelf.com/projects/php-markdown/">PHP Markdown</a> is Copyright &copy; 2004-2009 <a href="http://michelf.com/">Michel Fortin</a> <span>&amp;</span> <a href="http://daringfireball.net/projects/markdown/">Markdown</a> is Copyright &copy; 2003-2006 <a href="http://daringfireball.net/">John Gruber</a>
	</footer>

</body>

</html>