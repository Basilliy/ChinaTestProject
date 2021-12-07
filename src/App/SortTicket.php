<?php

declare(strict_types=1);

namespace ChinaTestProject\App;

use ChinaTestProject\Models\Ticket;
use ChinaTestProject\Models\TicketList;

final class SortTicket
{
    /**
     * @param Ticket ...$tickets
     * @return TicketList
     */
    public static function execute(Ticket ...$tickets) : TicketList
    {
        $ticketList = new TicketList();

        $inLocations = [];
        $outLocationsPresence = [];

        foreach ($tickets as $ticket) {
            $inLocations[$ticket->getFrom()] = $ticket;
            $outLocationsPresence[$ticket->getTo()] = true;
        }

        foreach ($tickets as $ticket) {
            if (!isset($outLocationsPresence[$ticket->getFrom()])) {
                $ticketList->setTicket($ticket);
            }
            if (isset($inLocations[$ticket->getTo()])) {
                $ticket->setNext($inLocations[$ticket->getTo()]);
            }
        }

        return $ticketList;
    }
}