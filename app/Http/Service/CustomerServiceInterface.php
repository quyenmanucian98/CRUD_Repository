<?php


namespace App\Http\Service;


use Illuminate\Support\Facades\Request;

interface CustomerServiceInterface extends ServiceInterface
{
public function getAll();
public function add($request);
public function findById($id);
public function edit($id);
public function update($request, $id);
public function delete($obj, $id);
}
