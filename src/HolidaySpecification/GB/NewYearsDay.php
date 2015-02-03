<?php

namespace Darsadow\HolidayCalendar\HolidaySpecification\GB;

use Darsadow\HolidayCalendar\HolidaySpecification\Specification;

class NewYearsDay implements Specification
{
    /**
     * @param \DateTime $date
     * @return bool
     */
    public function isSatisfiedBy(\DatetIme $date)
    {
        return $date->format('m') === '01' && $date->format('d') === '01';
    }

}
