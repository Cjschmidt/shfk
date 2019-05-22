<?php

namespace App\Http\Controllers;

use App\Ship;
use App\ShipTeamDays;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\DB;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected $attempts = 0;

    protected $hits = 0;


    public function runDayTwo()
    {

        $this->clearDB();
        $division_id = 1;

        $teams = \App\Team::where('division_id', $division_id)->get()->shuffle();

        $this->dayTwo($teams);

    }

    function dayTwo($teams)
    {

        $this->clearDB();

        $this->attempts++;
        var_dump($this->attempts);

        foreach ($teams as $team)
        {

            $last_ship = DB::select(DB::raw("
          	SELECT id, ship_id FROM ship_team_days
            WHERE ship_team_days.`day` = 1
            AND ship_team_days.`team_id` = ".$team->id."
          "));

            $last_ship = $last_ship[0]->ship_id;

            $last_teams = DB::select(DB::raw("
          SELECT id, team_id FROM ship_team_days
            WHERE ship_team_days.`day` = 1
            AND ship_team_days.`ship_id` = ".$last_ship."
          "));

            $last_team_ids = [];

            foreach($last_teams as $last_team)
            {
                $last_team_ids[$last_team->team_id] = $last_team->team_id;
            }

            $last_team_ids[$team->block_team] = $team->block_team;



            $available_ships_ids = DB::select(DB::raw("
          SELECT id
          FROM ships
          WHERE ships.`slots_day_two` != 0
          AND ships.`id` != ".$last_ship."
          AND NOT EXISTS 
          ( 
          	SELECT * FROM ship_team_days
            WHERE ship_team_days.`ship_id` = ships.`id` 
            AND ship_team_days.`day` = 2
            AND ship_team_days.`team_id` IN (".implode(',', array_values($last_team_ids)).")
          )
          "));



            if($available_ships_ids)
            {
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
                    'day' => 2,
                    'team_id' => $team->id,
                    'ship_id' => $id
                ]);

                \App\Ship::where('id', $id)->decrement('slots_day_two', 2);
            }
            else
            {

                $available_ships_ids = DB::select(DB::raw("
                    SELECT ships.*, COUNT(team_id) AS team_count
                    FROM ships LEFT JOIN ship_team_days 
                    ON ships.id = ship_team_days.ship_id AND ship_team_days.day = 2  AND ship_team_days.`team_id` IN(".implode(',', array_values($last_team_ids)).")
                    WHERE ships.`slots_day_two` != 0
                    AND ships.`id` != ".$last_ship."
                    GROUP BY ships.id
                    ORDER BY team_count ASC
                "));


                if(isset($available_ships_ids[0]))
                {

                    $id = $available_ships_ids[0]->id;

                    if($available_ships_ids[0]->team_count)
                    {

                        $this->hits++;
                    }

                    if(!$id){

                        var_dump($team->toArray());
                        exit;
                    }

                    \App\ShipTeamDays::create([
                        'day' => 2,
                        'team_id' => $team->id,
                        'ship_id' => $id
                    ]);

                    \App\Ship::where('id', $id)->decrement('slots_day_two', 2);
                }
                else{
                    $this->hits = 0;
                    $this->dayTwo($teams->shuffle());
                }

            }
        }

        if($this->hits > 10)
        {
            var_dump($this->hits);
            $this->hits = 0;
            $this->dayTwo($teams->shuffle());
        }

    }


    function clearDB()
    {

        ShipTeamDays::where('day',2)->delete();

        DB::table('ships')->whereIn('id', [1,4,5])->update(array('slots_day_two' => 12));
        DB::table('ships')->whereIn('id', [2,3])->update(array('slots_day_two' => 14));

    }
}
