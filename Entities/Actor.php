<?php

namespace Entities;


class Actor implements \JsonSerializable {
    use EntityValidator;

    protected $id;
    protected $name;
    protected $dateOfBirth;

    public function __construct(string $id, string $name, string $dateOfBirth) {
        $this->validateDate($dateOfBirth);
        $this->id = $id;
        $this->name = $name;
        $this->dateOfBirth = $dateOfBirth;
    }

    public function  getID(): string {
        return $this->id;
    }

    public function  getName(): string {
        return $this->name;
    }

    public function  getDateOfBirth() {
        return $this->dateOfBirth;
    }

    public function jsonSerialize() {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'dateOfBirth' => $this->dateOfBirth
        ];
    }
}
