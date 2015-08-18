<?php

namespace Controller;

use \W\Controller\Controller;

class DefaultController extends Controller
{

	/**
	 * Page d'accueil par défaut
	 */
	public function home()
	{
		$this->show('default/home');
	}

	/**
	 * Page contact
	 */
	public function contact()
	{
		$this->show('default/contact');
	}

	//Page about
	public function about()
	{
		$this->show('default/about');
	}

	//Page details
	public function details($id, $slug)
	{
		debug($id);
		debug($slug);
		die();
	}

}