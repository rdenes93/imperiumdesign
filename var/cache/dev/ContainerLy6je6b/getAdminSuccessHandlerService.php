<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'admin_success_handler' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Http/Authentication/AuthenticationSuccessHandlerInterface.php';
include_once $this->targetDirs[3].'/src/LandingBundle/Services/AuthenticationHandler.php';

return $this->services['admin_success_handler'] = new \LandingBundle\Services\AuthenticationHandler($this);
