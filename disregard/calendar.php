<?php


function build_calendar($month, $year)
{
    //days in week
    $daysOfWeek = array('Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday');
    //first day of the month
    $firstDayOfMonth = mktime(0, 0, 0, $month, 1, $year);
    //number of days in month
    $numberOfDays = date('t', $firstDayOfMonth);
    //first day of this month
    $dateComponents = getdate($firstDayOfMonth);
    //get name of the month
    $monthName = $dateComponents['month'];
    //get index value 0-6 of the first days of this month
    $dayOfWeek = $dateComponents['wday'];
    //get current date
    $dateToday = date("Y-m-d");
    //HTML table
    $calendar = "<table class='table table-bordered'>";
    $calendar .= "<center><h2>$monthName $year</h2></center>";

    $calendar .= "<tr>";

    //calendar headers
    foreach ($daysOfWeek as $day) {
        $calendar .= "<th class='header'>$day</th>";
    }

    $calendar .= "</tr><tr>";

    //variable $dayOfWeek makes sure that there's only 7 columns in the table

    if ($dayOfWeek > 0) {
        for ($k = 0; $k < $dayOfWeek; $k++) {
            $calendar .= "<td></td>";
        }
    }

    //day counter initiation
    $currentDay = 1;

    //getting month number

    $month = str_pad($month, 2, "0", STR_PAD_LEFT);

    while ($currentDay <= $numberOfDays) {

        if ($dayOfWeek == 7) {
            $dayOfWeek = 0;
            $calendar .= "</tr><tr>";
        }

        $currentDayRel = str_pad($month, 2, "0", STR_PAD_LEFT);
        $date = "$year-$month-$currentDayRel";

        if($dateToday == $date) {
            $calendar .= "<td class='today'><h4>$currentDay</h4>";
        } else {
            $calendar .= "<td><h4>$currentDay</h4>";
        }

        $calendar .= "</td>";

        //increment counters
        $currentDay++;
        $dayOfWeek++;
    }

    //completing row of last week in month, if necessary

    if ($dayOfWeek != 7) {

        $remainingDays = 7 - $dayOfWeek;

        for ($i = 0; $i < $remainingDays; $i++) {
            $calendar .= "<td></td>";
        }
    }

    $calendar .= "</tr>";
    $calendar .= "</table>";

    echo $calendar;

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Appointment</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css" type="text/css">
    <style>
        table {
            table-layout: fixed;
        }

        td {
            width: 33%;
        }

        .today {
            background: red;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php
                    $dateComponents = getDate();
                    $month = $dateComponents['mon'];
                    $year = $dateComponents['year'];
                    echo build_calendar($month, $year);
                ?>
            </div>
        </div>
    </div>
</body>
</html>