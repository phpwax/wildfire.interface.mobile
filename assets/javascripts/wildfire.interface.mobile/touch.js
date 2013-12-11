function touch_setup(){
  var touchfunc = function(obj){
    jQuery(".touched").not(jQuery(obj)).removeClass("touched");
    jQuery(obj).toggleClass("touched");
  };
  jQuery("body").hammer().on("tap", "#nav_container_block, .tree_operations, td.operations", function(){touchfunc(this);});
  jQuery("body").on("tap", "#nav_container_block a, .tree_operations a, td.operations a", function(e){
    e.stopPropagation();
  });
}

jQuery(document).ready(function(){

  jQuery(window).on("resize", function(){
    var width = jQuery(document).outerWidth();
    if(width <= 700) touch_setup();
  });
  jQuery(window).trigger("resize");

});