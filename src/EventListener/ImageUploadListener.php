<?php

namespace App\EventListener;

use Symfony\Component\HttpFoundation\File\UploadedFile;
use Doctrine\ORM\Event\LifecycleEventArgs;
use Doctrine\ORM\Event\PreUpdateEventArgs;
use App\Entity\Path;
use App\Service\ImageUploader;

class ImageUploadListener
{
    private $uploader;

    public function __construct(ImageUploader $uploader)
    {
        $this->uploader = $uploader;
    }

    public function prePersist(LifecycleEventArgs $args)
    {
        $entity = $args->getEntity();

        $this->uploadImage($entity);
    }

    public function preUpdate(PreUpdateEventArgs $args)
    {
        $entity = $args->getEntity();

        $this->uploadImage($entity);
    }

    private function uploadImage($entity)
    {
        // upload only works for Product entities
        if (!$entity instanceof Path) {
            return;
        }

        $image = $entity->getImage();

        // only upload new files
        if ($image instanceof UploadedFile) {
            $imageName = $this->uploader->upload($image);
            $entity->setImage($imageName);
        }
    }
}