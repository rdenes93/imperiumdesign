<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'sonata.media.metadata.noop' shared service.

include_once $this->targetDirs[3].'/vendor/sonata-project/media-bundle/src/Metadata/NoopMetadataBuilder.php';

return $this->services['sonata.media.metadata.noop'] = new \Sonata\MediaBundle\Metadata\NoopMetadataBuilder();
