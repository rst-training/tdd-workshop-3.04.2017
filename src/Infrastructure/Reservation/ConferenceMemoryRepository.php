<?php

namespace RstGroup\ConferenceSystem\Infrastructure\Reservation;

use RstGroup\ConferenceSystem\Domain\Reservation\Conference;
use RstGroup\ConferenceSystem\Domain\Reservation\ConferenceId;

class ConferenceMemoryRepository
{
    protected $conferences = [];

    public function add(Conference $conference)
    {
        $this->conferences[$conference->getId()->getId()] = $conference;
    }

    /**
     * @param ConferenceId $id
     * @return Conference
     */
    public function get(ConferenceId $id)
    {
        return $this->conferences[$id->getId()];
    }
}