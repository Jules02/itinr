<?php

namespace App\Service;

use Symfony\Component\HttpFoundation\File\UploadedFile;

class ImageUploader
{
    private $targetDirectory;

    public function __construct($targetDirectory)
    {
        $this->targetDirectory = $targetDirectory;
    }

    public function upload(UploadedFile $image)
    {
        $imageName = md5(uniqid()).'.'.$image->guessExtension();

        $image->move($this->getTargetDirectory(), $imageName);

        return $imageName;
    }

    public function getTargetDirectory()
    {
        return $this->targetDirectory;
    }
}