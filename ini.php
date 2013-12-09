<?php
AutoLoader::register_assets("stylesheets/wildfire",__DIR__."/resources/public/stylesheets/wildfire/", "/*.css");
AutoLoader::register_assets("javascripts/wildfire",__DIR__."/resources/public/javascripts/wildfire/", "/*.js");
CMSApplication::register_asset("wildfire", "js", "mobile");
CMSApplication::register_asset("wildfire", "css", "mobile");

AutoLoader::register_view_path("plugin", __DIR__."/view/");

AutoLoader::add_plugin_setup_script(__DIR__."/setup.php");
?>