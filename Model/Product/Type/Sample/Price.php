<?php
/**
 * ExampleModuleSample plugin for Magento
 *
 * @package     Yireo_ExampleModuleSample
 * @author      Yireo (https://www.yireo.com/)
 * @copyright   Copyright 2017 Yireo (https://www.yireo.com/)
 * @license     Open Source License (OSL v3)
 */
declare(strict_types=1);

namespace Yireo\ExampleModuleSample\Model\Product\Type\Sample;

use Magento\Catalog\Model\Product;
use Magento\Catalog\Model\Product\Type\Price as ProductPrice;

/**
 * Class Price
 *
 * @package Yireo\ExampleModuleSample\Model\Product\Type\Sample
 */
class Price extends ProductPrice
{
    /**
     * @param Product $product
     *
     * @return float
     */
    public function getPrice($product)
    {
        $normalPrice = parent::getPrice($product);
        if ($product->getData('discount') > 0) {
            return $normalPrice - $product->getDiscount();
        }

        return $normalPrice;
    }
}
