<?php

namespace RstGroup\ConferenceSystem\Infrastructure\Reservation;

class ConferenceSeatsDao
{
    protected $connection;

    public function __construct($config)
    {
        $this->connection = new \PDO($config['dns'], $config['username'], $config['password'], $config['options']);
    }

    /**
     * @param $conferenceId
     * @return SeatPrice[]
     */
    public function getSeatsPrices($conferenceId)
    {
        $sth = $this->connection->prepare("SELECT seat_type, price FROM conference_seats WHERE conference_id = :conference_id");
        $sth->bindParam(':conference_id', $conferenceId, \PDO::PARAM_INT);
        $sth->execute();

        return $sth->fetchAll(\PDO::FETCH_COLUMN|\PDO::FETCH_GROUP);
    }
}