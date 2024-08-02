<?php

namespace App\Http\Controllers;

use App\Models\BudgetLimit;
use App\Models\Category;
use App\Models\Record;
use Illuminate\Http\Request;
use DB;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function adminDashboard()
    {
        $totalIncome = Record::where('type', 'income')->sum('amount');
        $totalExpenses = Record::where('type', 'expense')->sum('amount');
        $balance = $totalIncome - $totalExpenses;

        // Fetch monthly income and expense data
        $monthlyIncome = Record::where('type', 'income')
            ->selectRaw('DATE_FORMAT(date, "%Y-%m") as month, SUM(amount) as total')
            ->groupBy('month')
            ->pluck('total', 'month');

        $monthlyExpenses = Record::where('type', 'expense')
            ->selectRaw('DATE_FORMAT(date, "%Y-%m") as month, SUM(amount) as total')
            ->groupBy('month')
            ->pluck('total', 'month');

        $notifications = [];

        return view('admin.dashboard', compact('totalIncome', 'totalExpenses', 'balance', 'monthlyIncome', 'monthlyExpenses', 'notifications'));
    }



}
