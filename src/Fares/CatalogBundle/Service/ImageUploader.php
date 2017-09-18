<?php
/**
 * Created by PhpStorm.
 * User: fkato
 * Date: 13.09.17
 * Time: 20:48
 */

namespace Fares\CatalogBundle\Service;

use Symfony\Component\HttpFoundation\File\UploadedFile;

class ImageUploader
{

    private $targetDir;

    public function __construct($targetDir)
    {
        $this->targetDir = $targetDir;
    }
    public function upload(UploadedFile $file)
    {
        $fileName = md5(uniqid()) . '.' . $file->guessExtension();
        $file->move($this->targetDir, $fileName);
        return $fileName;
    }

}