<?php

namespace Darsadow\HolidayCalendar\Tests\HolidaySpecification\GB;

use Darsadow\HolidayCalendar\HolidaySpecification\GB\BoxingDay;

class BoxingDayTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var BoxingDay
     */
    protected $specification;

    public function setUp()
    {
        $this->specification = new BoxingDay();
    }

    public function testBoxingDayDateWeekday()
    {
        $boxingDayDate = new \DateTime('2014-12-26');
        $result = $this->specification->isSatisfiedBy($boxingDayDate);

        $this->assertTrue($result);
    }

    public function testBoxingDayTuesday()
    {
        $boxingDayDate = new \DateTime('2010-12-28');
        $result = $this->specification->isSatisfiedBy($boxingDayDate);

        $this->assertTrue($result);
    }
}
