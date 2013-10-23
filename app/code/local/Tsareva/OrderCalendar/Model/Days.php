<?php

/**
 * @category    Tsareva
 * @package     Tsareva_OrderCalendar
 * @author      Tsareva Alena <tsareva.as@gmail.com>
 */
class Tsareva_OrderCalendar_Model_Days
{

    public function toOptionArray()
    {
        $lengthName = array(
            array(
                'label' => 'Abbreviation',
                'value' => 'abbreviated',
            ),
            array(
                'label' => 'Narrow',
                'value' => 'narrow',
            ),
            array(
                'label' => 'Wide',
                'value' => 'wide',
            ),
        );

        return $lengthName;
    }

}
