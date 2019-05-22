
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

    $division_id = 1;

//    \App\Division::create([
//        'name' => 'Skagen Havfiskefestival 2019'
//    ]);
////
////
//    \App\Team::create([
//        'name'          => 'Hold 1',
//        'division_id'   => $division_id,
//        'block_team'    => 2
//    ]);
//    \App\Team::create([
//        'name'          => 'Hold 2',
//        'division_id'   => $division_id,
//        'block_team'    => 1
//    ]);
//    \App\Team::create([
//        'name'          => 'Hold 3',
//        'division_id'   => $division_id,
//        'block_team'    => 4
//    ]);
//    \App\Team::create([
//        'name'          => 'Hold 4',
//        'division_id'   => $division_id,
//        'block_team'    => 3
//    ]);
//    \App\Team::create([
//        'name'          => 'Hold 5',
//        'division_id'   => $division_id,
//        'block_team'    => 6
//    ]);
//    \App\Team::create([
//        'name'          => 'Hold 6',
//        'division_id'   => $division_id,
//        'block_team'    => 5
//    ]);
//    \App\Team::create([
//        'name'          => 'Hold 7',
//        'division_id'   => $division_id,
//        'block_team'    =>8
//    ]);
//    \App\Team::create([
//        'name'          => 'Hold 8',
//        'division_id'   => $division_id,
//        'block_team'    => 7
//    ]);
//
//    \App\Team::create([
//        'name'          => 'Hold 9',
//        'division_id'   => $division_id,
//        'block_team'    => 9
//    ]);
//
//    \App\Team::create([
//        'name'          => 'Hold 10',
//        'division_id'   => $division_id,
//        'block_team'    => 11
//    ]);
//
//    \App\Team::create([
//        'name'          => 'Hold 11',
//        'division_id'   => $division_id,
//        'block_team'    => 10
//    ]);
//
//
//    \App\Team::create([
//        'name'          => 'Hold 12',
//        'division_id'   => $division_id,
//        'block_team'    => 13
//    ]);
//    \App\Team::create([
//        'name'          => 'Hold 13',
//        'division_id'   => $division_id,
//        'block_team'    => 12
//    ]);
//
//    \App\Team::create([
//        'name'          => 'Hold 14',
//        'division_id'   => $division_id,
//        'block_team'    => 14
//    ]);
//
//    \App\Team::create([
//        'name'          => 'Hold 15',
//        'division_id'   => $division_id,
//        'block_team'    => 16
//    ]);
//
//    \App\Team::create([
//        'name'          => 'Hold 16',
//        'division_id'   => $division_id,
//        'block_team'    => 15
//    ]);
//
//
//    \App\Team::create([
//        'name'          => 'Hold 17',
//        'division_id'   => $division_id,
//        'block_team'    => 18
//    ]);
//
//    \App\Team::create([
//        'name'          => 'Hold 18',
//        'division_id'   => $division_id,
//        'block_team'    => 17
//    ]);
//
//    \App\Team::create([
//        'name'          => 'Hold 19',
//        'division_id'   => $division_id,
//        'block_team'    => 20
//    ]);
//
//    \App\Team::create([
//        'name'          => 'Hold 20',
//        'division_id'   => $division_id,
//        'block_team'    => 19
//    ]);
//
//    \App\Team::create([
//        'name'          => 'Hold 21',
//        'division_id'   => $division_id,
//        'block_team'    => 22
//    ]);
//
//    \App\Team::create([
//        'name'          => 'Hold 22',
//        'division_id'   => $division_id,
//        'block_team'    => 21
//    ]);
//
//    \App\Team::create([
//        'name'          => 'Hold 23',
//        'division_id'   => $division_id,
//        'block_team'    => 24
//    ]);
//
//    \App\Team::create([
//        'name'          => 'Hold 24',
//        'division_id'   => $division_id,
//        'block_team'    => 23
//    ]);
//
//    \App\Team::create([
//        'name'          => 'Hold 25',
//        'division_id'   => $division_id,
//        'block_team'    => 26
//    ]);
//
//    \App\Team::create([
//        'name'          => 'Hold 26',
//        'division_id'   => $division_id,
//        'block_team'    => 25
//    ]);
//
//    \App\Team::create([
//        'name'          => 'Hold 27',
//        'division_id'   => $division_id,
//        'block_team'    => 28
//    ]);
//
//    \App\Team::create([
//        'name'          => 'Hold 28',
//        'division_id'   => $division_id,
//        'block_team'    => 27
//    ]);
//
//    \App\Team::create([
//        'name'          => 'Hold 29',
//        'division_id'   => $division_id,
//        'block_team'    => 30
//    ]);
//
//    \App\Team::create([
//        'name'          => 'Hold 30',
//        'division_id'   => $division_id,
//        'block_team'    => 29
//    ]);
//
//
//
//
//    //Hold 1
//
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
//        'name' => 'Torben Stenbroen',
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
////
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
//        'name' => 'Per Houmann',
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
//        'name' => 'Karsten Cramer',
//        'division_id' => $division_id,
//        'team_id' => 7
//    ]);
//
//    \App\Person::create([
//        'name' => 'Morten Norrsk',
//        'division_id' => $division_id,
//        'team_id' => 7
//    ]);
//
//    \App\Person::create([
//        'name' => 'Gudmund Bøgeskov',
//        'division_id' => $division_id,
//        'team_id' => 8
//    ]);
//
//    \App\Person::create([
//        'name' => 'Martin Lund',
//        'division_id' => $division_id,
//        'team_id' => 8
//    ]);
//
//
//    //Hold 5
//
//    \App\Person::create([
//        'name' => 'René Sølje',
//        'division_id' => $division_id,
//        'team_id' => 9
//    ]);
//
//    \App\Person::create([
//        'name' => 'Kenn Korneliusen',
//        'division_id' => $division_id,
//        'team_id' => 9
//    ]);
//
//
//    //Hold 6
//
//    \App\Person::create([
//        'name' => 'Allan Riboe',
//        'division_id' => $division_id,
//        'team_id' => 10
//    ]);
//
//    \App\Person::create([
//        'name' => 'Jan Christensen',
//        'division_id' => $division_id,
//        'team_id' => 10
//    ]);
//
//    \App\Person::create([
//        'name' => 'Svend Åge Madsen',
//        'division_id' => $division_id,
//        'team_id' => 11
//    ]);
//
//    \App\Person::create([
//        'name' => 'Svend Erik Jørgensen',
//        'division_id' => $division_id,
//        'team_id' => 11
//    ]);
//
//    //Hold 7
//
//    \App\Person::create([
//        'name' => 'Eskild Pedersen',
//        'division_id' => $division_id,
//        'team_id' => 12
//    ]);
//
//    \App\Person::create([
//        'name' => 'Carsten Christensen',
//        'division_id' => $division_id,
//        'team_id' => 12
//    ]);
//
//    \App\Person::create([
//        'name' => 'Martin Hubert',
//        'division_id' => $division_id,
//        'team_id' => 13
//    ]);
//
//    \App\Person::create([
//        'name' => 'Jan Hubert',
//        'division_id' => $division_id,
//        'team_id' => 13
//    ]);
//
//    //Hold 8
//
//    \App\Person::create([
//        'name' => 'Geir Solland',
//        'division_id' => $division_id,
//        'team_id' => 14
//    ]);
//
//    \App\Person::create([
//        'name' => 'Erik Jacobsen',
//        'division_id' => $division_id,
//        'team_id' => 14
//    ]);
//
//
//    //Hold 9
//
//    \App\Person::create([
//        'name' => 'Søren Kristensen',
//        'division_id' => $division_id,
//        'team_id' => 15
//    ]);
//
//    \App\Person::create([
//        'name' => 'Uffe Mortensen',
//        'division_id' => $division_id,
//        'team_id' => 15
//    ]);
//
//    \App\Person::create([
//        'name' => 'Lars Hellum',
//        'division_id' => $division_id,
//        'team_id' => 16
//    ]);
//
//    \App\Person::create([
//        'name' => 'Tor Arne Ryg',
//        'division_id' => $division_id,
//        'team_id' => 16
//    ]);
//
//
//    //Hold 10
//
//    \App\Person::create([
//        'name' => 'Mario Kristensen',
//        'division_id' => $division_id,
//        'team_id' => 17
//    ]);
//
//    \App\Person::create([
//        'name' => 'Danny Søhus',
//        'division_id' => $division_id,
//        'team_id' => 17
//    ]);
//
//    \App\Person::create([
//        'name' => 'Søren Krog Mogensen',
//        'division_id' => $division_id,
//        'team_id' => 18
//    ]);
//
//    \App\Person::create([
//        'name' => 'Torben Welle',
//        'division_id' => $division_id,
//        'team_id' => 18
//    ]);
//
//    //Hold 11
//
//    \App\Person::create([
//        'name' => 'Benny Johansson',
//        'division_id' => $division_id,
//        'team_id' => 19
//    ]);
//
//    \App\Person::create([
//        'name' => 'Anders Sonesson',
//        'division_id' => $division_id,
//        'team_id' => 19
//    ]);
//
//    \App\Person::create([
//        'name' => 'Magnus Landtblom',
//        'division_id' => $division_id,
//        'team_id' => 20
//    ]);
//
//    \App\Person::create([
//        'name' => 'Kenneth Hertz',
//        'division_id' => $division_id,
//        'team_id' => 20
//    ]);
//
//    //Hold 12
//
//    \App\Person::create([
//        'name' => 'Ole Pedersen',
//        'division_id' => $division_id,
//        'team_id' => 21
//    ]);
//
//    \App\Person::create([
//        'name' => 'Else Marie Rolle',
//        'division_id' => $division_id,
//        'team_id' => 21
//    ]);
//
//    \App\Person::create([
//        'name' => 'Finn Jensen',
//        'division_id' => $division_id,
//        'team_id' => 22
//    ]);
//
//    \App\Person::create([
//        'name' => 'Tommy Nielsen',
//        'division_id' => $division_id,
//        'team_id' => 22
//    ]);
//
//    //Hold 13
//
//    \App\Person::create([
//        'name' => 'Niels Thorsen Færk',
//        'division_id' => $division_id,
//        'team_id' => 23
//    ]);
//
//    \App\Person::create([
//        'name' => 'Peter westergaard',
//        'division_id' => $division_id,
//        'team_id' => 23
//    ]);
//
//    \App\Person::create([
//        'name' => 'Freddie Larsen',
//        'division_id' => $division_id,
//        'team_id' => 24
//    ]);
//
//    \App\Person::create([
//        'name' => 'Kent Rasmussen',
//        'division_id' => $division_id,
//        'team_id' => 24
//    ]);
//
//    //Hold 14
//
//    \App\Person::create([
//        'name' => 'Martin Sørensen',
//        'division_id' => $division_id,
//        'team_id' => 25
//    ]);
//
//    \App\Person::create([
//        'name' => 'Michael Jacobsen',
//        'division_id' => $division_id,
//        'team_id' => 25
//    ]);
//
//    \App\Person::create([
//        'name' => 'Jan Østergaard',
//        'division_id' => $division_id,
//        'team_id' => 26
//    ]);
//
//    \App\Person::create([
//        'name' => 'Jes Jepsen',
//        'division_id' => $division_id,
//        'team_id' => 26
//    ]);
//
//    //Hold 15
//
//    \App\Person::create([
//        'name' => 'Poul Erik Duus',
//        'division_id' => $division_id,
//        'team_id' => 27
//    ]);
//
//    \App\Person::create([
//        'name' => 'Bjarne Jensen',
//        'division_id' => $division_id,
//        'team_id' => 27
//    ]);
//
//    \App\Person::create([
//        'name' => 'Ivan Bremholm',
//        'division_id' => $division_id,
//        'team_id' => 28
//    ]);
//
//    \App\Person::create([
//        'name' => 'Brian Bach Pedersen',
//        'division_id' => $division_id,
//        'team_id' => 28
//    ]);
//
//    //Hold 16
//
//    \App\Person::create([
//        'name' => 'Cees Vader',
//        'division_id' => $division_id,
//        'team_id' => 29
//    ]);
//
//    \App\Person::create([
//        'name' => 'Klaus Blokhus',
//        'division_id' => $division_id,
//        'team_id' => 29
//    ]);
//
//    \App\Person::create([
//        'name' => 'Jan Christoffersen',
//        'division_id' => $division_id,
//        'team_id' => 30
//    ]);
//
//    \App\Person::create([
//        'name' => 'Nichlas Iversen',
//        'division_id' => $division_id,
//        'team_id' => 30
//    ]);



    \App\Ship::create([
        'name' => 'Sarah',
        'slots' => 12,
        'slots_day_two' => 12,
        'division_id' => 1
    ]);

    \App\Ship::create([
        'name' => 'Sjælland',
        'slots' => 14,
        'slots_day_two' => 14,
        'division_id' => 1
    ]);

    \App\Ship::create([
        'name' => 'Hirsholm',
        'slots' => 14,
        'slots_day_two' => 14,
        'division_id' => 1
    ]);

    \App\Ship::create([
        'name' => 'Oke',
        'slots' => 12,
        'slots_day_two' => 12,
        'division_id' => 1
    ]);

    \App\Ship::create([
        'name' => 'Vera Marie',
        'slots' => 12,
        'slots_day_two' => 12,
        'division_id' => 1
    ]);

});

Route::get('show-table', function(){

    $division_id = 1;


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


    \App\ShipTeamDays::where('day',1)->delete();
    \App\ShipTeamDays::where('day',2)->delete();

    DB::table('ships')->whereIn('id', [1,4,5])->update(array('slots' => 12));
    DB::table('ships')->whereIn('id', [2,3])->update(array('slots' => 14));

    $division_id = 1;

    $teams = \App\Team::where('division_id', $division_id)->get()->shuffle();

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