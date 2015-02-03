<?php

namespace Darsadow\HolidayCalendar\HolidaySpecification\GB;

use Darsadow\HolidayCalendar\HolidaySpecification\Specification;

class EarlyMay implements Specification
{
    /**
     * @param \DateTime $date
     * @return bool
     */
    public function isSatisfiedBy(\DateTime $date)
    {
        $firstMondayOfMay = new \DateTime('@' . strtotime('first Monday of May ' . $date->format('Y')));
        $firstMondayOfMay->setTimezone(new \DateTimeZone('Europe/London'));

        return $date->format('m') === $firstMondayOfMay->format('m')
            && $date->format('d') === $firstMondayOfMay->format('d');
    }

}
