<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'liip_imagine.extension_guesser' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/http-foundation/File/MimeType/ExtensionGuesserInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/http-foundation/File/MimeType/ExtensionGuesser.php';

return $this->privates['liip_imagine.extension_guesser'] = \Symfony\Component\HttpFoundation\File\MimeType\ExtensionGuesser::getInstance();