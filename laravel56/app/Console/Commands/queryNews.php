<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use QL\QueryList;
use App\news;

class queryNews extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:queryNews';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *https://api-prod.wallstreetcn.com/apiv1/content/lives?channel=global-channel&client=pc&cursor=1524737194&limit=20
     * @return mixed
     */
    public function handle()
    {
        $url = "https://wallstreetcn.com/live/global?from=navbar";
        $rules = array(
            //采集id为one这个元素里面的纯文本内容
            'iPublishTime'      => array('.wscn-tab-pane:eq(0) .live-item__time__text','text'),
            "sNews"   => array('.wscn-tab-pane:eq(0) .live-item__main','text'),
        );
        $data = QueryList::get($url)->rules($rules)->query()->getData();

        $aData = $data->all();
        $aResult = news::orderBy("iAutoID","desc")->limit(1)->get()->toArray();
        $sContent = array_get($aResult,"0.sNews",'');
        foreach ($aData as $iKey => $aDatum) {
            $sNew = str_replace("\n",'',array_get($aDatum,'sNews',""));
            if($sContent == $sNew){
                break;
            }
        }
        $aData = array_slice($aData,0,$iKey);
        $aData = array_reverse($aData);
        foreach ($aData as $aDatum) {
            $aInsertData = array(
                "iPublishTime"   => strtotime(date("Y-m-d ").array_get($aDatum,'iPublishTime',0)),
                "sNews"          => str_replace("\n",'',array_get($aDatum,'sNews',"")),
            );

            news::create($aInsertData);
        }
    }
}
