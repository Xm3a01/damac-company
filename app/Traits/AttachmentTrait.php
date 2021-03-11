<?php

namespace App\Traits;


/**
 * 
 */
trait AttachmentTrait
{

    public function multiFile($files , $model , $collection)
    {
        foreach ($files as $key => $file) {
            $ex = $file->getClientOriginalExtension();
            $fileName =  md5(date('Y-m-d H:i:s:u')).'.'.$ex;
            $model->addMedia($file)->usingFileName($fileName)->toMediaCollection($collection);
        }
    }

    public function singleFile($file , $model , $collection)
    {
        $ex = $file->getClientOriginalExtension();
        $fileName =  md5(date('Y-m-d H:i:s:u')).'.'.$ex;
    //    dd($request->image);
        $model->addMedia($file)->usingFileName($fileName)->toMediaCollection($collection);
    }
    
}
