<?php

namespace Pim\Bundle\ResearchBundle;

use Pim\Bundle\ResearchBundle\Infrastructure\DI\Symfony\Compiler\RegisterTypePass;
use Pim\Bundle\ResearchBundle\Infrastructure\DI\Symfony\Extension\PimResearchExtension;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class PimResearchBundle extends Bundle
{

    /**
     * {@inheritdoc}
     */
    public function build(ContainerBuilder $container)
    {
        $container->addCompilerPass(new RegisterTypePass());
    }

    /**
     * {@inheritdoc}
     */
    public function getContainerExtension()
    {
        return new PimResearchExtension();
    }
}
