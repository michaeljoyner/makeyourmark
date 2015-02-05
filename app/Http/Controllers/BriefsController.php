<?php namespace App\Http\Controllers;

use App\Briefs\Commands\BrandBriefSubmittedCommand;
use App\Briefs\Commands\BrandFilesUploadedCommand;
use App\Briefs\Commands\BrandUploadsSubmittedCommand;
use App\Briefs\Commands\GeneralBriefSubmittedCommand;
use App\Briefs\Commands\LogoBriefSubmittedCommand;
use App\Briefs\Commands\LogoImagesUploadedCommand;
use App\Briefs\Commands\LogoUploadsSubmittedCommand;
use App\Briefs\Commands\WebBriefSubmittedCommand;
use App\Commanding\CommandBus;
use App\Eventing\EventDispatcher;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\Requests\BriefsFormRequest;
use App\Services\ImageFileValidator;
use App\Services\ImageOrDocFileValidator;
use Illuminate\Http\Request;

class BriefsController extends Controller {

	/**
	 * @var CommandBus
	 */
	private $commandBus;
	/**
	 * @var ImageFileValidator
	 */
	private $imageFileValidator;
	/**
	 * @var ImageOrDocFileValidator
	 */
	private $imageOrDocFileValidator;
	/**
	 * @var EventDispatcher
	 */
	private $dispatcher;

	public function __construct(CommandBus $commandBus, ImageFileValidator $imageFileValidator, ImageOrDocFileValidator $imageOrDocFileValidator, EventDispatcher $dispatcher)
	{

		$this->commandBus = $commandBus;
		$this->imageFileValidator = $imageFileValidator;
		$this->imageOrDocFileValidator = $imageOrDocFileValidator;
		$this->dispatcher = $dispatcher;
	}
	public function postBriefs(BriefsFormRequest $request)
	{
		if(! $this->imageFileValidator->validate($request->file('logo_uploads')))
		{
			return redirect('/form')->withInput()->with('logoUploadErrors', $this->imageFileValidator->getMessages());
		}

		if(! $this->imageOrDocFileValidator->validate($request->file('brand_uploads')))
		{
			return redirect('/form')->withInput()->with('brandUploadErrors', $this->imageOrDocFileValidator->getMessages());
		}

		$generalBriefCommand = new GeneralBriefSubmittedCommand($request->only($request->generalFields));
		$generalBrief = $this->commandBus->execute($generalBriefCommand);

		if($request->has('logobriefchecked'))
		{
			$this->controlLogoBrief($request, $generalBrief->id);
		}

		if($request->has('brandbriefchecked'))
		{
			$this->controlBrandBrief($request, $generalBrief->id);
		}

		if($request->has('webbriefchecked'))
		{
			$this->controlWebBrief($request, $generalBrief->id);
		}
		$this->dispatcher->dispatch($generalBrief->releaseEvents());
		return redirect('thanks')->with('thanks_note', 'Thanks '.$generalBrief->contact_person.', we will be in touch soon!');
	}

	private function controlLogoBrief($request, $generalbrief_id)
	{
		$logoBriefCommand = new LogoBriefSubmittedCommand($generalbrief_id, $request->only($request->logoFields));
		$logoBrief = $this->commandBus->execute($logoBriefCommand);

		if($request->has('autologouploads')) {
			$logoUploadsCommand = new LogoImagesUploadedCommand($logoBrief->id, $request->get('autologouploads'));
			$this->commandBus->execute($logoUploadsCommand);
		}

		if($request->hasFile('logo_uploads'))
		{
			$logoSubmittedFilesCommand = new LogoUploadsSubmittedCommand($logoBrief->id, $request->file('logo_uploads'));
			$this->commandBus->execute($logoSubmittedFilesCommand);
		}
	}

	private function controlBrandBrief($request, $generalbrief_id)
	{
		$brandBriefCommand = new BrandBriefSubmittedCommand($generalbrief_id, $request->only($request->brandFields));
		$brandBrief = $this->commandBus->execute($brandBriefCommand);

		if($request->has('autobranduploads'))
		{
			$briefUploadsCommand = new BrandFilesUploadedCommand($brandBrief->id, $request->get('autobranduploads'));
			$this->commandBus->execute($briefUploadsCommand);
		}

		if($request->hasFile('brand_uploads')) {
			$brandUploadsCommand = new BrandUploadsSubmittedCommand($brandBrief->id, $request->file('brand_uploads'));
			$this->commandBus->execute($brandUploadsCommand);
		}
	}

	private function controlWebBrief($request, $generalbrief_id)
	{
		$webBriefCommand = new WebBriefSubmittedCommand($generalbrief_id, $request->only($request->webFields));
		$this->commandBus->execute($webBriefCommand);
	}

}
