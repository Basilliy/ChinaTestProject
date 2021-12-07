<?php

declare(strict_types=1);

namespace ChinaTestProject\Models\Tickets;

use ChinaTestProject\Models\Ticket;

class BusTicket extends Ticket
{
    public function __construct(string $from, string $to)
    {
        parent::__construct($from, $to);
    }

    /**
     * @return string
     */
    public function toString(): string
    {
        return "Take bus from {$this->from} to {$this->to}. No seat assignment. ";
    }
}