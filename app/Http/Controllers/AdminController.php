<?php
//nma gap tinchmisan?
namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("admin.table.admin");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.form.add_admin');
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
            'name'=>'required|string|min:3',
            'image'=>'required|image',
        ]);

        $admin = new Admin();
        $admin->name = $request->name;
//        if ($request->hasFile('image')){
//            $image = $request->file('image')->store("img/");
//            $admin->image = $image;
//        }
        if ($image = $request->file('image')) {
            $imageDestinationPath = 'uploads/admin_images/';
            $postImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($imageDestinationPath, $postImage);
            $admin->image = $postImage;
        }

//        if ($image = $request->file('image')) {
//            $destinationPath = 'image/';
//            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
//            $image->move($destinationPath, $profileImage);
//            $input['image'] = "$profileImage";
//        }

        $admin->save();

        return view("admin.table.admin");




    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $admin = Admin::find($id);

        $id = $admin['id'];
        $name = $admin['name'];
        $image = $admin['image'];

        return view('admin.form.edit_admin',['id'=>$id,'name'=>$name,'image'=>$image]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Admin $admin)
    {

        $request->validate([
            'name'=>'required|string|min:3',
            'image'=>'required|image',
        ]);

//        $input = $request->all();
        $name = $request->input('name');
        $id = $request->input('id');

        if ($image = $request->file('image')) {
            $imageDestinationPath = 'uploads/admin_images/';
            $postImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($imageDestinationPath, $postImage);
            $image = "$postImage";
        }

//        Admin::where('id',$id)->update(['name' => $input['name'],'image' => $input['image']]);
        Admin::where('id',$id)->update(['name' => $name, 'image' => $image]);

//        $admin->update($input);

        return view("admin.table.admin");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admin $admin)
    {
        //
    }
}
