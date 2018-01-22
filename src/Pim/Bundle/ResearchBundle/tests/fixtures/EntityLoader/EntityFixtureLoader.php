<?php

declare(strict_types=1);

namespace Pim\Bundle\ResearchBundle\tests\fixtures\EntityLoader;

interface EntityFixtureLoader
{
    public function load($entity): void;
}
