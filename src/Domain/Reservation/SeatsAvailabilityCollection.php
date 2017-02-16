<?php


namespace RstGroup\ConferenceSystem\Domain\Reservation;


class SeatsAvailabilityCollection
{
    protected $seats = [];

    public function set($type, $quantity)
    {
        $this->seats[$type] = $quantity;
    }

    public function getQuantity($type)
    {
        return $this->seats[$type];
    }

    public function decrementQuantity($type, $quantity)
    {
        $this->seats[$type] -= $quantity;
    }

    public function incrementQuantity($type, $quantity)
    {
        $this->seats[$type] += $quantity;
    }

    /**
     * @param Seat[] $seats
     * @return SeatsCollection
     */
    public static function fromArray(array $seats)
    {
        $seatsCollection = new self();
        foreach ($seats as $seat) {
            $seatsCollection->set($seat->getType(), $seat->getQuantity());
        }

        return $seatsCollection;
    }
}