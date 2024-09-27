<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\List1;

class ToDoController extends Controller
{
    public function SignUp(){
        return view('ToDo.SignUp');
    }

    public function Home(){
        $List1 = List1::all();
        return view('ToDo.Home',['List1'=>$List1]);
       # return view('ToDo.Home');
    }

    public function MyList(){
        $List1 = List1::all();
        return view('ToDo.MyList',['List1'=>$List1]);
    }

   

    public function create(){
        return view('ToDo.add');
    }

    public function store(Request $request){

       ## dd($request->all());

        $request->validate([
            'email'=>['required','email',],
            'password'=>['required','min:6']
        ]);
      
        $User = new User();
        $User->email = $request->email;
        $User->password = $request-> password;
        $User->save();
        return redirect('/')->with('success', 'User registered successfully!');
        
        
    
    }


   public function login(Request $request)
{
   
    $validatedData = $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);

    $user = User::where('email', $validatedData['email'])->first();

    if ($user && Hash::check($validatedData['password'], $user->password)) {
        
        Auth::login($user);
        return redirect('ToDo/Home')->with('success', 'Logged in successfully!');
    }

    
    return redirect()->back()->withErrors(['email' => 'Invalid credentials']);
}



public function save(Request $request ){

    $request->validate([
        'date'=>['required','date',],
        'title'=>['required','string','max:15'],
        'description'=>['required','string','max:1000'],

        
    ]);

    $userId = Auth::id();


    $List1 = new List1();
        $List1->date = $request->date;
        $List1->title = $request-> title;
        $List1->description = $request-> description;
        $List1->user_id = $userId;
        $List1->save();
        return redirect()->back()->with('success', 'User registered successfully!');
}



public function destroy($id){
    $List1 =List1 ::findorFail($id);
    $List1->delete();
    return redirect()->back()->with('success', 'User registered successfully!');

}



    
    public function edit($id){
        $List1 =List1 ::findorFail($id);
        return view('ToDo.edit',['List1'=>$List1]);
    }

    

    public function update($id, Request $request){
        
        $List1 =List1 ::findorFail($id);
        $List1->date= $request->date;
        $List1->title= $request->title;
        $List1->description= $request->description;
        $List1->user_id  = Auth::id();
        $List1->save();
        return redirect()->back()->with('success', 'User registered successfully!');

        
       
    }
}
