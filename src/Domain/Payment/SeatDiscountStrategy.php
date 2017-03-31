<?php

namespace RstGroup\ConferenceSystem\Domain\Payment;

use RstGroup\ConferenceSystem\Domain\Reservation\Seat;

interface SeatDiscountStrategy
{
    /**
     * @param Seat $seat
     * @return int discounted price
     */
    public function calculate(Seat $seat);
}
