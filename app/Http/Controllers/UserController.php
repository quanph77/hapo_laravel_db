<?php
  
namespace App\Http\Controllers;
  
use App\User;
use Illuminate\Http\Request;
  
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::latest()->paginate(6);
  
        return view('user.index',compact('user'))
            ->with('i', (request()->input('page', 1) - 1) * 6);
    }
   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.create');
    }
  
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone_number' => 'required',
            'dob' => 'required',
            'image' => 'required',
        ]);
        user::create($request->all());
        return redirect()->route('user.index')
                        ->with('success','User created successfully.');
    }
   
    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $user
     * @return \Illuminate\Http\Response
     */
    public function show(user $user)
    {
        return view('user.show',compact('user'));
    }
   
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\user  $product
     * @return \Illuminate\Http\Response
     */user
    public function edit(user $user)
    {
        return view('user.edit',compact('user'));
    }
  
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\user  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, user $user)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone_number' => 'required',
            'dob' => 'required',
            'image' => 'required',
        ]);
  
        $user->update($request->all());
  
        return redirect()->route('user.index')
                        ->with('success','User updated successfully');
    }
  
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\user  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(user $user)
    {
        $user->delete();
  
        return redirect()->route('user.index')
                        ->with('success','User deleted successfully');
    }
}
