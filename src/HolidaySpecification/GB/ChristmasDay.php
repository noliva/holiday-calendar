<?php

namespace Darsadow\HolidayCalendar\HolidaySpecification\GB;

use Darsadow\HolidayCalendar\HolidaySpecification\Specification;

class ChristmasDay implements Specification
{
    /**
     * @param \DateTime $date
     * @return bool
     */
    public function isSatisfiedBy(\DateTime $date)
    {
        $christmasDayDate = new \DateTime($date->format('Y') . '-12-25');

        if (in_array($christmasDayDate->format('N'),['6', '7'])) {
            $christmasDayDate->modify('+2 days');
        }

        return $date->format('m') === $christmasDayDate->format('m')
            && $date->format('d') === $christmasDayDate->format('d');
    }
}
