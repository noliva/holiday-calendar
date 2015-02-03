<?php

namespace Darsadow\HolidayCalendar\HolidaySpecification\GB;

use Darsadow\HolidayCalendar\HolidaySpecification\Specification;

class EasterMonday implements Specification
{
    /**
     * @param \DateTime $date
     * @return bool
     */
    public function isSatisfiedBy(\DatetIme $date)
    {
        $easterDate = new \DateTime('@' . easter_date($date->format('Y')));
        $easterDate->setTimezone(new \DateTimeZone('Europe/London'))->modify('+1 days');

        return $date->format('m') === $easterDate->format('m') && $date->format('d') === $easterDate->format('d');
    }
}
