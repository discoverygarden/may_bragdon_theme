
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">



<div style="background-color: black;">

<!--====== UNIVERSITY HEADER ======-->
<div class="uofr-header">
  <div class="container">
    <!-- UofR Container -->
    <div class="left-logo-container">
      <a href="http://www.library.rochester.edu/">
        <img class="navbar-brand-rcl-logo" alt="River Campus Libraries" src="<?php print base_path() . drupal_get_path('theme', 'may_bragdon_theme');?>/images/rcl_logo.png" />
      </a>
        <img class="navbar-brand-dp-logo" alt="Digital Projects" src="<?php print base_path() . drupal_get_path('theme', 'may_bragdon_theme');?>/images/dp_logo.png" />
    </div>
    <!-- Right Container -->
    <div class="right-logo-container">
     <a href="http://www.rochester.edu/">
        <img class="navbar-brand-uofr-logo" alt="University of Rochester" src="<?php print base_path() . drupal_get_path('theme', 'may_bragdon_theme');?>/images/uofr_logo.png" />
    </a>
    </div>
  </div>
</div>


<!--====== MAY BRAGDON HEADER ======-->

<!-- May B Signature -->
<div class="container">
    <img class="may-b-signature" alt="May Bragdon" src="<?php print base_path() . drupal_get_path('theme', 'may_bragdon_theme');?>/images/may-b-logo.png" />
</div>
<!-- // -->
<div class="front-page">
    <header id="navbar" role="banner" class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
            <!-- May Bragdon Logo -->
            <div class="logo-fade">
                <a class="navbar-brand" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>"><img class="mayb-logo" alt="May Bragdon" src="<?php print base_path() . drupal_get_path('theme', 'may_bragdon_theme');?>/images/mayb-logo.png" />
                </a>
            </div>
          <!-- .btn-navbar is used as the toggle for collapsed navbar content -->
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <!-- Nav links -->
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right" >
              <ul class="nav navbar-nav navbar-right" >
                   <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Diaries <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                      <li><a href="https://maybragdon.lib.rochester.edu/islandora/object/maybragdon%3A524">
                      February 27-December 31, 1893</a></li>
                      <li><a href="https://maybragdon.lib.rochester.edu/islandora/object/maybragdon%3A1047">April 6, 1895-February 26, 1896</a></li>
                      <li><a href="https://maybragdon.lib.rochester.edu/islandora/object/maybragdon%3A4673">February 29, 1896-February 24, 1897</a></li>
                      <li><a href="https://maybragdon.lib.rochester.edu/islandora/object/maybragdon%3A3356">February 25, 1897-November 11, 1898</a></li>
                      <li><a href="https://maybragdon.lib.rochester.edu/islandora/object/maybragdon%3A6104">November 12, 1898-January 18, 1902</a></li>
                      <li><a href="https://maybragdon.lib.rochester.edu/islandora/object/maybragdon%3A7854">January 19, 1902-February 4, 1904</a></li>
                      <li><a href="https://maybragdon.lib.rochester.edu/islandora/object/maybragdon%3A9149">February 26, 1904-June 8, 1905</a></li>
                      <li><a href="https://maybragdon.lib.rochester.edu/islandora/object/maybragdon%3A12692">June 9, 1905-October 17, 1907</a></li>
                      <li><a href="https://maybragdon.lib.rochester.edu/islandora/object/maybragdon%3A14209">October 18, 1907-December 31, 1909</a></li>
                      <li><a href="https://maybragdon.lib.rochester.edu/islandora/object/maybragdon%3A16177">January 1, 1910-December 31, 1914</a></li>
                      <li role="separator" class="divider"></li>
                      <li><a href="https://maybragdon.lib.rochester.edu/islandora">All Diaries</a></li>
                   </li>
                   </ul>
                   <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Inclusions<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                      <li><a href="/maybragdon/islandora/search/mods_genre_mt%3A%28clippings%29">Clippings</a></li>
                      <li><a href="/maybragdon/islandora/search/mods_genre_mt%3A%28correspondence%29">Correspondence</a></li>
                      <li><a href="/maybragdon/islandora/search/mods_genre_mt%3A%28ephemera%29">Ephemera</a></li>
                      <li><a href="/maybragdon/islandora/search/mods_genre_mt%3A%28leaflets%29">Leaflets</a></li>
                      <li><a href="/maybragdon/islandora/search/mods_genre_mt%3A%28photographs%29">Photographs</a></li>
                      <li><a href="/maybragdon/islandora/search/mods_genre_mt%3A%28playbills%29">Playbills</a></li>
                      <li><a href="/maybragdon/islandora/search/mods_genre_mt%3A%28textiles%29">Textiles</a></li>
                   </li>
                  </ul>
            <li><a href="<?php print base_path() ?>about" role="button" aria-haspopup="true" aria-expanded="false">About</a></li>
            <!-- Nav Search box -->
            <li>
              <div class="header-search">
                <?php
                  $search_form = drupal_get_form('may_bragdon_simple_search_form');
                  print drupal_render($search_form);
                ?>
                <button type="submit" aria-label="search" form="may-bragdon-simple-search-form" class="btn btn-default form-submit" name="op" value="search" id="edit-submit"><span class="glyphicon glyphicon-search nav-search-icon" aria-hidden="true"></span></button>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </header>
