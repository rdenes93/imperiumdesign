<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'sonata.media.validator.format' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/ConstraintValidatorInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/ConstraintValidator.php';
include_once $this->targetDirs[3].'/vendor/sonata-project/media-bundle/src/Validator/FormatValidator.php';

return $this->services['sonata.media.validator.format'] = new \Sonata\MediaBundle\Validator\FormatValidator(${($_ = isset($this->services['sonata.media.pool']) ? $this->services['sonata.media.pool'] : $this->getSonata_Media_PoolService()) && false ?: '_'});
