<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ApiController extends AbstractController {

	/**
	*	@Route("/ping", name="app_ping_api", methods={"GET"})
	*/
	public function ping()
	{
		return $this->json('pong');
	}
}