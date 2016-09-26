$(function(){

$.fn.slide = function(options) {
	var defaults = {
		btn:          '.focus_btn',
		leftBtn:      '.focus_left',
		rightBtn:     '.focus_right',
		btnActive:    'click',
		picBox:       '.focus_pic',
		time:         '5000',
		speed:        '500',
		num:          '1',
		play:         '1'
	};
	var obj     =     $.extend(defaults, options),
		self    =     $(this),
		picUl   =     self.find(obj.picBox+">ul"),
		picLi   =     picUl.find(">li"),
		btnLi   =     self.find(obj.btn+">ul>li"),
        banThumb=     $(".ban-thumb"),
		leftBtn =     self.find(obj.leftBtn),
		rightBtn=     self.find(obj.rightBtn),
		len     =     Math.ceil(picLi.length/obj.num),
		index   =     0,
		timer,
		moveX,
		moveWidth,
		ulWidth = 100*len + "%";
		liWidth = 100/len + "%";

	picUl.css({"width":ulWidth});
	picLi.css({"width":liWidth});

	self.bind('movestart', function(e) {
		if ((e.distX > e.distY && e.distX < -e.distY) || (e.distX < e.distY && e.distX > -e.distY)) {
			e.preventDefault();
		}
	})
	.bind('move', function(e) {
		moveX = e.distX;
	})
	.bind('moveend', function() {
		if(moveX < 5){
			if(index == len-1){ index = 0; }else{ index++; }
			animate(index,len,picUl,btnLi);
		}else if(moveX > 5){
			if(index == 0){ index = len-1; }else{ index--; }
			animate(index,len,picUl,btnLi);
		}
		if(obj.play==1){
		clearInterval(timer);
		timer = setInterval(function(){
			if(index == len-1){ index = 0; }else{ index++; }
			animate(index,len,picUl,btnLi);
		 } , obj.time);
		}
	});

	animate = function(index,len,picUl,btnLi){
		moveWidth = -(100*index)  + "%";
		picUl.css({
			"marginLeft": moveWidth

		});
		btnLi.removeClass("active").eq(index).addClass("active");
        banThumb.find("img").removeClass("active");
        banThumb.eq(index).find("img").addClass('active');
        picLi.removeClass("active1").eq(index).addClass("active1");

	}

	btnLi.click(function(){
		index = btnLi.index(this);
		animate(index,len,picUl,btnLi);
	})
    banThumb.hover(function(){
        index = banThumb.index(this);
        banThumb.find("img").removeClass("active");
        banThumb.eq(index).find("img").addClass('active');
        animate(index,len,picUl,btnLi);
    });
	$(obj.leftBtn).click(function(){
		if(index == 0){ index = len-1; }else{ index--; }
		animate(index,len,picUl,btnLi);
	});

	$(obj.rightBtn).click(function(){
		if(index == len-1){ index = 0; }else{ index++; }
		animate(index,len,picUl,btnLi);
	});

	if(obj.play==1){
		self.hover(function(){
			clearInterval(timer);
		},function(){
			clearInterval(timer);
			timer = setInterval(function(){
				if(index == len-1){ index = 0; }else{ index++; }
				animate(index,len,picUl,btnLi);
			 } , obj.time);
		}).trigger("mouseleave");
	}
	
}

})