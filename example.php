<?php

declare(strict_types=1);

use ChinaTestProject\App\SortTicket;
use ChinaTestProject\Models\Tickets\PlainTicket;
use ChinaTestProject\Models\Tickets\BusTicket;
use ChinaTestProject\Models\Tickets\TrainTicket;

require __DIR__ . "/vendor/autoload.php";

$sort = SortTicket::execute(
    new PlainTicket("Odessa", "Lviv", "OR11", "11", "1A"),
    new BusTicket("Kharkiv", "Nilolaev"),
    new TrainTicket("Kiev", "Kharkiv", "14", "32"),
    new TrainTicket("Lviv", "Kiev", "14", "32")
);
$sort->show();

echo 'You have finish to your tour!';