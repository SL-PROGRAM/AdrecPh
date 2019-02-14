<?php

namespace App\Service;

use Twig\Environment;

class AppMailer
{
    /**
     * @var \Swift_Mailer
     */
    private $swiftmailer;

    /**
     * @var Environment
     */
    private $twig;

    /**
     * AppMailer constructor.
     * @param \Swift_Mailer $swiftmailer
     * @param Environment $twig
     */
    public function __construct(\Swift_Mailer $swiftmailer, Environment $twig)
    {
        $this->swiftmailer = $swiftmailer;
        $this->twig = $twig;
    }

    public function send(
        string $subject,
        string $to,
        string $template,
        array $vars = []
    ) {
        $message = new \Swift_Message();
        $message->setSubject($subject);
        $message->setTo($to);
        $message->setFrom('foo@foo.fr');
        $message->setBody($this->twig->render($template, $vars), 'text/html');

        $this->swiftmailer->send($message);
    }
}