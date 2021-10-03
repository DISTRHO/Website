<?php
$CURRENT_PAGE = "news";
include "inc_header.php";
?>

<div class="main-box">
<div class="container news">
  <h2>News</h2>
  <ul class="news">

    <li>
      <div class="title">
          <figure><strong>13 Mar</strong><p>2018</p></figure>
          <h2 class="pointer">New major release</h2>
      </div>
      <p>
          A new release after years without one!<br/>
          A lot of changes happened on the underlying plugin frameworks (DPF and Juce).<br/>
          We also updated the way updates are handled, so it will be less work for next time<br/>
          (and thus, hopefully, have updates more often from now on)
      </p>
      <p>
          The amount of changes in the plugin frameworks is so big (it has been 4 years since last release!),<br/>
          that we are not going to write about them in detail.<br/>
          But the major highlights follow below.
      </p>
      <p>
          The following new Linux ports were added: (LV2 and VST)<br/>
            - JuceOPL<br/>
            - ReFine<br/>
      </p>
      <p>
          The DPF-based plugins had some changes too:<br/>
            - glBars added<br/>
            - Kars added<br/>
            - ndc-Plugs added<br/>
            - A new DPF-Plugins git repo was created, for easy packaging of all our plugins<br/>
            - MAX gen~ based plugins can be created, see
                <a href="https://github.com/DISTRHO/DPF-Max-Gen" target="_blank">this link</a><br/>
      </p>
      <p>
          Since last release, a few projects have appeared that use DPF. Here's a few:<br/>
            - <a href="https://gitlab.com/ftz/chiptune/" target="_blank">
                FTZ Chiptune</a> - Collection of basic waveform synths<br/>
            - <a href="https://github.com/rghvdberg/ninjas/" target="_blank">
                 Ninjas</a> - Sample Slicing Plugin<br/>
            - <a href="https://github.com/pdesaulniers/wolf-shaper/" target="_blank">
                Wolf-Shaper</a> - Waveshaper with graph editor<br/>
            - <a href="http://www.zamaudio.com/?p=976" target="_blank">
                ZamAudio plugin collection</a><br/>
            - <a href="http://zynaddsubfx.sourceforge.net/" target="_blank">ZynAddSubFX</a>,
                uses DPF for its plugin support<br/>
      </p>
      <p>
          Other small changes relevant to the project:<br/>
            - Nekobi moved to plugins (used to be in ports), as original developer is happy with it<br/>
            &nbsp;&nbsp;&nbsp;(and has RW access to our git repo too)<br/>
            - The DPF "framework" has evolved with JACK Standalone export, Transport sync among other things<br/>
      </p>
      <p><a href="https://www.kvraudio.com/forum/viewtopic.php?f=191&t=504728" target="_blank">Comments and discussion</a>
    </li>

    <li>
      <div class="title">
          <figure><strong>26 Aug</strong><p>2014</p></figure>
          <h2 class="pointer">New plugins and minor fixing</h2>
      </div>
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
      <div class="title">
          <figure><strong>16 July</strong><p>2014</p></figure>
          <h2 class="pointer">New release pack (2014-07-16)</h2>
      </div>
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
      <div class="title">
          <figure><strong>18 May</strong><p>2012</p></figure>
          <h2 class="pointer">New release pack (2012-05-18)</h2>
      </div>
      <p>We just released our very first audio plugins (3BandEQ/Splitter and PingPongPan), and added a few more Linux ports (dRowAudio Plugins, Juced Plugins, Highlife and more!).<br/>
      This release brings LV2 support for all plugins.</p>
      <p><a href="http://www.kvraudio.com/forum/viewtopic.php?t=350181" target="_blank">Comments and discussion</a>
    </li>

    <li>
      <div class="title">
          <figure><strong>07 Oct</strong><p>2011</p></figure>
          <h2>Updated Linux ports, and added a few more</h2>
      </div>
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
      <div class="title">
          <figure><strong>13 Sept</strong><p>2011</p></figure>
          <h2>Standalone versions</h2>
      </div>
      <p>Standalone versions of the Arctican and TAL Plugins ports are now available.<br/>
      They are useful if your favourite host does not support VST plugins yet.<br/>
      They are also useful for packaging into distributions because they don't require any restricted code to build (like the VST-SDK).<br/>
      These standalone versions can work with ALSA or JACK.</p>
    </li>

    <li>
      <div class="title">
          <figure><strong>13 Sept</strong><p>2011</p></figure>
          <h2>Arctican Plugins - Linux Port</h2>
      </div>
      <p>These simple but useful plugins were ported to Linux, now available to download for both 32bit and 64bit systems.<br/>
      In the pack you will find Arctican "The Function" and "The Pilgrim".</p>
    </li>

    <li>
      <div class="title">
          <figure><strong>07 Sept</strong><p>2011</p></figure>
          <h2>TAL Plugins - Linux Port</h2>
      </div>
      <p>This is our just job, and we're very excited about it.<br/>
      The awesome TAL plugins (those who use the Juce toolkit) were compiled for Linux, both in 32bit and 64bit form.<br/>
      In the pack you will find TAL Dub 3, Filter 1 &amp; 2, Reverb 1 &amp; 2&amp; 3, Vocoder 2 and NoiseMaker.</p>
    </li>

    <li>
      <div class="title">
          <figure><strong>05 Sept</strong><p>2011</p></figure>
          <h2>Website online</h2>
      </div>
      <p>The DISTRHO website is now online. It's based on a simple and free HTML5 template from TemplateMonster.com.<br/>
      The overall look of the website might change during our first days, but after a few plugins get released, it should be all set.<br/>
      We're alive and here to rock your world!</p>
    </li>

    <li>
      <div class="title">
          <figure><strong>27 Apr</strong><p>2011</p></figure>
          <h2>SourceForge project created</h2>
      </div>
      <p>The name came out of an IRC conversation, where everyone was shouting out names for this new project.<br/>
      The '<b>DISTRHO</b>' name was picked, and the project was created just a few days later.<br/>
      You can go to the project page by clicking <a href="https://sourceforge.net/projects/distrho/">here.</a></p>
    </li>
  </ul>
</div></div>

<?php
include "inc_footer.php";
?>
