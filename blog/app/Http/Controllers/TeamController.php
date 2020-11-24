<?php

namespace App\Http\Controllers;

use App\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function index(){

return view('admin.team.add-team');
    }

    public function saveMember(Request $request){

        $teamMemberimg = $request->file('photo');
        $imgName=$teamMemberimg->getClientOriginalName();
        $directory='member-imges/';
        $imageUrl =$directory.$imgName;
        $teamMemberimg->move($directory, $imgName);

        $team= new Team();
        $team->memberid = $request-> memberid;
        $team->name = $request-> name;
        $team->description = $request-> description;
        $team->photo = $imageUrl;
        $team->publicationtstatus = $request-> publicationtstatus;
        $team->save();
        return redirect('team/add') ->with  ('message','Member save succesfully');


    }
    public function manageMember(){
        $teams = Team::all();
        return view('admin.teamMember.manage-teamdetails',['teams' => $teams]);



    }
    public function Unpublishmember($id){

        $teams= Team::find($id);
        $teams->publicationtstatus =0;
        $teams->save();
        return redirect('/team/manage');


/*     return $id;*/


    }
    public function Publishmember($id){


        $teams= Team::find($id);
        $teams->publicationtstatus =1;
        $teams->save();
        return redirect('/team/manage');

    }


    public function Editmember($id){
        $teams = Team::find($id);


        return view('admin.team.edit-team',['team'=>$teams ]);




    }
    public function Updatemember(Request $request ){
        $teams=Team::find($request->id);
        $teams->memberid = $request->memberid;
        $teams->name = $request->name;
        $teams->description = $request->description;
        $teams->publicationtstatus = $request->publicationtstatus;
        $teams->save();
        return redirect('/team/manage')->with('message','Updated Succesfully');




    }
    public function Deletemember ($id){
        $teams=Team::find($id);
        $teams->delete();
        return redirect('/team/manage')->with('message',' Member deleted Succesfully');


    }


}
