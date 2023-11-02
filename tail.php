<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if(defined('G5_THEME_PATH')) {
    require_once(G5_THEME_PATH.'/tail.php');
    return;
}

if (G5_IS_MOBILE) {
    include_once(G5_MOBILE_PATH.'/tail.php');
    return;
}
?>

    </div>
</div>

</div>
<!-- } 콘텐츠 끝 -->
<!-- 하단 시작 { -->
<div id="ft">

    <div id="ft_wr"> 

    <div class="ft_inner">
      <div id="ft_logo" class="ft_nasa">
        <a class =logo_ft href="/gnuboard5/">NASA Reboot</a>
        <h2>National Aeronautics and Space Administration <br/>
        NASA Official : Brian Dunbar
        </h2>
        <!-- <p class="ft_info">
        <br>
        </p> -->
      </div>

      <div id="ft_link" class="ft_cnt1">
            <a href="<?php echo get_pretty_url('content', 'company'); ?>">About NASA</a>
            <a href="<?php echo get_pretty_url('content', 'privacy'); ?>">Privacy</a>
      </div>

      <div id="ft_link" class="ft_cnt2">
            <a href="<?php echo get_pretty_url('content', 'provision'); ?>">Accessibility</a>
            <a href="<?php echo get_device_change_url(); ?>">MOBILE</a>
      </div>

      <div id="ft_link" class="ft_cnt3">
            <a href="#">Office of Inspector General</a>
            <a href="#">Office of Special Counsel </a>
      </div>

      <div id="ft_link" class="ft_cnt4">
            <a href="#">Agency Finacial Reports</a>
            <a href="#">Contact NASA</a>
      </div>


      </div>
    </div>

    <div id="ft_copy">Copyright &copy; <b>onejean114.cafe24.com/gnuboard5</b> All rights reserved.</div>
    <button type="button" id="top_btn">
    	<i class="fa fa-arrow-up" aria-hidden="true"></i><span class="sound_only">상단으로</span>
    </button>

    <script>
    $(function() {
        $("#top_btn").on("click", function() {
            $("html, body").animate({scrollTop:0}, '500');
            return false;
        });
    });
    </script>
</div>

<?php
if(G5_DEVICE_BUTTON_DISPLAY && !G5_IS_MOBILE) { ?>
<?php
}

if ($config['cf_analytics']) {
    echo $config['cf_analytics'];
}
?>

<!-- } 하단 끝 -->

<script>
$(function() {
    // 폰트 리사이즈 쿠키있으면 실행
    font_resize("container", get_cookie("ck_font_resize_rmv_class"), get_cookie("ck_font_resize_add_class"));
});
</script>

<?php
include_once(G5_PATH."/tail.sub.php");