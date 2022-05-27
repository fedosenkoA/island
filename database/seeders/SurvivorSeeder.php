<?php

namespace Database\Seeders;

use App\Models\Survivor;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Throwable;

class SurvivorSeeder extends Seeder
{

    /**
     * @return void
     * @throws Throwable
     */
    public function run()
    {

        try {
            DB::beginTransaction();

            Survivor::factory(10)->create();

            DB::commit();
        } catch (Throwable $e) {
            DB::rollBack();

            throw $e;
        }

    }
}
