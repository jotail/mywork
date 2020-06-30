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
          $img_content = '<img class="ampimg" src="'.$thumb['ori'].'" alt="'.$thumb['alt'].'" >';
      } else {
          $img_content = '<img src="'.$latest_skin_url.'/img/noimage.gif" width="'.$thumb_width.'" height="'.$thumb_height.'">';
      }
?>


      <div class="col-md-12" id="modal2">
        <div class="row">
          <div class="col-md-7 noneck">
            <?php echo $img_content ?>
          </div>
          <div class="col-md-5 liston">
            <h3><?php  echo $list[$i]['subject']; ?></h3>
          <?php  echo $list[$i]['wr_content'];?>
          </div>
        </div>
      </div>

    <?php }  ?>
    <?php if ($list_count == 0) { //게시물이 없을 때  ?>
    게시물이 없습니다.
    <?php }  ?>
