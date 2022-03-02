
<?php
/*
Plugin Name: Slider Item Game
Plugin Author:BinhIT
*/ 
add_shortcode("slider_character", "SliderCharacter");
function SliderCharacter() {
	?>
      <section id="character_slider">
<div class="owl-carousel">
  <div id="item_img active"> <img src="https://gunfunny.io/wp-content/uploads/2022/02/character1.png" alt=""> </div>
  <div id="item_img"> <img src="https://gunfunny.io/wp-content/uploads/2022/02/character2.png" alt=""> </div>
  <div id="item_img"> <img src="https://gunfunny.io/wp-content/uploads/2022/02/character3.png" alt=""> </div>
  <div id="item_img"> <img src="https://gunfunny.io/wp-content/uploads/2022/02/character4.png" alt=""> </div>
  <div id="item_img"> <img src="https://gunfunny.io/wp-content/uploads/2022/02/character5.png" alt=""> </div>
  <div id="item_img"> <img src="https://gunfunny.io/wp-content/uploads/2022/02/character6.png" alt=""> </div>
  <div id="item_img"> <img src="https://gunfunny.io/wp-content/uploads/2022/02/toc-8.png" alt=""> </div>
</div>
<div class="thumnail">

</div>
<!-- <div class="slider_nav">
	<button class="am-next">Next</button>
	<button class="am-prev">Previous</button>
</div> -->
</section>
<style>
   #item_img img{
        width: 100% !important;
        height: 60% !important;
        opacity: 0.5;
    }
    #item_img img:hover{
        opacity: 2;
    }

    #character_slider {
    margin-top: -15%;
}
</style>
	<?php
}