<?php

namespace App\Utils;
use GuzzleHttp\Client;
use Symfony\Component\DomCrawler\Crawler;
use Symfony\Component\CssSelector;

class Helper{

    public function getPages($url){
        $client = new Client([
            // Base URI is used with relative requests
            'base_uri' => $url,
            // You can set any number of default request options.
            'timeout'  => 2.0,
        ]);

        $html = $client->request('GET')->getBody()->getContents();

        $crawler = new Crawler($html);
        foreach ($crawler as $domElement) {
            var_dump($crawler = $crawler->filter('body > p'));
        }
        die;

        return $result->getBody()->getContents();
    }

}