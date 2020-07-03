<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$latest_skin_url.'/style.css">', 0);
$list_count = (is_array($list) && $list) ? count($list) : 0;
include_once(G5_LIB_PATH.'/thumbnail.lib.php');
$thumb_width=400;
$thumb_height=291;
?>

    <?php for ($i=0; $i<$list_count; $i++) {  ?>
  <?php    $thumb = get_list_thumbnail($bo_table, $list[$i]['wr_id'], $thumb_width, $thumb_height);
      if($thumb['src']) {
          $img_content = '<img class="slideitem" src="'.$thumb['ori'].'" alt="'.$thumb['alt'].'" >';
      } else {
          $img_content = '<img src="'.$latest_skin_url.'/img/noimage.gif" width="'.$thumb_width.'" height="'.$thumb_height.'">';
      }
?>

<div class="slideitem" data-dot-title="아이템" style='background:url(<?php echo $thumb['ori'] ?>) no-repeat center top; background-size:100% auto'>
  <div class="textbox1">
    <h5 class="slideh5"><?php  echo $list[$i]['subject']; ?></h5>
    <h6 class="slideh6"><?php  echo $list[$i]['wr_link2']; ?></h6>
    <p><span class="slidespan"><?php  echo $list[$i]['wr_content'];?></span></p>

    <div class="slidetext"><a href="<?php  echo $list[$i]['wr_link1']; ?>" target="_blank">자세히 알아보기</a></div>

  </div>

</div>
<!--
<div class="slideitem" data-dot-title="아이템" style='background:url(/*<?php echo $thumb['ori'] ?>*/) no-repeat center top; background-size:100% auto'>

  <div class="textbox1_1">
    <h5 class="slideh5_1">/*<?php  echo $list[$i]['subject']; ?>*/</h5>
    <h6 class="slideh6_1">/*<?php  echo $list[$i]['wr_link2']; ?>*/</h6>
    <p><span class="slidespan_1">/*<?php  echo $list[$i]['wr_content'];?>*/</span></p>
    <div class="slidetext_1"><a href="/*<?php  echo $list[$i]['wr_link1']; ?>*/" target="_blank">자세히 알아보기</a></div>
  </div>

</div> -->

    <?php }  ?>
    <?php if ($list_count == 0) { //게시물이 없을 때  ?>
    게시물이 없습니다.
    <?php }  ?>
