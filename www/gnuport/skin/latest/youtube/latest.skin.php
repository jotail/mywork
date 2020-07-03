<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$latest_skin_url.'/style.css">', 0);
$list_count = (is_array($list) && $list) ? count($list) : 0;
?>


    <?php for ($i=0; $i<$list_count; $i++) {  ?>



  <div class="row youtubeLatest clear">
         <div class="col-md-6">
          <div class="absparent">
            <iframe width="100%"  src="<?php  echo $list[$i]['wr_link1']; ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
	     </div>
		  <div class='col-md-6'>
		  <h4 id="flqb2"><?php  echo $list[$i]['subject']; ?></h4>
		 <p class="ybp"><?php  echo $list[$i]['wr_content'];?></p>
		  </div>
</div>
<?php }  ?>
<?php if ($list_count == 0) { //게시물이 없을 때  ?>
게시물이 없습니다.
<?php }  ?>
