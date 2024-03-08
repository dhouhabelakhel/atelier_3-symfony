<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DemoController extends AbstractController
{
    #[Route('/{name}', name: 'app_demo')]
    public function index($name): Response
    {
        return $this->render('demo/index.html.twig', [
            'name' => $name,
        ]);
    }
    #[Route('/', name: 'app_demo')]
    public function index1(): Response
    {
        return $this->render('demo/controllers.html.twig', [
            'controller_name' => 'DEMO ',
            'msg'=>'this friendly message is coming from',
          
        ]);
    }
    #[Route('/somme/{a}/{b}', name: 'app_demo')]
    public function somme($a,$b): Response
    {
        return $this->render('demo/somme.html.twig', [
            'a' => $a,
            'b'=>$b,
            'somme'=>$a+$b
          
        ]);
    }
}
