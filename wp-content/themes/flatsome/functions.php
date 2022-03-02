<?php
/**
 * Flatsome functions and definitions
 *
 * @package flatsome
 */

require get_template_directory() . '/inc/init.php';

/**
 * Note: It's not recommended to add any custom code here. Please use a child theme so that your customizations aren't lost during updates.
 * Learn more here: http://codex.wordpress.org/Child_Themes
 */
add_action( 'wp_ajax_gunfunny_register_ajax', 'gunfunny_register_ajax' );
add_action( 'wp_ajax_nopriv_gunfunny_register_ajax', 'gunfunny_register_ajax' );
function gunfunny_register_ajax() {	
$api = 'http://58.84.1.32:8000/api/v1/auth/register';
	if($_REQUEST['dataReg'] != '' && isset($_REQUEST['dataReg']) ) {
		$dataReg = $_REQUEST['dataReg'];
		$_dataReg = str_replace('\\', '', $dataReg);
		
		$args = array(
			'method'    => 'POST',
			'timeout'     => 45,
			'headers'	=> array(			
				//'Authorization' => 'Bearer ' . $token,
				'Content-Type' => 'application/json'
			),
			'body'	=> $_dataReg
		);

		$response = wp_remote_post($api, $args);	
		
		if ( is_array( $response ) && ! is_wp_error( $response ) ) {
			$headers = $response['headers']; // array of http header lines
			$body    = $response['body']; // use the content
						
			$rs = json_decode($body);
			
			if($rs->status == true) {
				echo 1;
			}
			else {
				echo  $rs->message;	
			}
			

			//echo json_
		}
		else {
			echo 'Something error, please try again!';
		}
	}
	die();
}
/*
Ajax Login
*/
add_action( 'wp_ajax_gunfunny_login_ajax', 'gunfunny_login_ajax' );
add_action( 'wp_ajax_nopriv_gunfunny_login_ajax', 'gunfunny_login_ajax' );
function gunfunny_login_ajax() {
	$api = 'https://api.vikingdom.info/api/v1/auth/login';

	if($_REQUEST['dataLogin'] != '' && isset($_REQUEST['dataLogin']) ) {
		$dataLogin = $_REQUEST['dataLogin'];
		$_dataLogin = str_replace('\\', '', $dataLogin);		

		$args = array(
			'method'    => 'POST',
			'headers'	=> array(			
				//'Authorization' => 'Bearer ' . $token,
				'Content-Type' => 'application/json'
			),
			'body'	=> $_dataLogin
		); 
		$response = wp_remote_post($api, $args);	
	
		if ( is_array( $response ) && ! is_wp_error( $response ) ) {
			$headers = $response['headers']; // array of http header lines
			$body    = $response['body']; // use the content
						
			$rs = json_decode($body);

			if($rs->status == true) {
				echo json_encode($rs->data);
			}
			else {
				echo $rs->message;	
			}

			//echo json_
		}
		else {
			echo 'Something error, please try again!!';
		}
	}
	die();
}
/*
Ajax update transaction
*/
add_action( 'wp_ajax_viking_ajax_update_transaction', 'viking_ajax_update_transaction' );
add_action( 'wp_ajax_nopriv_viking_ajax_update_transaction', 'viking_ajax_update_transaction' );
function viking_ajax_update_transaction() {
	$api = 'https://api.vikingdom.info/api/v1/user/add-trans';

	if($_REQUEST['token'] != '' && isset($_REQUEST['token']) ) {
		$token = $_REQUEST['token'];
		$transaction = $_REQUEST['transaction'];
		$data = '{"transHash": "'.$transaction.'"}';		
		$args = array(
			'method'    => 'POST',
			'headers'	=> array(			
				'Authorization' => 'Bearer ' . $token,
				'Content-Type' => 'application/json'
			),
			'body'	=> $data
		); 
		$response = wp_remote_post($api, $args);	
	
		if ( is_array( $response ) && ! is_wp_error( $response ) ) {
			$headers = $response['headers']; // array of http header lines
			$body    = $response['body']; // use the content
						
			$rs = json_decode($body);

			if($rs->status == true) {
				echo json_encode($rs->data);
			}
			else {
				echo $rs->message;	
			}

			//echo json_
		}
		else {
			echo 'Something error, please try again!!';
		}
	}
	die();
}

