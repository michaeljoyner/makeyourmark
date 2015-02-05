<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2/1/2015
 * Time: 10:50 AM
 */

namespace App\Listeners;


use App\Eventing\EventListener;
use App\Mailers\AdminMailer;

class AdminEmailNotifier extends EventListener {

    /**
     * @var AdminMailer
     */
    private $mailer;

    public function __construct(AdminMailer $mailer)
    {

        $this->mailer = $mailer;
    }

    public function whenGeneralBriefWasSubmitted($event)
    {
        $generalBrief = $event->generalbrief;
        $logoBrief = $generalBrief->logoBriefs()->first();
        $brandBrief = $generalBrief->brandBriefs()->first();
        $webBrief = $generalBrief->webBriefs()->first();
        if($logoBrief)
        {
            $this->mailer->sendLogoBriefNotification($logoBrief, $generalBrief);
        }

        if($brandBrief)
        {
            $this->mailer->sendBrandBriefNotification($brandBrief, $generalBrief);
        }

        if($webBrief)
        {
            $this->mailer->sendWebBriefNotification($webBrief, $generalBrief);
        }
    }

}