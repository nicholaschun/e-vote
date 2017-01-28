<?php
namespace App\Helpers;

class Helper{
    /* Begin Message handler */

    public function success(){
        return redirect()->back()->with('message','success');
    }

    public function error($message){
        return redirect()->back()->withErrors($message);
    }
}



?>