<?php
/**
 * Created by PhpStorm.
 * User: sl
 * Date: 30/01/19
 * Time: 15:13
 */

namespace App\Controller\OneUpUploader\Naming;

use App\Controller\ParticuliersController;
use Oneup\UploaderBundle\Uploader\File\FileInterface;
use Oneup\UploaderBundle\Uploader\Naming\NamerInterface;

class PersoNaming implements NamerInterface
{
    public function name(FileInterface $file)
    {
        $fileName = $file->getBasename();
        $fileType = $file->getExtension();
        dump($file);
        $name = $fileName.'.'.$fileType;
        return $name;
    }
}
