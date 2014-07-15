<?php
$CURRENT_PAGE = "plugins";
include dirname(__FILE__) . DIRECTORY_SEPARATOR . "inc_header.php";
?>

<div class="main-box"><div class="container">

  <!-- Mini-Series -->
  <div class="inside"><div class="wrapper">
    <aside>
      <p style="font-size:0.8em; text-align:right">
        <a href="images/screenshots/distrho-3bandeq.png"       rel="lightbox[miniseries]"><img src="images/screenshots/distrho-3bandeq_thumb.png" alt=""/></a><br/>3-Band EQ&nbsp;&nbsp;
        <a href="images/screenshots/distrho-3bandsplitter.png" rel="lightbox[miniseries]" class="hidden"></a>
        <a href="images/screenshots/distrho-pingpongpan.png"   rel="lightbox[miniseries]" class="hidden"></a>
      </p>
    </aside>
    <section class="content">
      <article>
        <h2>DISTRHO Mini Series</h2>
        <p>A small collection of small but useful plugins, based on the good old <a href="http://loser.asseca.com/" target="_blank">LOSER-Dev Plugins</a> (now offline).</p>
        <p>This collection currently includes:<br/>
          - 3-Band EQ<br/>
          - 3-Band Splitter<br/>
          - Ping Pong Pan<br/>
        </p>
        <div class="button">
          <img src="images/download_<?php echo $GLOBALS["THEME"]; ?>.png" width="92" height="16" class="menu_class_miniseries" alt="download" />
          <ul class="the_menu the_menu_miniseries">
            <li><a href="#" target="_blank">DISTRHO Mini-Series - Linux</a></li>
            <li><a href="#" target="_blank">DISTRHO Mini-Series - MacOS</a></li>
            <li><a href="#" target="_blank">DISTRHO Mini-Series - Windows</a></li>
          </ul>
        </div>
      </article>
    </section>
  </div></div>

  <!-- ProM -->
  <div class="inside"><div class="wrapper">
    <aside>
      <p style="font-size:0.8em; text-align:right">
        <a href="images/screenshots/distrho-prom.png" rel="lightbox[prom]"><img src="images/screenshots/distrho-prom_thumb.png" alt=""/></a><br/>ProM&nbsp;&nbsp;
      </p>
    </aside>
    <section class="content">
      <article>
        <h2>DISTRHO ProM</h2>
        <p><a href="http://projectm.sourceforge.net/" target="_blank">projectM</a> is an awesome music visualizer.</p>
        <p>DISTRHO ProM makes it work as an audio plugin (LV2 and VST).</p>
        <div class="button">
          <img src="images/download_<?php echo $GLOBALS["THEME"]; ?>.png" width="92" height="16" class="menu_class_prom" alt="download" />
          <ul class="the_menu the_menu_prom">
            <li><a href="#" target="_blank">DISTRHO ProM - Linux</a></li>
            <!--<li><a href="#" target="_blank">DISTRHO ProM - MacOS</a></li>-->
            <!--<li><a href="#" target="_blank">DISTRHO ProM - Windows</a></li>-->
          </ul>
        </div>
      </article>
    </section>
  </div></div>

</div></div>

<?php
include dirname(__FILE__) . DIRECTORY_SEPARATOR . "inc_footer.php";
?>
