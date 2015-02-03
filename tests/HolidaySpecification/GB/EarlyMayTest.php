<?php

namespace Darsadow\HolidayCalendar\Tests\HolidaySpecification\GB;

use Darsadow\HolidayCalendar\HolidaySpecification\GB\EarlyMay;

class EarlyMayTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var EarlyMay
     */
    protected $specification;

    public function setUp()
    {
        $this->specification = new EarlyMay();
    }

    public function testFirstMondayOfMay()
    {
        $date = new \DateTime('2015-05-04');
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
