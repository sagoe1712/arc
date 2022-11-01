<?php

namespace Entities;

class Identifier {

    protected $id;

    private function generateID($length = 5) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    private function checkExist($id, $data) {
        $result = false;
        foreach ($data as $value) {
            if ($value->getID() == $id) {
                $result =  true;
            }
        }
        return $result;
    }

    public function generateIdentifer($length = null) {
        if(is_null($length)) {
            $length = 5;
        }
        $newID = $this->generateID($length);
        return $newID;
    }

    public function generateUniqueIdentifer($data, $length = null) {
        if(is_null($length)) {
            $length = 5;
        }
        $newID = $this->generateID($length);

        $check = $this->checkExist($newID, $data);

        if ($check === true)
        {
            return $this->generateUniqueIdentifer($data, $length);
        }
        return $newID;
    }
}
