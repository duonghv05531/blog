<?php

use Illuminate\Database\Seeder;
use App\Models\Article;

class ArticleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 100; $i++) {
            $article = new Article;
            $article->title = 'Bai viet' . $i;
            $article->content = 'content' . $i;
            $article->save();
        }
    }
}
