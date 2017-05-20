<?php
/**
* TestModuleSample plugin for Magento
*
* @package     Yireo_TestModuleSample
* @author      Yireo (https://www.yireo.com/)
* @copyright   Copyright 2017 Yireo (https://www.yireo.com/)
* @license     Open Source License (OSL v3)
*/

namespace Yireo\TestModuleSample\Model\Product\Type;

use Magento\Catalog\Model\Product\Type\AbstractType;

/**
 * Class Sample
 *
 * @package Yireo\TestModuleSample\Model\Product\Type
 */
class Sample extends AbstractType
{
    /**
     * Type code
     */
    const TYPE_CODE = 'sample';

    /**
     * @param \Magento\Catalog\Model\Product $product
     */
    public function deleteTypeSpecificData(\Magento\Catalog\Model\Product $product)
    {
        return;
    }

    /**
     * @param \Magento\Catalog\Model\Product $product
     *
     * @return bool
     */
    public function isVirtual($product)
    {
        return true;
    }
}