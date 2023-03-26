<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usersapi;
use GuzzleHttp\Client;
use League\Csv\Writer;
use Illuminate\Support\Facades\Storage;
use App\Jobs\ExportUsers;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\UsersExport;

class UserAPIController extends Controller
{
    public function index()
    {
        $users = Usersapi::paginate(5);
        return view('users.allusers', compact('users'));
    }
    public function fetchUsers()
    {
        $client = new Client();
        $response = $client->get('https://randomuser.me/api/');
        $data = json_decode($response->getBody(), true)['results'][0];

        $user = new Usersapi; 
        $user->gender = $data['gender'];
        $user->title = $data['name']['title'];
        $user->first_name = $data['name']['first'];
        $user->last_name = $data['name']['last'];
        $user->street = $data['location']['street']['name'];
        $user->city = $data['location']['city'];
        $user->state = $data['location']['state'];
        $user->country = $data['location']['country'];
        $user->postcode = $data['location']['postcode'];
        $user->email = $data['email'];
        $user->phone = $data['phone'];
        $user->picture = $data['picture']['large'];
        $user->save();
        return redirect('/allusers');
    }

    public function edit($id)
    {
        $user = Usersapi::findOrFail($id);
        //var_dump($user);exit();
        return view('users.edituser', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $user = Usersapi::findOrFail($id);
        $user->gender = $request->input('gender');
        $user->title = $request->input('title');
        $user->first_name = $request->input('first_name');
        $user->last_name = $request->input('last_name');
        $user->street = $request->input('street');
        $user->city = $request->input('city');
        $user->state = $request->input('state');
        $user->country = $request->input('country');
        $user->save();
        return redirect('/allusers');
    }
    
    public function export()
    {
        return Excel::download(new UsersExport, 'users.csv');
    }

}