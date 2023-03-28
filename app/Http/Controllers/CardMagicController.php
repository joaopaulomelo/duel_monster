<?php

namespace App\Http\Controllers;

use App\Http\Requests\CardMagicRequest;
use App\Services\CardMagicService;

class CardMagicController extends Controller
{
    private $cardMagicService;

    public function __construct(CardMagicService $cardMagicService)
    {
        $this->cardMagicService = $cardMagicService;
    }

    public function create(CardMagicRequest $request)
    {
        $cardMagicService = $this->cardMagicService->create($request);

        return response()->json($cardMagicService, 201);
    }

    public function update($cardMagic_id, CardMagicRequest $request)
    {
        $cardMagicService = $this->cardMagicService->update($cardMagic_id, $request);

        if ($cardMagicService) {
            return response()->json($cardMagicService, 200);
        } else {
            return response()->json(['error' => 'Not Found'], 404);
        }
    }

    public function show($cardMagic_id)
    {
        $cardMagicService = $this->cardMagicService->show($cardMagic_id);

        if ($cardMagicService) {
            return response()->json($cardMagicService, 200);
        } else {
            return response()->json(['error' => 'Not Found'], 404);
        }
    }

    public function destroy($cardMagic_id)
    {
        $cardMagicService = $this->cardMagicService->destroy($cardMagic_id);

        if ($cardMagicService) {
            return response()->json([], 204);
        } else {
            return response()->json(['error' => 'Not Found'], 404);
        }
    }

    public function list()
    {
        $cardMagicService = $this->cardMagicService->list();

        return response()->json($cardMagicService, 200);
    }
}
