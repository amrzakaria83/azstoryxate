<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\Review;
use Carbon\Carbon;

use DataTables;
use Validator;

class ReviewsController extends Controller
{

    public function index(Request $request)
    {
        $data = Review::get();

        if ($request->ajax()) {
            $data = Review::query();
            $data = $data->orderBy('id', 'DESC');

            return Datatables::of($data)
                ->addColumn('checkbox', function($row){
                    $checkbox = '<div class="form-check form-check-sm p-3 form-check-custom form-check-solid">
                                    <input class="form-check-input" type="checkbox" value="'.$row->id.'" />
                                </div>';
                    return $checkbox;
                })
                ->addColumn('name', function($row){
                    $name = '<div class="d-flex flex-column"><a href="javascript:;" class="text-gray-800 text-hover-primary mb-1">'.$row->reviewer.'</a></div>';

                    return $name;
                })
                ->addColumn('phone', function($row){
 
                    $phone = $row->rating;
                    
                    return $phone;
                })
                ->addColumn('message', function($row){
 
                    $message = $row->comment;
                    
                    return $message;
                })
                ->addColumn('age', function($row){
 
                    $age = $row->age ?? 'No Entry';
                    
                    return $age;
                })
                ->addColumn('qualification', function($row){
 
                    $qualification = $row->qualification ?? 'No Entry';
                    
                    return $qualification;
                })
                ->addColumn('job', function($row){
 
                    $job = $row->job ?? 'No Entry';
                    
                    return $job;
                })
                ->addColumn('marital_status', function($row){
 
                    $marital_status = $row->marital_status ?? 'No Entry';
                    
                    return $marital_status;
                })
                ->addColumn('created_at', function($row){
 
                    $created_at = $row->created_at;
                    
                    return $created_at;
                })
                ->addColumn('from_time', function($row){
 
                    $from_time = $row->from_time;
                    if($row->from_time){
                        $currentTime = Carbon::now();
                        $timestamp = Carbon::parse($row->from_time);
                        $timeDifference = $currentTime->diff($timestamp);
                        $years = $timeDifference->y;
                        $months = $timeDifference->m;
                        $days = $timeDifference->d;
                        $hours = $timeDifference->h;
                        $minutes = $timeDifference->i;
                        $timeString = '';
                        if ($years > 0) {
                            $timeString .= $years .trans('lang.year').'-';
                        }
                        if ($months > 0) {
                            $timeString .= $months.' ' .trans('lang.month').'-';
                        }
                        if ($days > 0) {
                            $timeString .= $days.' ' .trans('lang.day').'-';
                        }
                        if ($hours > 0) {
                            $timeString .= $hours.' ' .trans('lang.hour').'-';
                        }
                        
                        $timeString .= $minutes . trans('lang.minute');
                        $from_time .= '<br><span class="text-dark">'.$timeString.'</span>';
                    }
                    return $from_time;
                })
                ->addColumn('time', function($row){
                    if($row->time == 0) { // 0 = 1 hour , 1 = 2 hour,2 = 3 hour ,3 = 4 hour
                        $time = '<div class="badge badge-light-info fw-bold"> 1 ' .trans('lang.hour').'</div>';
                    } elseif($row->time == 1) { // 0 = 1 hour , 1 = 2 hour,2 = 3 hour ,3 = 4 hour
                        $time = '<div class="badge badge-light-info fw-bold"> 2 ' .trans('lang.hour').'</div>';
                    } elseif($row->time == 2) { // 0 = 1 hour , 1 = 2 hour,2 = 3 hour ,3 = 4 hour
                        $time = '<div class="badge badge-light-info fw-bold"> 3 ' .trans('lang.hour').'</div>';
                    }elseif($row->time == 3) { // 0 = 1 hour , 1 = 2 hour,2 = 3 hour ,3 = 4 hour
                        $time = '<div class="badge badge-light-info fw-bold"> 4 ' .trans('lang.hour').'</div>';
                    }else {
                        $is_active = '<div class="badge badge-light-danger fw-bold">غير مفعل</div>';
                    }
                    
                    return $time;
                })
                ->addColumn('is_active', function($row){ //0 = active - 1 = prepayed - 2 = done - 3 = cancelled- 4 = requested - 5 = Unavillable
                    if($row->status == 0) { 
                        $is_active = '<div class="badge badge-light-success fw-bold">' .trans('lang.active').'</div>';
                    } elseif($row->status == 1) { 
                        $is_active = '<div class="badge badge-light-danger fw-bold">غير مفعل</div>';
                    }  else {
                        $is_active = '<div class="badge badge-light-danger fw-bold">غير مفعل</div>';
                    }
                    
                    return $is_active;
                })
                ->addColumn('actions', function($row){
                    $actions = '<div class="ms-2">
                                <a href="'.route('admin.reviews.show', $row->id).'" class="btn btn-sm btn-icon btn-warning btn-active-dark me-2" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                    <i class="bi bi-eye-fill fs-1x"></i>
                                </a>
                                <a href="'.route('admin.reviews.edit', $row->id).'" class="btn btn-sm btn-icon btn-info btn-active-dark me-2" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
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
                ->rawColumns(['name','phone','is_active','from_time','qualification','job','checkbox','message','age','marital_status','created_at','time','actions'])
                ->make(true);
        }
        return view('admin.review.index');
    }


    public function show($id)
    {
        $data = Review::find($id);
        return view('admin.review.show', compact('data'));
    }

    public function create()
    {
        return view('admin.review.create');
    }

    public function store(Request $request)
    {
        $rule = [
            'reviewer' => 'required|string',
            'rating' => 'required|numeric|min:1|max:5',
            'comment' => 'required|string',
        ];

        $validate = Validator::make($request->all(), $rule);
        if ($validate->fails()) { 
            return redirect()->back()->with('message', $validate->messages()->first())->with('status', 'error');
        } 
        
        $row = Review::create([
            'reviewer' => $request->reviewer ?? null,
            'rating' => $request->rating,
            'comment' => $request->comment,
            'status' => $request->status ?? 0,
        ]);

        // if($request->hasFile('photo') && $request->file('photo')->isValid()){
        //     $row->addMediaFromRequest('photo')->toMediaCollection('profile');
        // }

        return redirect('admin/reviews')->with('message', 'تم الاضافة بنجاح')->with('status', 'success');
    }

    public function edit($id)
    {
        $data = Review::find($id);
        return view('admin.review.edit', compact('data'));
    }

    public function update(Request $request)
    {
        $rule = [
            'reviewer' => 'required|string',
            'rating' => 'required|numeric|min:1|max:5',
            'comment' => 'required|string',
        ];

        $validate = Validator::make($request->all(), $rule);
        if ($validate->fails()) { 
            return redirect()->back()->with('message', $validate->messages()->first())->with('status', 'error');
        } 
        
        $data = Review::find($request->id);
        $data->update([
             'reviewer' => $request->reviewer ?? null,
            'rating' => $request->rating,
            'comment' => $request->comment,
            'status' => $request->status ?? 0,
        ]);

        if($request->hasFile('photo') && $request->file('photo')->isValid()){
            $data->addMediaFromRequest('photo')->toMediaCollection('profile');
        }

        return redirect('admin/reviews')->with('message', 'تم التعديل بنجاح')->with('status', 'success');
    }

    public function destroy(Request $request)
    {   

        try{
            Review::whereIn('id',$request->id)->delete();
        } catch (\Exception $e) {
            return response()->json(['message' => 'error']);
        }
        return response()->json(['message' => 'success']);

    }
}
