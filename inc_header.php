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
  <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Raleway:200,300' type='text/css' media="all">
  <script type="text/javascript" src="/js/jquery-1.4.2.min.js" ></script>
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
        $menuClasses = array("miniseries", "nekobi");
    else if ($CURRENT_PAGE == "ports")
        $menuClasses = array("arctican", "drowaudio", "juced", "tal", "wolpertinger");
    else
        $menuClasses = array();
?>
    jQuery(document).ready(function() {
<?php for ($i = 0; $i < count($menuClasses); $i++) { ?>
        jQuery('img.menu_class_<?php echo $menuClasses[$i]; ?>').click(function() {
            jQuery('ul.the_menu_<?php echo $menuClasses[$i]; ?>').slideToggle('fast');
        });
<?php } ?>
    });
  </script>
<?php } ?>
  <script type="text/javascript">
    $(function() {
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
        <li><a href="/"        <?php if ($CURRENT_PAGE == "index")   { ?> class="current" <?php } ?>>Home</a></li>
        <li><a href="/news"    <?php if ($CURRENT_PAGE == "news")    { ?> class="current" <?php } ?>>News</a></li>
        <li><a href="/plugins" <?php if ($CURRENT_PAGE == "plugins") { ?> class="current" <?php } ?>>Plugins</a></li>
        <li><a href="/ports"   <?php if ($CURRENT_PAGE == "ports")   { ?> class="current" <?php } ?>>Ports</a></li>
        <li><a href="/about"   <?php if ($CURRENT_PAGE == "about")   { ?> class="current" <?php } ?>>About</a></li>
      </ul>
    </nav>
  </div>
  <p style="color:red; font-size:1.2em;"> &nbsp;THIS PAGE IS UNDER CONSTRUCTION</p>
</header>
