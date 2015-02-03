<?php

namespace Darsadow\HolidayCalendar\HolidaySpecification\GB;

use Darsadow\HolidayCalendar\HolidaySpecification\Specification;

class Spring implements Specification
{
    /**
     * @param \DateTime $date
     * @return bool
     */
    public function isSatisfiedBy(\DateTime $date)
    {
        $lastMondayOfMay = new \DateTime('@' . strtotime('last Monday of May ' . $date->format('Y')));
        $lastMondayOfMay->setTimezone(new \DateTimeZone('Europe/London'));

        return $date->format('m') === $lastMondayOfMay->format('m')
            && $date->format('d') === $lastMondayOfMay->format('d');
    }

}