</div>
<div class="spacer"></div>
<!-- /Header/ -->


<!--===== ALERTS  =====-->
<?php if (!empty($messages)): ?>
  <div class="alert-messages-container">
      <?php print render($messages); ?>
  </div>
<?php endif; ?>


<!--============== CAROUSEL  ==============-->
<div id="carousel-example-generic" class="carousel slide no-mobile" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
        <li data-toggle="tooltip" data-placement="top" title="M.B. as a Scribner poster. 8/29" data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
        <li data-toggle="tooltip" data-placement="top" title="Perfect Little Ladies' Valentine Party" data-target="#carousel-example-generic" data-slide-to="1"></li>
        <li data-toggle="tooltip" data-placement="top" title="The Behn's house May 10th, 1896" data-target="#carousel-example-generic" data-slide-to="2"></li>
        <li data-toggle="tooltip" data-placement="top" title="The Aqueduct" data-target="#carousel-example-generic" data-slide-to="3"></li>
        <li data-toggle="tooltip" data-placement="top" title="The girls at Fairy Lake" data-target="#carousel-example-generic" data-slide-to="4"></li>
  </ol>


  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
      <!-- Slide 1 -->
    <div class="item active">
      <img class="car-img" src="<?php print base_path() . drupal_get_path('theme', 'may_bragdon_theme');?>/images/slide-001.jpg" />
      <div class="container" style="position:relative;">
        <div class="car-cap">
            <div class="content">
                <div class="caption-container">
                  <a href="https://maybragdon.lib.rochester.edu/islandora/object/maybragdon%3A5556">
                  <span class="cap-quote">May Bragdon in Highland Park</span>
                  <span class="cap-date">Rochester, NY. August 29, 1896</span>
                  </a>
              </div>
            </div>
          </div>
      </div>
    </div>
    <!-- Item 2 -->
    <div class="item">
      <img class="car-img" src="<?php print base_path() . drupal_get_path('theme', 'may_bragdon_theme');?>/images/slide-002.jpg" />
      <div class="container" style="position:relative;">
        <div class="car-cap">
            <div class="content">
                <div class="caption-container">
                  <a href="https://maybragdon.lib.rochester.edu/islandora/object/maybragdon%3A6084">
                  <span class="cap-quote">May Bragdon’s valentine party</span>
                  <span class="cap-date">Rochester, NY.  February 19, 1897</span>
                  </a>
              </div>
            </div>
          </div>
      </div>
    </div>
    <!-- Item 3 -->
    <div class="item">
      <img class="car-img" src="<?php print base_path() . drupal_get_path('theme', 'may_bragdon_theme');?>/images/slide-003.jpg" />
      <div class="container" style="position:relative;">
        <div class="car-cap">
            <div class="content">
                <div class="caption-container">
                  <a href="https://maybragdon.lib.rochester.edu/islandora/object/maybragdon%3A3460">
                  <span class="cap-quote">Edith Joiner, J. Con Hillman, and Helen Dutcher</span>
                  <span class="cap-date">Irondequoit, NY.  April 25, 1897</span>
                  </a>
              </div>
            </div>
          </div>
      </div>
    </div>
    <!-- Item 4 -->
    <div class="item">
      <img class="car-img" src="<?php print base_path() . drupal_get_path('theme', 'may_bragdon_theme');?>/images/slide-004.jpg" />
      <div class="container" style="position:relative;">
        <div class="car-cap">
            <div class="content">
                <div class="caption-container">
                  <a href="https://maybragdon.lib.rochester.edu/islandora/object/maybragdon%3A6205">
                  <span class="cap-quote">Erie canal aqueduct over the Genesee river</span>
                  <span class="cap-date">Downtown Rochester, NY. February 25, 1899</span>
                  </a>
              </div>
            </div>
          </div>
      </div>
  </div>
  <!-- Item 5 -->
  <div class="item">
    <img class="car-img" src="<?php print base_path() . drupal_get_path('theme', 'may_bragdon_theme');?>/images/slide-005.jpg" />
    <div class="container" style="position:relative;">
      <div class="car-cap">
          <div class="content">
              <div class="caption-container">
                <a href="https://maybragdon.lib.rochester.edu/islandora/object/maybragdon%3A3939">
                <span class="cap-quote">Helen Dutcher, Miss Dymond, and Edith Joiner</span>
                <span class="cap-date">Fairy Lake, Ontario, Canada. August 1, 1897</span>
                </a>
            </div>
          </div>
        </div>
    </div>
  </div>

  </div>
  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <!-- <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> -->
    <i class="fa fa-angle-left"></i>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <!-- <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> -->
    <i class="fa fa-angle-right"></i>
    <span class="sr-only">Next</span>
  </a>
