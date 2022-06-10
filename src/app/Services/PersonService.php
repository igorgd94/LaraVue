<?php

namespace App\Services;


use App\Repositories\PersonRepository;

class PersonService
{
    private $personRepository;

    public function __construct(PersonRepository $personRepository)
    {
        $this->personRepository = $personRepository;
    }

    public function delete($id)
    {
        $person = $this->personRepository->getById($id);
        foreach ($person->emails as $email){
            $email->delete();
        }
        foreach ($person->phoneNumbers as $phoneNumber){
            $phoneNumber->delete();
        }
        $this->personRepository->delete($person);
    }
}
