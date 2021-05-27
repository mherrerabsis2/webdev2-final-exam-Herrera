<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\registrationform;

class Registration extends Controller
{
  public function requestsform (Request $request) {

   $registrationform = new registrationform();
   return view ('/registration', compact ('registrationform'));
  }

   public function requestlist (Request $request) {

    $registrationform = registrationform::all();
    return view ('/request-list', compact ('registrationform'));
   }

  
   public function createform (Request $request) {

    $registrationform = new registrationform();
    $registrationform->name = $request-> name;
    $registrationform->email = $request-> email;
    $registrationform->number = $request-> number;
    $registrationform->bdate = $request-> bdate;
    $registrationform->relaff = $request-> relaff;
    $registrationform->bsdate = $request-> bsdate;
    $registrationform->bstime= $request-> bstime;
    $registrationform->bslocation = $request-> bslocation;
    
   if ($registrationform->save()) {
        return redirect ('/thank-you');
   }
        return redirect ('/thank-you');
   }

   public function thankyou (Request $request) {

    $registrationform = new registrationform();
    return view ('/thank-you');
   }
}