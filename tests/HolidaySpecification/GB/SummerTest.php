<?php

namespace Darsadow\HolidayCalendar\Tests\HolidaySpecification\GB;

use Darsadow\HolidayCalendar\HolidaySpecification\GB\Summer;

class SummerTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Summer
     */
    protected $specification;

    public function setUp()
    {
        $this->specification = new Summer();
    }

    public function testSummer()
    {
        $date = new \DateTime('2015-08-31');
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
