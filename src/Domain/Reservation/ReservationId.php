<?php


namespace RstGroup\ConferenceSystem\Domain\Reservation;


class ReservationId
{
    protected $orderId;
    protected $conferenceId;

    public function __construct(ConferenceId $conferenceId, OrderId $orderId)
    {
        $this->orderId = $orderId;
        $this->conferenceId = $conferenceId;
    }

    public function getHashKey()
    {
        return "{$this->conferenceId->getId()}-{$this->orderId->getId()}";
    }
}