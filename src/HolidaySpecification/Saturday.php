<?php

namespace Darsadow\HolidayCalendar\HolidaySpecification;

class Saturday implements Specification
{
    /**
     * @param \DateTime $date
     * @return bool
     */
    public function isSatisfiedBy(\DateTime $date)
    {
        return $date->format('N') === '6';
    }
}
