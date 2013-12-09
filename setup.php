<?php
#AutoLoader::register_view_path("plugin", __DIR__."/view/");
CMSApplication::register_asset("wildfire", "js", "wildfire.interface.mobile");
CMSApplication::register_asset("wildfire", "css", "wildfire.interface.mobile");
AutoLoader::$plugin_array[] = array("name"=>"wildfire.interface.mobile","dir"=>__DIR__);


?>