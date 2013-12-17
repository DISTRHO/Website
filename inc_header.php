<?php

if (isset($_COOKIE["color-theme"]))
    $GLOBALS["THEME"] = htmlspecialchars($_COOKIE["color-theme"]);
else
    $GLOBALS["THEME"] = "white";

function changeColor()
{
    if ($GLOBALS["THEME"] == "white")
       $GLOBALS["THEME"] = "black";
    else
       $GLOBALS["THEME"] = "white";

    setcookie("color-theme", $GLOBALS["THEME"], time() + (365 * 24 * 60 * 60)); // expires in 1 year
}

if (isset($_POST['changeColorNow']))
    changeColor();

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>DISTRHO - Cross-Platform Audio Plugins</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="/css-<?php echo $GLOBALS["THEME"]; ?>/reset.css" type="text/css" media="all">
  <link rel="stylesheet" href="/css-<?php echo $GLOBALS["THEME"]; ?>/style.css" type="text/css" media="all">
<?php if ($CURRENT_PAGE == "index") { ?>
  <link rel="stylesheet" href="/css-<?php echo $GLOBALS["THEME"]; ?>/style-mini-news.css" type="text/css" media="all">
<?php } ?>
  <script type="text/javascript" src="/js/jquery-1.4.2.min.js" ></script>
  <link href='http://fonts.googleapis.com/css?family=Raleway:200,300' rel='stylesheet' type='text/css'>
  <!--<link href='http://fonts.googleapis.com/css?family=Cutive+Mono' rel='stylesheet' type='text/css'>-->
<?php if ($CURRENT_PAGE == "index") { ?>
  <script type="text/javascript" src="/js/roundabout.js"></script>
  <script type="text/javascript" src="/js/roundabout_shapes.js"></script>
  <script type="text/javascript" src="/js/gallery_init.js"></script>
  <script type="text/javascript" src="/js/responsiveslides.min.js"></script>
<?php } else if ($CURRENT_PAGE == "plugins" || $CURRENT_PAGE == "ports") { ?>
  <script type="text/javascript" src="/js/prototype.js"></script>
  <script type="text/javascript" src="/js/lightbox.js"></script>
  <script type="text/javascript" src="/js/scriptaculous.js?load=effects,builder"></script>
  <script type="text/javascript">
<?php
    if ($CURRENT_PAGE == "plugins")
        $menu_classes = array("distrho");
    else if ($CURRENT_PAGE == "ports")
        $menu_classes = array("arctican", "drowaudio", "juced", "tal", "highlife", "hybridreverb2", "wolpertinger");
    else
        $menu_classes = array();
?>
    jQuery(document).ready(function() {
<?php for ($i = 0; $i < count($menu_classes); $i++) { ?>
        jQuery('img.menu_class_<?php echo $menu_classes[$i]; ?>').click(function () {
            jQuery('ul.the_menu_<?php echo $menu_classes[$i]; ?>').slideToggle('fast');
        });
<?php } ?>
    });
  </script>
<?php } ?>
  <script>

    $(function () {
      // Slideshow 1
      $(".rslides").responsiveSlides({
          nav: false,
          pager: true,
          namespace: "centered-btns"
      });
    });
  </script>
  <!--[if lt IE 7]>
    <link rel="stylesheet" href="css/ie/ie6.css" type="text/css" media="all">
  <![endif]-->
  <!--[if lt IE 9]>
    <script type="text/javascript" src="js/html5.js"></script>
    <script type="text/javascript" src="js/IE9.js"></script>
  <![endif]-->
</head>
<body>
<header>
  <div class="container">
    <h1><a href="/index.html"><img src="/images/distrho-logo.png" alt="DISTRHO"/></a></h1>
    <nav>
      <ul>
        <li><a href="/index.php"   <?php if ($CURRENT_PAGE == "index")   { ?> class="current" <?php } ?>>Home</a></li>
        <li><a href="/news.php"    <?php if ($CURRENT_PAGE == "news")    { ?> class="current" <?php } ?>>News</a></li>
        <li><a href="/plugins.php" <?php if ($CURRENT_PAGE == "plugins") { ?> class="current" <?php } ?>>Plugins</a></li>
        <li><a href="/ports.php"   <?php if ($CURRENT_PAGE == "ports")   { ?> class="current" <?php } ?>>Ports</a></li>
        <li><a href="/about.php"   <?php if ($CURRENT_PAGE == "about")   { ?> class="current" <?php } ?>>About</a></li>
      </ul>
    </nav>
  </div>
  <p style="color:white; font-size:1.2em;"> &nbsp;THIS PAGE IS UNDER CONSTRUCTION</p>
</header>
