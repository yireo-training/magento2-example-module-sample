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

namespace Yireo\ExampleModuleSample\Model\Product\Type;

use Magento\Catalog\Model\Product;
use Magento\Catalog\Model\Product\Type\AbstractType;

/**
 * Class Sample
 *
 * @package Yireo\ExampleModuleSample\Model\Product\Type
 */
class Sample extends AbstractType
{
    /**
     * Type code
     */
    const TYPE_CODE = 'sample';

    /**
     * @param Product $product
     */
    public function deleteTypeSpecificData(Product $product)
    {
        return;
    }

    /**
     * @param Product $product
     *
     * @return bool
     */
    public function isVirtual($product)
    {
        return true;
    }
}
