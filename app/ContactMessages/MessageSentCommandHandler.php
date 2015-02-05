<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2/1/2015
 * Time: 9:43 PM
 */

namespace App\ContactMessages;


use App\Commanding\CommandHandler;
use App\Mailers\AdminMailer;

class MessageSentCommandHandler implements CommandHandler {

    /**
     * @var AdminMailer
     */
    private $mailer;

    public function __construct(AdminMailer $mailer)
    {

        $this->mailer = $mailer;
    }
    /**
     * @param $command
     * @return mixed
     */
    public function handle($command)
    {
        $this->mailer->sendContactMessage($command);
    }
}