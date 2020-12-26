<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\MaterielRepository;
use Symfony\Component\HttpFoundation\Request;


class MaterielController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index(): Response
    {
        return $this->redirectToRoute('materiel');
    }

    /**
     * @Route("/materiel", name="materiel")
     */
    public function showMateriel(MaterielRepository $repo): Response
    {
        $materiels = $repo->findAll();

        return $this->render('materiel/materiel.html.twig', [
            'materiels' => $materiels,
        ]);
    }

    /**
     * @Route("/materiel/modify/{id}", name="modifyMateriel")
     */
    public function modifyMateriel(Request $request,MaterielRepository $repo, EntityManagerInterface $manager , $id)
    {
        $materiel = $repo->find($id);

        // Si le materiel n'existe pas alors retourner la liste des materiels
        if(!$materiel){
            return $this->redirectToRoute('materiel');
        }

        // Creation du formulaire de modification du materiel
        $form = $this->createFormBuilder($materiel)
            ->add('Nom')
            ->add('Prix')
            ->add('Quantite')
            ->getForm();

        $form->handleRequest($request);

        // Si le formulaire est soumis et valide alors on envoit les données à la bdd
        // Renvoie la liste des materiels
        if($form->isSubmitted() && $form->isValid()){
            $manager->persist($materiel);
            $manager->flush();
            return $this->redirectToRoute('materiel');
        }

        // Renvoie le formulaire sur la page modify
        return $this->render('materiel/modify.html.twig', [
            'materiel' => $materiel, 'formMateriel' => $form->createView(),
        ]);
    }

    /**
     * @Route("/materiel/decrement/{id}", name="decrementMateriel")
     */
    public function decrementMateriel(MaterielRepository $repo, EntityManagerInterface $manager, $id)
    {
        $materiel = $repo->find($id);

        $materiel->setQuantite($materiel->getQuantite()-1);

        $manager->persist($materiel);
        $manager->flush();
        return $this->redirectToRoute('materiel');
    }

    /**
     * @Route("/materiel/pdfy/{id}", name="pdfyMateriel")
     */
    public function pdfyMateriel(MaterielRepository $repo, $id)
    {
        $materiel = $repo->find($id);

        $pdf = new FPDF();
    }
}
