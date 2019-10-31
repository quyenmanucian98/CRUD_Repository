<?php


namespace App\Http\Repository\eloquent;


use App\Customer;
use App\Http\Repository\CustomerRepositoryInterface;

class CustomerRepository implements CustomerRepositoryInterface
{
protected $customer;

    public function __construct(Customer $customer)
    {
        $this->customer = $customer;
    }

    public function getAll()
    {
        return $this->customer->all();
    }
    public function add($obj){

        $obj->save();
    }

    public function findById($id)
    {
        return $this->customer->findOrFail($id);
    }

    public function edit($id)
    {
        return $this->findById($id);
    }

    public function update($obj)
    {
        $obj->save();
    }

    public function delete($obj)
    {
        $obj->delete();
    }
}
