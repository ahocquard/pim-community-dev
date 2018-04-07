<?php

declare(strict_types=1);

namespace Pim\Bundle\ResearchBundle\DomainModel\Product\Association;

class AssociationType
{
    /** @var string */
    private $value;

    private function __construct(string $value)
    {
        $this->value = $value;
    }

    public static function createFromString(string $value): self
    {
        return new self($value);
    }

    public function getValue(): string
    {
        return $this->value;
    }
}
