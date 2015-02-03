<?php

namespace Darsadow\HolidayCalendar;

use Darsadow\HolidayCalendar\HolidayCalendar;
use Darsadow\HolidayCalendar\HolidaySpecification\GB\BoxingDay;
use Darsadow\HolidayCalendar\HolidaySpecification\GB\ChristmasDay;
use Darsadow\HolidayCalendar\HolidaySpecification\GB\EarlyMay;
use Darsadow\HolidayCalendar\HolidaySpecification\GB\EasterMonday;
use Darsadow\HolidayCalendar\HolidaySpecification\GB\GoodFriday;
use Darsadow\HolidayCalendar\HolidaySpecification\GB\NewYearsDay;
use Darsadow\HolidayCalendar\HolidaySpecification\GB\Spring;
use Darsadow\HolidayCalendar\HolidaySpecification\GB\Summer;
use Darsadow\HolidayCalendar\HolidaySpecification\Saturday;
use Darsadow\HolidayCalendar\HolidaySpecification\Sunday;

class GBHolidayCalendar extends HolidayCalendar
{
    public function __construct()
    {
        $this->addHolidaySpecification(new Saturday());
        $this->addHolidaySpecification(new Sunday());
        $this->addHolidaySpecification(new NewYearsDay());
        $this->addHolidaySpecification(new GoodFriday());
        $this->addHolidaySpecification(new EasterMonday());
        $this->addHolidaySpecification(new EarlyMay());
        $this->addHolidaySpecification(new Spring());
        $this->addHolidaySpecification(new Summer());
        $this->addHolidaySpecification(new BoxingDay());
        $this->addHolidaySpecification(new ChristmasDay());
    }
}
