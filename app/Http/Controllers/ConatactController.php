<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContactRequest;
use App\Models\Conatact;
use Illuminate\Http\Request;

class ConatactController extends Controller
{
      public function store(StoreContactRequest $request){
     

        $data = $request->validated();
     

       Conatact::create($data);
       return back()->with('status-message','messgage sent successfully');
        
    }
}
