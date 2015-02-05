<?php namespace App\Http\Controllers;

use App\BriefFileUploading\BrandFileUploadedCommand;
use App\BriefFileUploading\LogoImageUploadedCommand;
use App\Commanding\CommandBus;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\Requests\AjaxImageOrDocUploadRequest;
use App\Http\Requests\AjaxImageUploadRequest;
use Illuminate\Http\Request;

class AjaxUploadController extends Controller {

	/**
	 * @var CommandBus
	 */
	private $commandBus;

	public function __construct(CommandBus $commandBus)
	{

		$this->commandBus = $commandBus;
	}

	public function logoImageUploads(AjaxImageUploadRequest $request)
	{
		$command = new LogoImageUploadedCommand($request->file('upload'));
		$path = $this->commandBus->execute($command);
		return response()->json($path);
	}

	public function brandFileUploads(AjaxImageOrDocUploadRequest $request)
	{
		$command = new BrandFileUploadedCommand($request->file('upload'));
		$path = $this->commandBus->execute($command);
		return response()->json($path);
	}

}
