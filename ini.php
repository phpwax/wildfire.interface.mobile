<?php

AutoLoader::register_assets("javascripts/wildfire.interface.mobile",__DIR__."/assets/javascripts/wildfire.interface.mobile", "/*.js");
AutoLoader::register_assets("stylesheets/wildfire.interface.mobile",__DIR__."/assets/stylesheets/wildfire.interface.mobile", "/*.css");
AutoLoader::register_assets("images/wildfire.interface.mobile",__DIR__."/assets/images/wildfire.interface.mobile", "/*.png");

AutoLoader::add_plugin_setup_script(__DIR__."/setup.php");
?>