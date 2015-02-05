<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2/1/2015
 * Time: 10:41 AM
 */

namespace App\Mailers;


class AdminMailer extends BaseMailer {

    protected $to = ['joyner.michael@gmail.com' =>'Michael Joyner'];

    public function sendLogoBriefNotification($logoBrief, $generalBrief)
    {
        $subject = 'New Logo Brief';
        $view = 'emails.briefs.admin.logo';
        $files = $this->getLogoFiles($logoBrief);
        $this->sendTo($this->to, $generalBrief->email, $subject, $view, compact('logoBrief', 'generalBrief', 'files'), $files);
    }

    public function sendBrandBriefNotification($brandBrief, $generalBrief)
    {
        $subject = 'New Branding Brief';
        $view = 'emails.briefs.admin.brand';
        $imageFiles = $this->getBrandImageFiles($brandBrief);
        $docFiles = $this->getBrandDocFiles($brandBrief);
        $this->sendTo($this->to, $generalBrief->email, $subject, $view, compact('brandBrief', 'generalBrief', 'imageFiles', 'docFiles'), array_merge($imageFiles, $docFiles));
    }

    public function sendWebBriefNotification($webBrief, $generalBrief)
    {
        $subject = 'New Website Brief';
        $view = 'emails.briefs.admin.web';
        $this->sendTo($this->to, $generalBrief->email, $subject, $view, compact('webBrief', 'generalBrief'));
    }

    public function sendContactMessage($messageObject)
    {
        $subject = "MYM Site Message";
        $view = "emails.admin.contact";
        $data = [
            'sender' => $messageObject->sender_name,
            'email' => $messageObject->sender_email,
            'msg_body' => $messageObject->message_body
        ];
        $this->sendTo($this->to, [$messageObject->sender_email => $messageObject->sender_name], $subject, $view, compact('data'));
    }


    private function getLogoFiles($logoBrief)
    {
        $files = $logoBrief->images()->get()->map(function ($file)
        {
            return public_path() . '/' . $file->filepath;
        })->toArray();
        return $files;
    }

    private function getBrandImageFiles($printBrief)
    {
        $files = $printBrief->images()->get()->map(function ($file)
        {
            return public_path() . '/' . $file->filepath;
        })->toArray();
        return $files;
    }

    private function getBrandDocFiles($brandBrief)
    {
        $files = $brandBrief->docs()->get()->map(function ($file)
        {
            return public_path() . '/' . $file->filepath;
        })->toArray();
        return $files;
    }

}