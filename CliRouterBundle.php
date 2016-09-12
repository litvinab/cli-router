<?php

namespace Litvinab\Bundle\CliRouterBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Litvinab\Bundle\CliRouterBundle\DependencyInjection\Compiler\RouterRequestContextPass;

class CliRouterBundle extends Bundle
{
    public function build(ContainerBuilder $container)
    {
        parent::build($container);

        $container->addCompilerPass(new RouterRequestContextPass());
    }
}
