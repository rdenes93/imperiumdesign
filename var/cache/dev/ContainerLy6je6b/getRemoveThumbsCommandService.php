<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'Sonata\MediaBundle\Command\RemoveThumbsCommand' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Console/Command/Command.php';
include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Command/ContainerAwareCommand.php';
include_once $this->targetDirs[3].'/vendor/sonata-project/media-bundle/src/Command/BaseCommand.php';
include_once $this->targetDirs[3].'/vendor/sonata-project/media-bundle/src/Command/RemoveThumbsCommand.php';

return $this->services['Sonata\MediaBundle\Command\RemoveThumbsCommand'] = new \Sonata\MediaBundle\Command\RemoveThumbsCommand();
