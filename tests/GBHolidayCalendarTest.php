<?php

namespace Darsadow\HolidayCalendar\Tests;

use Darsadow\HolidayCalendar\GBHolidayCalendar;
use Darsadow\HolidayCalendar\HolidayCalendar;

class GBHolidayCalendarTest extends \PHPUnit_Framework_TestCase
{
    public function testAddingWorkingDays()
    {
        $calendar = new GBHolidayCalendar();
        $startDate = new \DateTime('2014-12-30');

        $endDate = $calendar->addWorkingDays($startDate, 5);

        $this->assertEquals('2015', $endDate->format('Y'));
        $this->assertEquals('01', $endDate->format('m'));
        $this->assertEquals('07', $endDate->format('d'));
    }

    public function testAddingWorkingDaysDuringEaster()
    {
        $calendar = new GBHolidayCalendar();
        $startDate = new \DateTime('2015-04-03');

        $endDate = $calendar->addWorkingDays($startDate, 5);

        $this->assertEquals('2015', $endDate->format('Y'));
        $this->assertEquals('04', $endDate->format('m'));
        $this->assertEquals('13', $endDate->format('d'));
    }
}
