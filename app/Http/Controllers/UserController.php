<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
// store function
    public function store(Request $request)
    {

        if(!$this->islogedIn($request)){
            return "not logged in";
        }
        if(!$this->isAdmin($request)){
            return "not authorized";
        }

        $api_token = $request->get('api_token');
        if(!$this->islogedIn($request)){
            return "not logged in";
        }
        $validatedData = [
            'first_name' => $request->get('first_name'),
            'last_name' => $request->get('last_name'),
            'age' => $request->get('age'),
            'phone' => $request->get('phone'),
            'summary' => $request->get('professional_summary'),
            'email' => $request->get('email'),
            'password' => $request->get('password'),

        ];
                
        $user = new User();
        $user->first_name = $validatedData['first_name'];
        $user->last_name = $validatedData['last_name'];
        $user->age = $validatedData['age'];
        $user->phone = $validatedData['phone'];
        $user->summary = $validatedData['summary'];
        $user->email = $validatedData['email'];
        $user->address = "";
        $user->password = bcrypt($validatedData['password']);
        $user->admin =0;
        $user->save();

        return redirect("/users?api_token=$api_token");
    }
    // edit function
    public function edit(Request $request, string $id)
    {

        if(!$this->islogedIn($request)){
            return "not logged in";
        }
        if(!$this->isAdmin($request)){
            return "not authorized";
        }


        $api_token = $request->get('api_token');
        if(!$this->islogedIn($request)){
            return "not logged in";
        }
        $api_token = $request->get('api_token');
        $user = User::find($id);
        return view("updateForm", compact("user","api_token"));
    }
// update function
    public function update(Request $request, string $id)
    {
     
        $api_token = $request->get('api_token');

        if(!$this->islogedIn($request)){
            return "not logged in";
        }

        if(!$this->isAdmin($request)){
            return "not authorized";
        }
        

       // Find the user by ID
        $user = User::findOrFail($id);
    
        // Update the user with validated data
        $user->update([
            'first_name' => $request->get('first_name'),
            'last_name' =>  $request->get('last_name'),
            'phone' =>  $request->get('phone'),
            'email' =>  $request->get('email'),
            'address' =>  $request->get('address'),
            'summary' =>  $request->get('professional_summary'),
            'age' =>  $request->get('age'),
            'password' =>  $request->get('password'),
        ]);
        return redirect("/users?api_token=$api_token");

    }
// destroy function
    public function destroy( Request $request, string $id)
    {
        if(!$this->islogedIn($request)){
            return "not logged in";
        }
        if(!$this->isAdmin($request)){
            return "not authorized";
        }
        
        $api_token = $request->get('api_token');
        $user = User::find($id);
        if ($user) {
            $user->delete();
            return redirect("/users?api_token=$api_token");
        }
    }

    // token based
    public function login (request $request)
    {
        $email = $request->get('email');
        $password = $request->get('password');
    
        // find user by email
        $user = User::where('email', $email)->first();

        if (!$user) {
            return "invalid Email";
        }

    // verify password
    if (Hash::check($password, $user->password)) {
        // Generate the API token
        $api_token = base64_encode($user->id . '|' . time());
    
        // Update the user's api_token
        $user->update(['api_token' => $api_token]);
    
        // Retrieve all users
        $users = User::all()->toArray();
    
        // Pass the users and api_token to the view
        return view('Users', compact('users', 'api_token'));
    } else {
        return "Invalid password";
    }
}

    public function islogedIn (Request $request){
        $api_token=$request->get('api_token'); 

        if ($api_token){
            $tokenParts = explode('|', base64_decode($api_token));
            $userId = $tokenParts[0];

            // fins the user by ID
            $user = User::find($userId);

            if ($user['api_token']!=null){
                return true;
            }else{
                return false;
            }
        }
    }

    public function isAdmin (Request $request){
        $api_token=$request->get('api_token'); 

        if ($api_token){
            $tokenParts = explode('|', base64_decode($api_token));
            $userId = $tokenParts[0];

            // fins the user by ID
            $user = User::find($userId);

            if ($user['admin']==1){
                return true;
            }else{
                return false;
            }
        }
    }

    
    public function logout(Request $request)
    {
        $token = $request->get('api_token');
          if(!$this->islogedIn($request)){
            return "not logged in";
        }
        if ($token) {
            $tokenParts = explode('|', base64_decode($token)); 
            $userId = $tokenParts[0]; 

            // find the user by id
            $user = User::find($userId);
            if ($user) {
                $user ->api_token = null;
                $user->save();
            }
        }
        return redirect ('homePage');
    }

// views
    public function aboutUs(Request $request){

        $token = $request->get('api_token');
        if(!$this->islogedIn($request)){
            return "not logged in";
        }
        return view('AboutUsPage')->with("api_token", $token);
    } 
    public function form(Request $request){
        
        if(!$this->islogedIn($request)){
            return "not logged in";
        }
        if(!$this->isAdmin($request)){
            return "not authorized";
        }
        
        $token = $request->get('api_token');
        return view('Form')->with("api_token", $token);
    } 
    public function users(Request $request)
    {
        if(!$this->islogedIn($request)){
            return "not logged in";
        }
        
        $api_token = $request->get('api_token');
        $users = User::all()->toArray();
        return view('Users')->with(array("api_token"=> $api_token, "users"=>$users));
    }
    public function getLoginPage(Request $request){
       
        $api_token = $request->get('api_token');
        return view('homePage')->with("api_token", $api_token); 
    }
    public function userShow(Request $request, $id)
    {
        if (!$this->islogedIn($request)) {
            return "not logged in";
        }
        if(!$this->isAdmin($request)){
            return "not authorized";
        }
        
        $api_token = $request->get('api_token');
        $user = User::findOrFail($id);
        return view('userView', compact('user', 'api_token'));
    }


 }
// cada funcao criar uma funcao para checar o profile 






