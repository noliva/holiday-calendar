<?php

namespace Darsadow\HolidayCalendar\Tests\HolidaySpecification\GB;

use Darsadow\HolidayCalendar\HolidaySpecification\GB\Spring;

class SpringTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Spring
     */
    protected $specification;

    public function setUp()
    {
        $this->specification = new Spring();
    }

    public function testSpring()
    {
        $date = new \DateTime('2015-05-25');
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
