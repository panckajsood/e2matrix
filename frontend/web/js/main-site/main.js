jQuery(document).ready(function($) {
  jQuery('.page-navigation').onePageNav();
});
$(window).on('load', function(){ 
jQuery(".se-pre-con").hide();
});
$(".member").flip({
	trigger: 'hover'
});