<?php

function changeColor() {
    if ($GLOBALS["THEME"] == "white") {
        $GLOBALS["THEME"] = "black";
    } else {
        $GLOBALS["THEME"] = "white";
    }

    setcookie("color-theme", $GLOBALS["THEME"], time() + (365 * 24 * 60 * 60)); // expires in 1 year

    // force page reload
    header("location: " . $_server["script_name"]);
    exit();
}

if (file_exists("/Shared/Personal/FOSS/")) {
    $ROOT = "/distrho";
} else {
    $ROOT = "";
}

if (isset($_COOKIE["color-theme"])) {
    $GLOBALS["THEME"] = htmlspecialchars($_COOKIE["color-theme"]);
} else {
    $GLOBALS["THEME"] = "white";
}

if (isset($_POST["changeColorNow"])) {
    changeColor();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>DISTRHO - Cross-Platform Audio Plugins</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="<?php echo $ROOT; ?>/css-<?php echo $GLOBALS["THEME"]; ?>/reset.css" type="text/css" media="all">
  <link rel="stylesheet" href="<?php echo $ROOT; ?>/css-<?php echo $GLOBALS["THEME"]; ?>/style.css" type="text/css" media="all">
<?php if ($CURRENT_PAGE == "index") { ?>
  <link rel="stylesheet" href="<?php echo $ROOT; ?>/css-<?php echo $GLOBALS["THEME"]; ?>/style-mini-news.css" type="text/css" media="all">
<?php } ?>
  <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Raleway:200,300' type='text/css' media="all">
  <script type="text/javascript" src="<?php echo $ROOT; ?>/js/jquery-1.4.2.min.js" ></script>
<?php if ($CURRENT_PAGE == "index") { ?>
  <script type="text/javascript" src="<?php echo $ROOT; ?>/js/roundabout.js"></script>
  <script type="text/javascript" src="<?php echo $ROOT; ?>/js/roundabout_shapes.js"></script>
  <script type="text/javascript" src="<?php echo $ROOT; ?>/js/gallery_init.js"></script>
  <script type="text/javascript" src="<?php echo $ROOT; ?>/js/responsiveslides.min.js"></script>
<?php } else if ($CURRENT_PAGE == "plugins" || $CURRENT_PAGE == "ports") { ?>
  <script type="text/javascript" src="<?php echo $ROOT; ?>/js/prototype.js"></script>
  <script type="text/javascript" src="<?php echo $ROOT; ?>/js/lightbox.js"></script>
  <script type="text/javascript" src="<?php echo $ROOT; ?>/js/scriptaculous.js?load=effects,builder"></script>
  <script type="text/javascript">
<?php
    if ($CURRENT_PAGE == "plugins") {
        $menuClasses = array("miniseries", "prom");
    } else if ($CURRENT_PAGE == "ports") {
        $menuClasses = array("arctican", "dexed", "drowaudio", "easyssp", "juced", "klangfalter", "lufsmeter", "luftikus", "mverb", "nekobi", "obxd", "pitcheddelay", "tal", "stereosourceseparator", "vex", "wolpertinger");
    } else {
        $menuClasses = array();
    }
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
    <link rel="stylesheet" href="<?php echo $ROOT; ?>/css/ie/ie6.css" type="text/css" media="all">
  <![endif]-->
  <!--[if lt IE 9]>
    <script type="text/javascript" src="<?php echo $ROOT; ?>/js/html5.js"></script>
    <script type="text/javascript" src="<?php echo $ROOT; ?>/js/IE9.js"></script>
  <![endif]-->
</head>
<body>
<header>
  <div class="container">
    <h1><a href="<?php echo $ROOT; ?>/"><img src="<?php echo $ROOT; ?>/images/distrho-logo.png" alt="DISTRHO"/></a></h1>
    <nav>
      <ul>
        <li><a href="<?php echo $ROOT; ?>/"        <?php if ($CURRENT_PAGE == "index")   { ?> class="current" <?php } ?>>Home</a></li>
        <li><a href="<?php echo $ROOT; ?>/news"    <?php if ($CURRENT_PAGE == "news")    { ?> class="current" <?php } ?>>News</a></li>
        <li><a href="<?php echo $ROOT; ?>/plugins" <?php if ($CURRENT_PAGE == "plugins") { ?> class="current" <?php } ?>>Plugins</a></li>
        <li><a href="<?php echo $ROOT; ?>/ports"   <?php if ($CURRENT_PAGE == "ports")   { ?> class="current" <?php } ?>>Ports</a></li>
        <li><a href="<?php echo $ROOT; ?>/about"   <?php if ($CURRENT_PAGE == "about")   { ?> class="current" <?php } ?>>About</a></li>
      </ul>
    </nav>
  </div>
</header>
