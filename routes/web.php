<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function(){
    return view('homepage');
})->name('homepage');

Route::get('/chi-siamo', function(){
    $users = [
        ['name' => 'Emanuele', 'surname' => 'Cardone', 'role' => 'Proprietario'],
        ['name' => 'Lorenzo', 'surname' => 'Cima', 'role' => 'Manager'],
        ['name' => 'Jacopo', 'surname' => 'De Palma', 'role' => 'Trainer']
    ];
    return view('chi-siamo', ['users' => $users]);
})->name('chi-siamo');

Route::get('/chi-siamo/dettaglio/{name}', function($name){
    $users = [
        ['name' => 'Emanuele', 'surname' => 'Cardone', 'role' => 'Proprietario'],
        ['name' => 'Lorenzo', 'surname' => 'Cima', 'role' => 'Manager'],
        ['name' => 'Jacopo', 'surname' => 'De Palma', 'role' => 'Trainer']
    ];
    foreach($users as $user){
        if($user['name'] == $name){
            return view('dettaglio-utente', ['user' => $user]);
        }
    }
})->name('dettaglio-utente');

Route::get('/contatti', function(){
    return view('contatti');
})->name('contatti');

Route::get('/corsi', function(){
    $corsi = [
        ['id' => 1, 'corso' => 'Military Workout', 'descrizione' => 'Un training ispirato alla preparazione militare.', 'img' => '/media/corsi/military.png'],
        ['id' => 2, 'corso' => 'Total Body', 'descrizione' => 'Lavoro a circuito, esercizi a corpo libero e con attrezzi, allenamento mentale e fisico.', 'img' => '/media/corsi/hiit.png'],
        ['id' => 3, 'corso' => 'Cross Training', 'descrizione' => 'Allenamenti ad alta intensità pensati per aumentare forza, velocità, resistenza.', 'img' => '/media/corsi/cross.png'],
        ['id' => 4, 'corso' => 'Functional Training', 'descrizione' => 'Allenamento funzionale per migliorare la mobilità e la forza del corpo.', 'img' => '/media/corsi/functional.png'],
        ['id' => 5, 'corso' => 'HIIT', 'descrizione' => 'High Intensity Interval Training: allenamenti brevi e intensi per bruciare grassi e migliorare la resistenza.', 'img' => '/media/corsi/total.png']
    ];
    return view('corsi', ['corsi' => $corsi]);
})->name('corsi');

Route::get('/corso/dettaglio/{id}', function($id){
    $corsi = [
        ['id' => 1, 'corso' => 'Military Workout', 'descrizione' => 'Un training ispirato alla preparazione militare.', 'img' => '/media/corsi/military.png'],
        ['id' => 2, 'corso' => 'Total Body', 'descrizione' => 'Lavoro a circuito, esercizi a corpo libero e con attrezzi, allenamento mentale e fisico.', 'img' => '/media/corsi/hiit.png'],
        ['id' => 3, 'corso' => 'Cross Training', 'descrizione' => 'Allenamenti ad alta intensità pensati per aumentare forza, velocità, resistenza.', 'img' => '/media/corsi/cross.png'],
        ['id' => 4, 'corso' => 'Functional Training', 'descrizione' => 'Allenamento funzionale per migliorare la mobilità e la forza del corpo.', 'img' => '/media/corsi/functional.png'],
        ['id' => 5, 'corso' => 'HIIT', 'descrizione' => 'High Intensity Interval Training: allenamenti brevi e intensi per bruciare grassi e migliorare la resistenza.', 'img' => '/media/corsi/total.png']
    ];
    foreach($corsi as $corso){
        if($corso['id'] == $id){
            return view('dettaglio-corso', ['corso' => $corso]);
        }
    }
})->name('dettaglio-corso');