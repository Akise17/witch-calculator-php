<?php

namespace App\Services;

class WitchCalculatorService
{
    private $villagers_killed;
    private $persons;

    public function __construct($persons)
    {
        $this->persons = $persons;
        $this->villagers_killed = [];
    }

    public function calculateAverageKills()
    {
        if ($this->invalidData()) {
            return -1;
        }

        $this->calculateKills();
        return $this->calculateAverage();
    }

    private function invalidData()
    {
        foreach ($this->persons as $person) {
            if (empty($person['age_of_death']) && empty($person['year_of_death'])) {
                continue;
            }

            if ((int)$person['age_of_death'] < 0 || (int)$person['year_of_death'] < (int)$person['age_of_death']) {
                return true;
            }
        }

        return false;
    }

    private function calculateKills()
    {
        foreach ($this->persons as $person) {
            $year_of_birth = (int)$person['year_of_death'] - (int)$person['age_of_death'];
            $villagers_killed_on_birth = $this->calculateVillagersKilled($year_of_birth);
            $this->villagers_killed[] = $villagers_killed_on_birth;
        }
    }

    private function calculateVillagersKilled($year)
    {
        $sqrt5 = sqrt(5);
        $golden_ratio = (1 + $sqrt5) / 2;
        $result = 0;

        for ($i = 0; $i <= $year; $i++) {
            $fibonacci = intval(($golden_ratio ** $i - (1 - $golden_ratio) ** $i) / $sqrt5);
            $result += $fibonacci;
        }

        return $result;
    }

    private function calculateAverage()
    {
        $total_villagers_killed = array_sum($this->villagers_killed);
        $total_persons = count($this->persons);
        $average = $total_villagers_killed / $total_persons;

        return round($average, 2);
    }
}
