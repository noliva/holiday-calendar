<?php

namespace Darsadow\HolidayCalendar\HolidaySpecification\GB;

use Darsadow\HolidayCalendar\HolidaySpecification\Specification;

class GoodFriday implements Specification
{
    /**
     * @param \DateTime $date
     * @return bool
     */
    public function isSatisfiedBy(\DatetIme $date)
    {
        $goodFridayDate = new \DateTime('@' . easter_date($date->format('Y')));
        $goodFridayDate->setTimezone(new \DateTimeZone('Europe/London'))->modify('-2 day');

        return $date->format('m') === $goodFridayDate->format('m')
            && $date->format('d') === $goodFridayDate->format('d');
    }

}
