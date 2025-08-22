<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Ticket;
use App\Models\Contact_request;
use App\Models\Review;
use Carbon\Carbon;

use Twilio\Rest\Client;


use App;
use Auth;

class HomeController extends Controller
{

    public function index() {

        $now = Carbon::now();
        $query['results'] = "[[0, 10, 20, 30, 40, 50, 30, 20, 80, 80, 70, 50, 30]]";
        $lastDay = date('m',strtotime('last month'));

        $month[] = $now ->month ;
        $year[] = $now ->year ;

        $count_user[] = Ticket::where('user_id', Auth::user()->id)->where('bdg', 0)->whereMonth('date', $now ->month)->whereYear('date', $now ->year)->get()->count();
        $count_used[] = Ticket::where('user_id', Auth::user()->id)->where('bdg', 1)->whereMonth('date', $now ->month)->whereYear('date', $now ->year)->get()->count();

        for ($i=1; $i < 12; $i++) { 
            $last_month = $now ->month - $i ;
            if ($last_month < 1) {
                if ($last_month == 0) {
                    $month[] = 12 ;
                    $year[] = $now ->year - 1 ;
                    $count_user[] = Ticket::where('user_id', Auth::user()->id)->where('bdg', 0)->whereMonth('date', 12)->whereYear('date', ($now ->year - 1))->get()->count();
                    $count_used[] = Ticket::where('user_id', Auth::user()->id)->where('bdg', 1)->whereMonth('date', 12)->whereYear('date', ($now ->year - 1))->get()->count();
                } else if ($last_month == -1) {
                    $month[] = 11 ;
                    $year[] = $now ->year - 1 ;
                    $count_user[] = Ticket::where('user_id', Auth::user()->id)->where('bdg', 0)->whereMonth('date', 11)->whereYear('date', ($now ->year - 1))->get()->count();
                    $count_used[] = Ticket::where('user_id', Auth::user()->id)->where('bdg', 1)->whereMonth('date', 11)->whereYear('date', ($now ->year - 1))->get()->count();
                } else if ($last_month == -2) {
                    $month[] = 10 ;
                    $year[] = $now ->year - 1 ;
                    $count_user[] = Ticket::where('user_id', Auth::user()->id)->where('bdg', 0)->whereMonth('date', 10)->whereYear('date', ($now ->year - 1))->get()->count();
                    $count_used[] = Ticket::where('user_id', Auth::user()->id)->where('bdg', 1)->whereMonth('date', 10)->whereYear('date', ($now ->year - 1))->get()->count();
                } else if ($last_month == -3) {
                    $month[] = 9 ;
                    $year[] = $now ->year - 1 ;
                    $count_user[] = Ticket::where('user_id', Auth::user()->id)->where('bdg', 0)->whereMonth('date', 9)->whereYear('date', ($now ->year - 1))->get()->count();
                    $count_used[] = Ticket::where('user_id', Auth::user()->id)->where('bdg', 1)->whereMonth('date', 9)->whereYear('date', ($now ->year - 1))->get()->count();
                } else if ($last_month == -4) {
                    $month[] = 8 ;
                    $year[] = $now ->year - 1 ;
                    $count_user[] = Ticket::where('user_id', Auth::user()->id)->where('bdg', 0)->whereMonth('date', 8)->whereYear('date', ($now ->year - 1))->get()->count();
                    $count_used[] = Ticket::where('user_id', Auth::user()->id)->where('bdg', 1)->whereMonth('date', 8)->whereYear('date', ($now ->year - 1))->get()->count();
                } else if ($last_month == -5) {
                    $month[] = 7 ;
                    $year[] = $now ->year - 1 ;
                    $count_user[] = Ticket::where('user_id', Auth::user()->id)->where('bdg', 0)->whereMonth('date', 7)->whereYear('date', ($now ->year - 1))->get()->count();
                    $count_used[] = Ticket::where('user_id', Auth::user()->id)->where('bdg', 1)->whereMonth('date', 7)->whereYear('date', ($now ->year - 1))->get()->count();
                } else if ($last_month == -6) {
                    $month[] = 6 ;
                    $year[] = $now ->year - 1 ;
                    $count_user[] = Ticket::where('user_id', Auth::user()->id)->where('bdg', 0)->whereMonth('date', 6)->whereYear('date', ($now ->year - 1))->get()->count();
                    $count_used[] = Ticket::where('user_id', Auth::user()->id)->where('bdg', 1)->whereMonth('date', 6)->whereYear('date', ($now ->year - 1))->get()->count();
                } else if ($last_month == -7) {
                    $month[] = 5 ;
                    $year[] = $now ->year - 1 ;
                    $count_user[] = Ticket::where('user_id', Auth::user()->id)->where('bdg', 0)->whereMonth('date', 5)->whereYear('date', ($now ->year - 1))->get()->count();
                    $count_used[] = Ticket::where('user_id', Auth::user()->id)->where('bdg', 1)->whereMonth('date', 5)->whereYear('date', ($now ->year - 1))->get()->count();
                } else if ($last_month == -8) {
                    $month[] = 4 ;
                    $year[] = $now ->year - 1 ;
                    $count_user[] = Ticket::where('user_id', Auth::user()->id)->where('bdg', 0)->whereMonth('date', 4)->whereYear('date', ($now ->year - 1))->get()->count();
                    $count_used[] = Ticket::where('user_id', Auth::user()->id)->where('bdg', 1)->whereMonth('date', 4)->whereYear('date', ($now ->year - 1))->get()->count();
                } else if ($last_month == -9) {
                    $month[] = 3 ;
                    $year[] = $now ->year - 1 ;
                    $count_user[] = Ticket::where('user_id', Auth::user()->id)->where('bdg', 0)->whereMonth('date', 3)->whereYear('date', ($now ->year - 1))->get()->count();
                    $count_used[] = Ticket::where('user_id', Auth::user()->id)->where('bdg', 1)->whereMonth('date', 3)->whereYear('date', ($now ->year - 1))->get()->count();
                } else if ($last_month == -10) {
                    $month[] = 2 ;
                    $year[] = $now ->year - 1 ;
                    $count_user[] = Ticket::where('user_id', Auth::user()->id)->where('bdg', 0)->whereMonth('date', 2)->whereYear('date', ($now ->year - 1))->get()->count();
                    $count_used[] = Ticket::where('user_id', Auth::user()->id)->where('bdg', 1)->whereMonth('date', 2)->whereYear('date', ($now ->year - 1))->get()->count();
                } else if ($last_month == -11) {
                    $month[] = 1 ;
                    $year[] = $now ->year - 1 ;
                    $count_user[] = Ticket::where('user_id', Auth::user()->id)->where('bdg', 0)->whereMonth('date', 1)->whereYear('date', ($now ->year - 1))->get()->count();
                    $count_used[] = Ticket::where('user_id', Auth::user()->id)->where('bdg', 1)->whereMonth('date', 1)->whereYear('date', ($now ->year - 1))->get()->count();
                }
            } else {
                $month[] = $last_month ;
                $year[] = $now ->year ;
                $count_user[] = Ticket::where('user_id', Auth::user()->id)->where('bdg', 0)->whereMonth('date', $last_month)->whereYear('date', $now ->year)->get()->count();
                $count_used[] = Ticket::where('user_id', Auth::user()->id)->where('bdg', 1)->whereMonth('date', $last_month)->whereYear('date', $now ->year)->get()->count();
            }
        }

        $count_used = array_reverse($count_used);
        $count_user = array_reverse($count_user);
        $month_result = array(array_reverse($month)) ;
        return view('client/homepage', compact('month_result','count_user','count_used'));
    }

