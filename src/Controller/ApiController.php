<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use App\Utils\Helper;

class ApiController extends AbstractController{

    public function calendar() : JsonResponse{

        $crawler = new Helper();

        $crawler->getPages('https://www.flashresultats.fr/football/monde/coupe-du-monde/calendrier/');


        $this->response->setData(array('data' => 123));
        return $this->response;

    }

}