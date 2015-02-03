<?php

namespace Darsadow\HolidayCalendar\Tests\HolidaySpecification\GB;

use Darsadow\HolidayCalendar\HolidaySpecification\GB\EasterMonday;

class EasterMondayTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var EasterMonday
     */
    protected $specification;

    public function setUp()
    {
        $this->specification = new EasterMonday();
    }

    public function testEasterMonday()
    {
        $date = new \DateTime('2015-04-06');
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
