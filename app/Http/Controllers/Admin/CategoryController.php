<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use Exception;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $categories = Category::paginate();
        return view('admin.categories.index', ['categories' => $categories]);
    }

    /**
     * Show the form for creating a new resource.
     */

    public function getCategories(Request $request)
    {
        if ($request->ajax()) {
            // $data = Category::where('order_number', $request->filter);

            $categories = Category::latest()->get();
            return DataTables::of($categories)

                ->addIndexColumn()

            // ->addColumn('action', function ($row) {
            //     $actionBtn = '<a href="javascript:void(0)" class="edit btn btn-success btn-sm">Edit</a> <a href="javascript:void(0)" class="delete btn btn-danger btn-sm">Delete</a>';
            //     return $actionBtn;
            // })
                ->addColumn('status', function ($row) {

                    if ($row->status == 1) {
                        return "Active";
                    } else {
                        return "Inactive";
                    }

                })
                ->addColumn('action', function ($category) {

                    $actionBtn = '<a href="' . route('admins.categories.edit', $category->id) . '" title="Edit User" class="btn btn-sm" style="color: #fff;background-color: #3DCB3A;border-color: #8ad3d3"> <i class="fa fa-edit"></i> </a>
                        <a href="' . route('admins.categories.delete', $category->id) . '" class="btn btn-danger btn-sm" title="Hapus User" ><i class="fa fa-trash "></i></a>';
                    return $actionBtn;
                })
                ->make(true);

        }
    }

    public function create()
    {
        //
        return view('admin.categories.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CategoryRequest $request)
    {
        //

        try {

            $category_data = $request->validated();
            $album = Category::create(
                $category_data);

            return redirect()->route('admins.categories.index')->with(['success' => 'تم الحفظ بنجاح']);

            // Do your SQL here
        } catch (Exception $e) {
            return redirect()->route('admins.categories.create')->with(['error' => ' حدث خطأ  ما']);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        ## Read POST data
        // $id = $request->post('id');

        // $category = Category::find($id);
        $category = Category::find($id);
        return view('admin.categories.edit', compact('category'));

        dd($category);

        // $response = array();
        // if (!empty($category)) {

        //     $response['name'] = $category->name;
        //     $response['order_number'] = $category->order_number;
        //     $response['status'] = $category->status;
        //     $response['added_on'] = $category->added_on;

        //     $response['success'] = 1;
        // } else {
        //     $response['success'] = 0;
        // }

        // return response()->json($response);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        //
        ## Read POST data
        $id = $request->post('id');

        $category = Category::find($id);

        $response = array();
        if (!empty($category)) {
            $new_data['name'] = $request->post('name');
            $new_data['email'] = $request->post('email');
            $new_data['gender'] = $request->post('gender');
            $new_data['city'] = $request->post('city');

            if ($category->update($new_data)) {
                $response['success'] = 1;
                $response['msg'] = 'Update successfully';
            } else {
                $response['success'] = 0;
                $response['msg'] = 'Record not updated';
            }

        } else {
            $response['success'] = 0;
            $response['msg'] = 'Invalid ID.';
        }

        return response()->json($response);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
