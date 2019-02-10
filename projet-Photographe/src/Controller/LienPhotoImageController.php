<?php

namespace App\Controller;

use App\Entity\LienPhotoImage;
use App\Form\LienPhotoImageType;
use App\Repository\LienPhotoImageRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/lien/photo/image")
 */
class LienPhotoImageController extends AbstractController
{
    /**
     * @Route("/", name="lien_photo_image_index", methods={"GET"})
     */
    public function index(LienPhotoImageRepository $lienPhotoImageRepository): Response
    {
        return $this->render('lien_photo_image/index.html.twig', [
            'lien_photo_images' => $lienPhotoImageRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="lien_photo_image_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $lienPhotoImage = new LienPhotoImage();
        $form = $this->createForm(LienPhotoImageType::class, $lienPhotoImage);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($lienPhotoImage);
            $entityManager->flush();

            return $this->redirectToRoute('lien_photo_image_index');
        }

        return $this->render('lien_photo_image/new.html.twig', [
            'lien_photo_image' => $lienPhotoImage,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="lien_photo_image_show", methods={"GET"})
     */
    public function show(LienPhotoImage $lienPhotoImage): Response
    {
        return $this->render('lien_photo_image/show.html.twig', [
            'lien_photo_image' => $lienPhotoImage,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="lien_photo_image_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, LienPhotoImage $lienPhotoImage): Response
    {
        $form = $this->createForm(LienPhotoImageType::class, $lienPhotoImage);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('lien_photo_image_index', [
                'id' => $lienPhotoImage->getId(),
            ]);
        }

        return $this->render('lien_photo_image/edit.html.twig', [
            'lien_photo_image' => $lienPhotoImage,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="lien_photo_image_delete", methods={"DELETE"})
     */
    public function delete(Request $request, LienPhotoImage $lienPhotoImage): Response
    {
        if ($this->isCsrfTokenValid('delete'.$lienPhotoImage->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($lienPhotoImage);
            $entityManager->flush();
        }

        return $this->redirectToRoute('lien_photo_image_index');
    }
}
