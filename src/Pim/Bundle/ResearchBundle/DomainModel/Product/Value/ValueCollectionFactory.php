<?php

declare(strict_types=1);

namespace Pim\Bundle\ResearchBundle\DomainModel\Product\Value;

use Pim\Bundle\ResearchBundle\DomainModel\Attribute\AttributeCode;
use Pim\Bundle\ResearchBundle\DomainModel\Channel\ChannelCode;
use Pim\Bundle\ResearchBundle\DomainModel\Locale\LocaleCode;

class ValueCollectionFactory
{
    //public function createFromStorageFormat(
    //    array $rawValues,
    //    array $attributeCodesToKeep,
    //    array $localeCodesToKeep,
    //    array $channelCodesToKeep
    //): ProductValueCollection {
    //    $values = new ProductValueCollection();
    //
    //    foreach ($rawValues as $attributeCode => $channelRawValue) {
    //        if (isset($attributeCodesToKeep[$attributeCode])) {
    //            foreach ($channelRawValue as $channelCode => $localeRawValue) {
    //                if ('<all_channels>' !== $channelCode && !isset($channelCodesToKeep[$channelCode])) {
    //                    continue;
    //                }
    //
    //                if ('<all_channels>' === $channelCode) {
    //                    $channelCode = null;
    //                }
    //
    //                foreach ($localeRawValue as $localeCode => $data) {
    //                    if ('<all_locales>' !== $localeCode && !isset($localeCodesToKeep[$localeCode])) {
    //                        continue;
    //                    }
    //
    //                    if ('<all_locales>' === $localeCode) {
    //                        $localeCode = null;
    //                    }
    //
    //                    $values->add(new ProductValue(
    //                        $attributeCodesToKeep[$attributeCode],
    //                        LocaleCode::createFromString($localeCode),
    //                        ChannelCode::createFromString($channelCode),
    //                        $data
    //                    ));
    //                }
    //            }
    //        }
    //    }
    //
    //    return $values;
    //}

    public function createFromStorageFormat(array $rawValues): ProductValueCollection {
        $values = new ProductValueCollection();

        foreach ($rawValues as $attributeCode => $channelRawValue) {
            foreach ($channelRawValue as $channelCode => $localeRawValue) {
                if ('<all_channels>' === $channelCode) {
                    $channelCode = null;
                }

                foreach ($localeRawValue as $localeCode => $data) {
                    if ('<all_locales>' === $localeCode) {
                        $localeCode = null;
                    }

                    $values->add(new ProductValue(
                        AttributeCode::createFromString((string) $attributeCode),
                        null !== $localeCode ? LocaleCode::createFromString((string) $localeCode) : null,
                        null !== $channelCode ? ChannelCode::createFromString((string) $channelCode) :null,
                        $data
                    ));
                }
            }
        }

        return $values;
    }
}
