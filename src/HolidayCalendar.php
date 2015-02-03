<?php

namespace Darsadow\HolidayCalendar;

use Darsadow\HolidayCalendar\HolidaySpecification\Specification;

class HolidayCalendar
{
    /**
     * @var Specification[]
     */
    protected $holidays = [];

    protected $saturdayFree = true;

    protected $sundayFree = true;

    protected $includeEasterMonday = true;

    public function addHolidaySpecification(Specification $specification)
    {
        $this->holidays[] = $specification;
        return $this;
    }

    /**
     * @param \DateTime $date
     * @param integer $days
     *
     * @return \DateTime
     */
    public function addWorkingDays(\DateTime $date, $days)
    {
        if (!is_integer($days)) {
            throw new \InvalidArgumentException('$days parameters has to be and integer');
        }
        if (0 > $days) {
            throw new \InvalidArgumentException('$days parameters has to be and integer');
        }

        if (0 === $days) {
            return $date;
        }

        while ($days != 0) {
            $date->modify('+1 day');

            if ($this->isHoliday($date)) {
                continue;
            }

            if (0 == --$days) {
                return $date;
            }
        }
    }

    /**
     * @param \DateTime $date
     * @return bool
     */
    protected function isHoliday(\DateTime $date)
    {
        foreach ($this->holidays as $holiday) {
            if ($holiday->isSatisfiedBy($date)) {
                return true;
            }
        }

        return false;
    }
}
