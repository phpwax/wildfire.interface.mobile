function touch_setup(){

  jQuery("body").on("click", "#nav_container_block, .tree_operations, td.operations", function(e){
    jQuery(".touched").not(jQuery(this)).removeClass("touched");
    jQuery(this).toggleClass("touched");
  });
}

jQuery(document).ready(function(){

  jQuery(window).on("resize", function(){
    var width = jQuery(document).outerWidth();
    if(width <= 700) touch_setup();
  });
  jQuery(window).trigger("resize");

});