<?php


namespace App\Http\Service\implement;


use App\Customer;
use App\Http\Repository\CustomerRepositoryInterface;
use App\Http\Service\CustomerServiceInterface;
use http\Env\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class CustomerService extends BaseService implements CustomerServiceInterface
{
    protected $customerRepository;

    public function __construct(CustomerRepositoryInterface $customerRepository)
    {
        $this->customerRepository = $customerRepository;
    }

    public function getAll()
    {
        return $this->customerRepository->getAll();
    }

    public function add($request)
    {

        $customer = new Customer();
        $customer->name = $request->name;
        $customer->city_id = $request->city;
        $customer->phone = $request->phone;

        $image = $request->image;
        $path = $image->store('upload', 'public');
        $customer->image = $path;

        $this->customerRepository->add($customer);
    }


    public function findById($id)
    {
        return $this->customerRepository->findById($id);
    }

    public function edit($id)
    {
        return $this->customerRepository->findById($id);

    }

    public function update($request, $id)
    {
        $customer = $this->findById($id);
        $customer->name = $request->name;
        $customer->city_id = $request->city;
        $customer->phone = $request->phone;
        $this->customerRepository->update($customer);
    }

    public function delete($obj, $id)
    {
        $obj = $this->customerRepository->findById($id);
        $this->customerRepository->delete($obj);
        File::delete(storage_path("app\public\\"."$obj->image"));
    }
}
