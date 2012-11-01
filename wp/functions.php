<?php
	add_theme_support('menu');

	register_nav_menu('Mainmenu', "Main Menu"); // for Home nav
	register_nav_menu('TitleMenu', "Title Menu"); // for Menu of Pages
	register_nav_menu('SocialMenu', "Social Menu"); // for About Us nav

	register_sidebar(array(
		'name' => 'Drug',
		'id' => 'left',
		'description' => 'left text ...',
		'before_widget' => '<article class="widget %2$s">',
		'after_widget' => "</article>\n",
		'before_title' => '<h2 class="widgettitle">',
		'after_title' => "</h2>\n"
	));
	
	register_sidebar(array(
		'name' => 'About',
		'id' => 'center',
		'description' => 'center text ...',
		'before_widget' => '<article class="widget %2$s">',
		'after_widget' => "</article>\n",
		'before_title' => '<h2 class="widgettitle">',
		'after_title' => "</h2>\n"
	));

?>