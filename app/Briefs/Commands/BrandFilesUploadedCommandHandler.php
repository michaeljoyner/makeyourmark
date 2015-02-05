<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 1/31/2015
 * Time: 6:59 PM
 */

namespace App\Briefs\Commands;


use App\Briefs\Repositories\BrandDocRepo;
use App\Briefs\Repositories\BrandImageRepo;
use App\Commanding\CommandHandler;
use stdClass;

class BrandFilesUploadedCommandHandler implements CommandHandler {

    /**
     * @var BrandImageRepo
     */
    private $imageRepo;
    /**
     * @var BrandDocRepo
     */
    private $docRepo;

    public function __construct(BrandImageRepo $imageRepo, BrandDocRepo $docRepo)
    {

        $this->imageRepo = $imageRepo;
        $this->docRepo = $docRepo;
    }

    /**
     * @param $command
     * @return mixed
     */
    public function handle($command)
    {
        $imageFiles = [];
        $docFiles = [];

        foreach($command->filepaths as $filepath)
        {
            if(strpos($filepath, 'brandimages') !== false) {
                $imageFiles[] = $filepath;
            } else {
                $docFiles[] = $filepath;
            }
        }

        if($imageFiles) {
            $imageDataObject = new stdClass;
            $imageDataObject->brandbrief_id = $command->brandbrief_id;
            $imageDataObject->filepaths = $imageFiles;

            $this->imageRepo->store($imageDataObject);
        }

        if($docFiles) {
            $docDataObject = new stdClass;
            $docDataObject->brandbrief_id = $command->brandbrief_id;
            $docDataObject->filepaths = $docFiles;

            $this->docRepo->store($docDataObject);
        }

    }
}