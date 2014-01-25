<?php
$CURRENT_PAGE = "index";
include dirname(__FILE__) . DIRECTORY_SEPARATOR . "inc_header.php";
?>

<!-- #gallery -->
<section id="gallery">
  <div class="container" style="padding-top:60px">
    <div class="rslides_container">
      <ul class="rslides" id="slider1">
        <li><a href="plugins/mini-series"><img src="images/slider/mini-series.jpg"  alt=""></a></li>
        <li><a href="ports/drowaudio">    <img src="images/slider/drowaudio.jpg"    alt=""></a></li>
        <li><a href="ports/tal">          <img src="images/slider/tal-plugins.jpg"  alt=""></a></li>
        <li><a href="ports/pitcheddelay"> <img src="images/slider/pitcheddelay.jpg" alt=""></a></li>
        <li><a href="ports/klangfalter">  <img src="images/slider/klangfalter.jpg"  alt=""></a></li>
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
  <!-- /aside (left) -->

  <!-- content -->
  <section id="content">
    <article>
      <h2>Welcome to <span>DISTRHO</span></h2>
      <p>
        DISTRHO is an open-source project for <b>Cross-Platform Audio Plugins</b>.<br/>
      </p>
      <p>
        We provide our own <b><a href="/plugins">plugins</a></b> and <b><a href="/ports">Linux ports</a></b>, everything being <b>open-source</b>.<br/>
        LADSPA, DSSI, LV2 and VST versions are available for our own plugins, while the Linux ports have LV2 and VST.
      </p>
      <p>
        The last release is '2012-05-18'.<br/>
        You can find the <b>source code <a href="http://sourceforge.net/projects/distrho/files/" target="_blank">here</a></b>, together with pre-compiled binaries.<br/>
        Please check the <b><a href="/plugins">plugins</a></b> and <b><a href="/ports">[Linux] ports</a></b> sections to know more about those.
      </p>
    </article>
  </section>
  <!-- /content -->
</div></div></div></div>

<?php
include dirname(__FILE__) . DIRECTORY_SEPARATOR . "inc_footer.php";
?>
