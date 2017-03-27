$(document).ready(function() {

	/*Initilize menu on smaller screens*/
	$(".button-collapse").sideNav();

	/*Initilize clipboardjs*/
	var clipboard = new Clipboard('.copybtn');

	clipboard.on('success', function(e) {
    	Materialize.toast('Copied to clipboard', 4000);
	});

	clipboard.on('error', function(e) {
	    Materialize.toast('Press CTRL+C!', 4000);
	});

	/*Initilize modals*/
	$('.modal').modal();

	/*Initilize select*/
	$('select').material_select();

	/*Initilize collapsible changelog*/
	$('.collapsible').collapsible();

	/*Set nav links to active page*/
	if(section){
		$('li[data-nav_page="'+section+'"]').addClass('active');
	}

	if(typeof presection !== 'undefined' && presection){
		$('li[data-nav_section="'+presection+'"]').addClass('active');
	}

	/* Hex Color to RGB Color Converter */
	function hexToRgb(hex) {
		var hexreg = /^#?([a-f\d]{2})([a-f\d]{2})([a-f\d]{2})$/i;
	    var result = hexreg.exec(hex);
	    return result ? {
	        r: parseInt(result[1], 16),
	        g: parseInt(result[2], 16),
	        b: parseInt(result[3], 16)
	    } : null;
	}

	/*Contact form send message AJAX*/
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

	/*Miltiple columns GENERATOR*/
	$(document).on('keyup','#num_of_columns',function () {
		var numcol = $(this).val();
		var colgap = $('#column_gap').val();

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
		
	});

	$(document).on('keyup','#column_gap',function () {
		var colgap = $(this).val();
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
	});

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

	/*Text Shadow GENERATOR*/

	$(document).on('keyup','#text_shadow_hlength',function () {
		var hlength = $(this).val();
		var vlength = $('#text_shadow_vlength').val();
		var blur = $('#text_shadow_blur').val();
		var color = $('#text_shadow_color').val();

		setTextShadow(hlength,vlength,blur,color);
	});
	$(document).on('keyup','#text_shadow_vlength',function () {
		var hlength = $('#text_shadow_hlength').val();
		var vlength = $(this).val();
		var blur = $('#text_shadow_blur').val();
		var color = $('#text_shadow_color').val();

		setTextShadow(hlength,vlength,blur,color);
	});
	$(document).on('keyup','#text_shadow_blur',function () {
		var hlength = $('#text_shadow_hlength').val();
		var vlength = $('#text_shadow_vlength').val();
		var blur = $(this).val();
		var color = $('#text_shadow_color').val();

		setTextShadow(hlength,vlength,blur,color);
	});
	$(document).on('change','#text_shadow_color',function () {
		var hlength = $('#text_shadow_hlength').val();
		var vlength = $('#text_shadow_vlength').val();
		var blur = $('#text_shadow_blur').val();
		var color = $(this).val();

		setTextShadow(hlength,vlength,blur,color);
	});

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
				'<code><span>text-shadow:'+hlength+'px '+vlength+'px;</span></code>'
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

	/* Outiline Generator */

	$(document).on('keyup','#outline_thicknes',function () {
		var thicknes = $(this).val();
		var style = $('#outline_style').val();
		var color = $('#outline_color').val();
		var offset = $('#outline_offset').val();

		if (!thicknes) {
			thicknes=0;
		}
		setOutline(thicknes,style,color,offset);

	});
	$(document).on('change','#outline_style',function () {
		var thicknes = $('#outline_thicknes').val();
		var style = $(this).val();
		var color = $('#outline_color').val();
		var offset = $('#outline_offset').val();

		if (!style) {
			style="solid";
		}

		setOutline(thicknes,style,color,offset);

	});
	$(document).on('change','#outline_color',function () {
		var thicknes = $('#outline_thicknes').val();
		var style = $('#outline_style').val();
		var color = $(this).val();
		var offset = $('#outline_offset').val();

		setOutline(thicknes,style,color,offset);

	});
	$(document).on('keyup','#outline_offset',function () {
		var thicknes = $('#outline_thicknes').val();
		var style = $('#outline_style').val();
		var color = $('#outline_color').val();
		var offset = $(this).val();

		if (!offset) {
			offset=0;
		}

		setOutline(thicknes,style,color,offset);

	});

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

	/* Border Radius Generator */

	$(document).on('keyup','#top_left_radius',function () {
		var topleft = $(this).val();
		var topright = $('#top_right_radius').val();
		var bottomright = $('#bottom_right_radius').val();
		var bottomleft = $('#bottom_left_radius').val();

		if (!topleft) {
			topleft=0;
		}
		if (!topright) {
			topright=0;
		}
		if (!bottomright) {
			bottomright=0;
		}
		if (!bottomleft) {
			bottomleft=0;
		}

		setBorderRadius(topleft,topright,bottomright,bottomleft);

	});
	$(document).on('keyup','#top_right_radius',function () {
		var topleft = $('#top_left_radius').val();
		var topright = $(this).val();
		var bottomright = $('#bottom_right_radius').val();
		var bottomleft = $('#bottom_left_radius').val();

		if (!topleft) {
			topleft=0;
		}
		if (!topright) {
			topright=0;
		}
		if (!bottomright) {
			bottomright=0;
		}
		if (!bottomleft) {
			bottomleft=0;
		}

		setBorderRadius(topleft,topright,bottomright,bottomleft);

	});
	$(document).on('keyup','#bottom_right_radius',function () {
		var topleft = $('#top_left_radius').val();
		var topright = $('#top_right_radius').val();
		var bottomright = $(this).val();
		var bottomleft = $('#bottom_left_radius').val();

		if (!topleft) {
			topleft=0;
		}
		if (!topright) {
			topright=0;
		}
		if (!bottomright) {
			bottomright=0;
		}
		if (!bottomleft) {
			bottomleft=0;
		}

		setBorderRadius(topleft,topright,bottomright,bottomleft);

	});
	$(document).on('keyup','#bottom_left_radius',function () {
		var topleft = $('#top_left_radius').val();
		var topright = $('#top_right_radius').val();
		var bottomright = $('#bottom_right_radius').val();
		var bottomleft = $(this).val();

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

	});

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

	/* Box Shadow Generator */

	$(document).on('keyup','#box_shadow_horizontal_length',function () {

		var hlength = $(this).val();
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
			var color = $('#box_shadow_color').val();
		}
		else{
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

	});
	$(document).on('keyup','#box_shadow_vertical_length',function () {
		var hlength = $('#box_shadow_horizontal_length').val();
		var vlength = $(this).val();
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
			var color = $('#box_shadow_color').val();
		}
		else{
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

	});
	$(document).on('keyup','#box_shadow_blur_radius',function () {
		var hlength = $('#box_shadow_horizontal_length').val();
		var vlength = $('#box_shadow_vertical_length').val();
		var blur = $(this).val();
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
			var color = $('#box_shadow_color').val();
		}
		else{
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

	});
	$(document).on('keyup','#box_shadow_spread',function () {
		var hlength = $('#box_shadow_horizontal_length').val();
		var vlength = $('#box_shadow_vertical_length').val();
		var blur = $('#box_shadow_blur_radius').val();
		var spread = $(this).val();
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
			var color = $('#box_shadow_color').val();
		}
		else{
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

	});
	$(document).on('change','#box_shadow_position',function () {
		var hlength = $('#box_shadow_horizontal_length').val();
		var vlength = $('#box_shadow_vertical_length').val();
		var blur = $('#box_shadow_blur_radius').val();
		var spread = $('#box_shadow_spread').val();
		var position = $(this).val();
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
			var color = $('#box_shadow_color').val();
		}
		else{
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

	});
	$(document).on('change','#box_shadow_color_type',function () {
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

		var colortype = $(this).val();
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

	});
	$(document).on('change','#box_shadow_color',function () {
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
			var color = $(this).val();
		}
		else{
			var rgb = hexToRgb($(this).val());
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

	});
	$(document).on('keyup','#box_shadow_opacity',function () {
		var hlength = $('#box_shadow_horizontal_length').val();
		var vlength = $('#box_shadow_vertical_length').val();
		var blur = $('#box_shadow_blur_radius').val();
		var spread = $('#box_shadow_spread').val();
		var position = $('#box_shadow_position').val();
		if (position=="outset") {
			position="";
		}
		var opacity = $(this).val();

		if (opacity>1) {
			$(this).val(1);
			opacity=1;
		}
		if (opacity<0) {
			$(this).val(0);
			opacity=0;
		}

		var colortype = $('#box_shadow_color_type').val();
		if (colortype=="hex") {
			var color = $('#box_shadow_color').val();
		}
		else{
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

	});

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
})
