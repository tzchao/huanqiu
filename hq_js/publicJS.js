
//导航二级菜单效果
$(document).ready(function(){
    $('.nav-menu>ul>li').hover(function(){
        var obj = $(this).find('.menu-2');
        if(!obj.is(":animated")){
            obj.slideDown('1000');
            $(this).siblings('li').find('.menu-2').slideUp('fast');
        }
    },function(){
          $(this).find('.menu-2').slideUp('fast');
        });
});
