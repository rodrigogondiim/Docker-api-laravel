<?php

namespace App\Http\Controllers;

use App\Models\Participant;
use App\Http\Requests\StoreParticipantRequest;
use App\Http\Requests\UpdateParticipantRequest;
use Illuminate\Http\{JsonResponse, Request, Response};

class ParticipantController extends Controller
{
    public function index(): JsonResponse
    {
        return response()->json(Participant::all());
    }

    public function store(StoreParticipantRequest $request): JsonResponse
    {
        $result = Participant::create($request->only(['name', 'incoins']));
        return response()->json($result);
    }
    
    public function update(UpdateParticipantRequest $request, Participant $participant): JsonResponse
    {
        $participant->update($request->validated());
        return response()->json($participant);
    }

    public function destroy(Participant $participant): Response
    {
        $participant->delete();
        return response()->noContent();
    }

}
