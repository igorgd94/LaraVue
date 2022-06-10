<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Repositories\EmailRepository;
use Illuminate\Http\Request;

class EmailController extends Controller
{
    private EmailRepository $emailRepository;

    public function __construct(EmailRepository $emailRepository)
    {
        $this->emailRepository = $emailRepository;
    }

    public function create(Request $request)
    {
        return response()->json($this->emailRepository->create($request->all()),201);
    }

    public function update(Request $request, $id)
    {
        return response()->json($this->emailRepository->update($request->all(), $id));
    }

    public function delete($id)
    {
        $this->emailRepository->delete($id);
        return response()->json('Email deleted');
    }
}
