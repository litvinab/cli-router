<?php

namespace Litvinab\Bundle\CliRouterBundle\DependencyInjection\Compiler;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;

/**
 * Overrides the default host for the Router's RequestContext service.
 *
 * This is necessary for generating URL's from a console command context, as the
 * RouterListener never executes and initializes the RequestContext from a
 * Request.
 */
class RouterRequestContextPass implements CompilerPassInterface
{
    public function process(ContainerBuilder $container)
    {
        $appDomainKey = 'app.domain';

        if (false === $container->hasDefinition('router.request_context') || false === $container->hasParameter($appDomainKey)) {
            return;
        }

        $container
            ->getDefinition('router.request_context')
            ->replaceArgument(2, $container->getParameter($appDomainKey));
    }
}