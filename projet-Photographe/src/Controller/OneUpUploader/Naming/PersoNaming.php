<?php
/**
 * Created by PhpStorm.
 * User: sl
 * Date: 30/01/19
 * Time: 15:13
 */

namespace App\Controller\OneUpUploader\Naming;

use Oneup\UploaderBundle\Uploader\File\FileInterface;
use Oneup\UploaderBundle\Uploader\Naming\NamerInterface;

class PersoNaming implements NamerInterface
{
    public function name(FileInterface $file)
    {
        return 'grumpycat.jpg';
    }
}
