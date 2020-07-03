jQuery.noConflict(); //제이쿼리 충돌방지
jQuery( document ).ready(function( $ ) {

var bgdata = $("#hd").data('params');

  //{"bgs":[ "bg-header.jpg", "bg-header1.jpg", "bg-header2.jpg"]} 쌍따움표로 반드시 표현
  // $("#hd").append(  bgdata.bgs[0] ); 정렬값이 출력되면 object 인식이 된것이다.
  // $("#hd").append(  typeof bgdata );

var count = 0;
  hdAni("#hd", 0); //실행문

  setInterval(function(){
  count++;
  count %= 3;
  hdAni("#hd", count);

}, 3500);


function hdAni(sel, i){
$(sel).css({
        'background':"url("+bgdata.dir+bgdata.bgs[i]+")",
        "opacity": 0.1
      }).animate({
        "opacity":1
      },1000);
    }
});
