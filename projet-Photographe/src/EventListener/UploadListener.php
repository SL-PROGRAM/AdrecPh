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
        $request = $event->getRequest();
        $gal = $request->get('gallery');
        $gallery = $this->om->getRepository(Galery::class);
        $gale = $gallery->findOneBy(['Name' => 'SitePhoto']);
        $file = $event->getFile();
//        $path = $file->getPath();
        $photo = new Photo();
        $photo->setPath('upload/bob.jpg');
        $photo->setGalery($gale);
        $this->om->persist($photo);
        $this->om->flush();

        //if everything went fine
        $response = $event->getResponse();
        $response['success'] = true;
        return $response;


    }
}

