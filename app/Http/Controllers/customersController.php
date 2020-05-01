<?php

namespace App\Http\Controllers;

use App\Clients;
use Illuminate\Http\Request;

class customersController extends controller
{

    /**
     * get all clients => html page
     * @return void
     */
    public function index()
    {
      //get all clients
      $customers = Clients::all();

      //show view for customers
      return view('clients')
        ->with('title','All Customers')
        ->with('customers',$customers);

    }

    /**
     * view adding page
     * @return void
     */
    public function addCustomer()
    {
        return view('add')->with('title','add customer');
    }

    /**
     *add to db
     * @return void
     */
    public function processAddingCustomer(Request $request)
    {
        $client = new Clients();
        $client->name = $request->input('name');
        $client->city = $request->input('city');
        $client->phone = $request->input('phone');
        $client->email = $request->input('email');
        $client->save();
        return 'Thank you , Customer added';
    }

    /**
     * delete customer from db
     * @param int $id
     * @return string
     * @throws \Exception
     */
    public function deleteCustomer($id = 0)
    {
        $customer = Clients::find($id);
        if(!$customer)
            return 'Customer not found';

        $customer->delete();
        return 'Customer Deleted';
    }

}