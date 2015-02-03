<?php

namespace Darsadow\HolidayCalendar\Tests\HolidaySpecification\GB;

use Darsadow\HolidayCalendar\HolidaySpecification\GB\NewYearsDay;

class NewYearsDayTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var NewYearsDay
     */
    protected $specification;

    public function setUp()
    {
        $this->specification = new NewYearsDay();
    }

    public function testNewYearsDay()
    {
        $date = new \DateTime('2015-01-01');
        $result = $this->specification->isSatisfiedBy($date);

        $this->assertTrue($result);
    }

    public function testInvalidDate()
    {
        $date = new \DateTime('2015-05-15');
        $result = $this->specification->isSatisfiedBy($date);

        $this->assertFalse($result);
    }
}
