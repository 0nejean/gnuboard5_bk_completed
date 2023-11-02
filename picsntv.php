<?php
include_once('./_common.php');

// <!-- 페이지 제목 (웹접근성 관련) -->
$g5['title']='Picsntv';

add_stylesheet('<link rel="stylesheet" href="'.G5_JS_URL.'/sub.css">', 0);

include_once(G5_PATH.'/head.php');
?>
     <!-- ****************** main ****************** -->
     <main id="wrap_picsntv">
      <!-- top -->
      <div id="picsntv_top">
        <ul class="picsntv_top_g">
          <li class="picsntv_bg">
            <span class="picsntv_logo">picsntv top area logo</span
            >
            <h2>NASA TV</h2>
            <p>Streaming on Youtube</p>
            <span>WATCH RIGHT HERE</span>
            <a class="picsntv_top_bg" href="javascript:void(0);"
              >picsntv top area image</a
            >
          </li>
          <li class="picsntv_youtube">
          <section class="youtube one">
          <h2 class="youtube_h2">youtube video about picsntv section</h2>
              <div class="youtube__area">
                <div id="player3" class="player"></div>
              </div>
              <div class="youtube__cover"></div>
            </section>
          </li>
        </ul>
      </div>
   
      <!-- middle -->
      <div id="picsntv_middle">
        <section id="board">
        <h1 class= "area_tit">< PICSNTV_BOARD ></h1>
          <?php
            echo latest('pic_list', 'notice', 10, 23);// 최소설치시 자동생성되는 공지사항게시판
          ?>
        </section>
      </div>

      <!-- bottom -->
      <div id="picsntv_bottom">
        <section id="gallery">
          <ul class="gallery1">
            <li class="gallery_li">
              <a class="gallery_g gallery1_image1" href="javascript:void(0);"
                >gallery1 image1</a
              >
            </li>
            <li class="gallery_li">
              <a class="gallery_g gallery1_image2" href="javascript:void(0);"
                >gallery1 image2</a
              >
            </li>
            <li class="gallery_li">
              <a class="gallery_g gallery1_image3" href="javascript:void(0);"
                >gallery1 image3</a
              >
            </li>
            <li class="gallery_li">
              <a class="gallery_g gallery1_image4" href="javascript:void(0);"
                >gallery1 image4</a
              >
            </li>
            <li class="gallery_li">
              <a class="gallery_g gallery1_image5" href="javascript:void(0);"
                >gallery1 image5</a
              >
            </li>
            <li class="gallery_li">
              <a class="gallery_g gallery1_image6" href="javascript:void(0);"
                >gallery1 image6</a
              >
            </li>
          </ul>
          <ul class="gallery2">
            <li>
              <span
                >NASA <br />
                PICS</span
              >
              <a href="javascript:void(0);">gallery main image</a>
            </li>
          </ul>
          <ul class="gallery3">
            <li class="gallery_li">
              <a class="gallery_g gallery3_image1" href="javascript:void(0);"
                >gallery3 image1</a
              >
            </li>
            <li class="gallery_li">
              <a class="gallery_g gallery3_image2" href="javascript:void(0);"
                >gallery3 image2</a
              >
            </li>
            <li class="gallery_li">
              <a class="gallery3_image3" href="javascript:void(0);"
                >gallery3 image3</a
              >
            </li>
            <li class="gallery_li">
              <a class="gallery_g gallery3_image4" href="javascript:void(0);"
                >gallery3 image4</a
              >
            </li>
            <li class="gallery_li">
              <a class="gallery_g gallery3_image5" href="javascript:void(0);"
                >gallery3 image5</a
              >
            </li>
          </ul>
        </section>
      </div>
    </main> 
<?php
include_once(G5_PATH.'/tail.php');

