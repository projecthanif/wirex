<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Voucher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard');
    }

    // Assuming you have a database connection established

    // Check if the voucher is available for the current user

    public function checkBalance()
    {
        $balance = Voucher::where('user_id', auth()->user()->user_id)
            ->get()->first()->voucher_balance;
        // dd($balance);
        
        header('Content-Type: application/json');
        echo json_encode(['voucherBalance' => $balance]);
    }
    public function isVoucherAvailable()
    {
        $isAvailable = Voucher::where('user_id', auth()
            ->user()->user_id)->get()->first()->voucher;

        if ($isAvailable === 'true') {
            $isAvailable = true;
        } else {
            $isAvailable = false;
        }
        // Return JSON response
        header('Content-Type: application/json');
        echo json_encode(['isAvailable' => $isAvailable]);
    }

    public function updateVoucher()
    {
        Voucher::where('user_id', auth()->user()->user_id)
            ->update(['voucher' => 'false']);
        Voucher::where('user_id', auth()->user()->user_id)
            ->update(['voucher_balance' => 0.18]);
    }
}
