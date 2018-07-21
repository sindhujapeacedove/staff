<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Sale;

class SaleController extends Controller
{

	function index(){
		$sales = sale::all()->toArray();
		return view('staff.index',compact('sales'));
	}
    function create()
    {
    		    return view('staff.add_sales');

    }
    function store(Request $request)
    {
    	 $this->validate(request(), [
            'location' => 'required',
            'discussion' => 'required',
            'current_work' => 'required',
            'throughput' => 'required',
            'sell_our_des' => 'required'
        ]);
        $sale = new Sale([

        	'representive_id'  => '3',
        	'client_id'  => '4',
        	'location'  => $request ->get('location'),
        	'date_of_meeting'  => date('Y-m-d'),
        	'time'  => date('H:i:s'),
        	'discussion'  => $request ->get('discussion'),
        	'current_work'  => $request ->get('current_work'),
        	'sell_our_destination'  => $request ->get('sell_our_des'),
        	'throughput'  => $request ->get('throughput')

        ]);

       $sale -> save();
        
        return redirect()->route('sale.index')->with('success','Data Added');
    }
    function edit($id)
    {
    	$sale = Sale::find($id);
    	return view('staff.edit',compact('sale','id'));
    }
    function update(Request $request,$id)
    {
    	$this->validate(request(), [
            'location' => 'required',
            'discussion' => 'required',
            'current_work' => 'required',
            'throughput' => 'required',
            'sell_our_des' => 'required'
        ]);
        $sale =Sale::find($id);

        $sale->location  = $request ->get('location');
        $sale ->date_of_meeting  = date('Y-m-d');
        $sale ->time  = date('H:i:s');
        $sale ->discussion  = $request ->get('discussion');
        $sale ->current_work  = $request ->get('current_work');
        $sale ->sell_our_destination  = $request ->get('sell_our_des');
        $sale ->throughput  = $request ->get('throughput');
         $sale -> save();
          return redirect()->route('sale.index')->with('success','Updated Sucessfully');

    }
    function destroy($id)
    {
    		 $sale =Sale::find($id);
    		 $sale->delete();
    		 return redirect()->route('sale.index')->with('success','Deleted Sucesssfully');
    }
}
