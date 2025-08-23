<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\Video_view;
use DataTables;
use Validator;

class Video_viewsController extends Controller
{

    public function index(Request $request)
    {
        $data = Video_view::get();

        if ($request->ajax()) {
            $data = Video_view::query();
            $data = $data->orderBy('id', 'DESC');

            return Datatables::of($data)
                ->addColumn('checkbox', function($row){
                    $checkbox = '<div class="form-check form-check-sm p-3 form-check-custom form-check-solid">
                                    <input class="form-check-input" type="checkbox" value="'.$row->id.'" />
                                </div>';
                    return $checkbox;
                })
                ->addColumn('name', function($row){
                    $name = '<div class="d-flex flex-column"><a href="javascript:;" class="text-gray-800 text-hover-primary mb-1">'.$row->append_name.'</a>';
                    $name .= '<span>'.$row->email.'</span></div>';
                    return $name;
                })
                ->addColumn('phone', function($row){
 
                    $phone = $row->phone;
                    
                    return $phone;
                })
                ->addColumn('is_active', function($row){
                    if($row->is_active == 1) {
                        $is_active = '<div class="badge badge-light-success fw-bold">مقعل</div>';
                    } else {
                        $is_active = '<div class="badge badge-light-danger fw-bold">غير مفعل</div>';
                    }
                    
                    return $is_active;
                })
                ->addColumn('actions', function($row){
                    $actions = '<div class="ms-2">
                                <a href="'.route('admin.video_views.show', $row->id).'" class="btn btn-sm btn-icon btn-warning btn-active-dark me-2" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                    <i class="bi bi-eye-fill fs-1x"></i>
                                </a>
                                <a href="'.route('admin.video_views.edit', $row->id).'" class="btn btn-sm btn-icon btn-info btn-active-dark me-2" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                    <i class="bi bi-pencil-square fs-1x"></i>
                                </a>
                            </div>';
                    return $actions;
                })
                ->filter(function ($instance) use ($request) {
                    if ($request->get('is_active') == '0' || $request->get('is_active') == '1') {
                        $instance->where('is_active', $request->get('is_active'));
                    }
                    if (!empty($request->get('search'))) {
                            $instance->where(function($w) use($request){
                            $search = $request->get('search');
                            $w->orWhere('name_ar', 'LIKE', "%$search%")
                            ->orWhere('phone', 'LIKE', "%$search%")
                            ->orWhere('email', 'LIKE', "%$search%");
                        });
                    }
                })
                ->rawColumns(['name','phone','is_active','checkbox','actions'])
                ->make(true);
        }
        return view('admin.video_view.index');
    }

    public function show($id)
    {
        $data = Video_view::find($id);
        return view('admin.video_view.show', compact('data'));
    }

    public function create()
    {
        return view('admin.video_view.create');
    }

    public function store(Request $request)
    {
        $rule = [
            'header' => 'required|string',
            'description_video' => 'required|string',
            'link' => 'required|url',
            'type' => 'required|in:0,1,2,3,4,5',
            'status' => 'required|in:0,1'
        ];

        $validate = Validator::make($request->all(), $rule);
        if ($validate->fails()) { 
            return redirect()->back()->with('message', $validate->messages()->first())->with('status', 'error');
        } 
        
        $row = Video_view::create([
            'header' => $request->header,
            'description_video' => $request->description_video,
            'duration_video' => $request->duration_video,
            'link' => $request->link . '&autoplay=1',
            'type' => $request->type,// 0 = youtube - 1 = tiktok - 2 = instagram - 3 = facebook - 4 = twitter - 5 = other
            'status' => $request->status,
            
        ]);

        if($request->hasFile('photo') && $request->file('photo')->isValid()){
            $row->addMediaFromRequest('photo')->toMediaCollection('video_view');
        }

        return redirect('admin/video_views')->with('message', 'تم الاضافة بنجاح')->with('status', 'success');
    }

    public function edit($id)
    {
        $data = Video_view::find($id);
        return view('admin.video_view.edit', compact('data'));
    }

    public function update(Request $request)
    {
        $rule = [
            'header' => 'required|string',
            'description_video' => 'required|string',
            'link' => 'required|url',
            'type' => 'required|in:0,1,2,3,4,5',
            'status' => 'required|in:0,1'
        ];

        $validate = Validator::make($request->all(), $rule);
        if ($validate->fails()) { 
            return redirect()->back()->with('message', $validate->messages()->first())->with('status', 'error');
        } 
        
        $data = Video_view::find($request->id);
        $data->update([
            'header' => $request->header,
            'description_video' => $request->description_video,
            'duration_video' => $request->duration_video,
            'link' => $request->link . '&autoplay=1',
            'type' => $request->type,// 0 = youtube - 1 = tiktok - 2 = instagram - 3 = facebook - 4 = twitter - 5 = other
            'status' => $request->status,
        ]);

        if($request->hasFile('photo') && $request->file('photo')->isValid()){
            $data->addMediaFromRequest('photo')->toMediaCollection('video_view');
        }

        return redirect('admin/video_views')->with('message', 'تم التعديل بنجاح')->with('status', 'success');
    }

    public function destroy(Request $request)
    {   

        try{
            Video_view::whereIn('id',$request->id)->delete();
        } catch (\Exception $e) {
            return response()->json(['message' => 'error']);
        }
        return response()->json(['message' => 'success']);

    }
}
