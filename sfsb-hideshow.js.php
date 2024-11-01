<?php
header("content-type: application/x-javascript");
$animation = $_GET['an']; //fsml hsanimation
$usecookies = $_GET['uc'];//fsml usecookies
$cookielength = $_GET['cl'];//fsml cookielength
?>
jQuery(document).ready(function() {

<?php if($usecookies){ ?>
	// remember hidden option, and act accordingly
	if(fsmlReadCookie('fsmlOpen')=='closed'){
		jQuery('#fsml_ff').hide(0, function() { jQuery('#fsml_ffhidden').show(0); });
	}
<?php }
if($animation == 'fade'){ ?>
	// fade in/out
	jQuery('#fsml_hide').click( function(){ jQuery('#fsml_ff').fadeOut(800, function() { jQuery('#fsml_ffhidden').fadeIn(200); }); <?php if($usecookies){ echo "fsmlCreateCookie('fsmlOpen','closed',".$cookielength.");"; }?> });
	jQuery('#fsml_ffhidden').click( function(){  jQuery('#fsml_ff').fadeIn(1200); jQuery('#fsml_ffhidden').fadeOut(800); fsmlEraseCookie('fsmlOpen'); });//continue to clear cookies on show regardless of cookies setting
<?php }
elseif($animation == 'none'){ ?>
	// no animation
	jQuery('#fsml_hide').click( function(){ jQuery('#fsml_ff').hide(0, function() { jQuery('#fsml_ffhidden').show(0); }); <?php if($usecookies){ echo "fsmlCreateCookie('fsmlOpen','closed',".$cookielength.");";} ?> });
	jQuery('#fsml_ffhidden').click( function(){  jQuery('#fsml_ff').show(0); jQuery('#fsml_ffhidden').hide(0); fsmlEraseCookie('fsmlOpen') });//continue to clear cookies on show regardless of cookies setting
<?php }
else{ ?>
// jQuery hide/show
	jQuery('#fsml_hide').click( function(){ jQuery('#fsml_ff').hide(1000, function() { jQuery('#fsml_ffhidden').show(300); }); <?php if($usecookies){ echo "fsmlCreateCookie('fsmlOpen','closed',".$cookielength.");";} ?> });
	jQuery('#fsml_ffhidden').click( function(){  jQuery('#fsml_ff').show(1000); jQuery('#fsml_ffhidden').hide(300); fsmlEraseCookie('fsmlOpen'); });//continue to clear cookies on show regardless of cookies setting
<?php } ?>
});
<?php if($usecookies) {?>
function fsmlCreateCookie(name,value,days) {
	if (days) {
			var date = new Date();
			date.setTime(date.getTime()+(days*24*60*60*1000));
			var expires = "; expires="+date.toGMTString();
	}
	else var expires = "";
	document.cookie = name+"="+value+expires+"; path=/";
}

function fsmlReadCookie(name){
	var nameEQ = name + "=";
	var ca = document.cookie.split(';');
	for(var i=0;i < ca.length;i++) {
			var c = ca[i];
			while (c.charAt(0)==' ') c = c.substring(1,c.length);
			if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
	}
	return null;
}
<?php } ?>
function fsmlEraseCookie(name){
	fsmlCreateCookie(name,"",-1);
}