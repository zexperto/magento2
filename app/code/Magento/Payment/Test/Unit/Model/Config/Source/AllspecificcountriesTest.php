<?php
/**
 * Copyright © 2016 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Magento\Payment\Test\Unit\Model\Config\Source;

use \Magento\Payment\Model\Config\Source\Allspecificcountries;

class AllspecificcountriesTest extends \PHPUnit_Framework_TestCase
{
    public function testToOptionArray()
    {
        $expectedArray = [
            ['value' => 0, 'label' => __('All Allowed Countries')],
            ['value' => 1, 'label' => __('Specific Countries')],
        ];
        $model = new Allspecificcountries();
        $this->assertEquals($expectedArray, $model->toOptionArray());
    }
}
