<?php

declare(strict_types=1);

namespace Test;

use PHPUnit\Framework\TestCase;
use ChinaTestProject\App\SortTicket;
use ChinaTestProject\Models\Tickets\PlainTicket;
use ChinaTestProject\Models\Tickets\BusTicket;
use ChinaTestProject\Models\Tickets\TrainTicket;

class SortTicketTest extends TestCase
{
    public function testCorrectSort() {

        $expected = "Take a place: 11, on flight OR11 from Odessa to Lviv. Gate 1A.Take train 14 from Lviv to Kiev. Take a place 32.Take train 14 from Kiev to Kharkiv. Take a place 32.Take bus from Kharkiv to Nilolaev. No seat assignment. ";

        $sorted = SortTicket::execute(
            new PlainTicket("Odessa", "Lviv", "OR11", "11", "1A"),
            new BusTicket("Kharkiv", "Nilolaev"),
            new TrainTicket("Kiev", "Kharkiv", "14", "32"),
            new TrainTicket("Lviv", "Kiev", "14", "32")
        );

        $this->assertEquals($expected, $sorted->toString());
    }

    public function testEmptySort()
    {
        $expected = "List is empty.";
        $sorted = SortTicket::execute();

        $this->assertEquals($expected, $sorted->toString());
    }

    public function testLoopSort()
    {
        $expected = "List is empty.";
        $sorted = SortTicket::execute(
            new PlainTicket("Odessa", "Lviv", "OR11", "11", "1A"),
            new TrainTicket("Kiev", "Kharkiv", "14", "32"),
            new TrainTicket("Lviv", "Kiev", "14", "32"),
            new BusTicket("Kharkiv", "Odessa"),
        );

        $this->assertEquals($expected, $sorted->toString());
    }
}
