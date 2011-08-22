<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
<head>
<title>Museu Virtual <?php echo $title_for_layout?></title>
<!-- Include external files and scripts here (See HTML helper for more info.) -->
<?php echo $scripts_for_layout ?>
<meta name="title" content="Museu Virtual" />
<meta name="description" content="Esta é a página do 3o. Encontro Nacional de Estudos da Imagem." />
<meta name="keywords" content="historia, ledi, uel, eneimagem, evento nacional" />
<link rel="stylesheet" type="text/css" href="/cakephp/museu/webroot/css/reset.css" /> 
<link rel="stylesheet" type="text/css" href="/cakephp/museu/webroot/css/default.css" /> 

<?php  echo $html->meta('icon','../img/uel-favicon.png', array
('type' =>'icon')); ?>

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-19202271-2']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

</head>
<body>
	<div id="container">
	   <div class = "header">
		  <object type="application/x-shockwave-flash" data="/cakephp/museu/webroot/img/30.swf" width="1000" height="355">
                <param name="movie" value="images/30.swf" />
      </object>
      <!-- div header -->
      </div>
    <div class = "clear"> </div>
    <div class = "workzone">      
		<div>
			<?php echo $content_for_layout ?>
<div class="clear"></div>
        <!-- div class header -->
        </div>
        <!-- div workzone -->
        </div>
        <div class="clear"></div>
        <div class="footer">
        <div class="footer-left">
            <p>&copy; Museu Virtual São Jerônimo.</p>
        </div>

        <div class="footer-right">
            <p>Desenvolvido por Miguel Akira</p>
        </div>

        <div class="clear"></div>
    <!-- div foter -->
    </div>
    <!-- div -->
    </div>
    <div class="clear"></div>
</div>
</body>
</html>

