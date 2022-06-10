<?php

namespace App\Repositories;

use App\Models\Person;

class PersonRepository
{
    public function __construct()
    {
    }

    public function index()
    {
        return Person::query()->paginate(10);
    }

    public function getById($id)
    {
        return Person::query()->find($id);
    }

    public function create($request)
    {
        $person = new Person();
        $person->name = $request['name'];
        $person->save();
        return $person;
    }

    public function update($request, $id)
    {
        $person = $this->getById($id);
        $person->name = $request['name'];
        $person->save();
        return $person;
    }

    public function delete($person)
    {
        $person->delete();
    }
}
