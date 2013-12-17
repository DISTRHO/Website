<?php
$CURRENT_PAGE = "plugins";
include dirname(__FILE__) . DIRECTORY_SEPARATOR . "inc_header.php";
?>

<div class="main-box"><div class="container">

  <div class="inside"><div class="wrapper">
    <aside>
      <p style="font-size:0.8em; text-align:right">
        <a href="screenshots/3bandeq.png"       rel="lightbox[distrho]"><img src="images/thumb_3bandeq.png" alt=""/></a><br/>3-Band EQ&nbsp;&nbsp;
        <a href="screenshots/3bandsplitter.png" rel="lightbox[distrho]" class="hidden"></a>
        <a href="screenshots/pingpongpan.png"   rel="lightbox[distrho]" class="hidden"></a>
      </p>
    </aside>
    <section class="content">
      <article>
        <h2>DISTRHO Mini Series</h2>
        <p>A small collection of small but useful plugins, based on the good old <a href="http://loser.asseca.com/" target="_blank">LOSER-Dev Plugins</a>.</p>
        <p>This collection currently includes:
          <ul>
            <li>3-Band EQ</i>
            <li>3-Band Splitter</i>
            <li>Ping Pong Pan</i>
          </ul>
        <p>
        <p><div class="button">
          <img src="images/button_<?php echo $GLOBALS["THEME"]; ?>.png" width="92" height="16" class="menu_class_distrho" />
          <ul class="the_menu the_menu_distrho">
            <li><a href="http://sourceforge.net/projects/distrho/files/Plugins/distrho-plugins_linux32_20120518.7z/download" target="_blank">DISTRHO Plugins - Linux 32bit</a></li>
            <li><a href="http://sourceforge.net/projects/distrho/files/Plugins/distrho-plugins_linux64_20120518.7z/download" target="_blank">DISTRHO Plugins - Linux 64bit</a></li>
            <li><a href="http://sourceforge.net/projects/distrho/files/Plugins/distrho-plugins_win32_20120518-2.7z/download" target="_blank">DISTRHO Plugins - Windows 32bit</a></li>
          </ul>
        </p></div>
      </article>
    </section>
  </div></div>

  <!-- TODO - remove dummy space when there are more plugins -->
  <div class="inside"><div class="wrapper">
    <section class="content">
      <article>
        <p><br><br><br></p>
      </article>
    </section>
  </div></div>

</div></div>

<?php
include dirname(__FILE__) . DIRECTORY_SEPARATOR . "inc_footer.php";
?>
