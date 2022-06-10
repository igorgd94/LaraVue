<?php

namespace App\Repositories;

use App\Models\PhoneNumber;

class PhoneNumberRepository
{
    public function __construct()
    {
    }

    public function getById($id)
    {
        return PhoneNumber::query()->find($id);
    }

    public function create($request)
    {
        $phoneNumber = new PhoneNumber();
        $phoneNumber->value = $request['value'];
        $phoneNumber->person_id = $request['personId'];
        $phoneNumber->save();
        return $phoneNumber;
    }

    public function update($request, $id)
    {
        $phoneNumber = $this->getById($id);
        $phoneNumber->value = $request['value'];
        $phoneNumber->person_id = $request['personId'];
        $phoneNumber->save();
        return $phoneNumber;
    }

    public function delete($id)
    {
        $this->getById($id)->delete();
    }
}
