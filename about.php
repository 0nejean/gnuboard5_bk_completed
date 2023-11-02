<?php
include_once('./_common.php');

// <!-- 페이지 제목 (웹접근성 관련) -->
$g5['title']='About NASA';

add_stylesheet('<link rel="stylesheet" href="'.G5_JS_URL.'/sub.css">', 0);

include_once(G5_PATH.'/head.php');
?>

    <!-- ****************** main ****************** -->
    <!-- top -->
    <main id="wrap_about">
      <div class="about_top">
        <h2 class="about_top_h2">ABOUT NASA</h2>
        <p class="about_top_p">
          The National Aeronautics and Space Administration is America&#39;s
          civil space program and the global leader in space exploration. The
          agency has a diverse workforce of just under 18,000 civil servants,
          and works with many more U.S. contractors, academia, and international
          and commercial partners to explore, discover, and expand knowledge for
          the benefit of humanity. With an annual budget of $23.2 billion in
          Fiscal Year 2021, which is less than 0.5% of the overall U.S. federal
          budget, NASA supports more than 312,000 jobs across the United States,
          generating more than $64.3 billion in total economic output (Fiscal
          Year 2019)
        </p>
        <a class="about_top_a1">Learn more</a>
        <a class="about_top_bg" href="#"
          >about nasa top area backgroud image : earth image with black
          wallpaper</a
        >
      </div>

      <!-- middle -->
      <div class="about_middle">
        <ul class="grid_container">
          <!-- .box-g.box-${$}*20 + tab -->
          <li class="grid box-1">
            <a class="grid_a box_a" href="#"></a>
            <h2 class="h2_g box_a_h2">Readership</h2>
            <p class="p_g box_a_p">
              NASA is led by Administrator Bill Nelson, <br />
              who became the agency's 14th administrator <br />
              on May 3, 2021.
            </p>
            <a class="btn_g box_a_a1">Read more</a>
          </li>

          <li class="grid box-2">
            <a class="grid_a box_b" href="#"></a>
            <h2 class="h2_g box_b_h2">
              Careers <br />
              at <br />
              NASA
            </h2>
            <a class="btn_g box_b_a2">Read more</a>
          </li>

          <li class="grid box-3">
            <a class="grid_a box_c" href="#"> </a>
            <h2 class="h2_g box_c_h2">NASA Organization</h2>
            <a class="btn_g box_c_a3">Read more</a>
          </li>
          <li class="grid box-4">
            <a class="grid_a box_d" href="#"> </a>
            <h2 class="h2_g box_d_h2">NASA 2023</h2>
            <p class="box_d_p">: A Year of Success</p>
            <a class="btn_g box_d_a4">Read more</a>
          </li>
          <li class="grid box-5">
            <a class="grid_a box_e" href="#"> </a>
            <h2 class="h2_g box_e_h2">
              Latest <br />
              NASA <br />
              News <br />
              Releases
            </h2>
            <a class="btn_g box_e_a5">Read more</a>
          </li>
          <li class="grid box-6">
            <a class="grid_a box_f" href="#"> </a>
            <h2 class="h2_g box_f_h2">
              NASA Centers <br />
              &#38; Facilities
            </h2>
            <a class="btn_g box_f_a6">Read more</a>
          </li>
        </ul>
      </div>

      <!-- bottom -->
      <div class="about_bottom">
        <h2 class="about_bottom_h2">Contact Us</h2>
        <p class="about_bottom_p">
          Public Communications Office <br />
          NASA Headquarters <br />
          000 A. Street BC, Suite 0000 <br />
          Washington, DC 00000 <br />
          (000) 000-0000 (Office) <br />
          (000) 000-0000 (Fax)
        </p>
        <a class="about_bottom_a">SUBMIT</a>
        <a class="about_bottom_bg" href="#"
          >about nasa bottom area backgroud image : spaceship image with black
          wallpaper</a
        >
      </div>
    </main>

<?php
include_once(G5_PATH.'/tail.php');