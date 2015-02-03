<?php

namespace Darsadow\HolidayCalendar\Tests\HolidaySpecification\GB;

use Darsadow\HolidayCalendar\HolidaySpecification\Saturday;

class SaturdayTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Saturday
     */
    protected $specification;

    public function setUp()
    {
        $this->specification = new Saturday();
    }

    public function testSaturday()
    {
        $date = new \DateTime('2015-05-16');
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
