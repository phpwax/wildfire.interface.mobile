<?php

AutoLoader::register_assets("stylesheets/wildfire.interface.mobile",__DIR__."/resources/public/stylesheets", "/*.css");
AutoLoader::register_assets("javascripts/wildfire.interface.mobile",__DIR__."/resources/public/javascripts", "/*.js");

AutoLoader::add_plugin_setup_script(__DIR__."/setup.php");
?>