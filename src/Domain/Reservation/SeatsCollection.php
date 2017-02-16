<?php

namespace RstGroup\ConferenceSystem\Domain\Reservation;

class SeatsCollection
{
    protected $seats = [];

    public function add(Seat $seat)
    {
        $this->seats[] = $seat;
    }

    /**
     * @return Seat[]
     */
    public function getAll()
    {
        return $this->seats;
    }

    /**
     * @param array $seats
     * @return SeatsCollection
     */
    public static function fromArray(array $seats)
    {
        $seatsCollection = new self();
        foreach ($seats as $seat) {
            $seatsCollection->add($seat);
        }

        return $seatsCollection;
    }
}