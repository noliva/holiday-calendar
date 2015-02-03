<?php

namespace Darsadow\HolidayCalendar\Tests\HolidaySpecification\GB;

use Darsadow\HolidayCalendar\HolidaySpecification\GB\GoodFriday;

class GoodFridayTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var GoodFriday
     */
    protected $specification;

    public function setUp()
    {
        $this->specification = new GoodFriday();
    }

    public function testGoodFriday()
    {
        $date = new \DateTime('2015-04-03');
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
