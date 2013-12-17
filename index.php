<?php
$CURRENT_PAGE = "index";
include dirname(__FILE__) . DIRECTORY_SEPARATOR . "inc_header.php";
?>

<!-- #gallery -->
<section id="gallery">
  <div class="container" style="padding-top:60px;">
    <div class="rslides_container">
      <ul class="rslides" id="slider1">
	    <li><img src="slider/mini-series.jpg" alt=""></li>
        <li><img src="slider/drowaudio.jpg" alt=""></li>
        <li><a href="tal_plugins.php"><img src="slider/tal-plugins.jpg" alt=""></a></li>
		<li><img src="slider/pitcheddelay.jpg" alt=""></li>
		<li><img src="slider/klangfalter.jpg" alt=""></li>
      </ul>
    </div>
  </div>
</section>
<!-- /#gallery -->

<div class="main-box"><div class="container"><div class="inside"><div class="wrapper">
  <!-- aside -->
  <aside class="homeAside">
    <h2>Recent <span>News</span></h2>
    <!-- .news -->
    <ul class="news">
      <li>
        <figure><strong>18 May</strong><p>2012<p></figure>
        <h3>New release pack</h3>
        <p>We just released our own custom plugins and more ports now with LV2 versions</p>
      </li>
      <li>
        <figure><strong>07 Oct</strong><p>2011<p></figure>
        <h3>Updated ports, added more</h3>
        <p>We updated the Linux ports, and added a few more too.</p>
      </li>
      <li>
        <figure><strong>13 Sept</strong><p>2011<p></figure>
        <h3>Standalone versions</h3>
        <p>Standalone versions of the Arctican and TAL Plugins.</p>
      </li>
      <li>
        <figure><strong>13 Sept</strong><p>2011<p></figure>
        <h3>Arctican Plugins - Linux Port</h3>
        <p>These simple but useful plugins were ported to Linux.</p>
      </li>
    </ul>
    <!-- /.news -->
  </aside>

  <!-- content -->
  <section id="content">
    <article>
      <h2>Welcome to <span>DISTRHO</span></h2>
      <p>
        DISTRHO is an open-source project that provides Cross-Platform Audio Plugins, using <a href="http://www.rawmaterialsoftware.com/juce.php" target="_blank">Juce</a> and <a href="http://qt.nokia.com/products/" target="_blank">Qt4</a>.<br/>
        Our main target platform is Linux, but we support Windows and Mac too.
      </p>
      <p>
        We provide our own <a href="plugin.php">plugins</a> and <a href="ports.php">Linux ports</a>, everything being open-source.<br/>
        Standalones, LV2 and VST versions are available whenever possible.
      </p>
      <p>
        The latest release is '2012-05-18'. You can find the source code <a href="http://sourceforge.net/projects/distrho/files/" target="_blank">here</a>, together with pre-compiled binaries.<br/>
        Please check the respective <a href="plugin.php">plugins</a> and <a href="ports.php">[Linux] ports</a> sections to know more about those.
      </p>
    </article>
  </section>
</div></div></div></div>

<?php
include dirname(__FILE__) . DIRECTORY_SEPARATOR . "inc_footer.php";
?>
