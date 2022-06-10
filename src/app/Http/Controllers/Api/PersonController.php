<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Repositories\PersonRepository;
use App\Services\PersonService;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    private PersonService $personService;
    private PersonRepository $personRepository;

    public function __construct(PersonRepository $personRepository, PersonService $personService)
    {
        $this->personService = $personService;
        $this->personRepository = $personRepository;
    }

    public function index()
    {
        return response()->json($this->personRepository->index());
    }

    public function create(Request $request)
    {
        return response()->json($this->personRepository->create($request->all()),201);
    }

    public function update(Request $request, $id)
    {
        return response()->json($this->personRepository->update($request->all(), $id));
    }

    public function delete($id)
    {
        $this->personService->delete($id);
        return response()->json('Person deleted');
    }
}
