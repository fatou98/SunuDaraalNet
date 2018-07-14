<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use App\Repository\BeteRepository;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Component\HttpFoundation\Request;

class BeteController extends Controller
{
    /**
     * @Route("/bete", name="bete")
     */
    public function index(BeteRepository $beteRepository):Response

    {
        return $this->render('bete/list.html.twig',['betes'=>$beteRepository->findall()]);
    
    }
    // /**
    //  * @Route("/listBete", name="bete")
    //  * @ParamConverter("berger", class="SensioBlogBundle:Berger")
    //  */
    // public function listerBete(BeteRepository $beteRepository):Response
    // {
    //     return $this->render('bete/list.html.twig',['betes'=>$beteRepository->findall()]);
    // }
}
