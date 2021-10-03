<?php
$CURRENT_PAGE = "index";
include "inc_header.php";
?>

<!-- #gallery -->
<!--
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
-->
<!-- /#gallery -->

<div class="main-box">
<div class="container home">
    <!-- aside -->
    <aside class="aside">
        <h2>Recent <span>News</span></h2>
        <!-- .news -->
        <ul class="news">
        <li>
            <figure><strong>13 Mar</strong><p>2018<p></figure>
            <div class="content">
                <h3>New release and fixes</h3>
                <p>New plugins, lots of internal changes.</p>
            </div>
        </li>
        <li>
            <figure><strong>26 Aug</strong><p>2014<p></figure>
            <div class="content">
                <h3>New plugins and minor fixing</h3>
                <p>4 new Linux ports and minor fixes.</p>
            </div>
        </li>
        <li>
            <figure><strong>16 July</strong><p>2014<p></figure>
            <div class="content">
                <h3>New release pack</h3>
                <p>Lots of new plugins and fixes!</p>
            </div>
        </li>
        <li>
            <figure><strong>18 May</strong><p>2012<p></figure>
            <div class="content">
                <h3>New release pack</h3>
                <p>We just released our own custom plugins and more ports now with LV2 versions.</p>
            </div>
        </li>
        </ul>
        <!-- /.news -->
    </aside>
    <!-- /aside (left) -->

    <!-- content -->
    <section id="content"><article>
        <h2>Welcome to <span>DISTRHO</span></h2>
        <p>
            DISTRHO is an open-source project for <b>Cross-Platform Audio Plugins</b>.<br/>
        </p>
        <p>
            The project are split into 3 main categories:
        </p>
        <div class="padded-left">
            <h3>DPF-Plugins</h3>
            <p>
                Plugins made with our own plugin framework,
                either created by us or ports of existing plugins to DPF style.<br/>
                Typically available as LV2, VST2 and VST3, with LADSPA and DSSI as well where possible.
            </p>
            <h3>DIE-Plugins</h3>
            <p>
                Plugins imported into the DISTRHO project for easy packaging.<br/>
                Imported plugins have their LV2 bundle and URIs renamed, in order to make them compatible with the originals.<br/>
                Currently only available as LV2.
            </p>
            <h3>DISTRHO-Ports</h3>
            <p>
                JUCE-based plugins ported to Linux and LV2, also available as VST2 and sometimes VST3.
            </p>
        </div>
        <p>
            Everything we release is <b>free and open-source</b>.<br/>
            You can find the source code for all the plugins, ports and even this website at
            <a href="https://github.com/DISTRHO" target="_blank">https://github.com/DISTRHO</a>.
        </p>
    </article></section>
    <!-- /content -->
</div></div>

<?php
include "inc_footer.php";
?>
