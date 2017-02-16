<?php

namespace RstGroup\ConferenceSystem\Domain\Reservation;

class Seat
{
    private $type;
    private $quantity;

    /**
     * Seat constructor.
     * @param $type
     * @param $quantity
     */
    public function __construct($type, $quantity)
    {
        $this->type = $type;

        if (!is_int($quantity) || $quantity < 0) {
            throw new \InvalidArgumentException('Quantity should not be negative');
        }

        $this->quantity = $quantity;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @return mixed
     */
    public function getQuantity()
    {
        return $this->quantity;
    }
}