$(window).on("load",function(){$(".checkoutajax").hide(),$(".checkout-button").on("click",function(){$(".cart-menu").hide("slide",{direction:"right"},400),$(".menu-elements-cart").delay(300).queue(function(e){$(".menu-elements-cart").accordion("destroy")});jQuery(this).data("id");return jQuery.ajax({url:"http://localhost:8888/wordpress/checkout/",type:"POST",async:!0,data:{},success:function(e){$(".checkoutajax").html(e),$(".woocommerce-billing-fields").prepend('<span class="menu-menu-closecheckout">close</span>'),$(document).on("click",".menu-menu-closecheckout",function(){console.log("dasffas"),$(".checkoutajax").hide("slide",{direction:"right"},800)})}}),$(".checkoutajax").delay(500).show("slide",{direction:"right"},800),!1})});