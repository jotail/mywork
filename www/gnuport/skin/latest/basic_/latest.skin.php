<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$latest_skin_url.'/style.css">', 0);
$list_count = (is_array($list) && $list) ? count($list) : 0;
?>


    <?php for ($i=0; $i<$list_count; $i++) {  ?>

 <h3 class='title_Tail'>

	<?php  echo $list[$i]['subject']; ?>
      </h3>
       <blockquote class='row'>
       <div class="quote col-md-2 text-center"><i class="fa fa-quote-left fa-3x"></i></div>
		<p  class='col-md-8 normalContent'>
					<?php
		 echo $list[$i]['wr_content'];
					?>
		</p>
		<div class="quote col-md-2  text-center"><i class="fa fa-quote-right fa-3x"></i></div>
		</blockquote>

    <?php }  ?>
    <?php if ($list_count == 0) { //게시물이 없을 때  ?>
    게시물이 없습니다.
    <?php }  ?>

                       