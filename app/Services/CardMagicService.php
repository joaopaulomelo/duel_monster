<?php

namespace App\Services;

use App\Models\CardMagic;
use App\Models\File;

class CardMagicService
{
    private $cardMagic;

    public function __construct(CardMagic $cardMagic)
    {
        $this->cardMagic = $cardMagic;
    }

    public function create($request)
    {
        $file = auth()->id() . '_' . time() . '.'. $request->file->extension();
        $mime = $request->file->getClientMimeType();
        $size = $request->file->getSize();
        $path = $request->file('file')->store('file/magic');

        $file = File::create([
                'name' => $file,
                'mime' => $mime,
                'size' => $size,
                'path' => $path
                ]);

        $cardMagic = CardMagic::create([
                    'description' => $request->description,
                    'name' => $request->name,
                    'number'=> $request->atk,
                    'property_id' => $request->def,
                    'rarity_id' => $request->level,
                    'image_id'=>$file->id
                    ]);

        return $cardMagic;
    }

    public function update($card_id, $request)
    {
        $cardMagic = $this->cardMagic->find($card_id);

        if ($cardMagic) {
            $cardMagic->description = $request->description;
            $cardMagic->number = $request->number;
            $cardMagic->property_id = $request->property_id;
            $cardMagic->rarity_id = $request->rarity_id;
            $cardMagic->save();

            return $cardMagic;
        } else {
            return null;
        }
    }

    public function show($card_id)
    {
        return $this->cardMagic->find($card_id);
    }

    public function destroy($card_id)
    {
        $cardMonster = $this->show($card_id);

        if ($cardMonster) {

            $this->cardMagic->find($card_id)->delete();

            return true;
        } else {
            return false;
        }
    }

    public function list()
    {
        $cardMonster = CardMagic::all();

        return $cardMonster;
    }
}
