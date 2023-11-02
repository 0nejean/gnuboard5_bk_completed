<?php
include_once('./_common.php');

// <!-- 페이지 제목 (웹접근성 관련) -->
$g5['title']='Mission';

add_stylesheet('<link rel="stylesheet" href="'.G5_JS_URL.'/sub.css">', 0);

include_once(G5_PATH.'/head.php');
?>

  <!-- ****************** main ****************** -->
  <main id="wrap_mission">
      <!-- top -->
      <div id="mission_top">
      
            <h2 class="mission_top_h2">Space Station</h2>
            <p class="mission_top_p">20 Years on the Station</p>
            <a class="btn_g mission_top_a">Learn more</a>
            <a class="mission_top_img" href="javascript:void(0);"
              >main mission area backgroud image : spacestation image with white
              wallpaper</a
            >
    
        <div class="mission_top_movinfnt">
          <p class="movinfnt">
            The International Space Station is a multi-nation construction
            project that is the largest single structure humans ever put into
            space.
          </p>
        </div>
      </div>

      <!-- middle -->
      <div id="mission_middle">
        <div class="mission_middle_banner">
          <ul class="mission_middle_banner_ul">
            <li class="mission_middle_banner_li1">
              <a
                class="mission_banner_img_g mission_banner_img1"
                href="javascript:void(0);"
                >mission banner image1 : Astronaut image with white wallpaper</a
              >
              <h2 class="mission_banner_li1_h2">
                Spacewalks <br />
                at the Station
              </h2>
              <p class="mission_banner_li1_p">
                267 spacewalks <br />at the International <br />Space Station
              </p>
              <a class="btn_g mission_banner_a1">Learn more</a>
            </li>

            <li class="mission_middle_banner_li2">
              <a
                class="mission_banner_img_g mission_banner_img2"
                href="javascript:void(0);"
                >mission banner image2 : Spacestation and moon image with black
                wallpaper</a
              >
              <h2 class="mission_banner_li2_h2">
                Moon <br />
                from the Station
              </h2>
              <a class="btn_g mission_banner_a2">Learn more</a>
            </li>
          </ul>
        </div>
        <div class="mission_middle_card">
        <h1 class= "area_tit">< MISSION_CARD ></h1>
          <ul class="mission_middle_card_ul">
            <li class="mission_middle_card_li1">
              <a
                class="mission_card_img_g mission_card_img1"
                href="javascript:void(0);"
                >mission card image1 : the earth image with black wallpaper</a
              >
              <h2 class="mission_card_li1_h2">NASA in 2023</h2>
              <a class="btn_g mission_card_a1">Learn more</a>
            </li>
            <li class="mission_middle_card_li2">
              <a
                class="mission_card_img_g mission_card_img2"
                href="javascript:void(0);"
                >mission card image2 : Astronaut image with white wallpaper</a
              >
              <h2 class="mission_card_li2_h2">
                Crews <br />
                &#38; Expeditions
              </h2>
              <p class="mission_card_li2_p">Meet the Crew</p>
              <a class="btn_g mission_card_a2">Learn more</a>
            </li>
            <li class="mission_middle_card_li3">
              <a
                class="mission_card_img_g mission_card_img3"
                href="javascript:void(0);"
                >mission card image3 : Spacestation image with black
                wallpaper</a
              >
              <h2 class="mission_card_li3_h2">
                Research <br />
                &#38; Technology
              </h2>
              <p class="mission_card_li3_p">Science in Space</p>
              <a class="btn_g mission_card_a3">Learn more</a>
            </li>
          </ul>
        </div>
      </div>

      <!-- bottom -->
      <div id="mission_bottom">
        <section id="board">
        <h1 class= "area_tit">< MISSION_BOARD ></h1>
          <?php
echo latest('pic_list', 'qa', 5, 23);			// 최소설치시 자동생성되는 질문답변게시판
// echo latest('pic_list', 'notice', 4, 23);		// 최소설치시 자동생성되는 공지사항게시판
?>
        </section>
      </div>



    </main>
<?php
include_once(G5_PATH.'/tail.php');