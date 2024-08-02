<?php

if(! function_exists('money')){
	function money($amount){
        $amount = round($amount);
		$data = number_format($amount, 0);
        return $data;
	}
}

function checkSubjects($course,$subject)
{
    $data = DB::table('course_subjects')

    ->where('course',$course)
    ->where('subject',$subject)
    ->first();
    $checked = "";
    if($data==null)
    {
        $checked = "";
    }
    else
    {
        $checked = "checked";
    }

    return $checked;
}

