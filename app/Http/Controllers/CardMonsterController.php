<?php

namespace App\Http\Controllers;

use App\Http\Requests\CardMonsterRequest;
use App\Services\CardMonsterService;
use Illuminate\Http\Request;

class CardMonsterController extends Controller
{
    private $cardMonsterService;

    public function __construct(CardMonsterService $cardMonsterService)
    {
        $this->cardMonsterService = $cardMonsterService;
    }

    public function create(CardMonsterRequest $request)
    {
        $cardMonster = $this->cardMonsterService->create($request);

        return response()->json($cardMonster, 201);
    }

    public function update($cardMonster_id, Request $request)
    {
        $cardMonster = $this->cardMonsterService->update($cardMonster_id, $request);

        if ($cardMonster) {
            return response()->json($cardMonster, 200);
        } else {
            return response()->json(['error' => 'Not Found'], 404);
        }
    }

    public function show($cardMonster_id)
    {
        $cardMonster = $this->cardMonsterService->show($cardMonster_id);

        if ($cardMonster) {
            return response()->json($cardMonster, 200);
        } else {
            return response()->json(['error' => 'Monster Card Not Found'], 404);
        }
    }

    public function destroy($cardMonster_id)
    {
        $cardMonster = $this->cardMonsterService->destroy($cardMonster_id);

        if ($cardMonster) {
            return response()->json(['message' => 'successfully deleted letter'], 204);
        } else {
            return response()->json(['error' => 'Not Found'], 404);
        }
    }

    public function list()
    {
        $cardMonster = $this->cardMonsterService->list();

        return response()->json($cardMonster, 200);
    }
}
