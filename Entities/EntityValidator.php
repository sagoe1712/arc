<?php

namespace Entities;


trait EntityValidator {

    protected $dateRegex = "/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/";

    public function validateDate($date) {
        if(!preg_match($this->dateRegex, $date)) {
            new \Exception('Invalid date format: yyyy-mm-dd');
        }
        return $date;
    }
}
