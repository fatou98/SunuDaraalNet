<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use App\Entity\Berger;
use App\Repository\BergerRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use App\Form\BergerType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;

class BergerController extends Controller
{
    /**
     * @Route("/berger", name="berger")
     */
    public function index()
    {
        return $this->render('berger/index.html.twig', [
            'controller_name' => 'BergerController',
        ]);
    }
    /**
     * @Route("/listerBerger", name="berger")
     */
    public function findall(BergerRepository $bergerRepository): Response    
       
    {
        return $this->render('berger/lister.html.twig', ['berger' => $bergerRepository->findAll()]);
    }
    /**
     * @Route("/{id}", name="berger_show", methods="GET")
     */
    public function show(Berger $berger): Response
    {
        return $this->render('berger/show.html.twig',array('berger' => $berger));
    }
    /**
     * @Route("/{id}/edit", name="berger_edit", methods="GET|POST")
     */
    public function edit(Request $request, Berger $berger): Response
    {
        $form = $this->createForm(BergerType::class, $berger);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('berger_edit', ['id' => $berger->getId()]);
        }

        return $this->render('berger/edit.html.twig', [
            'berger' => $berger,
            'form' => $form->createView(),
        ]);
    }
    /**
     * @Route("/{id}", name="berger_delete", methods="DELETE")
     */
    public function delete(Request $request, Berger $berger): Response
    {
        if ($this->isCsrfTokenValid('delete'.$berger->getId(), $request->request->get('_token'))) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($berger);
            $em->flush();
        }

        return $this->redirectToRoute('berger_index');
    }

}
