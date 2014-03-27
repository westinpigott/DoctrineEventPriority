<?php

namespace TDM\DoctrineEventPriorityBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use TDM\DoctrineEventPriorityBundle\DependencyInjection\CompilerPass\OverrideServiceCompilerPass;

class TDMDoctrineEventPriorityBundle extends Bundle {

    public function build(ContainerBuilder $container) {
        parent::build($container);
        $container->addCompilerPass(new OverrideServiceCompilerPass(), PassConfig::TYPE_AFTER_REMOVING);
    }

}
