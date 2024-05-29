<?php
    use App\Models\Murojat;
    echo count(Murojat::where('user_type','true')
    ->where('status','admin')
    ->where('user_id',Auth::user()->id)
    ->get());
?>