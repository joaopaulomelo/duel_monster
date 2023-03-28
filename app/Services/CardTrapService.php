<?php

namespace App\Services;

use App\Models\CardTrap;
use App\Models\File;

class CardTrapService
{
    private $cardTrap;

    public function __construct(CardTrap $cardTrap)
    {
        $this->cardTrap = $cardTrap;
    }

    public function create($request) {

        $file = auth()->id() . '_' . time() . '.'. $request->file->extension();
        $mime = $request->file->getClientMimeType();
        $size = $request->file->getSize();
        $path = $request->file('file')->store('file/trap');

        $file = File::create([
            'name' => $file,
            'mime' => $mime,
            'size' => $size,
            'path' => $path
        ]);

        $cardTrap = CardTrap::create([
            'description' => $request->description,
            'name' => $request->name,
            'number'=> $request->atk,
            'property_id' => $request->def,
            'rarity_id' => $request->level,
            'image_id'=>$file->id
        ]);

        return $cardTrap;
    }

    public function update($card_id, $request) {
        $cardTrap = $this->cardTrap->find($card_id);

        if ($cardTrap) {
            $cardTrap->description = $request->description;
            $cardTrap->number = $request->number;
            $cardTrap->property_id = $request->property_id;
            $cardTrap->rarity_id = $request->rarity_id;
            $cardTrap->save();

            return $cardTrap;
        } else {
            return null;
        }
    }

    public function show($card_id) {
        return $this->cardTrap->find($card_id);
    }

    public function destroy($card_id) {
        $cardTrap = $this->show($card_id);

        if ($cardTrap) {

            $this->cardTrap->find($card_id)->delete();

            return true;
        } else {
            return false;
        }
    }

    public function list()
    {
        $cardTrap = CardTrap::all();

        return $cardTrap;
    }
}
