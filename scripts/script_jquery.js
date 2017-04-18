$(document).ready(function() {

	/* ----------------------------------------------------------- Initilize menu on smaller screens ------------------------------------------------------------------ */

	$(".button-collapse").sideNav();

	/* ---------------------------------------------------------------- Initilize clipboardjs ------------------------------------------------------------------------- */

	var clipboard = new Clipboard('.copybtn');

	clipboard.on('success', function(e) {
    	Materialize.toast('Copied to clipboard', 4000);
	});

	clipboard.on('error', function(e) {
	    Materialize.toast('Press CTRL+C!', 4000);
	});

	/* -------------------------------------------------------------------- Initilize modals -------------------------------------------------------------------------- */

	$('.modal').modal();

	/* -------------------------------------------------------------------- Initilize select -------------------------------------------------------------------------- */

	$('select').material_select();

	/* ------------------------------------------------------------- Initilize collapsible changelog ------------------------------------------------------------------ */

	$('.collapsible').collapsible();

	/* ------------------------------------------------------------- Set nav links to active page --------------------------------------------------------------------- */
	
	if(section){
		$('li[data-nav_page="'+section+'"]').addClass('active');
	}

	/* ----------------------------------------------------------- Set nav links to active subsection --------------------------------------------------------------------- */

	if(typeof presection !== 'undefined' && presection){
		$('li[data-nav_section="'+presection+'"]').addClass('active');
	}

	/* ------------------------------------------------------------- URL Checker function --------------------------------------------------------------------------------- */

	function isURL(str) {
     	var urlRegex = '^(?!mailto:)(?:(?:http|https|ftp)://)(?:\\S+(?::\\S*)?@)?(?:(?:(?:[1-9]\\d?|1\\d\\d|2[01]\\d|22[0-3])(?:\\.(?:1?\\d{1,2}|2[0-4]\\d|25[0-5])){2}(?:\\.(?:[0-9]\\d?|1\\d\\d|2[0-4]\\d|25[0-4]))|(?:(?:[a-z\\u00a1-\\uffff0-9]+-?)*[a-z\\u00a1-\\uffff0-9]+)(?:\\.(?:[a-z\\u00a1-\\uffff0-9]+-?)*[a-z\\u00a1-\\uffff0-9]+)*(?:\\.(?:[a-z\\u00a1-\\uffff]{2,})))|localhost)(?::\\d{2,5})?(?:(/|\\?|#)[^\\s]*)?$';
     	var url = new RegExp(urlRegex, 'i');
     	return str.length < 2083 && url.test(str);
	}

	/* ------------------------------------------------------------- Hex Color to RGB Color Converter ------------------------------------------------------------------- */
	
	function hexToRgb(hex) {
		var hexreg = /^#?([a-f\d]{2})([a-f\d]{2})([a-f\d]{2})$/i;
	    var result = hexreg.exec(hex);
	    return result ? {
	        r: parseInt(result[1], 16),
	        g: parseInt(result[2], 16),
	        b: parseInt(result[3], 16)
	    } : null;
	}

	/* ------------------------------------------------------------- Determine Font color Based on BG Color ------------------------------------------------------------- */

	function determineFontColor(color) {
			rgbcolor = hexToRgb(color);
			rgb = [rgbcolor.r, rgbcolor.g, rgbcolor.b];
			var o = Math.round(((parseInt(rgb[0]) * 299) + (parseInt(rgb[1]) * 587) + (parseInt(rgb[2]) * 114)) / 1000);
			return (o > 125) ? 1 : 0;	// 1 is black 0 is white
		}

	/* ------------------------------------------------------------- Stop scroll from changeing input values ------------------------------------------------------------- */

	$(':input[type=number]').on('mousewheel', function(e){
    	e.preventDefault();
	});

	/* ------------------------------------------------------------- Send Message from Contact Form via AJAX ------------------------------------------------------------- */

	$(document).on('click','.contact_button',function () {
		
		var firstname=$("input[name='contact_name']").val();
		var lastname=$("input[name='contact_lastname']").val();
		var email=$("input[name='contact_mail']").val();
		var message=$("textarea[name='contact_message']").val();

		
		$.ajax({
			type: 'POST',
	        url: base_url+'contact/send',
	        data: {
	        	contact_name : firstname,
	        	contact_lastname : lastname,
	        	contact_mail : email,
	        	contact_message : message
	        },
	        dataType: 'text',
	        success: function (resp){
	        	Materialize.toast(resp, 4000);
		    }
		}); 
	});

	/* --------------------------------------------------------- Create new style element node for transition preview -----------------------------------------------------------*/

	var style = document.createElement('style');
	document.getElementsByTagName('head')[0].appendChild(style);

	/* --------------------------------------------------------- Hide nonactive choices for transition generator -----------------------------------------------------------*/

	$("[id^=transition_field_]").hide();

	$('#transition_field_'+$('#transition_transition_property').val()).show();	// All options are hidden by default this shows active option


	/* --------------------------------------------------------- Hide nonactive choices for filter generator -----------------------------------------------------------*/

	$("[id^=field_filter_]").hide();

	$('#field_filter_'+$('#filter_function').val()).show();	// All options are hidden by default this shows active option

	/* --------------------------------------------------------- Hide nonactive choices for gradient generator -----------------------------------------------------------*/

	$("[id^=gradient_field_]").hide();

	$('#gradient_field_'+$('#gradient_style').val()).show();	// All options are hidden by default this shows active option


	/* -------------------------------------------------------------------- Miltiple columns Generator -------------------------------------------------------------------- */

	$(document).on('keyup','#num_of_columns',function () {
		getMultipleColumns();
	});

	$(document).on('keyup','#column_gap',function () {
		getMultipleColumns();
	});

	function getMultipleColumns() {
		var colgap = $('#column_gap').val();
		var numcol = $('#num_of_columns').val();

		if(!numcol){
			numcol=1;
		}
		if (!colgap) {
			colgap=0;
		}

		$('.multiple_columns_preview').css({
			'-moz-column-count': numcol,
			'-moz-column-gap': colgap+"px",
			'-webkit-column-count': numcol,
			'-webkit-column-gap': colgap+"px",
			'column-count': numcol,
			'column-gap': colgap+"px"
		});

		setMultipleColumns(numcol,colgap);
	}
	function setMultipleColumns(numcol,colgap) {
		if(!colgap || colgap==0){
			if(!numcol || numcol==1){
				$('#generated_code_text').html(
					'There is no generated code'
				);
			}
			else{
				$('#generated_code_text').html(
					'<code><span>-moz-column-count:'+numcol+';</span></br><span>-webkit-column-count:'+numcol+';</span></br><span>column-count:'+numcol+';</span></code>'
				);
			}
		}
		else{
			if(!numcol || numcol==1){
				$('#generated_code_text').html(
					'Number of columns must be specified'
				);
			}
			else{
				$('#generated_code_text').html(
					'<code><span>-moz-column-count:'+numcol+';</span></br><span>-moz-column-gap:'+colgap+'px;</span></br><span>-webkit-column-count:'+numcol+';</span></br><span>-webkit-column-gap:'+colgap+'px;</span></br><span>column-count:'+numcol+';</span></br><span>column-gap:'+colgap+'px;</span></code>'
				);
			}
		}
	}

	/* -------------------------------------------------------------------- Text Shadow Generator -------------------------------------------------------------------- */

	$(document).on('keyup','#text_shadow_hlength',function () {
		getTextShadow();
	});
	$(document).on('keyup','#text_shadow_vlength',function () {
		getTextShadow();
	});
	$(document).on('keyup','#text_shadow_blur',function () {
		getTextShadow();
	});
	$(document).on('change','#text_shadow_color',function () {
		getTextShadow();
	});

	function getTextShadow() {
		var hlength = $('#text_shadow_hlength').val();
		var vlength = $('#text_shadow_vlength').val();
		var blur = $('#text_shadow_blur').val();
		var color = $('#text_shadow_color').val();

		setTextShadow(hlength,vlength,blur,color);
	}
	function setTextShadow(hlength,vlength,blur,color) {
		if (hlength && vlength && blur && color) {
			$('.text_shadow_preview').css({
				'text-shadow': hlength+'px '+vlength+'px '+blur+'px '+color
			});
			$('#generated_code_text').html(
				'<code><span>text-shadow:'+hlength+'px '+vlength+'px '+blur+'px '+color+';</span></code>'
			);
		}
		else if(hlength && vlength){
			$('.text_shadow_preview').css({
				'text-shadow': hlength+'px '+vlength+'px'+color
			});
			$('#generated_code_text').html(
				'<code><span>text-shadow:'+hlength+'px '+vlength+'px '+color+';</span></code>'
			);
		}
		else{
			$('.text_shadow_preview').css({
				'text-shadow': 'none'
			});
			$('#generated_code_text').html(
				'There is no generated code'
			);
		}
	}

	/* -------------------------------------------------------------------- Outiline Generator -------------------------------------------------------------------- */

	$(document).on('keyup','#outline_thicknes',function () {
		getOutline();
	});
	$(document).on('change','#outline_style',function () {
		getOutline();
	});
	$(document).on('change','#outline_color',function () {
		getOutline();
	});
	$(document).on('keyup','#outline_offset',function () {
		getOutline();
	});

	function getOutline() {
		var thicknes = $('#outline_thicknes').val();
		var style = $('#outline_style').val();
		var color = $('#outline_color').val();
		var offset = $('#outline_offset').val();

		if (!style) {
			style="solid";
		}

		if (!offset) {
			offset=0;
		}

		if (!thicknes) {
			thicknes=0;
		}

		setOutline(thicknes,style,color,offset);
	}
	function setOutline(thicknes,style,color,offset) {
		if(thicknes && offset && style){
			$('.outline_preview').css({
				'outline': thicknes+'px '+style+" "+color,
				'outline-offset': offset+'px'
			});
			$('#generated_code_text').html(
				'<code><span>outline:'+thicknes+'px '+style+" "+color+";</span></br><span>outline-offset:"+offset+'px;</span></code>' 
			);
		}
		else if(!thicknes && !offset && style){
			$('.outline_preview').css({
				'outline-style': style,
				'outline-color': color,
				'outline-offset': 0			// RESET THE OFFSET TO 0 IN PREVIEW
			});
			$('#generated_code_text').html(
				'<code><span>outline-style:'+style+";</span></br><span>outline-color:"+color+";</span></code>"
			);
		}
		else if(!thicknes && offset && style){
			$('.outline_preview').css({
				'outline': style+" "+color,
				'outline-offset': offset+'px'
			});
			$('#generated_code_text').html(
				'<code><span>outline:'+style+" "+color+";</span></br><span>outline-offset:"+offset+'px;</span></code>' 
			);
		}
		else if(thicknes && !offset && style){
			$('.outline_preview').css({
				'outline': thicknes+"px "+style+" "+color,
				'outline-offset': 0			// RESET THE OFFSET TO 0 IN PREVIEW
			});
			$('#generated_code_text').html(
				'<code><span>outline:'+thicknes+'px '+style+" "+color+';</span></code>' 
			);
		}
		else if(thicknes && offset && !style){
			$('.outline_preview').css({
				'outline': thicknes+"px solid "+color,
				'outline-offset': offset+'px'
			});
			$('#generated_code_text').html(
				'<code><span>outline:'+thicknes+'px solid '+color+';</span></br><span>outline-offset:'+offset+'px;</span></code>' 
			);
		}
		else if(thicknes && !offset && !style){
			$('.outline_preview').css({
				'outline': thicknes+"px solid"+color,
				'outline-offset': 0			// RESET THE OFFSET TO 0 IN PREVIEW
			});
			$('#generated_code_text').html(
				'<code><span>outline:'+thicknes+'px solid '+color+';</span></code>' 
			);
		}
		else{
			$('.outline_preview').css({
				'outline': 'none',
				'outline-offset': 0			// RESET THE OFFSET TO 0 IN PREVIEW
			});
			$('#generated_code_text').html(
				'There is no generated code'
			);
		}
	}

	/* -------------------------------------------------------------------- Border Radius Generator -------------------------------------------------------------------- */

	$(document).on('keyup','#top_left_radius',function () {
		getBorderRadius();
	});
	$(document).on('keyup','#top_right_radius',function () {
		getBorderRadius();
	});
	$(document).on('keyup','#bottom_right_radius',function () {
		getBorderRadius();
	});
	$(document).on('keyup','#bottom_left_radius',function () {
		getBorderRadius();		
	});

	function getBorderRadius() {
		var topleft = $('#top_left_radius').val();
		var topright = $('#top_right_radius').val();
		var bottomright = $('#bottom_right_radius').val();
		var bottomleft = $('#bottom_left_radius').val();

		if (!topleft || topleft=="") {
			topleft=0;
		}
		if (!topright || topright=="") {
			topright=0;
		}
		if (!bottomright || bottomright=="") {
			bottomright=0;
		}
		if (!bottomleft || bottomleft=="") {
			bottomleft=0;
		}

		setBorderRadius(topleft,topright,bottomright,bottomleft);
	}
	function setBorderRadius(topleft,topright,bottomright,bottomleft) {
		$('.border_radius_preview').css({
				'-webkit-border-radius': topleft+'px '+topright+'px '+bottomright+'px '+bottomleft+'px',
				'border-radius': topleft+'px '+topright+'px '+bottomright+'px '+bottomleft+'px'
			});
		if(topleft==0 && topright==0 && bottomright==0 && bottomleft==0){
			$('#generated_code_text').html(
				'There is no generated code'
			);
		}
		else if(topleft==topright && topleft==bottomright && topleft==bottomleft){
			$('#generated_code_text').html(
				'<code><span>-webkit-border-radius:'+topleft+'px;</span></br><span>border-radius:'+topleft+'px;</span></code>' 
			);
		}
		else if(topleft==bottomright && topright==bottomleft){
			$('#generated_code_text').html(
				'<code><span>-webkit-border-radius:'+topleft+'px '+topright+'px;</span></br><span>border-radius:'+topleft+'px '+topright+'px;</span></code>' 
			);
		}
		else{
			$('#generated_code_text').html(
				'<code><span>-webkit-border-radius:'+topleft+'px '+topright+'px '+bottomright+'px '+bottomleft+'px;</span></br><span>border-radius:'+topleft+'px '+topright+'px '+bottomright+'px '+bottomleft+'px;</span></code>' 
			);
		}
	}

	/* -------------------------------------------------------------------- Box Shadow Generator -------------------------------------------------------------------- */

	$(document).on('keyup','#box_shadow_horizontal_length',function () {
		getBoxShadow();
	});
	$(document).on('keyup','#box_shadow_vertical_length',function () {
		getBoxShadow();
	});
	$(document).on('keyup','#box_shadow_blur_radius',function () {
		getBoxShadow();
	});
	$(document).on('keyup','#box_shadow_spread',function () {
		getBoxShadow();
	});
	$(document).on('change','#box_shadow_position',function () {
		getBoxShadow();
	});
	$(document).on('change','#box_shadow_color_type',function () {
		getBoxShadow();
	});
	$(document).on('change','#box_shadow_color',function () {
		getBoxShadow();
	});
	$(document).on('keyup','#box_shadow_opacity',function () {
		getBoxShadow();
	});

	function getBoxShadow() {
		var hlength = $('#box_shadow_horizontal_length').val();
		var vlength = $('#box_shadow_vertical_length').val();
		var blur = $('#box_shadow_blur_radius').val();
		var spread = $('#box_shadow_spread').val();
		var position = $('#box_shadow_position').val();
		if (position=="outset") {
			position="";
		}
		var opacity = $('#box_shadow_opacity').val();

		if (opacity>1) {
			opacity=1;
		}
		if (opacity<0) {
			opacity=0;
		}

		var colortype = $('#box_shadow_color_type').val();
		if (colortype=="hex") {
			$('#box_shadow_opacity').prop("disabled", true);
			var color = $('#box_shadow_color').val();
		}
		else{
			$('#box_shadow_opacity').prop("disabled", false);
			var rgb = hexToRgb($('#box_shadow_color').val());
			var color = "rgba("+rgb.r+","+rgb.g+","+rgb.b+","+opacity+")";
		}

		if (!hlength) {
			hlength=0;
		}
		if (!vlength) {
			vlength=0;
		}
		if (!blur) {
			blur=0;
		}
		if (!spread) {
			spread=0;
		}

		setBoxShadow(hlength,vlength,blur,spread,position,color);
	}
	function setBoxShadow(hlength,vlength,blur,spread,position,color) {
		if ((!hlength && !vlength) || (hlength==0 && vlength==0)) {
			$('#generated_code_text').html(
				'There is no generated code'
			);
			$('.box_shadow_preview').css({
				'-moz-box-shadow': 'none',
   				'-webkit-box-shadow': 'none',
   				'box-shadow': 'none'
			});
		}
		else{
			$('#generated_code_text').html(
				'<code><span>-moz-box-shadow:'+position+" "+hlength+'px '+vlength+'px '+blur+'px '+spread+'px '+color+';</span></br><span>-webkit-box-shadow:'+position+" "+hlength+'px '+vlength+'px '+blur+'px '+spread+'px '+color+';</span></br><span>box-shadow:'+position+" "+hlength+'px '+vlength+'px '+blur+'px '+spread+'px '+color+';</span></code>' 
			);
			$('.box_shadow_preview').css({
				'-moz-box-shadow': position+" "+hlength+"px "+vlength+"px "+blur+"px "+spread+"px "+color,
   				'-webkit-box-shadow': position+" "+hlength+"px "+vlength+"px "+blur+"px "+spread+"px "+color,
   				'box-shadow': position+" "+hlength+"px "+vlength+"px "+blur+"px "+spread+"px "+color
			});
		}
	}

	/* -------------------------------------------------------------------- Transform Generator -------------------------------------------------------------------- */

	$(document).on('keyup','#transform_scale_x',function () {
		getTransform();
	});
	$(document).on('keyup','#transform_scale_y',function () {
		getTransform();
	});
	$(document).on('keyup','#transform_translate_x',function () {
		getTransform();
	});
	$(document).on('keyup','#transform_translate_y',function () {
		getTransform();
	});
	$(document).on('keyup','#transform_skew_x',function () {
		getTransform();
	});
	$(document).on('keyup','#transform_skew_y',function () {
		getTransform();
	});
	$(document).on('keyup','#transform_rotate',function () {
		getTransform();
	});

	function getTransform() {
		var scalex = $('#transform_scale_x').val();
		var scaley = $('#transform_scale_y').val();
		var translatex = $('#transform_translate_x').val();
		var translatey = $('#transform_translate_y').val();
		var skewx = $('#transform_skew_x').val();
		var skewy = $('#transform_skew_y').val();
		var rotate = $('#transform_rotate').val();
		

		if (!scalex) {
			scalex=1;
		}
		if (!scaley) {
			scaley=1;
		}
		if (!translatex) {
			translatex=0;
		}
		if (!translatey) {
			translatey=0;
		}
		if (!skewx) {
			skewx=0;
		}
		if (!skewy) {
			skewy=0;
		}
		if (!rotate) {
			rotate=0;
		}
		setTransform(scalex,scaley,translatex,translatey,skewx,skewy,rotate);
	}
	function setTransform(scalex,scaley,translatex,translatey,skewx,skewy,rotate) {
		var csscode = "scaleX("+scalex+") scaleY("+scaley+") rotate("+rotate+"deg) translateX("+translatex+"px) translateY("+translatey+"px) skewX("+skewx+"deg) skewY("+skewy+"deg)";
		$('.transform_preview').css({
			'-moz-transform': csscode,
			'-webkit-transform': csscode,
			'transform': csscode
		});


		if ((!scalex && !scaley && !translatex && !translatey && !skewx && !skewy && !rotate) || (scalex==1 && scaley==1 && translatex==0 && translatey==0 && skewx==0 && skewy==0 && rotate==0)) {
			$('#generated_code_text').html(
				'There is no generated code'
			);
		}
		else{

			if (!scalex || scalex==1) {
				csscode=csscode.replace(/scaleX\([a-zA-Z0-9\.]+\)/g,'');
			}
			if (!scaley || scaley==1) {
				csscode=csscode.replace(/scaleY\([a-zA-Z0-9\.]+\)/g,'');
			}
			if (!translatex || translatex==0) {
				csscode=csscode.replace(/translateX\([a-zA-Z0-9\.]+\)/g,'');
			}
			if (!translatey || translatey==0) {
				csscode=csscode.replace(/translateY\([a-zA-Z0-9\.]+\)/g,'');
			}
			if (!skewx || skewx==0) {
				csscode=csscode.replace(/skewX\([a-zA-Z0-9\.]+\)/g,'');
			}
			if (!skewy || skewy==0) {
				csscode=csscode.replace(/skewY\([a-zA-Z0-9\.]+\)/g,'');
			}
			if (!rotate || rotate==0) {
				csscode=csscode.replace(/rotate\([a-zA-Z0-9\.]+\)/g,'');
			}

			$('#generated_code_text').html(
				'<code><span>-moz-transform:'+csscode+';</span></br><span>-webkit-transform:'+csscode+';</span></br><span>transform:'+csscode+';</span></code>' 
			);
			$('.transform_preview').css({
				'-moz-transform': csscode,
   				'-webkit-transform': csscode,
   				'transform': csscode
			});
		}
	}

	/* -------------------------------------------------------------------- Transition Generator -------------------------------------------------------------------- */

	$(document).on('change', '#transition_transition_property', function () { 	// Show chosen options hide others
		$("[id^=transition_field_]").hide();
		$('#transition_field_'+$(this).val()).show();
	})

	var bgflag=false; // Chceks if color was changed

	// HEIGHT TRANSITION //

	$(document).on('change','#transition_height_timing',function () {
		getTransition();
	});
	$(document).on('keyup','#transition_height_height',function () {
		getTransition();
	});
	$(document).on('keyup','#transition_height_duration',function () {
		getTransition();
	});
	$(document).on('keyup','#transition_height_delay',function () {
		getTransition();
	});
	//  WIDTH TRANSITION //
	$(document).on('change','#transition_width_timing',function () {
		getTransition();
	});
	$(document).on('keyup','#transition_width_width',function () {
		getTransition();		
	});
	$(document).on('keyup','#transition_width_duration',function () {
		getTransition();
	});
	$(document).on('keyup','#transition_width_delay',function () {
		getTransition();
	});
	// BACKGROUND COLOR TRANSITION //
	$(document).on('change','#transition_bgcolor_timing',function () {
		getTransition();
	});
	$(document).on('change','#transition_bgcolor_color',function () {
		bgflag=true;
		getTransition();
	});
	$(document).on('keyup','#transition_bgcolor_duration',function () {
		getTransition();
	});
	$(document).on('keyup','#transition_bgcolor_delay',function () {
		getTransition();
	});
	//  OPACITY TRANSITION //
	$(document).on('change','#transition_opacity_timing',function () {
		getTransition();
	});
	$(document).on('keyup','#transition_opacity_opacity',function () {
		getTransition();
	});
	$(document).on('keyup','#transition_opacity_duration',function () {
		getTransition();
	});
	$(document).on('keyup','#transition_opacity_delay',function () {
		getTransition();
	});

	function getTransition() {
		var otiming = $('#transition_opacity_timing').val();
		var oopacity = $('#transition_opacity_opacity').val();
		var oduration = $('#transition_opacity_duration').val();
		var odelay = $('#transition_opacity_delay').val();

		var htiming = $('#transition_height_timing').val();
		var hhight = $('#transition_height_height').val();
		var hduration = $('#transition_height_duration').val();
		var hdelay = $('#transition_height_delay').val();

		var wtiming = $('#transition_width_timing').val();
		var wwidth = $('#transition_width_width').val();
		var wduration = $('#transition_width_duration').val();
		var wdelay = $('#transition_width_delay').val();

		var bgtiming = $('#transition_bgcolor_timing').val();
		var bgcolor = $('#transition_bgcolor_color').val();
		var bgduration = $('#transition_bgcolor_duration').val();
		var bgdelay = $('#transition_bgcolor_delay').val();

		if (!oduration) {
			oduration=0;
		}
		if (!odelay) {
			odelay=0;
		}

		if (!oopacity || oopacity==1) {
			oopacity=false;
		}

		if (oopacity>1) {
			oopacity=1;
		}
		if (oopacity<0) {
			oopacity=0;
		}

		if (!hduration) {
			hduration=0;
		}
		if (!hdelay) {
			hdelay=0;
		}
		if (!hhight || hhight==="") {
			hhight=false;
		}
		
		if (!wduration) {
			wduration=0;
		}
		if (!wdelay) {
			wdelay=0;
		}
		if (!wwidth || wwidth==="") {
			wwidth=false;
		}

		if (!bgduration) {
			bgduration=0;
		}
		if (!bgdelay) {
			bgdelay=0;
		}
		
		setTransition(htiming,hhight,hduration,hdelay,wtiming,wwidth,wduration,wdelay,bgtiming,bgcolor,bgduration,bgdelay,otiming,oopacity,oduration,odelay);
	}
	function setTransition(htiming,hhight,hduration,hdelay,wtiming,wwidth,wduration,wdelay,bgtiming,bgcolor,bgduration,bgdelay,otiming,oopacity,oduration,odelay) {
		if (hhight) {
			var h_transition="height "+hduration+"s "+htiming+" "+hdelay+"s";
			var h_transition_hover="height: "+hhight+"px;";
		}
		else{
			var h_transition="";
			var h_transition_hover="";
		}
		if (wwidth) {
			var w_transition="width "+wduration+"s "+wtiming+" "+wdelay+"s";
			var w_transition_hover="width: "+wwidth+"px;";
		}
		else{
			var w_transition="";
			var w_transition_hover="";
		}
		if (oopacity) {
			var o_transition="opacity "+oduration+"s "+otiming+" "+odelay+"s";
			var o_transition_hover="opacity: "+oopacity+";";
		}
		else{
			var o_transition="";
			var o_transition_hover="";
		}
		if (bgflag) {
			var bg_transition="background-color "+bgduration+"s "+bgtiming+" "+bgdelay+"s";
			var bg_transition_hover="background-color: "+bgcolor+";";
		}
		else{
			var bg_transition="";
			var bg_transition_hover="";
		}
		
		var csscode= h_transition+", "+w_transition+", "+o_transition+", "+bg_transition;
		csscode=csscode.replace(/^([\,\s]+)|(\s\,\W)|([\,\s]+)$/g," ");
		var csscodehover= h_transition_hover+w_transition_hover+o_transition_hover+bg_transition_hover;
		var css = '.transition_preview{ -moz-transition:'+csscode+';-webkit-transition:'+csscode+';o-transition:'+csscode+';transition:'+csscode+';} .transition_preview:hover{ '+csscodehover+' }';
		csscodehover=csscodehover.replace(/\;(?=[^;]*\;)/g,";</br>");

		/* If created style node has child node with a value update else create child node and assign value */

		if (style.childNodes[0]) {		
		    style.childNodes[0].nodeValue = css;
		    //console.log(css);
		} else {
		    style.appendChild(document.createTextNode(css));
		}
		
		if (!hhight && !wwidth && !oopacity && !bgflag) {
			$('#generated_code_text').html(
				'There is no generated code'
			);
		}
		else{

			$('#generated_code_text').html(
				'<code>.selector{</br><span>-moz-transition:'+csscode+';</span></br><span>-webkit-transition:'+csscode
				+';</span></br><span>-o-transition:'+csscode+';</span></br><span>transition:'+csscode+';</span></br>}</code></br>'+
				'<code>.selector:hover{</br><span>'+csscodehover+'</span></br>}</code>'
			);
		}
	}

	/* -------------------------------------------------------------------- Gradient Generator -------------------------------------------------------------------- */

	$(document).on('change', '#gradient_style', function () { 	// Show chosen options hide others
		$("[id^=gradient_field_]").hide();
		$('#gradient_field_'+$(this).val()).show();
		getGradient();
	});

	if(section==="gradient"){
		getGradient();
	}

	$(document).on('change','#gradient_start_color_linear',function () {
		getGradient();
	});
	$(document).on('change','#gradient_end_color_linear',function () {
		getGradient();
	});
	$(document).on('mousemove change','#gradient_angle',function () {
		getGradient();
	});
	$(document).on('change','#gradient_start_color_radial',function () {
		getGradient();
	});
	$(document).on('change','#gradient_end_color_radial',function () {
		getGradient();
	});
	$(document).on('mousemove change','#gradient_start_size',function () {
		getGradient();
	});
	$(document).on('mousemove change','#gradient_end_size',function () {
		getGradient();
	});

	function getGradient() {
		var linear_start_color=$('#gradient_start_color_linear').val();
		var linear_end_color=$('#gradient_end_color_linear').val();
		var linear_angle=$('#gradient_angle').val();

		var radial_start_color=$('#gradient_start_color_radial').val();
		var radial_start_color_size=$('#gradient_start_size').val();
		var radial_end_color=$('#gradient_end_color_radial').val();
		var radial_end_color_size=$('#gradient_end_size').val();

		setGradient(linear_start_color,linear_end_color,linear_angle,radial_start_color,radial_start_color_size,radial_end_color,radial_end_color_size);
	}
	function setGradient(linear_start_color,linear_end_color,linear_angle,radial_start_color,radial_start_color_size,radial_end_color,radial_end_color_size) {

		switch ($('#gradient_style').val()){
			case "linear":
				var csscode=linear_angle+"deg ,"+linear_start_color+", "+linear_end_color;

				$('.gradient_preview').css({
					/*'background': linear_start_color,
					'background': "-webkit-linear-gradient("+csscode+")",
					'background': "-moz-linear-gradient("+csscode+")",
					'background': "-o-linear-gradient("+csscode+")",*/
					'background': "linear-gradient("+csscode+")"
				});

				$('#generated_code_text').html(
					'<code>background: '+linear_start_color+';</span></br><span>background: -webkit-linear-gradient('+csscode
					+');</span></br><span>background: -moz-linear-gradient('+csscode
					+');</span></br><span>background: -o-linear-gradient('+csscode
					+');</span></br><span>background: linear-gradient('+csscode+');</span></code>'
				);

				break;

			case "radial":
				var csscode=radial_start_color+" "+radial_start_color_size+"%, "+radial_end_color+" "+radial_end_color_size+"%";

				$('.gradient_preview').css({
					/*'background': radial_start_color,
					'background': "-webkit-radial-gradient("+csscode+")",
					'background': "-moz-radial-gradient("+csscode+")",
					'background': "-o-radial-gradient("+csscode+")",*/
					'background': "radial-gradient("+csscode+")"
				});

				$('#generated_code_text').html(
					'<code>background: '+radial_start_color+';</span></br><span>background: -webkit-radial-gradient('+csscode
					+');</span></br><span>background: -moz-radial-gradient('+csscode
					+');</span></br><span>background: -o-radial-gradient('+csscode
					+');</span></br><span>background: radial-gradient('+csscode+');</span></code>'
				);
				break;

			default:	
				$('#generated_code_text').html(
					'There is no generated code'
				);
				break;
		}
	}

	/* -------------------------------------------------------------------- Gradient Collection -------------------------------------------------------------------- */

	if (section==="gradient collection") {
		$('.gradient_card').each(function () {
			//console.log(determineFontColor($(this).attr('data-s-color')));
			if( determineFontColor($(this).attr('data-s-color')) === 1){
				console.log('black');
				$(this).css({
					'color': 'rgba(0,0,0,0.87)'
				});
			}
			else{
				console.log('white');
				$(this).css({
					'color': 'white'
				});
			}
			$(this).css({
				'background-color': $(this).attr('data-s-color'),
				'background': "linear-gradient(to left, "+$(this).attr('data-s-color')+", "+$(this).attr('data-e-color')+")"
			});
		});

		$(document).on('click','.generate_button_gradient', function () {
			var s_color=$(this).parents('.gradient_card').attr('data-s-color');
			var e_color=$(this).parents('.gradient_card').attr('data-e-color');

			$('#generated_code_text').html(
				'<code>background: '+s_color+';</span></br><span>background: -webkit-linear-gradient(to left, '+s_color
				+', '+e_color+');</span></br><span>background: -moz-linear-gradient(to left, '+s_color
				+', '+e_color+');</span></br><span>background: -o-linear-gradient(to left, '+s_color
				+', '+e_color+');</span></br><span>background: linear-gradient(to left, '+s_color
				+', '+e_color+');</span></code>'
			);
		})
	}

	/* -------------------------------------------------------------------- Lorem Ipsum Generator ------------------------------------------------------------------ */

	$(document).on('click','#gen_loremipsum',function () {
		
		var parnum=$('#num_of_paragraphs').val();
		var parlen=$('#len_of_paragraphs').val();

		$.ajax({
	    	type: 'POST',
			url: base_url+'getwords',
	    	dataType: "json",
		    success: function( resp ) {
		        //console.log( resp ); 
		        i=0;
		        output="";
		        while(i<parnum){
		        	output+=generateParagraph(parlen,resp)+"\n\r";
		        	i++;
		        	console.log(output);
		        }

		        $('#output_loremipsum').val(output).focus();
		    }
		});
    
	});

	function generateParagraph(maxlen,words) {
		if (maxlen==50) {
			minlen=10;
		}
		else{
			minlen=maxlen-50;
		}
		numwords=randomIntFromInterval(minlen,maxlen); // Random number of words in this paragraph based on max len and maxlen-100(minlen)
		allwords=words.length-1;	// Num of words in dbase
		paragraph="";	// Starting paragraph
		numsent=randomIntFromInterval(3,7); // Number of sentences in paragraph
		j=0;

		while(j<numsent){
			numwordssen=randomIntFromInterval(Math.floor(minlen/3),Math.floor(numwords/3)); // Number of words in sentence
			sentence="";	// Starting sentence
			for (var i = 0; i < numwordssen; i++) {
				sentence+=words[randomIntFromInterval(0,allwords)].word+" ";
			}
			sentence=capital(sentence).trim()+". ";
			paragraph+=sentence;
			j++;
		}
		
		return paragraph;
	}

	function randomIntFromInterval(min,max)
	{
	    return Math.floor(Math.random()*(max-min+1)+min);
	}

	function capital(string) { 
		return string.charAt(0).toUpperCase() + string.slice(1); 
	}

	/* -------------------------------------------------------------------- PX-EM Converter ------------------------------------------------------------------ */

	$(document).on('focus','#pixel_size',function () {
		$('#em_size').val("");
	});

	$(document).on('focus','#em_size',function () {
		$('#pixel_size').val("");
	});

	$(document).on('click','#conv_pxem',function () {
		convertpxem();
	});


	function convertpxem() {
		
		base = $('#base_size').val(); 
		px = $('#pixel_size').val();
		em = $('#em_size').val();

		if (!base || base=="") {
			$('#base_size').focus();
		}
		else{
			if (!em || em=="") {
				$('#em_size').val(pxtoem(base,px));
				$('#em_size').focus();
			}
			if (!px || px=="") {
				$('#pixel_size').val(emtopx(base,em));
				$('#pixel_size').focus();
			}
		}

	}

	function pxtoem(base,px) {
		return (px/base).toFixed(2);;
	}

	function emtopx(base,em) {
		return (em*base).toFixed(2);;
	}

	/* -------------------------------------------------------------------- CSS Minifier ------------------------------------------------------------------ */

	$(document).on('click','#input_css_btn',function () {
		$css=$('#input_css').val();
		minifycss($css);
	});

	$(document).on('click','#btn_download_minify',function (e) {
		e.preventDefault();
	    form = $('#minify_form');
	    form.submit();
	});

	function minifycss(css) {
		if (!css || css=="") {
			$('#output_css').val('You have to insert your CSS first.').focus().select();
		}
		else{
			
			$.ajax({
				type: 'POST',
		        url: base_url+'getminifiedcss',
		        data: {
		        	css : css
		        },
		        dataType: 'text',
		        success: function (resp){
		        	$('#output_css').val(resp).focus().select();
		        	$('#btn_copy_minify').removeClass("disabled");
		        	$('#btn_download_minify').removeClass("disabled");
			    }
			}); 
		}
	}

	/* -------------------------------------------------------------------- Filter Generator -------------------------------------------------------------------- */

	$(document).on('change', '#filter_function', function () { 	// Show chosen options hide others
		$("[id^=field_filter_]").hide();
		$('#field_filter_'+$(this).val()).show();
		getFilter();
	});

	$(document).on('click','#submit_url_filter', function () {
		var imgurl= $('#img_url_ta').val();
		imgurl = imgurl.replace(/(^\w+:|^)\/\//, '');
		imgurl = "http://"+imgurl;
		if (isURL(imgurl)) {
			$('#img_url_ta').addClass('valid');
			$('#filter_preview_img').attr("src",imgurl);
			getFilter();
		}
		else{
			$('#img_url_ta').addClass('invalid');
		}
	});

	$(document).on('keyup', '#filter_blur_value', function () { 
		getFilter();
	});
	$(document).on('keyup', '#filter_brightness_value', function () { 
		getFilter();
	});
	$(document).on('keyup', '#filter_contrast_value', function () { 
		getFilter();
	});
	$(document).on('mousemove change', '#filter_grayscale_value', function () { 	
		getFilter();
	});
	$(document).on('mousemove change', '#filter_hue-rotate_value', function () { 	
		getFilter();
	});
	$(document).on('mousemove change', '#filter_invert_value', function () { 	
		getFilter();
	});
	$(document).on('mousemove change', '#filter_opacity_value', function () { 	
		getFilter();
	});
	$(document).on('keyup', '#filter_saturate_value', function () { 	
		getFilter();
	});
	$(document).on('mousemove change', '#filter_sepia_value', function () { 	
		getFilter();
	});

	/*drop shadow filter*/

	$(document).on('keyup', '#filter_drop-shadow_h', function () { 	
		getFilter();
	});
	$(document).on('keyup', '#filter_drop-shadow_v', function () { 	
		getFilter();
	});
	$(document).on('keyup', '#filter_drop-shadow_blur', function () { 	
		getFilter();
	});
	$(document).on('change', '#filter_drop-shadow_color', function () { 	
		getFilter();
	});

	function getFilter() {
		var filter_flag=$('#filter_function').val();	
		if (filter_flag!="drop-shadow") {
			filter_val=$('#filter_'+filter_flag+"_value").val();
			setFilter(filter_val,filter_flag);
		}
		else{
			dsh=$('#filter_'+filter_flag+"_h").val();
			if (!dsh) {
				dsh=0;
			}
			dsv=$('#filter_'+filter_flag+"_v").val();
			if (!dsv) {
				dsv=0;
			}
			dsb=$('#filter_'+filter_flag+"_blur").val();
			if (!dsb) {
				dsb=0;
			}
			dsc=$('#filter_'+filter_flag+"_color").val();

			setFilter(null,filter_flag,dsh,dsv,dsb,dsc);
		}
	}

	function setFilter(val="",flag,ds_h=0,ds_v=0,ds_b=0,ds_c="#000") {
		switch (flag){
			case "hue-rotate":
				csscode=flag+"("+val+"deg)";
				break;
			case "blur":
				csscode=flag+"("+val+"px)";
				break;
			case "grayscale":
			case "invert":
			case "opacity":
			case "saturate":
			case "sepia":
			case "contrast":
			case "brightness":
				csscode=flag+"("+val+"%)";
				break;
			case "drop-shadow":
				csscode=flag+"("+ds_h+"px "+ds_v+"px "+ds_b+"px "+ds_c+")";
				break;
		}

		if (val=="" && flag!="drop-shadow") {
			$('.filter_preview').css({
				'-webkit-filter': '',
				'filter': ''
			});

			$('#generated_code_text').html(
				'There is no generated code'
			);
		}
		else if(ds_h==0 && ds_v==0 && ds_b==0 && flag=="drop-shadow"){
			$('.filter_preview').css({
				'-webkit-filter': '',
				'filter': ''
			});

			$('#generated_code_text').html(
				'There is no generated code'
			);
		}
		else{
			$('.filter_preview').css({
				'-webkit-filter': csscode,
				'filter': csscode
			});

			$('#generated_code_text').html(
				'<code><span>-webkit-filter:'+csscode
				+';</span></br><span>filter:'+csscode+';</span></br>'
			);
		}
	}
})
