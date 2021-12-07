<?php

declare(strict_types=1);

namespace ChinaTestProject\Models\Tickets;

use ChinaTestProject\Models\Ticket;

class TrainTicket extends Ticket
{
    private string $number;
    private string $place;

    /**
     * TrainTicket constructor.
     * @param string $from
     * @param string $to
     * @param string $number
     * @param string $place
     */
    public function __construct(string $from, string $to, string $number, string $place)
    {
        parent::__construct($from, $to);
        $this->number = $number;
        $this->place = $place;
    }

    /**
     * @return string
     */
    public function toString(): string
    {
        return "Take train {$this->number} from {$this->from} to {$this->to}. Take a place {$this->place}.";
    }

    /**
     * @return string
     */
    public function getNumber(): string
    {
        return $this->number;
    }

    /**
     * @param string $number
     */
    public function setNumber(string $number): void
    {
        $this->number = $number;
    }

    /**
     * @return string
     */
    public function getPlace(): string
    {
        return $this->place;
    }

    /**
     * @param string $place
     */
    public function setPlace(string $place): void
    {
        $this->place = $place;
    }
}