/*
Ajax Get Infor User
*/
add_action( 'wp_ajax_viking_get_user_infor_ajax', 'viking_get_user_infor_ajax' );
add_action( 'wp_ajax_nopriv_viking_get_user_infor_ajax', 'viking_get_user_infor_ajax' );
function viking_get_user_infor_ajax() {
	$api = 'https://api.vikingdom.info/api/v1/user/';

	if($_REQUEST['token'] != '') {
		$token = $_REQUEST['token'];
		
		$args = array(
			'method'    => 'GET',
			'headers'	=> array(			
				'Authorization' => 'Bearer ' . $token,
				'Content-Type' => 'application/json'
			),
			'body'	=> ''
		); 
		$response = wp_remote_post($api, $args);	
		

		
		if ( is_array( $response ) && ! is_wp_error( $response ) ) {
			$headers = $response['headers']; // array of http header lines
			$body    = $response['body']; // use the content
						
			$rs = json_decode($body);



			if($rs->status == true) {				
				echo json_encode($rs->data);
			}
			else {
				echo $rs->message;	
			}

			//echo json_
		}
		else {
			echo 'Something error, please try again!!';
		}
	}
	die();
}


/*
Ajax available vike
*/
add_action( 'wp_ajax_viking_get_available_ajax', 'viking_get_available_ajax' );
add_action( 'wp_ajax_nopriv_viking_get_available_ajax', 'viking_get_available_ajax' );
function viking_get_available_ajax() {
	$api = 'https://api.vikingdom.info/api/v1/master/available-vik';

	if($_REQUEST['token'] != '') {
		$token = $_REQUEST['token'];
		
		$args = array(
			'method'    => 'GET',
			'headers'	=> array(			
				'Authorization' => 'Bearer ' . $token,
				'Content-Type' => 'application/json'
			),
			'body'	=> ''
		); 
		$response = wp_remote_post($api, $args);	
		
		
		if ( is_array( $response ) && ! is_wp_error( $response ) ) {
			$headers = $response['headers']; // array of http header lines
			$body    = $response['body']; // use the content
						
			$rs = json_decode($body);

			if($rs->status == true) {
				echo json_encode($rs->data);
			}
			else {
				echo $rs->message;	
			}

			//echo json_
		}
		else {
			echo 'Something error, please try again!!';
		}
	}
	die();
}

/*
Ajax check wallet exits
*/
add_action( 'wp_ajax_viking_ajax_request_check_wallet', 'viking_ajax_request_check_wallet' );
add_action( 'wp_ajax_nopriv_viking_ajax_request_check_wallet', 'viking_ajax_request_check_wallet' );
function viking_ajax_request_check_wallet() {
		
	if($_REQUEST['wallet'] != '') {
		$api = 'https://api.vikingdom.info/api/v1/auth/exists-user?username='.$_REQUEST['wallet'];
		$args = array(
			'method'    => 'GET',
			'headers'	=> array(			
				// 'Authorization' => 'Bearer ' . $token,
				'Content-Type' => 'application/json'
			),
			'body'	=> ''
		); 
		$response = wp_remote_post($api, $args);	
		
		
		if ( is_array( $response ) && ! is_wp_error( $response ) ) {
			$headers = $response['headers']; // array of http header lines
			$body    = $response['body']; // use the content
						
			$rs = json_decode($body);	
			

			if($rs->status == true) {
				echo json_encode($rs->data);
			}
			else {
				echo 0;	
			}

			//echo json_
		}
		else {
			echo 'Something error, please try again!!';
		}
	}
	die();
}

