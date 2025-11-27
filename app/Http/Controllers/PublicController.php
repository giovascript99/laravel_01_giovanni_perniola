<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
