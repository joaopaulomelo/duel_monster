<?php

namespace App\Http\Controllers;

use App\Http\Requests\CardTrapRequest;
use App\Services\CardTrapService;
use Illuminate\Http\Request;

class CardTrapController extends Controller
{
    private $cardTrapService;

    public function __construct(CardTrapService $cardTrapService)
    {
        $this->cardTrapService = $cardTrapService;
    }

    public function create(CardTrapRequest $request)
    {
        $cardTrap = $this->cardTrapService->create($request);

        return response()->json($cardTrap, 201);
    }

    public function update($cardTrap_id, Request $request)
    {
        $cardTrap = $this->cardTrapService->update($cardTrap_id, $request);

        if ($cardTrap) {
            return response()->json($cardTrap, 200);
        } else {
            return response()->json(['error' => 'Not Found'], 404);
        }
    }

    public function show($cardTrap_id)
    {
        $cardTrap = $this->cardTrapService->show($cardTrap_id);

        if ($cardTrap) {
            return response()->json($cardTrap, 200);
        } else {
            return response()->json(['error' => 'Not Found'], 404);
        }
    }

    public function destroy($cardTrap_id)
    {
        $cardTrap = $this->cardTrapService->destroy($cardTrap_id);

        if ($cardTrap) {
            return response()->json([], 204);
        } else {
            return response()->json(['error' => 'Not Found'], 404);
        }
    }

    public function list()
    {
        $cardTrap = $this->cardTrapService->list();

        return response()->json($cardTrap, 200);
    }
}
