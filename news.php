<?php
$CURRENT_PAGE = "news";
include dirname(__FILE__) . DIRECTORY_SEPARATOR . "inc_header.php";
?>

<div class="main-box"><div class="container"><div class="inside"><div class="wrapper">
  <h2>News</h2>
  <ul class="news">

    <li>
      <figure><strong>10 Mar</strong><p>2018</p></figure>
      <h2 class="pointer">New major release</h2>
      <p>
          A new release after years without one!<br/>
          A lot of changes happened on the underlying plugin frameworks (DPF and Juce).
      </p>
      <p>
          The following new ports were added:<br/>
            - ...<br/>
            - ...<br/>
            - ...<br/>
            - ...<br/>
      </p>
      <p>
          The DPF-based plugins had some changes too:<br/>
            - ... added<br/>
            - ProM ...<br/>
            - DPF-Plugins repo for easy packaging<br/>
            - ...<br/>
      </p>
      <p>
          Since last release, a few projects have appeared that use DPF. Here's a few:<br/>
            - ...<br/>
            - ...<br/>
            - ...<br/>
            - ...<br/>
      </p>
      <p>
          Other small changes relevant to the project:<br/>
            - Nekobi moved to plugins (used to be in ports), as original developer is happy with it (has git repo RW access too)<br/>
            - DPF with ... transport, jack, etc<br/>
            - ...<br/>
      </p>
      <p><a href="..." target="_blank">Comments and discussion</a>
    </li>

    <li>
      <figure><strong>26 Aug</strong><p>2014</p></figure>
      <h2 class="pointer">New plugins and minor fixing</h2>
      <p>In this release we bring 4 new Linux plugin ports:<br/>
        - EasySSP<br/>
        - LUFS Meter<br/>
        - Luftikus<br/>
        - Stereo Source Separator<br/>
      </p>
      <p>The DPF-based plugins also had some minor fixes:<br/>
        - 3BandEQ/Splitter had its sliders inverted, now fixed<br/>
        - ProM now has pre-compiled linux binaries; UI can be resized by using - and + keys<br/>
        - MVerb knobs order has been fixed<br/>
        - Allow to open UI in LV2 hosts that don't support options feature (Ingen)<br/>
        - Workaround for some VST hosts that don't set sample rate during init (Ardour3 and energyXT)<br/>
      </p>
      <p><a href="http://www.kvraudio.com/forum/viewtopic.php?t=419123" target="_blank">Comments and discussion</a>
    </li>

    <li>
      <figure><strong>16 July</strong><p>2014</p></figure>
      <h2 class="pointer">New release pack (2014-07-16)</h2>
      <p>In this release we cleaned up all the plugins, added new ones and removed those that we not considered good enough.<br/>
      Standalones are no longer available. Highlife was removed as a requested by its authors.</p>
      <p>The plugins we added to Ports are:<br/>
        - Dexed<br/>
        - KlangFalter<br/>
        - MVerb<br/>
        - Nekobi<br/>
        - Obxd<br/>
        - PitchedDelay<br/>
      </p>
      <p>Additionally we made a new plugin - ProM - a music visualizer as audio plugin based on projectm.</p>
      <p><a href="http://www.kvraudio.com/forum/viewtopic.php?t=416058" target="_blank">Comments and discussion</a>
    </li>

    <li>
      <figure><strong>18 May</strong><p>2012</p></figure>
      <h2 class="pointer">New release pack (2012-05-18)</h2>
      <p>We just released our very first audio plugins (3BandEQ/Splitter and PingPongPan), and added a few more Linux ports (dRowAudio Plugins, Juced Plugins, Highlife and more!).<br/>
      This release brings LV2 support for all plugins.</p>
      <p><a href="http://www.kvraudio.com/forum/viewtopic.php?t=350181" target="_blank">Comments and discussion</a>
    </li>

    <li>
      <figure><strong>07 Oct</strong><p>2011</p></figure>
      <h2>Updated Linux ports, and added a few more</h2>
      <p>We just updated all our available plugins/ports (so far only the TAL and Arctican ports), so they can work on older systems.<br/>
      Previously they were built with "-march=native", making them unusable on older machines.<br/>
      Now all plugins are compiled with "-mtune=generic -msse", using gcc-4.4.<br/>
      If the previous versions were working for you, don't bother downloading the new zip files.<br/></p>
      <p>We added a few more Linux ports, and some already made Linux VSTs, just for convenience.<br/>
      The plugins we added to Ports are:<br/>
        - Argotlunar<br/>
        - HybridReverb2<br/>
        - Juce Pitcher<br/>
        - midilfo (Standalone only)<br/>
        - sDelay<br/>
        - sorollet (VST only)<br/>
        - Wolpertiner<br/>
      </p>
    </li>

    <li>
      <figure><strong>13 Sept</strong><p>2011</p></figure>
      <h2>Standalone versions</h2>
      <p>Standalone versions of the Arctican and TAL Plugins ports are now available.<br/>
      They are useful if your favourite host does not support VST plugins yet.<br/>
      They are also useful for packaging into distributions because they don't require any restricted code to build (like the VST-SDK).<br/>
      These standalone versions can work with ALSA or JACK.</p>
    </li>

    <li>
      <figure><strong>13 Sept</strong><p>2011</p></figure>
      <h2>Arctican Plugins - Linux Port</h2>
      <p>These simple but useful plugins were ported to Linux, now available to download for both 32bit and 64bit systems.<br/>
      In the pack you will find Arctican "The Function" and "The Pilgrim".</p>
    </li>

    <li>
      <figure><strong>07 Sept</strong><p>2011</p></figure>
      <h2>TAL Plugins - Linux Port</h2>
      <p>This is our just job, and we're very excited about it.<br/>
      The awesome TAL plugins (those who use the Juce toolkit) were compiled for Linux, both in 32bit and 64bit form.<br/>
      In the pack you will find TAL Dub 3, Filter 1 &amp; 2, Reverb 1 &amp; 2&amp; 3, Vocoder 2 and NoiseMaker.</p>
    </li>

    <li>
      <figure><strong>05 Sept</strong><p>2011</p></figure>
      <h2>Website online</h2>
      <p>The DISTRHO website is now online. It's based on a simple and free HTML5 template from TemplateMonster.com.<br/>
      The overall look of the website might change during our first days, but after a few plugins get released, it should be all set.<br/>
      We're alive and here to rock your world!</p>
    </li>

    <li>
      <figure><strong>27 Apr</strong><p>2011</p></figure>
      <h2>SourceForge project created</h2>
      <p>The name came out of an IRC conversation, where everyone was shouting out names for this new project.<br/>
      The '<b>DISTRHO</b>' name was picked, and the project was created just a few days later.<br/>
      You can go to the project page by clicking <a href="https://sourceforge.net/projects/distrho/">here.</a></p>
    </li>
  </ul>
</div></div></div></div>

<?php
include dirname(__FILE__) . DIRECTORY_SEPARATOR . "inc_footer.php";
?>
