<?php

namespace Database\Seeders;

use App\Models\DocumentType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DocumentTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DocumentType::create(
            ['name'=>'Purchase order','slug'=>'purchase_order',],
        );DocumentType::create(
            ['name'=>'Sale order','slug'=>'sale_order',],
        );DocumentType::create(
            ['name'=>'Buyer order','slug'=>'buyer_order',],
        );
    }
}
