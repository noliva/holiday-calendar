<?php

namespace Darsadow\HolidayCalendar\HolidaySpecification\GB;

use Darsadow\HolidayCalendar\HolidaySpecification\Specification;

class BoxingDay implements Specification
{
    /**
     * @param \DateTime $date
     * @return bool
     */
    public function isSatisfiedBy(\DateTime $date)
    {
        $boxingDayDate = new \DateTime($date->format('Y') . '-12-26');

        if (in_array($boxingDayDate->format('N'),['6', '7'])) {
            $boxingDayDate->modify('+2 days');
        }

        return $date->format('m') === $boxingDayDate->format('m')
            && $date->format('d') === $boxingDayDate->format('d');
    }
}