add_shortcode("private_form", "privateForm");
function privateForm() {
	ob_start();

	if($_SESSION['user'] = '') {
		echo '<h5 style="color:#fff">You must login before buy Vike!</h5>';
		echo do_shortcode('[login__form]');
		?>
		<div class="create--account-wallet-block">
			<h5 style="color:#fff">Or register with your wallet address:</h5>
			<div id="info">       
		        <h3 style="font-size: 14px;color:#fff; text-align: left; padding-left: 20px;"></h3>
		    </div>
		    <a id="create-account-wallet" href="">
		    	<button type="button" class="elementor-button elementor-size-md">
					<span class=" elementor-button-icon">
						<span class="elementor-button-text">Create new account</span>
					</span>
				</button>
		    </a>
		    <div class="loading_wallet_block"></div>
		</div>
		<script type="text/javascript">
			jQuery(document).ready(function(){
				setTimeout(function() {

					wallet = $("#info h3").text();
					$.ajax({
					        url: viking_ajax_obj.ajaxurl,
					        data: {		
					        	'wallet': wallet,      	
					            'action': 'viking_ajax_request_check_wallet',			            
					            'nonce' : viking_ajax_obj.nonce
					        },
					        success:function(data) {
					        	if(data == 0) {
					        		alert("Account not exits");
					        		$(".loading_wallet_block").hide();
					        	}
					        },
					        error: function(errorThrown){
					            console.log(errorThrown);
					        }
				    });  

				}, 500);				
				
			})
		</script>
		<?php
	}
	else {

		echo do_shortcode('[elementor-template id="535"]');		
		?>
	 	<div id="info">       
	        <h3 style="font-size: 14px;color:#fff; text-align: left; padding-left: 20px;"></h3>
	    </div>
			
			<script>
				jQuery(document).ready(function(){
				
					var ajaxurl = "<?php echo admin_url('admin-ajax.php');?>";
					token = localStorage.getItem('token');					
					if(token != '' && token != null) {
						
						var data = {
						            'action': 'viking_get_user_infor_ajax',          
						            'token': token
							    };


					    $.post(ajaxurl, data, function(response) {
					    	
					       resData = jQuery.parseJSON(response);		
					       $("#locked_vike").text(resData.vik);
					    });
					

					    var data_check_vike = {
						            'action': 'viking_get_available_ajax',          
						            'token': token
							    };

					    $.post(ajaxurl, data_check_vike, function(response) {
					    	
					       resData = jQuery.parseJSON(response);					       
					       $("#available_vike").text(currencyFormat(resData.availableVik) )
					    });
					}
					jQuery("#form-field-busd").on("change", function() {
						
						var busd = jQuery(this).val();
						var vike = parseFloat(busd) * 50;
						jQuery("#form-field-vike").val(vike);
					});
				
					function currencyFormat(num) {
					  return num.toFixed(0).replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1,')
					}
				})
			</script>
			<a href="javascript:void(0)" id="show_popup_reg"></a>

		<?php
	} // end else user session
	$out = ob_get_clean();
	return $out;
}

function my_custom_scripts() {
    wp_enqueue_script( 'custom-js', get_stylesheet_directory_uri() . '/assets/js/saveMyForm.jquery.js', array( 'jquery' ),'',true );
}
//add_action( 'wp_enqueue_scripts', 'my_custom_scripts' );

add_shortcode("account", "accountInfor");
function accountInfor() {
	ob_start();

	?>
	<div class="account_infor_block">
		<h5>Welcome <strong style="color:#C49A46" id="username"></strong></h5>
		<p>Email: <strong id="email"></strong></p>
		<p>Ref link: <strong id="reflink"></strong></p>
		<p>Wallet address: <strong style="font-size:13px;" id="wallet"></strong></p>
		<p>Your vike: <strong id="vike"></strong></p>

	</div>
	<script>
		jQuery(document).ready(function($){			
						
			jQuery("#username").text(localStorage.getItem("username"));
			jQuery("#email").text(localStorage.getItem("email"));
			jQuery("#wallet").text(localStorage.getItem("walletAddress"));
			jQuery("#vike").text(localStorage.getItem("vike"));
			jQuery("#reflink").text('<?php echo site_url()?>/' + localStorage.getItem("userid"));


			$("#user__logout, #head_user__logout").click(function(){
		     	logout = confirm("Are you sure to logout?");
		     	if(logout) {
		     		localStorage.removeItem('token');
		        	localStorage.removeItem('email');
		        	localStorage.removeItem('userid');
		        	localStorage.removeItem('username');
		        	localStorage.removeItem('walletAddress');
		        	localStorage.removeItem('vikes');

		        	$.ajax({
				        url: viking_ajax_obj.ajaxurl,
				        data: {
				            'action': 'viking_ajax_request_logout',			            
				            'nonce' : viking_ajax_obj.nonce
				        },
				        success:function(data) {
				            // This outputs the result of the ajax request
				            window.location.href = "<?php echo site_url()?>";				            
				        },
				        error: function(errorThrown){
				            console.log(errorThrown);
				        }
				    });  
		     	}
		     	
		    })
		})
	</script>
	<?php
	$out = ob_get_clean();
	echo $out;
}




