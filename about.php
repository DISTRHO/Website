<?php
$CURRENT_PAGE = "about";
include dirname(__FILE__) . DIRECTORY_SEPARATOR . "inc_header.php";
?>

<div class="main-box"><div class="container"><div class="inside"><div class="wrapper">
  <table><tr><td>
    <!-- intro -->
    <aside class="homeAside">
      <h2>About <span>The Project</span></h2>
      <p>DISTRHO is an open-source project that provides Cross-Platform Audio Plugins.</p>
      <p>Our main target platform is Linux, but we support Windows and Mac too.</p>
      <p>Our entire source code is available in GitHub: <a href="https://github.com/DISTRHO/" target="_blank">https://github.com/DISTRHO/</a></p>
      <p>Third parties are welcome to share their code with us if they want to see a Linux port. Contact the project leader, falkTX, if you're interested on this.</p>
    </aside>
  </td><td>
    <!-- content -->
    <section id="content">
      <article>
        <h2>About <span>The Team</span></h2>
        <!-- team-list -->
        <table>
          <tr><td>
            <img src="https://graph.facebook.com/falktx/picture?type=normal" alt="">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          </td><td>
            <h3><a href="http://www.falktx.com" target="blank">Filipe Coelho (aka 'falkTX')</a></h3>
            <p><b>Project leader</b>, does the main code and overall management.<br/>
               He's also the leader of DISTRHO's parent project <a href="http://kxstudio.linuxaudio.org">KXStudio</a>.<br/>
               Contact: <a href="mailto:falktx@falktx.com">falktx@falktx.com</a></p>
          </td></tr>
          <tr><td><p><br/></p></td><td><p><br/></p></td></tr>
          <tr><td>
            <img src="https://graph.facebook.com/melmaquiano/picture?type=normal" alt="">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          </td><td>
            <h3><a href="http://www.facebook.com/melmaquiano" target="blank">Ant&oacute;nio Saraiva (aka 'nieee')</a></h3>
            <p><b>Colaborator</b>, does the graphics and design of the plugins.<br/>
            Contact: <a href="mailto:melmac_tree@hotmail.com">melmac_tree@hotmail.com</a></p>
          </td></tr>
        </table>
        <!-- /team-list -->
      </article>
    </section>
  </td></tr></table>
</div></div></div></div>

<?php
include dirname(__FILE__) . DIRECTORY_SEPARATOR . "inc_footer.php";
?>
