<?php

namespace App\Http\Controllers;

use \http\Env\Response;
use \Illuminate\Http\Request;
use \Illuminate\Support\Facades\DB;

class LighthouseReportItemsController extends Controller
{

    /**
     * @param  Request  $request
     * @return Response
     */
    public function hashType(Request $request, string $hash, string $type){
        $report = DB::table('report_items')
            ->where('hash','=',$hash)
            ->where('type','=',$type);

        $count = $report->count();

        if($count === 1){
            $this->addData('report',$report->first());
        }
        else{
            $this->addMessage('success','Report doesnt exists.');
        }

        return $this->getResponse();
    }
}
