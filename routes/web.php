<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

    $division_id = 3;

    //Hold 1

//    \App\Person::create([
//        'name' => 'Anders Wolff',
//        'division_id' => $division_id,
//        'team_id' => 1
//    ]);
//
//    \App\Person::create([
//        'name' => 'Mette Stenbroen',
//        'division_id' => $division_id,
//        'team_id' => 1
//    ]);
//
//    \App\Person::create([
//        'name' => 'Jan Lund',
//        'division_id' => $division_id,
//        'team_id' => 2
//    ]);
//
//    \App\Person::create([
//        'name' => 'Torben Dyrnesli Nielsen',
//        'division_id' => $division_id,
//        'team_id' => 2
//    ]);
//
//    //Hold 2
//
//    \App\Person::create([
//        'name' => 'Michael Lorenzen',
//        'division_id' => $division_id,
//        'team_id' => 3
//    ]);
//
//    \App\Person::create([
//        'name' => 'Brian Lorenzen',
//        'division_id' => $division_id,
//        'team_id' => 3
//    ]);
//
//    \App\Person::create([
//        'name' => 'Niels Godsk Sørensen',
//        'division_id' => $division_id,
//        'team_id' => 4
//    ]);
//
//    \App\Person::create([
//        'name' => 'Jan Godsk',
//        'division_id' => $division_id,
//        'team_id' => 4
//    ]);
//
//    //Hold 3
//
//    \App\Person::create([
//        'name' => 'Kaj Pedersen',
//        'division_id' => $division_id,
//        'team_id' => 5
//    ]);
//
//    \App\Person::create([
//        'name' => 'Thomas Stenbakken',
//        'division_id' => $division_id,
//        'team_id' => 5
//    ]);
//
//    \App\Person::create([
//        'name' => 'Steffen Pedersen',
//        'division_id' => $division_id,
//        'team_id' => 6
//    ]);
//
//    \App\Person::create([
//        'name' => 'Rasmus Pedersen',
//        'division_id' => $division_id,
//        'team_id' => 6
//    ]);
//
//    //Hold 4
//
//    \App\Person::create([
//        'name' => 'Jens Ole Sørensen',
//        'division_id' => $division_id,
//        'team_id' => 7
//    ]);
//
//    \App\Person::create([
//        'name' => 'Gudmund Bøgeskov',
//        'division_id' => $division_id,
//        'team_id' => 7
//    ]);
//
//    \App\Person::create([
//        'name' => 'Karsten Cramer',
//        'division_id' => $division_id,
//        'team_id' => 8
//    ]);
//
//    \App\Person::create([
//        'name' => 'Morten Norrsk',
//        'division_id' => $division_id,
//        'team_id' => 8
//    ]);
//
//    //Hold 5
//
//    \App\Person::create([
//        'name' => 'Senad Custic',
//        'division_id' => $division_id,
//        'team_id' => 9
//    ]);
//
//    \App\Person::create([
//        'name' => 'Svend Erik Hansen',
//        'division_id' => $division_id,
//        'team_id' => 9
//    ]);
//
//    \App\Person::create([
//        'name' => 'Karl Højrup',
//        'division_id' => $division_id,
//        'team_id' => 10
//    ]);
//
//    \App\Person::create([
//        'name' => 'Erik Jacobsen',
//        'division_id' => $division_id,
//        'team_id' => 10
//    ]);
//
//    //Hold 6
//
//    \App\Person::create([
//        'name' => 'Jess Withus Hansen',
//        'division_id' => $division_id,
//        'team_id' => 11
//    ]);
//
//    \App\Person::create([
//        'name' => 'Thomas Diget',
//        'division_id' => $division_id,
//        'team_id' => 11
//    ]);
//
//    \App\Person::create([
//        'name' => 'Oliver Wolff',
//        'division_id' => $division_id,
//        'team_id' => 12
//    ]);
//
//    \App\Person::create([
//        'name' => 'Jens Madsen',
//        'division_id' => $division_id,
//        'team_id' => 12
//    ]);
//
//    //Hold 7
//
//    \App\Person::create([
//        'name' => 'Hilde Skiffard',
//        'division_id' => $division_id,
//        'team_id' => 13
//    ]);
//
//    \App\Person::create([
//        'name' => 'Lars Hellum',
//        'division_id' => $division_id,
//        'team_id' => 13
//    ]);
//
//    \App\Person::create([
//        'name' => 'Tor Arne Rygg',
//        'division_id' => $division_id,
//        'team_id' => 14
//    ]);
//
//    \App\Person::create([
//        'name' => 'Søren Kristensen',
//        'division_id' => $division_id,
//        'team_id' => 14
//    ]);
//
//    //Hold 8
//
//    \App\Person::create([
//        'name' => 'Mario Kristensen',
//        'division_id' => $division_id,
//        'team_id' => 15
//    ]);
//
//    \App\Person::create([
//        'name' => 'Danny Søhus',
//        'division_id' => $division_id,
//        'team_id' => 15
//    ]);
//
//    \App\Person::create([
//        'name' => 'Tony Skjoldmose',
//        'division_id' => $division_id,
//        'team_id' => 16
//    ]);
//
//    \App\Person::create([
//        'name' => 'Søren Krog Mogensen',
//        'division_id' => $division_id,
//        'team_id' => 16
//    ]);
//
//    //Hold 9
//
//    \App\Person::create([
//        'name' => 'Eskild Pedersen',
//        'division_id' => $division_id,
//        'team_id' => 17
//    ]);
//
//    \App\Person::create([
//        'name' => 'Carsten Christensen',
//        'division_id' => $division_id,
//        'team_id' => 17
//    ]);
//
//    \App\Person::create([
//        'name' => 'Martin Hubert',
//        'division_id' => $division_id,
//        'team_id' => 18
//    ]);
//
//    \App\Person::create([
//        'name' => 'Klaus Blokhus',
//        'division_id' => $division_id,
//        'team_id' => 18
//    ]);
//
//
//    //Hold 10
//
//    \App\Person::create([
//        'name' => 'Thor Rasmussen',
//        'division_id' => $division_id,
//        'team_id' => 19
//    ]);
//
//    \App\Person::create([
//        'name' => 'Tobias Rasmussen',
//        'division_id' => $division_id,
//        'team_id' => 19
//    ]);
//
//    \App\Person::create([
//        'name' => 'Jan Christensen',
//        'division_id' => $division_id,
//        'team_id' => 20
//    ]);
//
//    \App\Person::create([
//        'name' => 'Allan Riboe',
//        'division_id' => $division_id,
//        'team_id' => 20
//    ]);
//
//    //Hold 11
//
//    \App\Person::create([
//        'name' => 'Uffe Mortensen',
//        'division_id' => $division_id,
//        'team_id' => 21
//    ]);
//
//    \App\Person::create([
//        'name' => 'Bo Andersen',
//        'division_id' => $division_id,
//        'team_id' => 21
//    ]);
//
//    \App\Person::create([
//        'name' => 'Per Houmann',
//        'division_id' => $division_id,
//        'team_id' => 22
//    ]);
//
//    \App\Person::create([
//        'name' => 'Kurt Pedersen',
//        'division_id' => $division_id,
//        'team_id' => 22
//    ]);
//
//    //Hold 12
//
//    \App\Person::create([
//        'name' => 'Finn Jensen',
//        'division_id' => $division_id,
//        'team_id' => 23
//    ]);
//
//    \App\Person::create([
//        'name' => 'Peter Westergaard',
//        'division_id' => $division_id,
//        'team_id' => 23
//    ]);
//
//    \App\Person::create([
//        'name' => 'Villy Madsen',
//        'division_id' => $division_id,
//        'team_id' => 24
//    ]);
//
//    \App\Person::create([
//        'name' => 'Anders Madsen',
//        'division_id' => $division_id,
//        'team_id' => 24
//    ]);
//
//    //Hold 13
//
//    \App\Person::create([
//        'name' => 'Martin Lefevre Sørensen',
//        'division_id' => $division_id,
//        'team_id' => 25
//    ]);
//
//    \App\Person::create([
//        'name' => 'Jan Østergaard Nielsen',
//        'division_id' => $division_id,
//        'team_id' => 25
//    ]);
//
//    \App\Person::create([
//        'name' => 'Poul Erik Duus',
//        'division_id' => $division_id,
//        'team_id' => 26
//    ]);
//
//    \App\Person::create([
//        'name' => 'Michael Jacobsen',
//        'division_id' => $division_id,
//        'team_id' => 26
//    ]);
//
//    //Hold 14
//
//    \App\Person::create([
//        'name' => 'Ivan Bremholm',
//        'division_id' => $division_id,
//        'team_id' => 27
//    ]);
//
//    \App\Person::create([
//        'name' => 'Ove Madsen',
//        'division_id' => $division_id,
//        'team_id' => 27
//    ]);
//
//    \App\Person::create([
//        'name' => 'Jan Hubert',
//        'division_id' => $division_id,
//        'team_id' => 28
//    ]);
//
//    \App\Person::create([
//        'name' => 'Helge Kjøndal',
//        'division_id' => $division_id,
//        'team_id' => 28
//    ]);
//
//    //Hold 15
//
//    \App\Person::create([
//        'name' => 'Niels Thorsen Færk',
//        'division_id' => $division_id,
//        'team_id' => 29
//    ]);
//
//    \App\Person::create([
//        'name' => 'Tonny Northmann',
//        'division_id' => $division_id,
//        'team_id' => 29
//    ]);
//
//    \App\Person::create([
//        'name' => 'Einer Eliassen',
//        'division_id' => $division_id,
//        'team_id' => 30
//    ]);
//
//    \App\Person::create([
//        'name' => 'Aksel Larsen',
//        'division_id' => $division_id,
//        'team_id' => 30
//    ]);
//
//    //Hold 16
//
//    \App\Person::create([
//        'name' => 'Cees Vader',
//        'division_id' => $division_id,
//        'team_id' => 31
//    ]);
//
//    \App\Person::create([
//        'name' => 'Svend Erik Jørgensen',
//        'division_id' => $division_id,
//        'team_id' => 31
//    ]);
//
//    \App\Person::create([
//        'name' => 'Svend Åge Madsen',
//        'division_id' => $division_id,
//        'team_id' => 32
//    ]);
//
//    \App\Person::create([
//        'name' => 'Benedikte Havemann',
//        'division_id' => $division_id,
//        'team_id' => 32
//    ]);
//
//    //Hold 17
//
//    \App\Person::create([
//        'name' => 'Mathais Mølbak Jacobsen',
//        'division_id' => $division_id,
//        'team_id' => 33
//    ]);
//
//    \App\Person::create([
//        'name' => 'Jørgen Weinkauff Jacobsen',
//        'division_id' => $division_id,
//        'team_id' => 33
//    ]);
//
//    \App\Person::create([
//        'name' => 'Svend Åge Madsen',
//        'division_id' => $division_id,
//        'team_id' => 34
//    ]);
//
//    \App\Person::create([
//        'name' => 'Benedikte Havemann',
//        'division_id' => $division_id,
//        'team_id' => 34
//    ]);



});

