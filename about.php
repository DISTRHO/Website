<?php
$CURRENT_PAGE = "about";
include dirname(__FILE__) . DIRECTORY_SEPARATOR . "inc_header.php";
?>

<div class="main-box"><div class="container"><div class="inside"><div class="wrapper">
  <table><tr><td>
    <!-- intro -->
    <aside class="homeAside">
      <h2>About <span>The Project</span></h2>
      <div class="">
        <figure><img src="images/about_<?php echo $GLOBALS["THEME"]; ?>.png" alt="" style="border:0;"></figure>
      </div>
      <p>DISTRHO is an open-source project that provides Cross-Platform Audio Plugins, using <a href="http://www.rawmaterialsoftware.com/juce.php" target="_blank">Juce</a> and <a href="http://qt.nokia.com/products/" target="_blank">Qt4</a>.</p>
      <p>Our main target platform is Linux, but we support Windows and Mac too. We plan to support, at least, the LV2 and VST plugin standards.</p>
      <p>Our entire source code is available in Git, follow <a href="http://distrho.git.sourceforge.net/git/gitweb-index.cgi">this link</a> for the web interface. The Git URL is <code>git://distrho.git.sf.net/gitroot/distrho/distrho</code></p>
      <p>Third parties are welcome to share their code with us if they want to see a Linux port. Contact the project leader, falkTX, if you're interested on this.</p>
    </aside>
  </td><td>
    <!-- content -->
    <section id="content">
      <article>
        <h2>About <span>The Team</span></h2>
        <!-- .team-list -->
        <ul class="team-list">
          <li>
            <figure><img src="https://graph.facebook.com/falktx/picture?type=normal" alt=""></figure>
            <h3><a href="http://www.facebook.com/falktx" target="blank">Filipe Coelho (aka 'falkTX')</a></h3>
            <p>He is the leader of this project, doing the main code and overall management. He is also the leader of <a href="http://kxstudio.sf.net">KXStudio</a>, <a href="http://festige.sf.net">FeSTige</a>, <a href="http://qtsixa.sf.net">QtSixA</a> and a few other opensource projects.</p>
            <p>Contact: <a href="mailto:falktx@gmail.com">falktx@gmail.com</a></p>
          </li>
          <li>
            <figure><img src="https://graph.facebook.com/melmaquiano/picture?type=normal" alt=""></figure>
            <h3><a href="http://www.facebook.com/melmaquiano" target="blank">Ant&oacute;nio Saraiva (aka 'nieee')</a></h3>
            <p>He is in charge of all the graphics and design of our plugins, as well as the website itself.<br/><br/>
            Contact: <a href="mailto:melmac_tree@hotmail.com">melmac_tree@hotmail.com</a></p>
          </li>
        </ul>
        <!-- /.team-list -->
      </article>
    </section>
  </td></tr></table>
</div></div></div></div>

<?php
include dirname(__FILE__) . DIRECTORY_SEPARATOR . "inc_footer.php";
?>
