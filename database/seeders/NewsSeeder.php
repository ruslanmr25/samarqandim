<?php

namespace Database\Seeders;

use App\Models\News;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Http;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //getting old news from old base

        $url = "http://localhost:8001/api";

        $data = json_decode(Http::get($url), true);

        while ($data['links']['next'] != null) {
            $url = $data['links']['next'];

            $data = json_decode(Http::get($url), true);


            $collection = $data['data'];

            foreach ($collection as  $value) {

                $news = News::create($value['news']);


                if (isset($value['image']['path'])) {
                    $news->images()->create([

                        'path' => $value['image']['path'],
                        'is_main' => true
                    ]);
                }
            }
        }
    }
}
