$(window).on("load",function(){function e(){992>m?$(".menu-closing-main").on("click",function(){$(".menu").hasClass("menu-close")?($(".menu").animate({width:wthSelected}),$(".menu-closing-main").addClass("menu-menu-close")):($(".menu").animate({width:"45"}),$(".menu-closing-main").removeClass("menu-menu-close")),$(".menu").toggleClass("menu-close"),$(".menu").toggleClass("overflow"),l()}):$(".menu-closing-main").on("click",function(){$(".menu").hasClass("menu-close")?($(".menu").animate({width:wthSelected}),$(".menu-closing-main").addClass("menu-menu-close"),$(".menu-logo").css("z-index","0"),$(".menu-logo").hide(200)):($(".menu").animate({width:"45"}),$(".menu-closing-main").removeClass("menu-menu-close"),$(".menu-logo").delay(200).queue(function(e){$(".menu-logo").css("z-index","4000"),$(".menu-logo").show(10),$(".menu-logo").dequeue()})),$(".menu").toggleClass("menu-close"),$(".menu").toggleClass("overflow"),l()})}function n(){wthSelected="75%",e()}function o(){wthSelected="33.3333333%",e()}function l(){$(".menu").hasClass("menu-close")?($(".menu-elements").accordion("destroy"),$(".menu-info").accordion("destroy")):($(".menu-elements").accordion({collapsible:!0,autoHeight:!0,clearStyle:!0,active:!1,heightStyle:"content"}),$(".menu-info").accordion({collapsible:!0,autoHeight:!0,clearStyle:!0,active:!1,heightStyle:"content"}))}var m=$(window).width();992>m?n():o(),l()});