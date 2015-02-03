<?php

namespace Darsadow\HolidayCalendar\HolidaySpecification\GB;

use Darsadow\HolidayCalendar\HolidaySpecification\Specification;

class Summer implements Specification
{
    /**
     * @param \DateTime $date
     * @return bool
     */
    public function isSatisfiedBy(\DateTime $date)
    {
        $lastMondayOfAugust = new \DateTime('@' . strtotime('last Monday of August ' . $date->format('Y')));
        $lastMondayOfAugust->setTimezone(new \DateTimeZone('Europe/London'));

        return $date->format('m') === $lastMondayOfAugust->format('m')
            && $date->format('d') === $lastMondayOfAugust->format('d');
    }

}
