<?php

namespace TDM\DoctrineEventPriorityBundle\DependencyInjection\CompilerPass;

use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Definition;
use Symfony\Component\DependencyInjection\Reference;
use Symfony\Component\DependencyInjection\Exception\InvalidArgumentException;

/**
 * Description of OverrideServiceCompilerPass
 *
 * @author wpigott
 */
class OverrideServiceCompilerPass implements CompilerPassInterface {

    public function process(ContainerBuilder $container) {
        $container->setParameter('doctrine_mongodb.odm.event_manager.class', 'TDM\DoctrineEventPriorityBundle\Model\PriorityAwareEventManager');
    }

}
