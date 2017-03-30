<?php

namespace RstGroup\ConferenceSystem\Domain\Payment;


use RstGroup\ConferenceSystem\Domain\Reservation\ConferenceId;
use RstGroup\ConferenceSystem\Domain\Reservation\Seat;

class PoolDiscountStrategy implements SeatDiscountStrategy
{
    private $conferenceId;

    /**
     * @param ConferenceId $conferenceId
     */
    public function __construct(ConferenceId $conferenceId)
    {
        $this->conferenceId = $conferenceId;
    }

    /**
     * @param Seat $seat
     * @return int discount
     */
    public function calculate(Seat $seat)
    {
        return 0;
    }
}