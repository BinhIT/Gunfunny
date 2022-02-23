<?php
/*
Plugin Name: Social Media Icon
Plugin Author:BinhIT
*/ 
add_shortcode("item__media", "ItemsMedia");
function ItemsMedia() {
	?>
<section id="item_media">
    <ul class='social'>
        <li>
            <a class="fa fa-facebook" href="#">
                <img src="http://gunfunny.io/wp-content/uploads/2022/02/tele-1.png" alt="">
            </a>
        </li>

        <li>
            <a class="fa fa-twitter" href="#">
                <img src="http://gunfunny.io/wp-content/uploads/2022/02/tele-1-1.png" alt="">
            </a>
        </li>

        <li>
            <a class="fa fa-dribbble" href="#">
                <img src="http://gunfunny.io/wp-content/uploads/2022/02/tele-1-2.png" alt="">
            </a>
        </li>

        <li>
            <a class="fa fa-dribbble" href="#">
                <img src="http://gunfunny.io/wp-content/uploads/2022/02/tele-1-4.png" alt="">
            </a>
        </li>
        <li>
            <a class="fa fa-dribbble" href="#">
                <img src="http://gunfunny.io/wp-content/uploads/2022/02/tele-1-5.png" alt="">
            </a>
        </li>
        <li>
            <a class="fa fa-dribbble" href="#">
                <img src="http://gunfunny.io/wp-content/uploads/2022/02/tele-1-6.png" alt="">
            </a>
        </li>

    </ul>
</section>
<style>
#item_media ul {
    list-style: none;
    border: 4px solid rgba(16, 104, 255, 0.5);
    border-radius: 25px;
    width: 60px;
    height:auto;
    box-shadow: 0px 4px 10px 2px rgba(16, 104, 255, 0.5);
}

.social_media_icon {
    background-color: tranparent;
    position: fixed;
    top: 50% !important;
    left: 90%;
}

.social {
    position: absolute !important;
    margin-top: 15%;
}
.social li{
    margin-bottom:10%;
}
.social li a {
    display: block;
    height: 40px;
    width: 84px;
    padding: 8px;
}
.social li a img{
    border-radius:25px;
}

@media only screen and (max-width: 600px) {
    .social_media_icon {
    position: fixed;
    top: 50% !important;
    left: 89%;
}
#item_media ul {
    list-style: none;
    border: 4px solid rgba(16, 104, 255, 0.5);
    border-radius: 25px;
    width: 50px;
    height: auto;
    box-shadow: 0px 4px 10px 2px rgb(16 104 255 / 50%);
}
.social li a {

    padding: 4px;
}
}
</style>
<?php
}