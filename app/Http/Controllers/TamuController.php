<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tamu;
use Datatables;
use Carbon\Carbon;
use PDF;

class TamuController extends Controller
{
    public function index()
    {
        return view('tamu');
    }

    public function show()
    {
        $tamu = Tamu::orderBy('id', 'desc')->get();
        $data = Datatables::of($tamu)->make(true);
        return $data;
    }

    public function store(Request $request)
    {
        if ($request->ajax()) {
            $data = Tamu::create($request->all());
            return response()->json(['data' => $data]);
        }
        return response()->json(['data' => 'not found']);
    }

    public function print(Request $request)
    {
        $dari = Carbon::parse($request->dari)->toDateTimeString();
        $sampai = Carbon::parse($request->sampai)->toDateTimeString();

        $data = Tamu::whereBetween('created_at', [$dari, $sampai])->orderBy('created_at', 'asc')->get();

        $html = view('pdf', compact('data'))->with('dari', Carbon::parse($request->dari)->format('d/m/Y'))->with('sampai', Carbon::parse($request->sampai)->format('d/m/Y'));
        $pdf = PDF::loadHTML($html)->stream();
        return $pdf;
    }
}