add_action("wp_head", 'customHeadScript');
function customHeadScript() {
	?>
	<script
	src="https://code.jquery.com/jquery-3.6.0.min.js"
	integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
	crossorigin="anonymous"></script>
	<script src="<?php echo get_stylesheet_directory_uri()?>/assets/web3.js-browser/build/web3.js"></script>
	<script src="<?php echo get_stylesheet_directory_uri()?>/assets/js/process.js?v=1.3.5"></script>
	<script type="text/javascript">
		jQuery(document).ready(function(){
			
		})	
	</script>
	<?php
}

add_shortcode("header_account", "headerAccount");
function headerAccount() {

	if($_SESSION['user']!== '') {	
		echo do_shortcode('[elementor-template id="953"]');
	?>				
		<style>
			.menu-item-923 {display: block!important}
		</style>
		<script>
			jQuery(document).ready(function(){
				var walletAddress = localStorage.getItem("walletAddress");
				var shortWallet = walletAddress.replace(/(.{7})..+/, "$1…");
				jQuery("#wallet__address .elementor-button-text").text(shortWallet);
			})
		</script>
	<?php } else {
		echo do_shortcode('[elementor-template id="804"]');
	}
	?>
	
	<script type="text/javascript">
		jQuery(document).ready(function($) {
 		  		    
		     $("#connect_wallet_metamask").click(function(){		     		
			    $.ajax({
			        url: viking_ajax_obj.ajaxurl,
			        data: {
			            'action': 'viking_ajax_request_wallet_login',			            
			            'nonce' : viking_ajax_obj.nonce
			        },
			        success:function(data) {
			            // This outputs the result of the ajax request
			            console.log(data);
			        },
			        error: function(errorThrown){
			            console.log(errorThrown);
			        }
			    });  
		     })

		     $("#user__logout, #head_user__logout").click(function(){

		     	logout = confirm("Are you sure to logout?");
		     	if(logout) {
		     		localStorage.removeItem('token');
		        	localStorage.removeItem('email');
		        	localStorage.removeItem('userid');
		        	localStorage.removeItem('username');
		        	localStorage.removeItem('walletAddress');
		        	localStorage.removeItem('vikes');

		        	$.ajax({
				        url: viking_ajax_obj.ajaxurl,
				        data: {
				            'action': 'viking_ajax_request_logout',			            
				            'nonce' : viking_ajax_obj.nonce
				        },
				        success:function(data) {
				            // This outputs the result of the ajax request
				            window.location.href = "<?php echo site_url()?>";				            
				        },
				        error: function(errorThrown){
				            console.log(errorThrown);
				        }
				    });  
		     	}
		     	else {
		     		return false;
		     	}
		     	
		    }) 
		});
	</script>
	<?php
}

function example_ajax_enqueue() {

	// Enqueue javascript on the frontend.
	wp_enqueue_script(
		'example-ajax-script',
		get_template_directory_uri() . '/js/simple-ajax-example.js',
		array('jquery')
	);

	// The wp_localize_script allows us to output the ajax_url path for our script to use.
	wp_localize_script(
		'example-ajax-script',
		'viking_ajax_obj',
		array(
			'ajaxurl' => admin_url( 'admin-ajax.php' ),
			'nonce' => wp_create_nonce('ajax-nonce')
		)
	);

}
add_action( 'wp_enqueue_scripts', 'example_ajax_enqueue' );

/*
* Login wallet
*/

function viking_ajax_request_wallet_login() {
 
 
    // The $_REQUEST contains all the data sent via ajax
    if ( isset($_REQUEST) ) {
     	$userId = $_REQUEST['userId'];
        session_start();
        $_SESSION['user'] = $userId;
        // Now we'll return it to the javascript function
        // Anything outputted will be returned in the response
        echo $_SESSION['user'];
     
    }
     
    // Always die in functions echoing ajax content
   die();
}
 
add_action( 'wp_ajax_viking_ajax_request_wallet_login', 'viking_ajax_request_wallet_login' );
// If you wanted to also use the function for non-logged in users (in a theme for example)
add_action( 'wp_ajax_nopriv_viking_ajax_request_wallet_login', 'viking_ajax_request_wallet_login' );

/*
* Logout
*/

function viking_ajax_request_logout() {
 
 
    // The $_REQUEST contains all the data sent via ajax        
    session_start();
    unset($_SESSION['user']);
    // Now we'll return it to the javascript function
    // Anything outputted will be returned in the response        
 	echo 1;
     
    // Always die in functions echoing ajax content
   die();
}
?>