Route::get('show-table', function(){

    $division_id = 3;


    $ships = \App\Ship::where('division_id', $division_id)->orderBy('name')->get()->keyBy('id')->toArray();

    $day_one = $ships;

    foreach ($day_one as $ship){

        $available_ships_ids = DB::select(DB::raw("
          SELECT id
          FROM teams
          WHERE EXISTS 
          ( 
          	SELECT * FROM ship_team_days
            WHERE ship_team_days.`ship_id` = ".$ship['id']." 
            AND ship_team_days.`team_id` = teams.`id` 
            AND ship_team_days.`day` = 1
          )
          "));

        $filtered_ids = [];

        foreach($available_ships_ids as $team)
        {
            $filtered_ids[$team->id] = $team->id;
        }

        $teams = \App\Team::whereIn('id', array_values($filtered_ids))->with('persons')->get()->toArray();

        $day_one[$ship['id']]['teams'] = $teams;
    }

    $day_two = $ships;

    foreach ($day_two as $ship){

        $available_ships_ids = DB::select(DB::raw("
          SELECT id
          FROM teams
          WHERE EXISTS 
          ( 
          	SELECT * FROM ship_team_days
            WHERE ship_team_days.`ship_id` = ".$ship['id']." 
            AND ship_team_days.`team_id` = teams.`id` 
            AND ship_team_days.`day` = 2
          )
          "));

        $filtered_ids = [];

        foreach($available_ships_ids as $team)
        {
            $filtered_ids[$team->id] = $team->id;
        }

        $teams = \App\Team::whereIn('id', array_values($filtered_ids))->with('persons')->get()->toArray();

        $day_two[$ship['id']]['teams'] = $teams;
    }

    return view('table')->with(['dayOne' => $day_one, 'dayTwo' => $day_two]);

});

Route::get('day-two', 'Controller@runDayTwo');
Route::get('clear', 'Controller@clearDB');



Route::get('/day-one', function () {

    $division_id = 3;

    $teams = \App\Team::where('division_id', $division_id)->whereNotIn('id', [32,33,13])->get()->shuffle();

    foreach ($teams as $team)
    {

        //Hent id ud på alle de skibe som har pladser tilbage, og som ikke har en blokeret team på sig.
        $available_ships_ids = DB::select(DB::raw("
          SELECT id
          FROM ships
          WHERE ships.`slots` != 0
          AND NOT EXISTS 
          ( 
          	SELECT * FROM ship_team_days
            WHERE ship_team_days.`ship_id` = ships.`id` 
            AND ship_team_days.`day` = 1
            AND ship_team_days.`team_id` = ".$team->block_team."
          )
          "));

        shuffle($available_ships_ids);

        $filtered_ids = [];

        foreach($available_ships_ids as $ship)
        {
            $filtered_ids[$ship->id] = $ship->id;
        }

        $id = end($filtered_ids);

        if(!$id){
            var_dump($team->toArray());
            exit;
        }

        \App\ShipTeamDays::create([
            'day' => 1,
            'team_id' => $team->id,
            'ship_id' => $id
        ]);

        \App\Ship::where('id', $id)->decrement('slots', 2);

    }


});