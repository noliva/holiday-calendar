<?php

namespace Darsadow\HolidayCalendar\HolidaySpecification;

interface Specification
{
    /**
     * @param \DateTime $date
     * @return bool
     */
    public function isSatisfiedBy(\DateTime $date);
}
