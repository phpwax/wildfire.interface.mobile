<?php

CMSApplication::register_asset("wildfire", "js", "wildfire.interface.mobile");
CMSApplication::register_asset("wildfire", "css", "wildfire.interface.mobile");
AutoLoader::$plugin_array[] = array("name"=>"wildfire.interface.mobile","dir"=>__DIR__);

AutoLoader::register_view_path("plugin", __DIR__."/view/");
CMSApplication::$global_partials[] = "_disable_tinymce";

WaxEvent::add("wax.after_plugin_view_paths", function(){
  $template = WaxEvent::data();
  //if this is cms_meta partial, need to move plugin version higher in the template stack
  if($template->use_view == "_cms_meta"){
    //we do this by basically removing the default interface one with this one
    foreach($template->template_paths as $i=>$path) $template->template_paths[$i] = str_replace("/wildfire.interface/", "/wildfire.interface.mobile/", $path);
  }
});
?>