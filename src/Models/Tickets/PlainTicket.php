<?php

declare(strict_types=1);

namespace ChinaTestProject\Models\Tickets;

use ChinaTestProject\Models\Ticket;

class PlainTicket extends Ticket
{
    private string $number;
    private string $place;
    private string $gate;

    /**
     * AirlineCard constructor.
     *
     * @param string $from
     * @param string $to
     * @param string $number
     * @param string $place
     * @param string $gate
     */
    public function __construct(string $from, string $to, string $number, string $place, string $gate)
    {
        parent::__construct($from, $to);
        $this->number = $number;
        $this->place = $place;
        $this->gate = $gate;
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

    /**
     * @return string
     */
    public function getGate(): string
    {
        return $this->gate;
    }

    /**
     * @param string $gate
     */
    public function setGate(string $gate): void
    {
        $this->gate = $gate;
    }

    /**
     * @return string
     */
    public function toString(): string
    {
        return "Take a place: {$this->place}, on flight {$this->number} from {$this->from} to {$this->to}. Gate {$this->gate}.";
    }
}
