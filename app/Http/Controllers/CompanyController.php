<?php

namespace App\Http\Controllers;

use App\Company;
use http\Url;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = Company::latest()->get();

        if ($request->ajax()) {
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row) {
                    $url = route('company.edit', $row->id);
                    $button =
                        '<center>' .
                        '<form action="' .  $url  . '" method="post">' .
                        csrf_field()  . method_field("DELETE")  .
                        '<a href="' . $url . '" class=" btn btn-primary" style="margin-right: 10px">Edit</a>' .
                        '<button class="btn btn-danger" type="submit" onclick="return confirm(' .
                        "'Are you sure delete $row->name ?')" .
                        '" href=""><i class="fa fa-trash"></i>Delete</button>' .
                        '</form>' .
                        '</center>';
                    return $button;
                })
                ->editColumn('created_at', function($row) {
                    $formattingDate = \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $row->created_at)->format('F j, Y');
                    $lastCreated = \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $row->created_at)->diffForHumans();
                    $row = $formattingDate . ' (' . $lastCreated . ')';
                    return $row;
                })
                ->make(true);
        }

        return view('company');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Upload Image
        $image = $request->file('image');
        $extension = $image->getClientOriginalExtension();
        $imageName = date('Ymdhis') . "." . $extension;
        $image->move('storage/company/', $imageName);
        $imagePath = 'storage/company/' . $imageName;

        Company::create([
            'name' => $request->name,
            'email' => $request->email,
            'website' => $request->website,
            'logo' => $imagePath,
        ]);

        $successMessage = "Success to create company! ";
        return redirect()->route('company.index')->with('success', $successMessage);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Company::find($id);
        return view('company-edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = Company::find($id);

        if ($request->image != null) {

            if (file_exists($data->logo)) {
                unlink($data->logo);
            }

            //Upload Image
            $image = $request->file('image');
            $extension = $image->getClientOriginalExtension();
            $imageName = date('Ymdhis') . "." . $extension;
            $image->move('storage/company/', $imageName);
            $imagePath = 'storage/company/' . $imageName;

        } else {
            $imagePath = $data->logo;
        }

        $data->name = $request->name;
        $data->email = $request->email;
        $data->website = $request->website;
        $data->logo = $imagePath;
        $data->save();

        $successMessage = "Success to update company! ";
        return redirect()->route('company.index')->with('success', $successMessage);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Company::find($id);

        if (file_exists($data->logo)) {
            unlink($data->logo);
        }

        $data->delete();
        $successMessage = "Success delete Company! ";
        return redirect()->route('company.index')->with('success', $successMessage);
    }
}
