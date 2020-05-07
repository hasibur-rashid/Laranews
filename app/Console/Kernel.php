<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use App\Model\RssLink;
use App\Model\News;
use App\Http\Enum\AllEnum;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        //
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */

    public function newsTextCheck($title,$news_array)
    {
        $check = false;
        $simillar_percentage_arr = [];
        $percent = 0;

        foreach ($news_array as $value) {
            $check = false;
            $simillar_percentage = similar_text($title, $value->news_title, $percent); 
            if($percent > 51)  $check = true;
        }
        return $check;
    }

    protected function schedule(Schedule $schedule)
    {
        ini_set("allow_url_fopen", 1);
        // $schedule->command('inspire')
        //          ->hourly();

        $schedule->call(function () {
            $rss_links = RssLink::all();

            foreach ($rss_links as $rss) {
                $link = $rss->rss_link;
                $feed = feedMe($link);

                $news_list = [];

                foreach ($feed->channel->item as $item) {
                    $description = '';
                    $media_thumbnail = '';
                    $category = '';
                    $media = '';
                    $lang = '';
                    $provider = '';

                    if(!empty($feed->channel->language)) $lang = (string) $feed->channel->language;
                    if(!empty($feed->channel->title)) $provider = (string) $feed->channel->title;

                    // dd($item->image->url);

                    $title       = (string) $item->title;
                    $date = (string) date('Y-m-d H:i:s',strtotime($item->pubDate));
                    if(!empty($item->description)) $description = (string) $item->description;
                    elseif(!empty($item->children("content", true)->encoded)) $description = (string) $item->children("content", true)->encoded;
                    $link = (string) $item->link;
                    $source = (string) $item->source;
                    $category = (string) $item->category;

                    if (!empty($item->children('media', True))) {
                        $media = (string)$item->children('media', True)->content->attributes()['url'];
                    } elseif (!empty($item->image)) {
                        $media = (string)$item->image->url;
                        if(empty($item->image->url)){
                            $media = (string)$item->image;
                        }
                    }
                    
                    if(!empty($item->children( 'media', True ))){
                        $media_thumbnail = (string) $item->children( 'media', True )->thumbnail->attributes()['url'];
                    }


                    // news array today's
                    $news_array = News::select('news_title')->whereDate('created_at',date('Y-m-d'))->get();

                    // check the title to another news title in the database for today date
                    $check_text = newsTextCheck($title, $news_array);

                    if($check_text == false){
                        $news = new News();
                        $news->news_lang = $rss->rss_lang;
                        $news->news_provider = $provider;
                        $news->news_title = $title;
                        $news->news_description = $description;
                        $news->category = $rss->rss_category;
                        $news->tag = 0;
                        $news->is_rss = AllEnum::NEWS_TYPE_RSS_FEED; // this news come from rss feed
                        $news->status = AllEnum::STATUS_ACTIVE; // for published this news
                        $news->rss_url = $link;
                        $news->rss_media = $media;
                        $news->rss_media_thumbnail = $media_thumbnail;
                        $news->created_at = $date;
                        $news->updated_at = $date;
                        $news->save();
                    }
                }
            }

        })->everyMinute();
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
