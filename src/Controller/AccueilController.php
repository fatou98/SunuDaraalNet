<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Bete;
use App\Repository\BeteRepository;
use App\Entity\Image;

class AccueilController extends Controller
{
    /**
     * @Route("/accueil", name="accueil")
     */
    public function index(Request $etat)
    {
        $rop = $this->getDoctrine()->getRepository(Bete::class)
                    ->findBy(['etat'=>'0']);
         $img = $this->getDoctrine()->getRepository(Image::class)
                     ->findBy(['bete'=>$rop]);

                     foreach($img as $key=>$value){
                          $value->setImage(base64_encode(stream_get_contents($value->getImage())));
                      }
     return $this->render('accueil/index.html.twig', array(
            'betes' => $rop,
            'images'=> $img
        ));
    }
}
