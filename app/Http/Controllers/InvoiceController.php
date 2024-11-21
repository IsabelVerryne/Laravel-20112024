<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Invoice;

class InvoiceController extends Controller
{
    public function show()
    {
       $name = "Isabella";
        return view('invoices', ['name'=> $name]);
    }

    public function create(Request $request) {
       $data = $request->all();
        Invoice::create([
'amount' => $data["amount"],
'invoice_number' => $data['invoice_number'],

        ]);

    }
    public function jsonResponse()
    {
    return response()->json([ 'name'=>'Elizabeth' ]);

    }

    public function index(){
        $data = Invoice::get();
        return response()->json([ 'data'=>$data ]);
    }

public function store(Request $request){
    $data = $request->all();
    $invoice =Invoice::create([
        'invoice_number' => $data['invoice_number'],
        'amount' => $data['amount']
    ]);
// return response()->json($invoice);
    
}
public function show_record($id){
    $invoice = Invoice::find($id);
    
    return response()->json($invoice);
}

public function update(Request $request, $id){
$data = $request->all();
$invoice = Invoice::find($id);
$invoice->update([
    'invoice_number' => $data['invoice_number'],
    'amount' => $data['amount']
]);
return response()->json($invoice);
}

public function destroy($id) {
$invoice =Invoice::find($id);
$invoice->delete();
return response()->json('success');

}
}