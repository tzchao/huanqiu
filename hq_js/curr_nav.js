///**
// * Created by qiqikeji on 15-5-8.
// */
///*导航当前状T态*/
$(function(){
    var href = window.location.href;
    if(/news_list/.test(href)||/news_cont/.test(href)) {
        $('.nav-menu>ul>li').eq(1).addClass('curr').siblings('li').removeClass('curr');
    }else if(/product_list/.test(href)||/product_cont/.test(href)) {
        $('.nav-menu>ul>li').eq(2).addClass('curr').siblings('li').removeClass('curr');
    }else if(/shiti_map/.test(href)||/shiti_list/.test(href)||/shiti_cont/.test(href)) {
        $('.nav-menu>ul>li').eq(3).addClass('curr').siblings('li').removeClass('curr');
    }else if(/about/.test(href)) {
        $('.nav-menu>ul>li').eq(4).addClass('curr').siblings('li').removeClass('curr');
    }


});

