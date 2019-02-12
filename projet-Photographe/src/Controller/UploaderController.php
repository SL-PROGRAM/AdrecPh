<?php

namespace App\Controller;

use App\Entity\Photo;
use App\Repository\GaleryRepository;
use App\Repository\PhotoRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\Filesystem\Exception\IOExceptionInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;


class UploaderController extends AbstractController
{
    /**
     * @Route("/uploader", name="uploader")
     * @IsGranted("ROLE_ADMIN")
     */
    public function index(GaleryRepository $repository)
    {
        $galeries = $repository->findAll();



        return $this->render('uploader/index.html.twig', [
            'controller_name' => 'UploaderController',
            'galeries' => $galeries,
        ]);
    }

    /**
     * @Route("/uploaderGaleries/galery-{id}", name="uploader_galeries")
     */
    public function uploaderGaleries(GaleryRepository $repository, $id, PhotoRepository $photoRepository)
    {

        $photos = $photoRepository->findAll();


        return $this->render('uploader/upload.html.twig', [
            'controller_name' => 'UploaderController',
            'photos' => $photos,
            'galeryId' => $id,
        ]);
    }

    /**
     * @Route("/{id}", name="photo_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Photo $photo): Response
    {
        if ($this->isCsrfTokenValid('delete'.$photo->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $fileSystem = new Filesystem();
            $file = $photo->getPath();
            $file = substr($file, 1);
            $fileSystem->remove([$file]);
            $entityManager->remove($photo);
            $entityManager->flush();
            $id = $photo->getGalery()->getId();
            dump($id);
        }

        return $this->redirectToRoute('uploader_galeries', ['id' => $id]);
    }

    /**
     * @Route("/new", name="photo_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $photo = new Photo();
        $form = $this->createForm(PhotoType::class, $photo);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($photo);
            $entityManager->flush();

            return $this->redirectToRoute('photo_index');
        }

        return $this->render('photo/new.html.twig', [
            'photo' => $photo,
            'form' => $form->createView(),
        ]);
    }









}
