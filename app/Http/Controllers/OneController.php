<?php

namespace App\Http\Controllers;

use App\Models\Mechanic;
use App\Models\Supplier;
use Illuminate\Http\Request;

class OneController extends Controller
{
    public function index()
    {
        // $suppliers = Supplier::find(1);
        // dd($suppliers);
        // $supplier_one = $suppliers->orders;
        // dd($supplier_one);

        // $suppliers = Supplier::find(2);
        // $supplier_two = $suppliers->orders;
        // dd($supplier_two);

        // $suppliers = Supplier::find(3);
        // $supplier_three = $suppliers->orders;
        // dd($supplier_three);

        $mechanics = Mechanic::with('carOwner')->get();
        // dd($mechanics);

        return view('hasOneThrough.index', compact('mechanics'));
    }
}
