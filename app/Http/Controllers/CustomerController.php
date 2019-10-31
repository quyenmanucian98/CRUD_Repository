<?php

namespace App\Http\Controllers;

use App\City;
use App\Customer;
use App\Http\Service\CustomerServiceInterface;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\File;


class CustomerController extends Controller
{
    protected $customerService;
    protected $city;
    protected $customer;

    public function __construct(CustomerServiceInterface $customerService,
                                City $city,
                                Customer $customer)
    {
        $this->customerService = $customerService;
        $this->city = $city;
        $this->customer = $customer;
    }

    public function listCustomer()
    {
        $customers = $this->customerService->getAll();
        return view('user.list', compact('customers'));
    }

    public function formAdd()
    {
        $cities = $this->city->all();
        return view('user.formAdd', compact('cities'));
    }

    public function add(Request $request)
    {
        $this->customerService->add($request);
        return redirect()->route('customers.list');
    }

    public function findById($id)
    {
        $this->customerService->findById($id);
    }

    public function edit($id)
    {
        $cities = $this->city->all();
        $customer = $this->customerService->edit($id);
        return view('user.formEdit', compact('customer', 'cities'));
    }

    public function update(Request $request, $id)
    {
        $cities = $this->city->all();
        $this->customerService->update($request, $id);
        return redirect()->route('customers.list', compact('cities'));
    }

 public function delete($id)
 {
     $customer =$this->customerService->findById($id);
     $this->customerService->delete($customer,$id);
     return redirect()->route('customers.list');
 }
}
