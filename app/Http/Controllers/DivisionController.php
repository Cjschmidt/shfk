<?
namespace App\Http\Controllers;

use App\Division;
use App\Person;
use App\User;
use Illuminate\Http\Request;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Auth;
use Input;
use Illuminate\Support\Facades\Session;
use Illuminate\View\View;

class DivisionController extends Controller
{

    public function newDivision(){
        $division = new Division();
        $division->save();
        $id = $division->getKey();
        return redirect("/division/". $id ."/new");
    }
    public function showNew($division){
        return view("new_division")->with('division', $division);

    }
    public function saveName($division){
        $division->name = $_POST['name'];
        $division->save();
        $returnHTML = View('division/add_persons')->render();// or method that you prefere to return data + RENDER is the key here
        return response()->json( array('success' => true, 'html'=>$returnHTML, 'header' => "Tilføj personer til turen") );
    }
    public function savePerson($division){
        $person = new Person();
        $person->name = $_POST['name'];
        $person->division_id = $division->id;
        $person->save();
        return array("success" => true, "person_id"=> $person->id);
    }

}