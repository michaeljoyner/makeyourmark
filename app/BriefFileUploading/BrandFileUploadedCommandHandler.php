<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 1/31/2015
 * Time: 11:06 AM
 */

namespace App\BriefFileUploading;


use App\Commanding\CommandHandler;

class BrandFileUploadedCommandHandler implements CommandHandler {

    /**
     * @var BrandImageStorer
     */
    private $brandImageStorer;
    /**
     * @var BrandDocStorer
     */
    private $brandDocStorer;

    private $imageTypes = [
        'jpg',
        'jpeg',
        'png',
        'gif',
        'svg',
        'bmp'
    ];

    public function __construct(BrandImageStorer $brandImageStorer, BrandDocStorer $brandDocStorer)
    {

        $this->brandImageStorer = $brandImageStorer;
        $this->brandDocStorer = $brandDocStorer;
    }
    /**
     * @param $command
     * @return mixed
     */
    public function handle($command)
    {
        if(in_array($command->upload->getClientOriginalExtension(), $this->imageTypes))
        {
            return $this->brandImageStorer->store($command->upload);
        }
        return $this->brandDocStorer->store($command->upload);
    }
}