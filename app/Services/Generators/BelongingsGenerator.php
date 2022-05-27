<?php

namespace App\Services\Generators;

use App\Models\Item;

class BelongingsGenerator
{

    public function randomItems(): array
    {
        $rand = rand(3, 20);
        $items = Item::all();
        $itemsPack = [];
        $result = [];

        do {
            $item = $items->random();
            if ($rand >= $item->relevance) {
                $rand = $rand - $item->relevance;
                $itemsPack[$item->id] = ($itemsPack[$item->id] ?? 0) + 1;
            }
        } while ($rand !== 0);

        foreach ($itemsPack as $id => $item){
            $result[] = [
                'item_id' =>  $id,
                'count' =>  $item
            ];
        }

        unset($itemsPack);

        return $result;
    }
}
