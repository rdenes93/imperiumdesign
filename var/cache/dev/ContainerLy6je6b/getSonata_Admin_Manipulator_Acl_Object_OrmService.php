<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'sonata.admin.manipulator.acl.object.orm' shared service.

include_once $this->targetDirs[3].'/vendor/sonata-project/admin-bundle/src/Util/ObjectAclManipulatorInterface.php';
include_once $this->targetDirs[3].'/vendor/sonata-project/admin-bundle/src/Util/ObjectAclManipulator.php';
include_once $this->targetDirs[3].'/vendor/sonata-project/doctrine-orm-admin-bundle/src/Util/ObjectAclManipulator.php';

return $this->services['sonata.admin.manipulator.acl.object.orm'] = new \Sonata\DoctrineORMAdminBundle\Util\ObjectAclManipulator();
