
<?php
/*
Plugin Name: Slider Item Game
Plugin Author:BinhIT
*/ 
add_shortcode("slider_item", "sliderItems");
function sliderItems() {
	?>
    <section id="item_slider">
<div class="owl-carousel">
  <div id="item_img"> <img src="http://localhost/gunfunny-web/wp-content/uploads/2022/02/vk1-item1.png" alt=""> </div>
  <div id="item_img"> <img src="http://localhost/gunfunny-web/wp-content/uploads/2022/02/vk1-item2.png" alt=""> </div>
  <div id="item_img"> <img src="http://localhost/gunfunny-web/wp-content/uploads/2022/02/vk3-item1.png" alt=""> </div>
  <div id="item_img"> <img src="http://localhost/gunfunny-web/wp-content/uploads/2022/02/vk2-item2.png" alt=""> </div>
  <div id="item_img"> <img src="http://localhost/gunfunny-web/wp-content/uploads/2022/02/vk2-item1.png" alt=""> </div>
  <div id="item_img"> <img src="http://localhost/gunfunny-web/wp-content/uploads/2022/02/vk3-item2.png" alt=""> </div>
  <div id="item_img"> <img src="http://localhost/gunfunny-web/wp-content/uploads/2022/02/vk4-item1.png" alt=""> </div>
  <div id="item_img"> <img src="http://localhost/gunfunny-web/wp-content/uploads/2022/02/vk4-item2.png" alt=""> </div>
  <div id="item_img"> <img src="http://localhost/gunfunny-web/wp-content/uploads/2022/02/vk5-item2.png" alt=""> </div>
  <div id="item_img"> <img src="http://localhost/gunfunny-web/wp-content/uploads/2022/02/vk6-item1.png" alt=""> </div>
  <div id="item_img"> <img src="http://localhost/gunfunny-web/wp-content/uploads/2022/02/vk5-item1.png" alt=""> </div>
  <div id="item_img"> <img src="http://localhost/gunfunny-web/wp-content/uploads/2022/02/vk7-item2.png" alt=""> </div>
  <div id="item_img"> <img src="http://localhost/gunfunny-web/wp-content/uploads/2022/02/vk7-item1.png" alt=""> </div>
  <div id="item_img"> <img src="http://localhost/gunfunny-web/wp-content/uploads/2022/02/vk6-item2.png" alt=""> </div>
  <div id="item_img"> <img src="http://localhost/gunfunny-web/wp-content/uploads/2022/02/vk8-item1.png" alt=""> </div>
  <div id="item_img"> <img src="http://localhost/gunfunny-web/wp-content/uploads/2022/02/vk8-item2.png" alt=""> </div>
  <div id="item_img"> <img src="http://localhost/gunfunny-web/wp-content/uploads/2022/02/vk9-item1.png" alt=""> </div>
  <div id="item_img"> <img src="http://localhost/gunfunny-web/wp-content/uploads/2022/02/vk11-item1.png" alt=""> </div>
  <div id="item_img"> <img src="http://localhost/gunfunny-web/wp-content/uploads/2022/02/vk10-item2.png" alt=""> </div>
  <div id="item_img"> <img src="http://localhost/gunfunny-web/wp-content/uploads/2022/02/vk10-item1.png" alt=""> </div>
  <div id="item_img"> <img src="http://localhost/gunfunny-web/wp-content/uploads/2022/02/vk9-item2.png" alt=""> </div>
  <div id="item_img"> <img src="http://localhost/gunfunny-web/wp-content/uploads/2022/02/vk11-item2.png" alt=""> </div>
  <div id="item_img"> <img src="http://localhost/gunfunny-web/wp-content/uploads/2022/02/vk12-item2.png" alt=""> </div>
</div>
<div class="slider_nav">
	<button class="am-next">Next</button>
	<button class="am-prev">Previous</button>
</div>
</section>
<style>
    #item_img img{
        width: 100% !important;
        height: 150% !important;
        opacity: 0.5;
    }
    #item_img img:hover{
        opacity: 2;
    }

    #item_slider{
        margin-bottom: 0%;
    }
</style>
	<?php
}