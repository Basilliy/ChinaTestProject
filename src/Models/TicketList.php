<?php

declare(strict_types=1);

namespace ChinaTestProject\Models;

final class TicketList
{
    private ?Ticket $ticket = null;

    /**
     * @return Ticket|null
     */
    public function getTicket(): ?Ticket
    {
        return $this->ticket;
    }

    /**
     * @param Ticket|null $ticket
     */
    public function setTicket(?Ticket $ticket): void
    {
        $this->ticket = &$ticket;
    }

    /**
     * @return string
     */
    public function toString(): string
    {
        $ticket = $this->getTicket();

        if (!$ticket) {
            return "List is empty.";
        }

        $result = $ticket->toString();

        while ($ticket = $ticket->getNext()) {
            $result .= $ticket->toString();
        }

        return $result;
    }

    public function show(): void
    {
        echo $this->toString();
    }
}
