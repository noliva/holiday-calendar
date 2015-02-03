<?php

namespace Darsadow\HolidayCalendar\HolidaySpecification;

class Sunday implements Specification
{
    /**
     * @param \DateTime $date
     * @return bool
     */
    public function isSatisfiedBy(\DateTime $date)
    {
        return $date->format('N') === '7';
    }
}
