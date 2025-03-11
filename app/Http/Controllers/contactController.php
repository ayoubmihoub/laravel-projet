<?php
    namespace App\Http\Controllers;
    use Illuminate\Http\Requests;
    use Illuminate\Models\welcome;


    class contactController extends Controller
{
    public function welcome(){
        $welcome = new welcome;
        $message = $welcome -> messageWelcome();
        return view('welcome','message'->$message);
    }
}

