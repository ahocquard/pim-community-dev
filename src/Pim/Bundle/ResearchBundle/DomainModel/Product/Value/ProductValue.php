<?php

declare(strict_types=1);

namespace Pim\Bundle\ResearchBundle\DomainModel\Product\Value;

use Pim\Bundle\ResearchBundle\DomainModel\Attribute\Attribute;
use Pim\Bundle\ResearchBundle\DomainModel\Attribute\AttributeCode;
use Pim\Bundle\ResearchBundle\DomainModel\Channel\ChannelCode;
use Pim\Bundle\ResearchBundle\DomainModel\Locale\LocaleCode;

/**
 * @author    Alexandre Hocquard <alexandre.hocquard@akeneo.com>
 * @copyright 2018 Akeneo SAS (http://www.akeneo.com)
 * @license   http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
class ProductValue
{
    /** @var AttributeCode */
    private $attributeCode;

    /** @var ChannelCode */
    private $channelCode;

    /** @var LocaleCode */
    private $localeCode;

    /** @var mixed */
    private $data;

    public function __construct(AttributeCode $attributeCode, ?LocaleCode $localeCode, ?ChannelCode $channelCode, $data)
    {
        $this->attributeCode = $attributeCode;
        $this->channelCode = $channelCode;
        $this->localeCode = $localeCode;
        $this->data = $data;
    }

    public function attributeCode(): AttributeCode
    {
        return $this->attributeCode;
    }

    public function localeCode(): ?LocaleCode
    {
        return $this->localeCode;
    }

    public function channelCode(): ?ChannelCode
    {
        return $this->channelCode;
    }

    public function data()
    {
        return $this->data;
    }
}
