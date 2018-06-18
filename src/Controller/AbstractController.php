<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;

abstract class AbstractController{

    public $response;

    public function __construct(){

        $this->response = new JsonResponse();

    }

}