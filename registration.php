<?php
/**
 * TestModuleSample module for Magento
 *
 * @package     Yireo_TestModuleSample
 * @author      Yireo (https://www.yireo.com/)
 * @copyright   Copyright 2017 Yireo (https://www.yireo.com/)
 * @license     OSL
 */

use Magento\Framework\Component\ComponentRegistrar;

ComponentRegistrar::register(
    ComponentRegistrar::MODULE,
    'Yireo_TestModuleSample',
    __DIR__
);
