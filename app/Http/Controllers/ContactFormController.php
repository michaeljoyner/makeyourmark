<?php namespace App\Http\Controllers;

use App\Commanding\CommandBus;
use App\ContactMessages\MessageSentCommand;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\Requests\ContactMessageRequest;
use Illuminate\Http\Request;

class ContactFormController extends Controller {

	/**
	 * @var CommandBus
	 */
	private $commandBus;

	public function __construct(CommandBus $commandBus)
	{

		$this->commandBus = $commandBus;
	}

	public function receiveMessage(ContactMessageRequest $request)
	{
		$command = new MessageSentCommand($request->get('name'), $request->get('email'), $request->get('message'));
		$this->commandBus->execute($command);

		return response()->json("ok");
	}

}
