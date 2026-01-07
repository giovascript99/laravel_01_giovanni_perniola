<?php

namespace App\Http\Controllers;

use App\Models\Courses;
use Illuminate\Http\Request;
use App\Http\Requests\CorsoRequest;

class CorsiController extends Controller
{
    // public $corsi = [
    //     ['id' => 1, 'corso' => 'Military Workout', 'descrizione' => 'Un training ispirato alla preparazione militare.', 'img' => '/media/corsi/military.png'],
    //     ['id' => 2, 'corso' => 'Total Body', 'descrizione' => 'Lavoro a circuito, esercizi a corpo libero e con attrezzi, allenamento mentale e fisico.', 'img' => '/media/corsi/hiit.png'],
    //     ['id' => 3, 'corso' => 'Cross Training', 'descrizione' => 'Allenamenti ad alta intensità pensati per aumentare forza, velocità, resistenza.', 'img' => '/media/corsi/cross.png'],
    //     ['id' => 4, 'corso' => 'Functional Training', 'descrizione' => 'Allenamento funzionale per migliorare la mobilità e la forza del corpo.', 'img' => '/media/corsi/functional.png'],
    //     ['id' => 5, 'corso' => 'HIIT', 'descrizione' => 'High Intensity Interval Training: allenamenti brevi e intensi per bruciare grassi e migliorare la resistenza.', 'img' => '/media/corsi/total.png']
    // ];
    
    public function corsi(){
        $courses = Courses::all();
        return view('corsi', ['corsi' => $courses]);
    }
    
    // public function dettaglioCorso($id){
    //     foreach($this->corsi as $corso){
    //         if($corso['id'] == $id){
    //             return view('dettaglio-corso', ['corso' => $corso]);
    //         }
    //     }
    // }

    public function creazione(){
        return view('corsi.creazione');
    }

    public function store(CorsoRequest $request){
        $corso = Courses::create([
            'title' => $request->title,
            'pt' => $request->pt,
            'intensity' => $request->intensity,
            'time' => $request->time,
            'img' => $request->file('img')->store('img', 'public')
        ]);

        return redirect()->route('homepage')->with('successMessage', 'Hai correttamente inserito il tuo corso');
    }
}
