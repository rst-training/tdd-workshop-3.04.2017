<?php

namespace RstGroup\ConferenceSystem\Domain\Payment;


use RstGroup\ConferenceSystem\Domain\Reservation\ConferenceId;
use RstGroup\ConferenceSystem\Domain\Reservation\Seat;

class PoolDiscountStrategy implements SeatDiscountStrategy
{
    private $conferenceId;
    private $discountPoolRepository;

    /**
     * @param ConferenceId $conferenceId
     * @param DiscountPoolRepository $discountPoolRepository
     */
    public function __construct(ConferenceId $conferenceId, DiscountPoolRepository $discountPoolRepository)
    {
        $this->conferenceId = $conferenceId;
        $this->discountPoolRepository = $discountPoolRepository;
    }

    /**
     * @param Seat $seat
     * @return int discount
     */
    public function calculate(Seat $seat)
    {
        $discountPerSeat = $this->discountPoolRepository->getDiscountPerSeat($this->conferenceId, $seat);
        $numberOfDiscounts = $this->discountPoolRepository->getNumberOfDiscounts($this->conferenceId, $seat);

        return $discountPerSeat * $numberOfDiscounts;
    }
}