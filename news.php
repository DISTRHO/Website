<?php
$CURRENT_PAGE = "news";
include dirname(__FILE__) . DIRECTORY_SEPARATOR . "inc_header.php";
?>

<div class="main-box"><div class="container"><div class="inside"><div class="wrapper">
  <h2>News</h2>
  <ul class="news">
    <li>
      <figure><strong>18 May</strong><p>2012</p></figure>
      <h2 class="pointer"><a href="#">New release pack (2012-05-18)</a></h2>
      <p>We just released our very first audio plugins (3BandEQ/Splitter and PingPongPan), and added a few more Linux ports (dRowAudio Plugins, Juced Plugins, Highlife and more!).<br/>
      This release brings LV2 support for all plugins.</p>
      <p><a href="http://www.kvraudio.com/forum/viewtopic.php?t=350181" target="_blank">Comments and discussion</a>
    </li>
    <li>
      <figure><strong>07 Oct</strong><p>2011</p></figure>
      <h2>Updated Linux ports, and added a few more</h2>
      <p>We just updated all our available plugins/ports (so far only the TAL and Arctican ports), so they can work on older systems.<br/>
      Previously they were built with "-march=native" which, because my CPU is a Dual Core, make them unusable on older machines.<br/>
      Now all plugins are compiled with "-mtune=generic -msse", using gcc-4.4. If the previous versions were working for you, don't bother downloading the new zip files.<br/></p>
      <p>We added a few more Linux ports, and some already made Linux VSTs, just for convenience (see the <a href="download.html">Downloads</a> page for the details).<br/>
      The plugins we added to Ports are:<br/>
        - Argotlunar<br/>
        - HybridReverb2<br/>
        - Juce Pitcher<br/>
        - midilfo (Standalone only)<br/>
        - sDelay<br/>
        - sorollet (VST only)<br/>
        - Wolpertiner<br/>
      </p>
      <p>Note that, because some of these plugins are not actually Linux ports, we didn't added them to the <a href="ports.html">Ports</a> page.</p>
    </li>
    <li>
      <figure><strong>13 Sept</strong><p>2011</p></figure>
      <h2>Standalone versions</h2>
      <p>Standalone versions of the Arctican and TAL Plugins ports are now available. They are useful if your favourite host does not support VST plugins yet. They are also useful for packaging into distributions because they don't require any restricted code to compile (such as the VST SDK).<br/>
      These standalone versions can work with ALSA or JACK. You can grab them in the <a href="download.html">downloads</a> page.</p>
    </li>
    <li>
      <figure><strong>13 Sept</strong><p>2011</p></figure>
      <h2>Arctican Plugins - Linux Port</h2>
      <p>These simple but useful plugins were ported to Linux, now available to download for both 32bit and 64bit systems. In the pack you will find Arctican "The Function" and "The Pilgrim".<br/>
      <a href="ports.html#Arctican_Plugins">Read more...</a></p>
    </li>
    <li>
      <figure><strong>07 Sept</strong><p>2011</p></figure>
      <h2>TAL Plugins - Linux Port</h2>
      <p>This is our just job, and we're very excited about it. The awesome TAL plugins (those who use the Juce toolkit) were compiled for Linux, both in 32bit and 64bit form. In the pack you will find TAL Dub 3, Filter 1 &amp; 2, Reverb 1 &amp; 2&amp; 3, Vocoder 2 and NoiseMaker.<br/>
      <a href="ports.html#TAL_Plugins">Read more...</a></p>
    </li>
    <li>
      <figure><strong>05 Sept</strong><p>2011</p></figure>
      <h2>Website online</h2>
      <p>The DISTRHO website is now online. It's based on a simple and free HTML5 template from TemplateMonster.com. The overall look of the website might change during our first days, but after a few plugins get released, it should be all set.<br/>We're alive and here to rock your world!</p>
    </li>
    <li>
      <figure><strong>27 Apr</strong><p>2011</p></figure>
      <h2>SourceForge project created</h2>
      <p>The name came out of an IRC conversation, where everyone was shouting out names for this new project. '<i>DISTRHO</i>' name was picked, and the project was created just a few days later.
      You can go to the project page by clicking <a href="https://sourceforge.net/projects/distrho/">here.</a></p>
    </li>
  </ul>
</div></div></div></div>

<?php
include dirname(__FILE__) . DIRECTORY_SEPARATOR . "inc_footer.php";
?>
