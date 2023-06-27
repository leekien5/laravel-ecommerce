<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Subcategory;
use Validator;
use Str;
use Auth;
class SubcategoryController extends Controller
{
    public function index(){

        $data = [
            'title' => 'Subcategory',
            'category' => Subcategory::all()->sortBy('DESC')
        ];

        return view('admin.subcategory.index', $data);
    }

    public function create(){

        $data = [
            'title' => 'Create subcategory'
        ];

        return view('admin.subcategory.create', $data);
    }

    public function check(Request $request){
        $name = Subcategory::where('name', $request->name)->exists();
        if($name){
            return response()->json(['status' => 'success', 'messages' => 'not available'], 200);
        }else{
            return response()->json(['status' => 'success', 'messages' => 'available'], 201);
        }
    }

    public function save(Request $request){
        $validators = Validator($request->all(), [
            'category' => 'required',
            'path' => 'required',
            'name' => 'required|unique:categories',
        ]);

        if($validators->fails()){
            return redirect()->route('subcategoryCreate')->withErrors($validators)->withInput();
        }else{
            $path = $request->file('path');
            $extension_path = $path->getClientOriginalExtension();
            $full_name_path = Str::random(20).".".$extension_path;
            $path->move(public_path('shop/products/'), $full_name_path);

            Subcategory::create([
                'category_id' => $request->category,
                'name' => $request->name,
                'path' => $full_name_path
            ]);

            return redirect()->route('subcategory');

        }
    }

    public function delete($id, $path){
        $paths = public_path().'/shop/products/'. $path;
        if(file_exists($paths)){
            unlink($paths);
        }

        Subcategory::destroy($id);

        return redirect()->route('subcategory')->with('success', 'Subcategory deleted');
    }
}