</div>



<!--============== MOBILE COVER VERSION  ==============-->
<div class="mobile-cover">
  <img src="<?php print base_path() . drupal_get_path('theme', 'may_bragdon_theme');?>/images/mobile-cover.jpg" />
</div>

<!--
<span class="glyphicon glyphicon-menu-down" aria-hidden="true"></span>

<div>
  <a class="scroll-hint" href="#">
      <div class="container">
    <span class="scroll-hint-title">More Info</span>
    <i class="fa fa-angle-down"></i>
    </div>
  </a>
</div> -->







<!--============== ABOUT SECTION ==============-->

<div class="tagline-section">
    <div class="container">
      <div class="tagline-hint">
      Ten diaries spanning 1893-1914 illustrate the life of a single working woman set free by the bicycle and enlivened by friendships, the Kodak, the theatre, and a connection with the natural world.
      </div>
    </div>
</div>






<!--============== DIARIES  ==============-->
<div class="main-boxes-heading">Diaries</div>
<div class="boxes">
<div class="box box-odd">
  <a href="https://maybragdon.lib.rochester.edu/islandora/object/maybragdon%3A524">
    <img class="box-images" alt="Diary February 27 to December 31, 1893" src="<?php print base_path() . drupal_get_path('theme', 'may_bragdon_theme');?>/images/1893.jpg" />
    <div class="box-text">
      <div class="box-date">February 27 - December 31, 1893</div>
      <!-- <div class="box-page-count">302 Pages</div> -->
    </div>
  </a>
</div>

<div class="box box-even">
  <a href="https://maybragdon.lib.rochester.edu/islandora/object/maybragdon%3A1047">
    <img class="box-images" alt="Diary April 6, 1895 to February 26, 1896" src="<?php print base_path() . drupal_get_path('theme', 'may_bragdon_theme');?>/images/1896.jpg" />
    <div class="box-text">
      <div class="box-date">April 6, 1895 - February 26, 1896</div>
      <!-- <div class="box-page-count">303 Pages</div> -->
    </div>
  </a>
</div>


<div class="box box-odd">
  <a href="https://maybragdon.lib.rochester.edu/islandora/object/maybragdon%3A4673">
    <img class="box-images" alt="Diary February 29, 1896 to February 24, 1897" src="<?php print base_path() . drupal_get_path('theme', 'may_bragdon_theme');?>/images/1895-96.jpg" />
    <div class="box-text">
      <div class="box-date">February 29, 1896 - February 24, 1897</div>
      <!-- <div class="box-page-count">283 Pages</div> -->
    </div>
  </a>
</div>

<div class="box box-even">
  <a href="https://maybragdon.lib.rochester.edu/islandora/object/maybragdon%3A3356">
    <img class="box-images" alt="Diary February 25, 1897 to November 11, 1898" src="<?php print base_path() . drupal_get_path('theme', 'may_bragdon_theme');?>/images/1897-98.jpg" />
    <div class="box-text">
      <div class="box-date">February 25, 1897 - November 11, 1898</div>
      <!-- <div class="box-page-count">303 Pages</div> -->
    </div>
  </a>
</div>

<div class="box box-odd">
  <a href="https://maybragdon.lib.rochester.edu/islandora/object/maybragdon%3A6104">
    <img class="box-images" alt="Diary November 12, 1898 to January 18, 1902" src="<?php print base_path() . drupal_get_path('theme', 'may_bragdon_theme');?>/images/1898-02.jpg" />
    <div class="box-text">
      <!-- <div class="box-headline">1897-1898</div> -->
      <div class="box-date">November 12, 1898 - January 18, 1902</div>
      <!-- <div class="box-page-count">303 Pages</div> -->
    </div>
  </a>
