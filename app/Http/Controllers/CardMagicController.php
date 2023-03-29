<?php

namespace App\Http\Controllers;

use App\Http\Requests\CardMagicRequest;
use App\Services\CardMagicService;
use Illuminate\Http\Request;

class CardMagicController extends Controller
{
    private $cardMagicService;

    public function __construct(CardMagicService $cardMagicService)
    {
        $this->cardMagicService = $cardMagicService;
    }

    public function create(CardMagicRequest $request)
    {
        $cardMagic = $this->cardMagicService->create($request);

        return response()->json($cardMagic, 201);
    }

    public function update($cardMagic_id, Request $request)
    {
        $cardMagic = $this->cardMagicService->update($cardMagic_id, $request);

        if ($cardMagic) {
            return response()->json($cardMagic, 200);
        } else {
            return response()->json(['error' => 'Not Found'], 404);
        }
    }

    public function show($cardMagic_id)
    {
        $cardMagic = $this->cardMagicService->show($cardMagic_id);

        if ($cardMagic) {
            return response()->json($cardMagic, 200);
        } else {
            return response()->json(['error' => 'Not Found'], 404);
        }
    }

    public function destroy($cardMagic_id)
    {
        $cardMagic = $this->cardMagicService->destroy($cardMagic_id);

        if ($cardMagic) {
            return response()->json([], 204);
        } else {
            return response()->json(['error' => 'Not Found'], 404);
        }
    }

    public function list()
    {
        $cardMagic = $this->cardMagicService->list();

        return response()->json($cardMagic, 200);
    }
}
