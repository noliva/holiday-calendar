<?php

namespace Darsadow\HolidayCalendar\Tests;

use Darsadow\HolidayCalendar\HolidayCalendar;
use Darsadow\HolidayCalendar\HolidaySpecification\GB\EasterMonday;
use Darsadow\HolidayCalendar\HolidaySpecification\GB\NewYearsDay;
use Darsadow\HolidayCalendar\HolidaySpecification\Saturday;
use Darsadow\HolidayCalendar\HolidaySpecification\Sunday;

class HolidayCalendarTest extends \PHPUnit_Framework_TestCase
{
    public function testAddingWorkingDays()
    {
        $calendar = new HolidayCalendar();
        $calendar->addHolidaySpecification(new NewYearsDay());
        $calendar->addHolidaySpecification(new Saturday());
        $calendar->addHolidaySpecification(new Sunday());
        $startDate = new \DateTime('2014-12-30');

        $endDate = $calendar->addWorkingDays($startDate, 5);

        $this->assertEquals('2015', $endDate->format('Y'));
        $this->assertEquals('01', $endDate->format('m'));
        $this->assertEquals('07', $endDate->format('d'));
    }

    public function testSubtractingWorkingDays()
    {
        $calendar = new HolidayCalendar();
        $calendar->addHolidaySpecification(new NewYearsDay());
        $calendar->addHolidaySpecification(new Saturday());
        $calendar->addHolidaySpecification(new Sunday());
        $startDate = new \DateTime('2015-01-07');

        $endDate = $calendar->subtractWorkingDays($startDate, 5);

        $this->assertEquals('2014', $endDate->format('Y'));
        $this->assertEquals('12', $endDate->format('m'));
        $this->assertEquals('30', $endDate->format('d'));
    }
}
