<?php
$CURRENT_PAGE = "index";
include dirname(__FILE__) . DIRECTORY_SEPARATOR . "inc_header.php";
?>

<!-- #gallery -->
<section id="gallery">
  <div class="container" style="padding-top:60px">
    <div class="rslides_container">
      <ul class="rslides" id="slider1">
        <li><img src="images/slider/mini-series.jpg"  alt=""></li>
        <li><img src="images/slider/drowaudio.jpg"    alt=""></li>
        <li><img src="images/slider/klangfalter.jpg"  alt=""></li>
        <li><img src="images/slider/pitcheddelay.jpg" alt=""></li>
        <li><img src="images/slider/tal-plugins.jpg"  alt=""></li>
      </ul>
    </div>
  </div>
</section>
<!-- /#gallery -->

<div class="main-box"><div class="container"><div class="inside"><div class="wrapper">
  <!-- aside (left) -->
  <aside class="homeAside">
    <h2>Recent <span>News</span></h2>
    <!-- .news -->
    <ul class="news">
      <li>
        <figure><strong>13 Mar</strong><p>2018<p></figure>
        <h3>New release and fixes</h3>
        <p>New plugins, lots of internal changes.</p>
      </li>
      <li>
        <figure><strong>26 Aug</strong><p>2014<p></figure>
        <h3>New plugins and minor fixing</h3>
        <p>4 new Linux ports and minor fixes.</p>
      </li>
      <li>
        <figure><strong>16 July</strong><p>2014<p></figure>
        <h3>New release pack</h3>
        <p>Lots of new plugins and fixes!</p>
      </li>
      <li>
        <figure><strong>18 May</strong><p>2012<p></figure>
        <h3>New release pack</h3>
        <p>We just released our own custom plugins and more ports now with LV2 versions.</p>
      </li>
    </ul>
    <!-- /.news -->
  </aside>
  <!-- /aside (left) -->

  <!-- content -->
  <section id="content">
    <article>
      <h2>Welcome to <span>DISTRHO</span></h2>
      <p>
        DISTRHO is an open-source project for <b>Cross-Platform Audio Plugins</b>.<br/>
      </p>
      <p>
        We provide our own <b><a href="<?php echo $ROOT; ?>/plugins">plugins</a></b> and <b><a href="<?php echo $ROOT; ?>/ports">Linux ports</a></b>, everything being <b>open-source</b>.<br/>
        LV2 and VST versions are always available, sometimes with LADSPA and DSSI as well.
      </p>
      <p>
        The last release is '2018-05-10'.<br/>
        You can find the entire <b>source code at <a href="https://github.com/DISTRHO/" target="_blank">https://github.com/DISTRHO/</a></b>.
      </p>
      <p>
        Check the <b><a href="<?php echo $ROOT; ?>/plugins">plugins</a></b> and <b><a href="<?php echo $ROOT; ?>/ports">(Linux) ports</a></b> sections to see the full list or download binaries.<br/>
      </p>
    </article>
  </section>
  <!-- /content -->
</div></div></div></div>

<?php
include dirname(__FILE__) . DIRECTORY_SEPARATOR . "inc_footer.php";
?>
