<?php

namespace RstGroup\ConferenceSystem\Domain\Payment\Test;

use RstGroup\ConferenceSystem\Domain\Payment\Currency;
use RstGroup\ConferenceSystem\Domain\Payment\Money;
use RstGroup\ConferenceSystem\Domain\Payment\PoolDiscountStrategy;
use RstGroup\ConferenceSystem\Domain\Reservation\ConferenceId;
use RstGroup\ConferenceSystem\Domain\Reservation\Seat;

class PoolDiscountStrategyTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function returns_discount_equal_to_zero_if_discount_pool_is_empty()
    {
        $seatQuantity = 50;
        $conferenceId = new ConferenceId(7);
        $poolDiscountStrategy = new PoolDiscountStrategy($conferenceId);
        $seat = new Seat("Regular", $seatQuantity);

        $discount = $poolDiscountStrategy->calculate($seat);

        $expectedDiscount = 0;
        $this->assertSame($expectedDiscount, $discount);
    }
}
