<?php

declare(strict_types=1);

namespace Pim\Bundle\ResearchBundle\DomainModel\Family;

class Family
{
    /** @var FamilyId */
    private $id;

    /** @var FamilyCode */
    private $code;

    /** @var \DateTimeInterface */
    private $created;

    /** @var \DateTimeInterface */
    private $updated;

    public function __construct(
        FamilyId $id,
        FamilyCode $code,
        \DateTimeInterface $created,
        ?\DateTimeInterface $updated
    ) {
        $this->id = $id;
        $this->code = $code;
        $this->created = $created;
        $this->updated = $updated;
    }

    public function id(): FamilyId
    {
        return $this->id;
    }

    public function code(): FamilyCode
    {
        return $this->code;
    }

    public function created(): \DateTimeInterface
    {
        return $this->created;
    }

    public function updated(): ?\DateTimeInterface
    {
        return $this->updated;
    }
}
