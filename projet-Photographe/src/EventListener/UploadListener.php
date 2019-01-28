<?php
/**
 * Created by PhpStorm.
 * User: sl
 * Date: 24/01/19
 * Time: 15:43
 */

namespace App\EventListener;


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
        $gallery = $request->get('gallery');

        //if everything went fine
        $response = $event->getResponse();
        $response['success'] = true;
        return $response;


    }
}

