<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sonata.block.exception.filter.keep_all' shared service.

include_once $this->targetDirs[3].'/vendor/sonata-project/block-bundle/src/Exception/Filter/FilterInterface.php';
include_once $this->targetDirs[3].'/vendor/sonata-project/block-bundle/src/Exception/Filter/KeepAllFilter.php';

return $this->services['sonata.block.exception.filter.keep_all'] = new \Sonata\BlockBundle\Exception\Filter\KeepAllFilter();
