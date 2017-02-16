<?php


namespace RstGroup\ConferenceSystem\Domain\Reservation;


class ReservationsCollection
{
    protected $reservations = [];

    public function add(Reservation $reservation)
    {
        $this->reservations[$reservation->getReservationId()->getHashKey()] = $reservation;
    }

    public function has(ReservationId $reservationId)
    {
        return array_key_exists($reservationId->getHashKey(), $this->reservations);
    }

    public function remove(ReservationId $reservationId)
    {
        unset($this->reservations[$reservationId->getHashKey()]);
    }

    /**
     * @return Reservation
     */
    public function get(ReservationId $reservationId)
    {
        return $this->reservations[$reservationId->getHashKey()];
    }


    /**
     * @return Reservation[]
     */
    public function getAll()
    {
        return $this->reservations;
    }

    /**
     * @param array $seats
     * @return ReservationsCollection
     */
    public static function fromArray(array $reservations)
    {
        $reservationsCollection = new self();
        foreach ($reservations as $reservation) {
            $reservationsCollection->add($reservation);
        }

        return $reservationsCollection;
    }
}