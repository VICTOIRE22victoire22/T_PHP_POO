<?php

namespace App\Controller;

use App\Entity\Expo;
use App\Form\ExpoType;
use App\Repository\ExpoRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/expo')]
final class ExpoController extends AbstractController
{
    #[Route(name: 'app_expo_index', methods: ['GET'])]
    public function index(ExpoRepository $expoRepository): Response
    {
        return $this->render('expo/index.html.twig', [
            'expos' => $expoRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_expo_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $expo = new Expo();
        $form = $this->createForm(ExpoType::class, $expo);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($expo);
            $entityManager->flush();

            return $this->redirectToRoute('app_expo_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('expo/new.html.twig', [
            'expo' => $expo,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_expo_show', methods: ['GET'])]
    public function show(Expo $expo): Response
    {
        return $this->render('expo/show.html.twig', [
            'expo' => $expo,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_expo_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Expo $expo, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ExpoType::class, $expo);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_expo_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('expo/edit.html.twig', [
            'expo' => $expo,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_expo_delete', methods: ['POST'])]
    public function delete(Request $request, Expo $expo, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$expo->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($expo);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_expo_index', [], Response::HTTP_SEE_OTHER);
    }
}
