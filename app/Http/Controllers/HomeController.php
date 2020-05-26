<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\register;

class HomeController extends Controller
{
    public function insert(Request $request)
    {
    	$var = new register;
    	$var->name = $request->name;
		$var->email = $request->email;
    	$var->phone = $request->phone;
 
    	if( $request->hasFile('image'))
    	{
		    $image = $request->file('image');
		    $path = public_path(). '/uploads/images/';
		    $filename = time() . '.' . $image->getClientOriginalExtension();
		    $image->move($path, $filename);
		    $var->image = $filename;
		}	     
    	$var->save();
		return redirect()->back();
    }

    public function edit($id)
	{
		$data = register::find($id);			
		return view('edit_show', compact('data'));	
	}

	public function update(Request $request, $id)
	{
		$data = register::find($id);	
		$data->name = $request->name;
		$data->email = $request->email;
    	$data->phone = $request->phone;

    	if( $request->hasFile('image'))
    	{
		    $image = $request->file('image');
		    $path = public_path(). '/uploads/images/';
		    $filename = time() . '.' . $image->getClientOriginalExtension();
		    $image->move($path, $filename);
		    $data->image = $filename;
		}

    	$data->save();	
    	return redirect('/');
    	//return view('welcome');		
	}

	public function delete($id)
	{
		$data = register::find($id);
		$data->delete();			
		return redirect()->back();
	}
}
