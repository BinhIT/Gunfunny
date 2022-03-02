<?php
/*
Plugin Name: Login Form
Plugin Author:BinhIT
*/ 
add_shortcode("login_form", "LoginForm");
function LoginForm() {
	?>
<div class="container-form-login">
    <form method="post">
        <div class="container" id="container-form-login">
            <label for="uname" style="float: left;"><b>Username</b><span>*</span></label>
            <input type="text" placeholder="Enter Username" name="username" required id="username">

            <label for="psw" style="float: left;"><b>Password</b><span>*</span></label>
            <input type="password" placeholder="Enter Password" name="pswd" id="pwd" required>

            <button type="submit" name="btn_submit" id="submit_register">
                <img src="http://localhost/gunfunny/wp-content/uploads/2022/03/buttons-3.png" alt="">
            </button>
            <div id="msg-container">
            <p id="msg-content"></p>
            </div>
        </div>
    </form>
</div>
<script>
jQuery(document).ready(function($) {
    jQuery('.container-form-login form').on('submit',
        function(e) {
            jQuery('#container-msg').hide();
            e.preventDefault();
            var ajaxurl = "<?php echo admin_url('admin-ajax.php');?>";
            var username = jQuery('#username').val();
            var pwd = jQuery('#pwd').val();
            var dataLogin = {
                'password': pwd,
                'username': username,

            }
            var data = {
                'action': 'gunfunny_login_ajax',
                'dataLogin': JSON.stringify(dataLogin)
            };
            (function($) {
                $.post(ajaxurl, data, function(response) {
                    if (response != 1) {
                        jQuery('#msg-container').show();
                        jQuery('#msg-content').html(response);

                    } else {
                        setTimeout(function() {
                            window.location.href = "<?php echo site_url()?>/";
                        }, 2000);

                    }
                });
            }(jQuery))
        });
})
</script>

<?php
}