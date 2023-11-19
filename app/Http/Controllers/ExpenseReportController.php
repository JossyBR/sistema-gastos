<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ExpenseReport;

class ExpenseReportController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('expenseReport.index', [
            'expenseReports' => ExpenseReport::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view(view: 'expenseReport.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // creando nuevo reporte
        $report = new ExpenseReport();
        $report->title = $request->get(key: 'title');
        $report->save();

        // Redireccionar
        return redirect(to: '/expense_reports');
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
    public function edit(string $id)
    {
        $report = ExpenseReport::findOfFaild($id);
        return view('expenseReport.edit', [
            'report' => $report
        ]);
        

    //     $report = ExpenseReport::find($id);
    // return view('tu.vista.edit', compact('report'));
    }
    

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $report = ExpenseReport::find($id);
        $report->title = $request->get(key:'title');
        $report->save();

        return redirect(to: '/expense_reports');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $report = ExpenseReport::find($id);
        $report->delete();

        return redirect(to: '/expense_reports');
    }

    public function confirmDelete($id)
    {
        // dd(var: 'confirmDelete' . $id);
        $report = ExpenseReport::find($id);
        return view('expenseReport.confirmDelete', [
            'report' => $report
        ]);
    }
}
