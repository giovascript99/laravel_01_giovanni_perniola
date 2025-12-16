<?php

namespace App\Http\Controllers;

use Exception;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PublicController extends Controller
{
    public $users = [
        ['name' => 'Emanuele', 'surname' => 'Cardone', 'role' => 'Proprietario'],
        ['name' => 'Lorenzo', 'surname' => 'Cima', 'role' => 'Manager'],
        ['name' => 'Jacopo', 'surname' => 'De Palma', 'role' => 'Trainer']
    ];
    
    public function homepage(){
        return view('homepage');
    }
    
    public function chiSiamo(){
        return view('chi-siamo', ['users' => $this->users]);
    }
    
    public function dettaglioUtente($name){
        foreach($this->users as $user){
            if($user['name'] == $name){
                return view('dettaglio-utente', ['user' => $user]);
            }
        }
    }
    
    public function contacts(){
        return view('contatti');
    }

    public function contactUs(Request $request){
        $user = $request->input('user');
        $email = $request->input('email');
        $usermessage = $request->input('message');
        $userData = compact('user', 'email', 'usermessage');

        try{
            Mail::to($email)->send(new ContactMail($userData));
        }catch(Exception $e){
            return redirect()
            ->route('homepage')
            ->with('emailError', 'Si è verificato un errore durante l\'invio dell\'email. Riprova più tardi.');
        }

        return redirect()
        ->route('homepage')
        ->with('emailSent', 'Hai inviato correttamente la tua email, ti risponderemo al più presto!');
    }
}
