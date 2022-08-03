<?php

namespace App\Controller;

use App\Entity\Bailleurs;
use App\Form\BailleurType;
use App\Repository\BailleursRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class BailleurController extends AbstractController
{

    private $repo;

    public function __construct(BailleursRepository $repo)
    {
        $this->repo = $repo;
    }

    /**
     * @Route("/bailleur/read", name="app_bailleur_read")
     */
    public function read(Request $request, BailleursRepository $bailleursRepository): Response
    {
        $bailleur = new Bailleurs;
        $form = $this->createForm(BailleurType::class, $bailleur);
        $form->handleRequest($request);
        $bailleurs = $this->repo->findAll();
        return $this->render('bailleur/read.html.twig', [
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/bailleur/create", name="app_bailleur_create", methods={"GET", "POST"})
     */
    public function create(Request $request, ManagerRegistry $doctrine): Response
    {

        $bailleur = new Bailleurs;
        $form = $this->createForm(BailleurType::class, $bailleur);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            $em = $doctrine->getManager();
            $em->persist($bailleur);
            $em->flush();

            $this->addFlash('notice', 'Submited Succesfully!');
            return $this->redirectToRoute('app_bailleur_read');
        }

        return $this->render('bailleur/create.html.twig', [
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/bailleur/update/{id}", name="app_bailleur_update")
     */
    public function update(Request $request, ManagerRegistry $doctrine, $id, BailleursRepository $bailleursRepository): Response
    {
        // dd($id);
        // $bailleur = $this->$doctrine->getRepository(Bailleurs::class)->find($id);
        // $bailleur = $this->$doctrine->$bailleursRepository->find($id);
        // 'bailleurs' => $bailleursRepository->findAll(),

        $bailleur = $bailleursRepository->find($id);
        // dd($bailleur);
        $form = $this->createForm(BailleurType::class, $bailleur);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $doctrine->getManager();
            $em->persist($bailleur);
            $em->flush();

            return $this->redirectToRoute('app_bailleur_read');
        }

        return $this->render('bailleur/update.html.twig', [
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/bailleur/delete/{id}", name="bailleur_delete") 
     */
    public function delete($id, ManagerRegistry $doctrine, BailleursRepository $bailleursRepository)
    {
        $data = $bailleursRepository->find($id);
        $em = $doctrine->getManager();
        $em->remove($data);
        $em->flush();

        $this->addFlash('notice', 'Delete Successfully!');
        return $this->redirectToRoute('app_bailleur_read');
    }
}