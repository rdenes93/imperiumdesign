<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'sonata.user.form.type.security_roles' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/FormTypeInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/AbstractType.php';
include_once $this->targetDirs[3].'/vendor/sonata-project/user-bundle/src/Form/Type/SecurityRolesType.php';

return $this->services['sonata.user.form.type.security_roles'] = new \Sonata\UserBundle\Form\Type\SecurityRolesType(${($_ = isset($this->services['sonata.user.editable_role_builder']) ? $this->services['sonata.user.editable_role_builder'] : $this->load('getSonata_User_EditableRoleBuilderService.php')) && false ?: '_'});
