<?php

namespace RstGroup\ConferenceSystem\Domain\Payment;

use RstGroup\ConferenceSystem\Domain\Reservation\Seat;

interface SeatDiscountStrategy
{
    /**
     * @param $seat
     * @param $price
     * @param $discountedPrice
     * @return mixed discounted price
     */
    public function calculate(Seat $seat, $price, $discountedPrice);
}
