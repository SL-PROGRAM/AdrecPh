<?php
/**
 * Created by PhpStorm.
 * User: julien
 * Date: 01/02/19
 * Time: 11:13
 */

namespace App\EventListener;

use Doctrine\ORM\Events;
use Doctrine\Common\EventSubscriber;
use Doctrine\ORM\Mapping\PreUpdate;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\EventDispatcher\GenericEvent;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\SitePhoto;
use Doctrine\Common\Persistence\Event\LifecycleEventArgs;


class EasyAdminListener implements EventSubscriber

{
    /**
     * @var ObjectManager
     */
    private $om;

    public function __construct(ObjectManager $om)
    {
        $this->om = $om;
    }

    public function getSubscribedEvents()
    {
        return [
            Events::postPersist,
            Events::postUpdate,
        ];
    }

    public function postUpdate(LifecycleEventArgs $args)
    {
        $this->index($args);
    }

    public function postPersist(LifecycleEventArgs $args)
    {
        $this->index($args);
    }

    public function index(LifecycleEventArgs $args)
    {
        $sitePhoto = $this->om->getRepository(SitePhoto::class);
        $entity = $args->getObject();
        $hook = $sitePhoto->findBy(['hook' => $entity->getHook()]);
        foreach ($hook as $hooked){
            if ($entity instanceof SitePhoto) {
                if($entity->getHook() == null ){

                }
                else if (null !== $hooked && $entity->getId() !== $hooked->getId()) {
                    $hooked->setHook(null);
                    $this->om->persist($hooked);
//                $this->om->merge($entity);
                    $this->om->flush();
                    dump($hooked);
                    dump($entity);
                    return $hooked;
                }


            }
        }

    }
}