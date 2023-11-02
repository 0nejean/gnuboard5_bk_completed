<?php
include_once('./_common.php');

// <!-- 페이지 제목 (웹접근성 관련) -->
$g5['title']='Main';

define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if(defined('G5_THEME_PATH')) {
    require_once(G5_THEME_PATH.'/index.php');
    return;
}

if (G5_IS_MOBILE) {
    include_once(G5_MOBILE_PATH.'/index.php');
    return;
}

include_once(G5_PATH.'/head.php');
?>
<!-- 본인 코드 삽입 -->

    <main id="wrap_main">
      <!-- 1. MAIN_video -->
      <ul class="main_video">
        <li>
         <section class="youtube one">
          <h2 class="youtube_h2">youtube video about main section</h2>
          <div class="youtube__area">
            <div id="player1" class="player"></div>
           </div>
          <div class="youtube__cover">
          </div>
        </section>
        </li>
      </ul>

      <!-- 2. MAIN_ABOUT-->
      <div id="main_about_wrap">
        <section class="main_about">
        
              <h2 class="main_about_h2">About NASA</h2>
              <p class="main_about_p">The global leader in space exploration</p>
              <a
                class="btn_g main_about_a1"
                onclick="location.href='/gnuboard5/about.php'"
              >
                Learn more
              </a>
              <a class="main_about_bg" href="javascript:void(0);"
                >main about area backgroud image : the earth image with black
                wallpaper</a
              >
      
        </section>
      </div>

      <!-- 3. MAIN_MISSION -->
      <div id="main_mission_wrap">
        <section class="main_mission">
       
              <h2 class="main_mission_h2">Space Station</h2>
              <p class="main_mission_p">20 Years on the Station</p>
              <a
                class="btn_g main_mission_a1"
                onclick="location.href='/gnuboard5/mission.php'"
              >
                Learn more
              </a>
              <a class="main_mission_bg" href="javascript:void(0);"
                >main mission area backgroud image : spacestation image with
                white wallpaper</a
              >
       
        </section>
      </div>

      <!-- 4. MAIN_Pics & TV -->
      <div id="main_picsntv_wrap">
        <ul class="main_picsntv_ul">
          <li class="main_picsntv_li_g main_picsntv_li1">
            <a
              href="javascript:void(0);"
              class="main_picntvimg_g main_picsntv_img_1"
              >main pics n tv image1 about Astronaut in space</a
            >
            <h2 class="main_picsntv_li1_h2">
              Astronaut <br />
              in space
            </h2>
            <p class="main_picsntv_li1_p">Beyond the World</p>
            <a
              class="main_picsntv_li1_a"
              onclick="location.href='/gnuboard5/picsntv.php'"
            >
              Watch Now
            </a>
          </li>

          <li class="main_picsntv_li_g main_picsntv_li2">
            <a
              href="javascript:void(0);"
              class="main_picntvimg_g main_picsntv_img_2"
              >main pics n tv image2 about Triumph After Splashdown of Apollo
              11</a
            >
            <h2 class="main_picsntv_li2_h2">
              Triumph <br />After <br />
              Splashdown <br />of Apollo 11
            </h2>
            <p class="main_picsntv_li2_p">
              Neil Armstrong <br />landed on the moon
            </p>
            <a
              class="main_picsntv_li2_a"
              onclick="location.href='/gnuboard5/picsntv.php'"
            >
              Watch Now
            </a>
          </li>

          <li class="main_picsntv_li_g main_picsntv_li3">
            <a
              href="javascript:void(0);"
              class="main_picntvimg_g main_picsntv_img_3"
              >main pics n tv image3 FAR FROM EARTH</a
            >
            <h2 class="main_picsntv_li3_h2">FAR <br />FROM <br />EARTH</h2>
            <p class="main_picsntv_li3_p">A Voyager <br />From Home</p>
            <a
              class="main_picsntv_li3_a"
              onclick="location.href='/gnuboard5/picsntv.php'"
            >
              Watch Now
            </a>
          </li>

          <li class="main_picsntv_li_g main_picsntv_li4">
            <a
              href="javascript:void(0);"
              class="main_picntvimg_g main_picsntv_img_4"
              >main pics n tv image4 NASA TV</a
            >
            <h2 class="main_picsntv_li4_h2">NASA TV</h2>
            <p class="main_picsntv_li4_p">Streaming on Youtube</p>
            <a
              class="main_picsntv_li4_a"
              onclick="location.href='/gnuboard5/picsntv.php'"
            >
              Watch Now
            </a>
          </li>
        </ul>
      </div>

      <!-- 5. MAIN_TOPIC -->
      <div id="main_topic_wrap">
        <h2 class="main_topic_h2">Moon to MARS</h2>
        <p class="main_topic_p">Innovative &#38; Sustainable Topic</p>
        <a
          class="btn_g main_topic_a1"
          onclick="location.href='/gnuboard5/topic.php'"
        >
          Learn more
        </a>
        <a class="main_topic_bg" href="javascript:void(0);"
          >main topic area backgroud image : surface of moon image with black
          wallpaper</a
        >
      </div>

      <!-- 6. MAIN_SLIDE -->
      <!-- Flickity HTML init -->
      <div
        class="gallery js-flickity"
        data-flickity-options='{ "wrapAround": true }'
      >
        <div class="gallery-cell">
          <a href="javascript:void(0);" class="slide slideimage1">
            slide image 1 'nasa downloads'</a
          >
        </div>
        <div class="gallery-cell">
          <a href="javascript:void(0);" class="slide slideimage2">
            slide image 2 'nasa follow'
          </a>
        </div>
        <div class="gallery-cell">
          <a href="javascript:void(0);" class="slide slideimage3">
            slide image 3 'nasa audiences'
          </a>
        </div>
      </div>
    </main>
  <!-- 본인 코드 삽입 -->
  
<?php
include_once(G5_PATH.'/tail.php');




