<?php

declare(strict_types=1);

namespace ChinaTestProject\Models;

abstract class Ticket
{
    protected string $from;
    protected string $to;
    private ?Ticket $next;

    /**
     * Card constructor.
     *
     * @param string $from
     * @param string $to
     */
    protected function __construct(string $from, string $to)
    {
        $this->from = $from;
        $this->to = $to;
        $this->next = null;
    }

    /**
     * @return string
     */
    public function getFrom(): string
    {
        return $this->from;
    }

    /**
     * @param string $from
     */
    public function setFrom(string $from): void
    {
        $this->from = $from;
    }

    /**
     * @return string
     */
    public function getTo(): string
    {
        return $this->to;
    }

    /**
     * @param string $to
     */
    public function setTo(string $to): void
    {
        $this->to = $to;
    }

    /**
     * @return Ticket
     */
    public function getNext(): ?Ticket
    {
        return $this->next;
    }

    /**
     * @param Ticket $next
     */
    public function setNext(Ticket $next): void
    {
        $this->next = &$next;
    }

    /**
     * @return string
     */
    public abstract function toString(): string;
}
