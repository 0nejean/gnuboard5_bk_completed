<?php
include_once('./_common.php');

// <!-- 페이지 제목 (웹접근성 관련) -->
$g5['title']='Topic';

add_stylesheet('<link rel="stylesheet" href="'.G5_JS_URL.'/sub.css">', 0);

include_once(G5_PATH.'/head.php');
?>

    <!-- ****************** main - video / slider / board ****************** -->
    <main id="wrap_topic">
      <!-- topic top -->
      <div id="topic_top">
        <!-- video -->
        <ul class="topic_video">
          <li>
            <section class="youtube one">
              <h2 class="youtube_h2">youtube video about topic section</h2>
             <div class="youtube__area">
              <div id="player2" class="player"></div>
             </div>
              <div class="youtube__cover"></div>
            </section>
           </li>
          </ul>

        <!-- slider -->
        <article id="slider_g">
          <div class="sliderText">
            <h2 class="topic_h2">Moon to MARS</h2>
            <p class="topic_p">Innovative &#38; Sustainable Topic</p>
          </div>
          <div class="sliderBox">
            <div class="slide">
              <!-- slick을 적용시킬 요소 -->
              <div class="slider-div">
                <!-- 슬라이드 되어야할 아이템들 -->
                <div class="item">
                  <a class="item_g slider_item_a1" href="javascript:void(0);">
                    topic slider card image1 about "Earth&#39;s Moon"
                  </a>
                </div>
                <div class="item">
                  <a class="item_g slider_item_a2" href="javascript:void(0);">
                    topic slider card image2 about "Robots to the Moon"
                  </a>
                </div>
                <div class="item">
                  <a class="item_g slider_item_a3" href="javascript:void(0);">
                    topic slider card image3 about "ONE SMALL STEP ONE GIANT
                    LEAP"
                  </a>
                </div>
                <div class="item">
                  <a class="item_g slider_item_a4" href="javascript:void(0);">
                    topic slider card image4 about "Rocketology"
                  </a>
                </div>
                <div class="item">
                  <a class="item_g slider_item_a5" href="javascript:void(0);">
                    topic slider card image5 about "On to Mars"
                  </a>
                </div>
              </div>
              <!-- button 커스텀을 위한 요소 -->
              <!-- <div class="button">
                <div class="next">
                  <img
                    src="https://img1.daumcdn.net/thumb/R1280x0/?scode=mtistory2&fname=https%3A%2F%2Fk.kakaocdn.net%2Fdn%2FTWq2J%2FbtqEBdA2ene%2FhGRW5eH7EFHllWqfIGDFr1%2Fimg.png"
                    alt=""
                  />
                </div>
                <div class="prev">
                  <img
                    src="https://img1.daumcdn.net/thumb/R1280x0/?scode=mtistory2&fname=https%3A%2F%2Fk.kakaocdn.net%2Fdn%2FcK32wf%2FbtqEBnQ2bSV%2FRUnYwxbL6CANymmbJNtVk0%2Fimg.png"
                    alt=""
                  />
                </div>
              </div> -->
            </div>
          </div>
        </article>

        <!-- board -->
        <section id="board">
          <h1 class= "area_tit">< TOPIC_BOARD ></h1>
          <?php
          // echo latest('pic_list', 'gallery', 2, 23);		// 최소설치시 자동생성되는 공지사항게시판
          echo latest('pic_list', 'free', 5, 23);			// 최소설치시 자동생성되는 자유게시판
          ?>
        </section>
      </div>

      <!-- topic bottom -->
      <div id="topic_bottom">
        <a class="topic_bottom_bg">
          topic bottom area background image - The astronaut is walking on the
          moon.
        </a>
      </div>
    </main>

<?php
include_once(G5_PATH.'/tail.php');