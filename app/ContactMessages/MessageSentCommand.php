<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2/1/2015
 * Time: 9:41 PM
 */

namespace App\ContactMessages;


class MessageSentCommand {

    public $sender_name;
    public $sender_email;
    public $message_body;

    function __construct($sender_name, $sender_email, $message_body)
    {
        $this->sender_name = $sender_name;
        $this->sender_email = $sender_email;
        $this->message_body = $message_body;
    }


}