<?php


namespace RstGroup\ConferenceSystem\Domain\Reservation;


class OrderId
{
    protected $id;

    public function __construct($id)
    {
        $this->id = $id;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
}