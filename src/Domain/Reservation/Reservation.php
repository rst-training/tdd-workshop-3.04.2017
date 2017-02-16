<?php


namespace RstGroup\ConferenceSystem\Domain\Reservation;


class Reservation
{
    protected $reservationId;
    protected $seats;

    public function __construct(ReservationId $reservationId, SeatsCollection $seats)
    {
        $this->reservationId = $reservationId;
        $this->seats = $seats;
    }

    /**
     * @return ReservationId
     */
    public function getReservationId()
    {
        return $this->reservationId;
    }

    /**
     * @return SeatsCollection
     */
    public function getSeats()
    {
        return $this->seats;
    }
}