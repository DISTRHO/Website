<?php

if (file_exists("/home/falktx/Personal/FOSS/")) {
    $ROOT = "/distrho";
} else {
    $ROOT = "";
}

$VERSION_DPF   = "v1.1";
$VERSION_PORTS = "2018-04-16";

$URL_DPF   = "https://github.com/DISTRHO/DPF-Plugins/releases/download/" . $VERSION_DPF;
$URL_PORTS = "https://github.com/DISTRHO/DISTRHO-Ports/releases/download/" . $VERSION_PORTS;

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>DISTRHO - Cross-Platform Audio Plugins</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="<?php echo $ROOT; ?>/css/reset.css" type="text/css" media="all">
  <link rel="stylesheet" href="<?php echo $ROOT; ?>/css/style.css" type="text/css" media="all">
<?php if ($CURRENT_PAGE == "index") { ?>
  <link rel="stylesheet" href="<?php echo $ROOT; ?>/css/style-news-mini.css" type="text/css" media="all">
<?php } else if ($CURRENT_PAGE == "plugins") { ?>
  <link rel="stylesheet" href="<?php echo $ROOT; ?>/css/style-news-full.css" type="text/css" media="all">
<?php } ?>
  <link rel='stylesheet' href='<?php echo $ROOT; ?>/fonts/fonts.css' type='text/css' media="all">
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
