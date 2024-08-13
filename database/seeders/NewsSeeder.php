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


        $url = "http://172.16.4.97:8001/api";


        $data = Http::get($url)->collect();

        $link = $data['links']['next'];

        while ($link != null) {
            $newsCollection = $data['data'];

            foreach ($newsCollection as $newsObject) {

                $news = $newsObject['news'];
                $news = News::create($news);
                $image = $newsObject['image'];

                if ($image['path'] == null) {

                    $image['path'] = "";
                }
                $news->images()->create($image);
            }

            $data = Http::get($link)->collect();
            $link = $data['links']['next'];
        }
    }
}
