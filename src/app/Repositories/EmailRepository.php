<?php

namespace App\Repositories;

use App\Models\Email;

class EmailRepository
{
    public function __construct()
    {
    }

    public function getById($id)
    {
        return Email::query()->find($id);
    }

    public function create($request)
    {
        $email = new Email();
        $email->value = $request['value'];
        $email->person_id = $request['personId'];
        $email->save();
        return $email;
    }

    public function update($request, $id)
    {
        $email = $this->getById($id);
        $email->value = $request['value'];
        $email->person_id = $request['personId'];
        $email->save();
        return $email;
    }

    public function delete($id)
    {
        $this->getById($id)->delete();
    }
}
