<?php

namespace App\Services;

use App\Models\CardMonster;
use App\Models\File;

class CardMonsterService
{
    private $cardMonster;

    public function __construct(CardMonster $cardMonster)
    {
        $this->cardMonster = $cardMonster;
    }

    public function create($request)
    {
        $file = auth()->id() . '_' . time() . '.'. $request->image->extension();
        $mime = $request->image->getClientMimeType();
        $size = $request->image->getSize();
        $path = $request->file('image')->store('file/monster');

        $file = File::create([
                'name' => $file,
                'mime' => $mime,
                'size' => $size,
                'path' => $path
                ]);

        $cardMonster = CardMonster::create([
                    'name' => $request->name,
                    'atk'=> $request->atk,
                    'def' => $request->def,
                    'level' => $request->level,
                    'number' => $request->number,
                    'type_id'=>$request->type,
                    'description'=>$request->description,
                    'attribute_id'=>$request->attribute_id,
                    'rarity_id'=>$request->rarity_id,
                    'image_id'=>$file->id
                    ]);

        return $cardMonster;
    }

    public function update($person_id, $request)
    {
        // dd($request);
        $cardMonster = $this->cardMonster->find($person_id);
        // dd($cardMonster);
        if ($cardMonster) {
            $cardMonster->name = $request->name;
            $cardMonster->atk = $request->atk;
            $cardMonster->def = $request->def;
            $cardMonster->level = $request->level;
            $cardMonster->number = $request->number;
            $cardMonster->type_id = $request->type;
            $cardMonster->description = $request->description;
            $cardMonster->attribute_id = $request->attribute_id;
            $cardMonster->rarity_id = $request->rarity_id;
            $cardMonster->save();

            return $cardMonster;
        } else {
            return null;
        }
    }

    public function show($cardMonster_id)
    {
        return $this->cardMonster->find($cardMonster_id);
    }

    public function destroy($cardMonster_id)
    {
        $cardMonster = $this->show($cardMonster_id);

        if ($cardMonster) {

            $this->cardMonster->find($cardMonster_id)->delete();

            return true;
        } else {
            return false;
        }
    }

    public function list()
    {
        $cardMonster = CardMonster::all();

        return $cardMonster;
    }
}
