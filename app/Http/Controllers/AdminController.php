<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LaporanPenjualan;
use App\Models\Member;
use App\Models\Feedback;
use App\Models\EmailLog;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use DB;

class AdminController extends Controller
{
    public function dashboard(Request $request)
    {
        $year = $request->input('year', 'All');
        $month = $request->input('month', 'All');
    
        $salesDataQuery = LaporanPenjualan::select(
            DB::raw('DATE(tanggal) as date'),
            DB::raw('SUM(total_penjualan) as total')
        );
    
        if ($year != 'All') {
            $salesDataQuery->whereYear('tanggal', $year);
        }
    
        if ($month != 'All') {
            $salesDataQuery->whereMonth('tanggal', $month);
        }
    
        $salesData = $salesDataQuery->groupBy('date')->get();
    
        $feedbackData = Feedback::select(
            DB::raw('subjek'),
            DB::raw('COUNT(*) as count')
        )->groupBy('subjek')->get();
    
        $monthlyNewMembers = Member::select(
            DB::raw('MONTH(created_at) as month'),
            DB::raw('COUNT(*) as count')
        )->groupBy('month')->get();
    
        $monthlySales = LaporanPenjualan::select(
            DB::raw('MONTH(tanggal) as month'),
            DB::raw('SUM(total_penjualan) as total')
        )->groupBy('month')->get();
    
        $recentSales = LaporanPenjualan::orderBy('tanggal', 'desc')->limit(5)->get();
        $recentFeedback = Feedback::orderBy('created_at', 'desc')->limit(5)->get();
        $recentMembers = Member::orderBy('created_at', 'desc')->limit(5)->get();
    
        $totalSales = LaporanPenjualan::sum('total_penjualan');
        $totalMembers = Member::count();
        $totalFeedback = Feedback::count();
        $totalEvents = LaporanPenjualan::distinct('nama_acara')->count();
    
        return view('admin.dashboard', compact(
            'salesData', 'feedbackData', 'monthlyNewMembers', 'monthlySales',
            'recentSales', 'recentFeedback', 'recentMembers',
            'totalSales', 'totalMembers', 'totalFeedback', 'totalEvents', 'year', 'month'
        ));
    }

    public function sales(Request $request)
    {
        if ($request->ajax()) {
            $data = LaporanPenjualan::all();
            return DataTables::of($data)
                ->addColumn('action', function($row){
                    $btn = '<a href="javascript:void(0)" class="edit btn btn-primary btn-sm">Edit</a>';
                    $btn .= '<a href="javascript:void(0)" class="delete btn btn-danger btn-sm">Delete</a>';
                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
    
        return view('admin.sales');
    }

    public function storeSales(Request $request)
    {
        $data = new LaporanPenjualan();
        $data->Tanggal = $request->tanggal;
        $data->Nama_Acara = $request->nama_acara;
        $data->Nama_Customer = $request->nama_customer;
        $data->Tiket_Terjual = $request->tiket_terjual;
        $data->Harga_per_Tiket = $request->harga_per_tiket;
        $data->Total_Penjualan = $request->tiket_terjual * $request->harga_per_tiket;
        $data->save();

        return response()->json(['success' => 'Data added successfully.']);
    }

    public function updateSales(Request $request)
    {
        $data = LaporanPenjualan::find($request->id);
        $data->Tanggal = $request->tanggal;
        $data->Nama_Acara = $request->nama_acara;
        $data->Nama_Customer = $request->nama_customer;
        $data->Tiket_Terjual = $request->tiket_terjual;
        $data->Harga_per_Tiket = $request->harga_per_tiket;
        $data->Total_Penjualan = $request->tiket_terjual * $request->harga_per_tiket;
        $data->save();

        return response()->json(['success' => 'Data updated successfully.']);
    }

    public function deleteSales(Request $request)
    {
        $data = LaporanPenjualan::find($request->id);
        $data->delete();

        return response()->json(['success' => 'Data deleted successfully.']);
    }

    public function customers(Request $request)
    {
        if ($request->ajax()) {
            $data = Member::all();
            return DataTables::of($data)->make(true);
        }
        return view('admin.customers');
    }

    public function broadcast()
    {
        return view('admin.broadcast');
    }

    public function broadcastSend(Request $request)
    {
        $request->validate([
            'subject' => 'required',
            'message' => 'required',
        ]);
    
        $emails = Member::pluck('email')->toArray();
        $subject = $request->subject;
    
        foreach ($emails as $email) {
            $emailLog = EmailLog::where('email', $email)->where('subject', $subject)->first();
            if (!$emailLog) {
                Mail::send([], [], function ($message) use ($request, $email) {
                    $message->to($email)
                            ->subject($request->subject)
                            ->html($request->message);
                });
    
                EmailLog::create([
                    'email' => $email,
                    'subject' => $subject
                ]);
            }
        }
    
        return redirect()->route('admin.broadcast')->with('success', 'Broadcast email sent successfully.');
    }

    public function upload(Request $request)
    {
        if ($request->hasFile('upload')) {
            $file = $request->file('upload');
            $filename = time() . '_' . $file->getClientOriginalName();
            $filePath = 'uploads/' . $filename;
            Storage::disk('public')->put($filePath, file_get_contents($file));
    
            $url = asset('storage/' . $filePath);
            return response()->json(['url' => $url]);
        }
        return response()->json(['error' => 'No file uploaded.'], 400);
    }

    public function feedback(Request $request)
    {
        if ($request->ajax()) {
            $data = Feedback::all();
            return DataTables::of($data)->make(true);
        }
        return view('admin.feedback');
    }

    public function profile()
    {
        return view('admin.profile');
    }
}
