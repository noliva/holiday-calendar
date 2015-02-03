<?php

namespace Darsadow\HolidayCalendar\Tests\HolidaySpecification\GB;

use Darsadow\HolidayCalendar\HolidaySpecification\GB\ChristmasDay;

class ChristmasDayTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var ChristmasDay
     */
    protected $specification;

    public function setUp()
    {
        $this->specification = new ChristmasDay();
    }

    public function testChristmasDayDateWeekday()
    {
        $christmasDayDate = new \DateTime('2014-12-25');
        $result = $this->specification->isSatisfiedBy($christmasDayDate);

        $this->assertTrue($result);
    }

    public function testChristmasDayMonday()
    {
        $christmasDayDate = new \DateTime('2010-12-27');
        $result = $this->specification->isSatisfiedBy($christmasDayDate);

        $this->assertTrue($result);
    }
}
