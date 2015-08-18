<?php
	
	$w_routes = array(
		['GET', '/', 'Default#home', 'home'],
		['GET|POST', '/contacte/', 'Default#contact', 'contact'],
		['GET', '/about/', 'Default#about', 'about'],
		['GET', '/details/[a:id]/[a:slug]/', 'Default#details', 'details'],
	);