<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 1/31/2015
 * Time: 9:09 PM
 */

namespace App\Briefs\Commands;


use App\BriefFileUploading\BrandDocStorer;
use App\BriefFileUploading\BrandImageStorer;
use App\Briefs\Repositories\BrandDocRepo;
use App\Briefs\Repositories\BrandImageRepo;
use App\Commanding\CommandHandler;
use stdClass;

class BrandUploadsSubmittedCommandHandler implements CommandHandler {

    /**
     * @var BrandImageRepo
     */
    private $imageRepo;
    /**
     * @var BrandDocRepo
     */
    private $docRepo;
    /**
     * @var BrandImageStorer
     */
    private $imageStorer;
    /**
     * @var BrandDocStorer
     */
    private $docStorer;

    private $imageTypes = [
        'jpg',
        'jpeg',
        'png',
        'gif',
        'svg',
        'bmp'
    ];

    public function __construct(BrandImageRepo $imageRepo, BrandDocRepo $docRepo, BrandImageStorer $imageStorer, BrandDocStorer $docStorer)
    {

        $this->imageRepo = $imageRepo;
        $this->docRepo = $docRepo;
        $this->imageStorer = $imageStorer;
        $this->docStorer = $docStorer;
    }
    /**
     * @param $command
     * @return mixed
     */
    public function handle($command)
    {
        $imagePaths = [];
        $docPaths = [];

        foreach($command->uploadedfiles as $file)
        {
            if(in_array($file->getClientOriginalExtension(), $this->imageTypes))
            {
                $imagePaths[] = $this->imageStorer->store($file);
            } else {
                $docPaths[] = $this->docStorer->store($file);
            }
        }

        if($imagePaths)
        {
            $imagesDTO = new stdClass();
            $imagesDTO->brandbrief_id = $command->brandbrief_id;
            $imagesDTO->filepaths = $imagePaths;

            $this->imageRepo->store($imagesDTO);
        }

        if($docPaths)
        {
            $docDTO = new stdClass();
            $docDTO->brandbrief_id = $command->brandbrief_id;
            $docDTO->filepaths = $docPaths;

            $this->docRepo->store($docDTO);
        }
    }
}