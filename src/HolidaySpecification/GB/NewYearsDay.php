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
        $newYearsDate = new \DateTime($date->format('Y') . '-01-01');

        if ($newYearsDate->format('N') === '6') {
            $newYearsDate->modify('+2 days');
        }

        if ($newYearsDate->format('N') === '7') {
            $newYearsDate->modify('+1 days');
        }

        return $date->format('m') === $newYearsDate->format('m')
            && $date->format('d') === $newYearsDate->format('d');
    }

}
