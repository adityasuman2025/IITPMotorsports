/*-------menu--------*/
$('.menu li a').mouseover(function()
{
	$(this).addClass('menu_li_a_hover').css('color','orange');
}).mouseleave(function()
{
	$(this).removeClass('menu_li_a_hover').css('color','');
});

/*--------mobile menu-------*/
$('.menu_mob img').on("click",function()
{
	$('.menu_mob ul').slideToggle(800).toggleClass('visib');
});



/*--------mobile menu-------*/

/*----entery on scrolling---*/
$(document).scroll(function()
{
	var posn = $(document).scrollTop();
	
	var posn_menu =$('#header').offset().top/2.5;
	
	if(posn > posn_menu)
	{
		$('.menu_bar').css('top','0px').css('left','0px');
	}
	else
	{
		$('.menu_bar').css('top','').css('left','');
	}
	
/*-----updates div animation---*/
	var updates_posn = $('.updates').offset().top/2;
	
	if(posn > updates_posn)
	{
		$('.updates_head').removeClass('top_entry');
	}
	
/*-----about iitp div animation---*/
	var about_iitp_posn = $('.about_iitp').offset().top/1.6;
	
	if(posn > about_iitp_posn)
	{
		$('.iitp_head').removeClass('top_entry');
		$('.iitp_text').removeClass('top_entry');
		$('.iitp_img').removeClass('bottom_entry');
	}

/*-----about sae div animation---*/
	var about_sae_posn = $('.about_sae').offset().top/1.4;
	
	if(posn > about_sae_posn)
	{
		$('.sae_head').removeClass('top_entry');
		$('.sae_text').removeClass('top_entry');
		$('.sae_img').removeClass('bottom_entry');
	}
	
/*-----about iitpmotosports div animation---*/
	var about_iitpmotor_posn = $('.about_iitpmotor').offset().top/1.3;
	
	if(posn > about_iitpmotor_posn)
	{
		$('.iitpmotor_head').removeClass('top_entry');
		$('.iitpmotor_text').removeClass('top_entry');
		$('.iitpmotor_img').removeClass('bottom_entry');
	}
	
/*---partners div-----*/
	var partners = $('.partners').offset().top/1.2;
	
	if(posn > partners)
	{
		//$('.partners').removeClass('top_entry');
		
		$('.partners img').each(function()
		{
			//src= $(this).attr('src');
			//alert(src);
			$(this).removeClass('top_entry').delay(1000);
		});
	}
});

/*----team members page------*/

$('#tabs').tabs();

$('#team_cov').mouseenter(function()
{
	$(this).css('filter','none');
}).mouseleave(function()
{
	$(this).css('filter','blur(3px)');
});


//team members hover effect
$('.mem_div').mouseenter(function()
{
	
	$(this).find('.overlay').addClass('mem_div_hover_overlay');
	$(this).find('.overlay div').addClass('mem_div_hover_overlay_div');
}).mouseleave(function()
{
	$(this).find('.overlay').removeClass('mem_div_hover_overlay');
	$(this).find('.overlay div').removeClass('mem_div_hover_overlay_div');
});


//special team member hover effect
$('.spc_mem').mouseenter(function()
{
	
	$(this).find('.spc_mem_img').addClass('spc_mem_hover_spc_mem_img');
	$(this).find('.spc_mem_det').addClass('spc_mem_hover_spc_mem_det');
}).mouseleave(function()
{
	$(this).find('.spc_mem_img').removeClass('spc_mem_hover_spc_mem_img');
	$(this).find('.spc_mem_det').removeClass('spc_mem_hover_spc_mem_det');
});


//web developer hover effect
$('.wteam').mouseenter(function()
{
	
	$(this).find('.wteam_img').addClass('wteam_hover_wteam_img');
	$(this).find('.wteam_det').addClass('wteam_hover_wteam_det');
}).mouseleave(function()
{
	$(this).find('.wteam_img').removeClass('wteam_hover_wteam_img');
	$(this).find('.wteam_det').removeClass('wteam_hover_wteam_det');
});
