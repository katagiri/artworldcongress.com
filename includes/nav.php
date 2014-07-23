<!-- Static navbar -->
<div class="navbar navbar-inverse navbar-static-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <!--<a class="navbar-brand" href="#">Project name</a>-->
    </div>
    <div class="navbar-collapse collapse">
      <ul class="nav navbar-nav">
        <li <?php if ($page == 'home') { echo 'class="active"'; } ?>><a href="<?php echo $domain ?>">Home</a></li>
        <li <?php if ($page == 'schedule') { echo 'class="active"'; } ?>><a href="<?php echo $domain ?>/schedule/">Schedule</a></li>
        <li <?php if ($page == 'registration') { echo 'class="active"'; } ?>><a href="<?php echo $domain ?>/registration/">Registration</a></li>
        <li <?php if ($page == 'from-the-organizers') { echo 'class="active"'; } ?>><a href="<?php echo $domain ?>/from-the-organizers/">From the Organizers</a></li>
        <!--
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Performance <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo $domain; ?>/live/">Live</a></li>
            <li><a href="<?php echo $domain; ?>/studio/">Studio</a></li>
            <li><a href="<?php echo $domain; ?>/performance-photos/">Photos</a></li>
            <li><a href="<?php echo $domain; ?>/performance-bio/">Bio</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Sound <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo $domain; ?>/production/">Production</a></li>
            <li><a href="<?php echo $domain; ?>/post-production-and-compositions/">Post &amp; Compositions</a></li>
            <li class="divider"></li>
            <li class="dropdown-header">PROJECTS</li>
            <li><a href="<?php echo $domain; ?>/happy-tunes/">Happy Tunes</a></li>
            <li><a href="<?php echo $domain; ?>/story-magic/">Story Magic</a></li>
          </ul>
        </li>
        <li>
          <a href="<?php echo $domain; ?>/teaching/">Teaching</a>
        </li>
        <li>
          <a href="<?php echo $domain; ?>/blog/">Blog</a>
        </li>
      </ul>-->
      <!--<ul class="nav navbar-nav navbar-right">
        <li><a href="../navbar/">Default</a></li>
        <li class="active"><a href="./">Static top</a></li>
        <li><a href="../navbar-fixed-top/">Fixed top</a></li>
      </ul>-->
    </div><!--/.nav-collapse -->
  </div>
</div>