</div>

<div class="box box-even">
  <a href="https://maybragdon.lib.rochester.edu/islandora/object/maybragdon%3A7854">
    <img class="box-images" alt="Diary January 19, 1902 to February 4, 1904" src="<?php print base_path() . drupal_get_path('theme', 'may_bragdon_theme');?>/images/1902-04.jpg" />
    <div class="box-text">
      <div class="box-date">January 19, 1902 - February 4, 1904</div>
      <!-- <div class="box-page-count">305 Pages</div> -->
    </div>
  </a>
</div>

<div class="box box-odd">
  <a href="https://maybragdon.lib.rochester.edu/islandora/object/maybragdon%3A9149">
    <img class="box-images" alt="Diary February 26, 1904 to June 8, 1905" src="<?php print base_path() . drupal_get_path('theme', 'may_bragdon_theme');?>/images/1904-05.jpg" />
    <div class="box-text">
      <div class="box-date">February 26, 1904 - June 8, 1905</div>
      <!-- <div class="box-page-count">301 Pages</div> -->
    </div>
  </a>
</div>

<div class="box box-even">
  <a href="https://maybragdon.lib.rochester.edu/islandora/object/maybragdon%3A12692">
    <img class="box-images" alt="Diary June 9, 1905 to October 17, 1907" src="<?php print base_path() . drupal_get_path('theme', 'may_bragdon_theme');?>/images/1905-07.jpg" />
    <div class="box-text">
      <div class="box-date">June 9, 1905 - October 17, 1907</div>
      <!-- <div class="box-page-count">288 Pages</div> -->
    </div>
  </a>
</div>

<div class="box box-odd">
  <a href="https://maybragdon.lib.rochester.edu/islandora/object/maybragdon%3A14209">
    <img class="box-images" alt="Diary October 18, 1907 to December 31, 1909" src="<?php print base_path() . drupal_get_path('theme', 'may_bragdon_theme');?>/images/1907-09.jpg" />
    <div class="box-text">
        <div class="box-date">October 18, 1907 - December 31, 1909</div>
        <!-- <div class="box-page-count">202 Pages</div> -->
    </div>
  </a>
</div>

<div class="box box-even">
  <a href="https://maybragdon.lib.rochester.edu/islandora/object/maybragdon%3A16177">
    <img class="box-images" alt="Diary January 1, 1910 to December 31, 1914" src="<?php print base_path() . drupal_get_path('theme', 'may_bragdon_theme');?>/images/1910-14.jpg" />
    <div class="box-text">
      <div class="box-date">January 1, 1910 - December 31, 1914</div>
      <!-- <div class="box-page-count">385 Pages</div> -->
    </div>
  </a>
</div>
</div>
<!--/-->




<!--====== FOOTER ======-->
<div class="footer">
    <div class="container">
      <!-- Right Side of Footer -->
        <div class="footer-right">
          <div class="address">
            <p>
              Rare Books, Special Collections and Preservation <br>
              Rush Rhees Library <br>
              Second Floor, Room 225 <br>
              755 Library Road <br>
              University of Rochester	<br>
              Rochester, NY 14627-0055 <br>
            </p>
            <p>
              Phone: (585) 275-4477 <br>
              Fax: (585) 273-1032 <br>
              <a href="mailto:rarebks@library.rochester.edu">rarebks@library.rochester.edu</a>
            </p>
          </div>
        </div>
      <!-- Left Side of Footer -->
      <div class="footer-left">
        <!-- Copyright  -->
        <div class="copyright">Copyright © 1998-2015. All Rights Reserved.<br>
          University of Rochester | River Campus Libraries <br>
          Rare Books, Special Collections and Preservation
          <a href="http://www.rochester.edu/">
            <img class="footer-uofr-logo" alt="University of Rochester" src="<?php print base_path() . drupal_get_path('theme', 'may_bragdon_theme');?>/images/uofr_logo.png" />
          </a>
        </div>
      </div>
    </div>
</div>
<!-- End of Footer -->

</div><!-- Closing out the black background -->


<!--====== Navigation Scroll JS ======-->
<script src="<?php print base_path() . drupal_get_path('theme', 'may_bragdon_theme') . '/js/nav.js'; ?>"></script>
<script src="<?php print base_path() . drupal_get_path('theme', 'bootstrap') . '/js/bootstrap.js'; ?>"></script>
