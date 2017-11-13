<?php

namespace Pim\Bundle\ResearchBundle;

use Pim\Bundle\ResearchBundle\Infrastructure\DI\Symfony\PimResearchExtension;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class PimResearchBundle extends Bundle
{
    /**
     * {@inheritdoc}
     */
    public function getContainerExtension()
    {
        return new PimResearchExtension();
    }
}
