<?php

namespace RstGroup\ConferenceSystem\Domain\Payment;


use RstGroup\ConferenceSystem\Domain\Reservation\Seat;

class SeatsStrategyConfiguration
{
    /**
     * @param string $strategy
     * @param Seat $seat
     * @return bool
     */
    public function isEnabledForSeat($strategy, Seat $seat)
    {
        return false;
    }
}