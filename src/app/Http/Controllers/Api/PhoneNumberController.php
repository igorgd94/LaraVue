<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Repositories\PhoneNumberRepository;
use Illuminate\Http\Request;

class PhoneNumberController extends Controller
{
    private PhoneNumberRepository $phoneNumberRepository;

    public function __construct(PhoneNumberRepository $phoneNumberRepository)
    {
        $this->phoneNumberRepository = $phoneNumberRepository;
    }

    public function create(Request $request)
    {
        return response()->json($this->phoneNumberRepository->create($request->all()),201);
    }

    public function update(Request $request, $id)
    {
        return response()->json($this->phoneNumberRepository->update($request->all(), $id));
    }

    public function delete($id)
    {
        $this->phoneNumberRepository->delete($id);
        return response()->json('PhoneNumber deleted');
    }
}
