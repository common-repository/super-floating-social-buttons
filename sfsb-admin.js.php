<?php
header("content-type: application/x-javascript");
	// grab dynamic parameters
	$tab = $_GET['tab'];
	$colors = $_GET['colors'];
	$border = $_GET['border'];
	$sshadow = $_GET['sshadow'];
	$aadvanced = $_GET['aadvanced'];
	$gadvanced = $_GET['gadvanced'];
	$fbl = $_GET['fbl'];
	$yts = $_GET['yts'];
	$nac = $_GET['nac'];
	
			echo 'jQuery(document).ready(function() {';
			// prepare the color pickers (for the appearance sub-page)
			// still using farbtastic rather than the new wordpress color picker
			//echo the jQuery with php in order to iterate it	
				$it = 1;
				while($it < 3) {
				echo (
					"jQuery('#ilctabscolorpicker" . $it . "').hide();
					jQuery('#ilctabscolorpicker" . $it . "').farbtastic('#color" . $it . "');
					jQuery('#color" . $it . "').click(function(){jQuery('#ilctabscolorpicker" . $it . "').slideDown()});
					jQuery('#color" . $it . "').blur(function(){jQuery('#ilctabscolorpicker" . $it . "').slideUp()});" 
				);
				$it++;
				}?>
			// the script for displaying each options subpage without needing to reload the settings page
				jQuery('#fsml_content').hide();
				jQuery('#fsml_appearance').hide();
				jQuery('#fsml_custom').hide(); 
				jQuery('#fsml_buttons').hide();
				jQuery('#fsmlsuboptionspage_general').addClass( 'fsmlcurrent' );
				jQuery('#fsmlsuboptionspage_general').click( function(){ 
					jQuery('#fsml_content').hide(300); 
					jQuery('#fsml_appearance').hide(300); 
					jQuery('#fsml_custom').hide(300); 
					jQuery('#fsml_buttons').hide(300); 
					jQuery('#fsml_general').show(300); 
					jQuery('#fsmlsubpages .fsmlcurrent').removeClass( 'fsmlcurrent' );
					jQuery(this).addClass( 'fsmlcurrent' );
					jQuery('#settingstab').val('general');
				} );
				jQuery('#fsmlsuboptionspage_content').click( function(){ 
					jQuery('#fsml_general').hide(300); 
					jQuery('#fsml_appearance').hide(300); 
					jQuery('#fsml_custom').hide(300); 
					jQuery('#fsml_buttons').hide(300); 
					jQuery('#fsml_content').show(300); 
					jQuery('#fsmlsubpages .fsmlcurrent').removeClass( 'fsmlcurrent' );
					jQuery(this).addClass( 'fsmlcurrent' );
					jQuery('#settingstab').val('content');
				} );
				jQuery('#fsmlsuboptionspage_buttons').click( function(){ 
					jQuery('#fsml_general').hide(300); 
					jQuery('#fsml_appearance').hide(300); 
					jQuery('#fsml_custom').hide(300); 
					jQuery('#fsml_content').hide(300); 
					jQuery('#fsml_buttons').show(300); 
					jQuery('#fsmlsubpages .fsmlcurrent').removeClass( 'fsmlcurrent' );
					jQuery(this).addClass( 'fsmlcurrent' );
					jQuery('#settingstab').val('buttons');
				} );
				jQuery('#fsmlsuboptionspage_appearance').click( function(){ 
					jQuery('#fsml_general').hide(300); 
					jQuery('#fsml_content').hide(300); 
					jQuery('#fsml_buttons').hide(300); 
					jQuery('#fsml_appearance').show(300); 
					jQuery('#fsml_custom').show(300); 
					jQuery('#fsmlsubpages .fsmlcurrent').removeClass( 'fsmlcurrent' );
					jQuery(this).addClass( 'fsmlcurrent' );
					jQuery('#settingstab').val('appearance');
				} );
				//set the initial page to the most recent one
				jQuery('#fsmlopform table.form-table').hide();
				<?php if($tab == 'content') {
						echo 'jQuery("#fsml_content").show();';
						echo "jQuery('#fsmlsubpages .fsmlcurrent').removeClass( 'fsmlcurrent' );";
						echo "jQuery('#fsmlsuboptionspage_content').addClass( 'fsmlcurrent' );";
					}
					elseif($tab == 'buttons'){
						echo 'jQuery("#fsml_buttons").show();';
						echo "jQuery('#fsmlsubpages .fsmlcurrent').removeClass( 'fsmlcurrent' );";
						echo "jQuery('#fsmlsuboptionspage_buttons').addClass( 'fsmlcurrent' );";
					}
					elseif($tab == 'appearance'){
						echo 'jQuery("#fsml_appearance").show();';
						echo "jQuery('#fsmlsubpages .fsmlcurrent').removeClass( 'fsmlcurrent' );";
						echo "jQuery('#fsmlsuboptionspage_appearance').addClass( 'fsmlcurrent' );";
						echo 'jQuery("#fsml_custom").show();';
					}
					else
						echo 'jQuery("#fsml_general").show();';				
				// hide the custom colorscheme options when not using a custom colorscheme
				if($colors != "custom") { echo('jQuery("#fsmlcsscustomoptions").hide();'); } 
				else { echo('jQuery("#fsmlcsscustomoptions").show();'); } ?>
				jQuery('#fsmlcscustom').click(function(){ jQuery('#fsmlcsscustomoptions').show(500); });
				jQuery('#fsmlcslight').click(function(){ jQuery('#fsmlcsscustomoptions').hide(500); });
				jQuery('#fsmlcsdark').click(function(){ jQuery('#fsmlcsscustomoptions').hide(500); });
				// hide the custom border color option when there is no border
				<?php if($border == 'no') { echo('jQuery("#bordercolor").hide();'); } ?>
				jQuery('#borderyes').click(function(){ jQuery('#bordercolor').show(300); });
				jQuery('#borderno').click(function(){ jQuery('#bordercolor').hide(300); });
				// hide the custom border color option when there is no border
				<?php if($sshadow == 'no') { echo('jQuery("#shadowcolor").hide();'); } ?>
				jQuery('#shadowyes').click(function(){ jQuery('#shadowcolor').show(300); });
				jQuery('#shadowno').click(function(){ jQuery('#shadowcolor').hide(300); });
				// dynamically show the correct size options based on whether the site is running fixed or dynamic width (also hide the border option since no border is allowed with dynamic widths (since border can't be %)
				jQuery('#fixedwidth').click(function(){ jQuery('#fixedsize').show(); jQuery('#dynamicsize').hide(); jQuery('#showborder').show(); });
				jQuery('#dynamicwidth').click(function(){ jQuery('#fixedsize').hide(); jQuery('#dynamicsize').show(); jQuery('#showborder').hide(); jQuery('#bordercolor').hide(); });
				//dynamically show options based on availability/relevance
				jQuery('#noshow').click(function(){ jQuery('#expandtitle').hide(300); jQuery('#hsanimation').show(300); });
				jQuery('#nohide').click(function(){ jQuery('#expandtitle').hide(300); jQuery('#hsanimation').hide(300); });
				jQuery('#shyes').click(function(){ jQuery('#expandtitle').show(300); jQuery('#hsanimation').show(300); });
				jQuery('#sthidden').click(function(){ jQuery('#expandtitle').show(300); jQuery('#hsanimation').show(300); });
				
				//show/hide options specific to certain action buttons
				jQuery('#actionfblike').bind('change', function () {
					jQuery('#fburltolike').toggle(300);
					jQuery('#incfbsdk').toggle(300);
					jQuery('#fbresize').toggle(300);
					jQuery('#fbsend').toggle(300);
				});
				jQuery('#actionytsub').bind('change', function () {
					jQuery('#ytuseridetc').toggle(300);
				});
				<?php if(!$fbl) { ?>
					jQuery('#fburltolike').hide();
					jQuery('#incfbsdk').hide();
					jQuery('#fbresize').hide();
					jQuery('#fbsend').hide();
				<?php } ?>
				<?php if(!$yts) { ?>
					jQuery('#ytuseridetc').hide();
				<?php } ?>
				//show/hide advanced appearance options
				<?php if($aadvanced == 'hidden') { echo 'jQuery(".apadvanced").hide();' . 'jQuery("#hideapadvanced").hide();' ; } ?>
				<?php if($aadvanced == 'shown') { echo 'jQuery("#showapadvanced").hide();' ; } ?>
				jQuery('#showapadvanced').click(function(){ jQuery('.apadvanced').show(300); jQuery('#hideapadvanced').show(300); jQuery(this).hide(200); jQuery('#apadvanced').val('shown'); });
				jQuery('#hideapadvanced').click(function(){ jQuery('.apadvanced').hide(300); jQuery('#showapadvanced').show(300); jQuery(this).hide(200); jQuery('#apadvanced').val('hidden'); });
				
				//show/hide advanced general options
				<?php if($gadvanced == 'hidden') { echo 'jQuery(".genadvanced").hide();' . 'jQuery("#hidegenadvanced").hide();' ; } ?>
				<?php if($gadvanced == 'shown') { echo 'jQuery("#showgenadvanced").hide();' ; } ?>
				jQuery('#showgenadvanced').click(function(){ jQuery('.genadvanced').show(300); jQuery('#hidegenadvanced').show(300); jQuery(this).hide(200); jQuery('#genadvanced').val('shown'); });
				jQuery('#hidegenadvanced').click(function(){ jQuery('.genadvanced').hide(300); jQuery('#showgenadvanced').show(300); jQuery(this).hide(200); jQuery('#genadvanced').val('hidden'); });
				
				//reset advanced appearance settings to metro/classic styles
				jQuery('#set-to-metro').click(function(){
					jQuery('input:radio[name="fsml_options[border]"]').val(['no']);
					jQuery('input:radio[name="fsml_options[shadow]"]').val(['no']);
					jQuery('input:radio[name="fsml_options[borderradius]"]').val(['none']);
				});
				jQuery('#set-to-classic').click(function(){
					jQuery('input:radio[name="fsml_options[shadow]"]').val(['yes']);
					jQuery('input:radio[name="fsml_options[borderradius]"]').val(['med']);
				});


				<?php
				// the jquery for showing more custom link options in the form, using php to write the jquery to show the correct number of links initially
				//start by hiding all of the add another custom link links except for the one after the last active option
				  $customlinksit = 0;
					while($customlinksit < $nac) {
						echo ('jQuery("#addcustom' . $customlinksit . '").hide();
						');
						$customlinksit++;
					}
					$customlinksit = 7;
					while($customlinksit > $nac) {
						echo ('jQuery("#addcustom' . $customlinksit . '").hide();
						');
						$customlinksit--;
					}
				// show the next custom link options on clicking the add another link buttons
					$customlinksit = 0;
					while($customlinksit < 7) {
						echo ( "jQuery('#addcustom". $customlinksit . "').click(function(){ jQuery(this).next('tr').show(500, function(){ jQuery(this).prev().hide(300); jQuery(this).next('tr').show(300);}); });
						" );
						$customlinksit++; 
					}?>
				
			} );