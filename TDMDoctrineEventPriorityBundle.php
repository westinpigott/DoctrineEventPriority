<?php

namespace TDM\DoctrineEventPriorityBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Compiler\PassConfig;
use TDM\DoctrineEventPriorityBundle\DependencyInjection\CompilerPass\OverrideServiceCompilerPass;

class TDMDoctrineEventPriorityBundle extends Bundle {

    public function build(ContainerBuilder $container) {
        parent::build($container);
        $container->addCompilerPass(new OverrideServiceCompilerPass(), PassConfig::TYPE_AFTER_REMOVING);
    }

}