    public function changLang(Request $request) {
        App::setLocale($request->lang);
        session()->put('locale', $request->lang);

        return redirect()->back();
    }
    public function about(Request $request)
    {
        return view('client.about');
    }
    public function homepage(Request $request)
    {
        return view('client.homepage');
    }
    public function exclusive(Request $request)
    {
        return view('client.exclusive');
    }
    public function reviews(Request $request)
    {
        $data = Review::where('status', 0)->orderBy('id', 'desc')->get();
        return view('client.reviews', compact('data'));
    }
    public function store(Request $request)
    {
        // dd($request->all());
        $rule = [
            'email' => 'email',
            'phone' => 'required',
        ];
        // Combine and format
        $datetime = Carbon::parse($request->from_time . ' ' . $request->hour_time)->format('Y-m-d H:i:s'); 
        $row = Contact_request::create([
            'name_ar' => $request->name_ar ?? null,
            'name_en' => $request->name_en,
            'email' => $request->email,
            'phone' => $request->phone,
            'message' => $request->message,
            'course' => $request->course ?? null,
            'from_time' => $datetime,
            'time' => $request->time,
            'age' => $request->age,
            'marital_status' => $request->marital_status,
            'action' => $request->action ?? 4,
            'status' => $request->status ?? 0,
            'qualification' => $request->qualification,
            'job' => $request->job,
        ]);
        // Send WhatsApp message
        $this->sendWhatsAppNotification($row);

        return redirect()->back()
        ->with('success', true)
        ->with('name_en', $request->name_en)
        ->with('whatsapp_link', 'https://wa.me/201226888044');
        // ->with('message', 'تم الاضافة بنجاح')->with('status', 'success');
    }

    protected function sendWhatsAppNotification($contactRequest)
    {
        
        // Format the phone number (remove any non-numeric characters)
        $phone = preg_replace('/[^0-9]/', '', $contactRequest->phone);
        
        // Create WhatsApp message content
        $message = urlencode(
            "مرحباً " . $contactRequest->name_ar . ",\n" .
            "شكراً لتواصلك معنا. سنقوم بالرد عليك قريباً.\n" .
            "يمكنك أيضاً التواصل معنا مباشرة عبر الواتساب من خلال هذا الرابط:"
        );
        
        // WhatsApp API link
        $whatsappLink = "https://wa.me/201226888044?text=$message";
        
        // In a real application, you would:
        // 1. Send this link via email/SMS to the customer
        // 2. Or use WhatsApp API to send directly
        // 3. Or log it for admin to follow up
        
        // For now, we'll just log it (you can check storage/logs/laravel.log)
        \Log::info("WhatsApp notification link for contact request {$contactRequest->id}: {$whatsappLink}");
        
        // If you want to actually send an SMS with this link, you could use:
        // $this->sendSms($contactRequest->phone, "تواصل معنا: $whatsappLink");
    }
    public function storereview(Request $request)
    {
        // dd($request->all());
        $rule = [
            'reviewer' => 'required|string|max:255',
            'rating' => 'required|integer|between:1,5',
            'comment' => 'required|string|max:1000',
        ];

        $row = Review::create([
            'reviewer' => $request->reviewer ?? null,
            'rating' => $request->rating,
            'comment' => $request->comment,
            'status' => $request->status ?? 0,
            
        ]);

        return redirect()->back()
        ->with('message', 'تم الاضافة بنجاح')->with('status', 'success');
    }
    public function reviewall(Request $request)
    {
        $data = Review::where('status', 0)->orderBy('id', 'desc')->get();
        return view('client.reviewall', compact('data'));
    }


   
}
