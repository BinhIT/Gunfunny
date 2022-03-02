<?php
/*
Plugin Name: Register Form
Plugin Author:BinhIT
*/ 
add_shortcode("register_form", "RegisterForm");
function RegisterForm() {
	?>
<div class="container-form-register">
    <form id="form-register" method="POST">
        <div class="form-group">
            <label for="username">Username<span style="color:red">*</span> <span id="username_error"
                    class="err-mess"></span></label>
            <input type="text"" class=" form-control" id="username" placeholder="Enter username" name="username">
        </div>
        <div class="form-group">
            <label for="email">Email <span style="color:red">*</span><span id="email_error"
                    class="err-mess"></span></label>
            <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
        </div>
        <div class="form-group">
            <label for="pwd">Password <span style="color:red">*</span><span id="password_error"
                    class="err-mess"></span></label>
            <input type="password" class="form-control" id="password" placeholder="Enter password" name="pwd">
        </div>
        <div class="form-group">
            <label for="re-pwd">Re - enterPassword <span style="color:red">*</span><span id="re_password_error"
                    class="err-mess"></span></label>
            <input type="password" class="form-control" id="re_password" placeholder="Enter re-password" name="re_pwd">
        </div>
        <div class="form-group">
            <label for="wallet">Wallet Adress <span style="color:red">*</span><span id="wallet_error"
                    class="err-mess"></span></label>
            <input type="text" class="form-control" id="wallet" placeholder="Enter wallet">
        </div>
        <button type="submit" name="btn_submit" id="submit_register">
            <img src="http://localhost/gunfunny/wp-content/uploads/2022/03/buttons-3.png" alt="">
        </button>
        <div id="msg-container">
            <p id="msg-content"></p>
        </div>
    </form>
</div>
<script>
function isEmail(email) {
    var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
    return emailReg.test(email);

}
jQuery(document).ready(function() {
    jQuery('.container-form-register form').on('submit',
        function(e) { // Khi click vào button thì sẽ gọi hàm ajax
            jQuery('.container-msg').hide();
            e.preventDefault();
            var ajaxurl = "<?php echo admin_url('admin-ajax.php');?>";
            /* show firt merchaint */
            var username = jQuery('#username').val();
            var email = jQuery('#email').val();
            var password = jQuery('#password').val();
            var confirm_password = jQuery('#re_password').val();
            var wallet = jQuery('#wallet').val();
            var dataReg = {
                'email': email,
                'password': password,
                'ref': '0',
                'username': username,
                'walletAddress': wallet
            }
            if (password != confirm_password) {
                var msg = '(⛔Xác nhận mật khẩu không khớp ⛔)';
                jQuery('#re_password_error').show();
                jQuery('#re_password_error').html(msg);
                flag = false;


                return false;
            }
            var data = {
                'action': 'gunfunny_register_ajax',
                'dataReg': JSON.stringify(dataReg)
            };
            (function($) {
                $.post(ajaxurl, data, function(response) {
                    if (response != 1) {
                        jQuery('#msg-container').show();
                        jQuery('#msg-content').html(response);

                    } else {
                        setTimeout(function() {
                            window.location.href = "<?php echo site_url()?>/login";
                        }, 2000);

                    }
                });
            }(jQuery))

        });
});
</script>

<?php
}