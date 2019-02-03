<?php
/**
 * Created by PhpStorm.
 * User: sl
 * Date: 24/01/19
 * Time: 15:43
 */

namespace App\EventListener;


use App\Entity\Galery;
use App\Entity\Photo;
use Doctrine\Common\Persistence\ObjectManager;
use Oneup\UploaderBundle\Event\PostPersistEvent;
use Symfony\Component\HttpFoundation\ServerBag;


class UploadListener
{
    /**
     * @var ObjectManager
     */
    private $om;

    public function __construct(ObjectManager $om)
    {
        $this->om = $om;
    }

    public function onUpload(PostPersistEvent $event)
    {
        $adress = null;
        $request = $event->getRequest();
        $num_galerie = $request->get('gallery');
        $gallery = $this->om->getRepository(Galery::class);



        /*
         * recupération du numero de la galerie via l'adress url d'appel du listener
         */
        foreach ($_SERVER as $item => $value){
            if ($item === "HTTP_REFERER"){
                $adress = $value;
            }
        }

        $id = substr($adress, -2, 2);

        $num_galerie = $gallery->findOneBy(['id' => $id]);
        $file = $event->getFile();

        $photo = (new Photo())
                ->setPath('/uploads/'.$file->getFilename())
                ->setGalery($num_galerie)
        ;


        $this->om->persist($photo);
        $this->om->flush();

        //if everything went fine
        $response = $event->getResponse();
        $response['success'] = true;
        return $response;
    }
}

