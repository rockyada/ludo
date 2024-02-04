<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Category;
use App\Models\CategoryDescriptions;
use App\Models\Languages;
use App\Http\Controllers\Controller;

class HourlyUpdate extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'category:name';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $languages = Languages::get();
        $category  = Category::where('is_translate',0)->limit(10)->get();
        $translate = [];
        $categoryIds=[];
        foreach ($category as $key => $value) {
            $categoryIds[]=$value->id;
            foreach ($languages as $keys => $language) {
                $translate[] = [
                    'parent_id'   => $value->id ?? 0,
                    'language_id' => $language->id ?? 0,
                    'name'        => Controller::GoogleTranslate($value->name,$language->lang_code),
                ];
            }   
        }
        CategoryDescriptions::insert($translate);
        Category::whereIn('id',$categoryIds)->update(['is_translate'=>1]);
    }
}
