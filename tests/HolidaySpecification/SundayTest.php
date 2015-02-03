<?php

namespace Darsadow\HolidayCalendar\Tests\HolidaySpecification\GB;

use Darsadow\HolidayCalendar\HolidaySpecification\Sunday;

class SundayTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Sunday
     */
    protected $specification;

    public function setUp()
    {
        $this->specification = new Sunday();
    }

    public function testSunday()
    {
        $date = new \DateTime('2015-05-17');
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
