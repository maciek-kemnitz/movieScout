<?php

namespace AppBundle\Controller;


use Goutte\Client;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomePageController extends Controller
{

    public function indexAction()
    {
        $client = new Client();
        $crawler = $client->request('GET', 'http://www.cinema-city.pl/scheduleInfo?locationId=1010303&date=null&venueTypeId=0&hideSite=false&openedFromPopup=1');

        $html = $crawler->html();
        // replace this example code with whatever you need
        return $this->render('AppBundle:default:index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..'),
            'html' => $html
        ]);
    }

}