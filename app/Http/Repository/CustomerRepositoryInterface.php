<?php


namespace App\Http\Repository;


use Illuminate\Support\Facades\Request;

interface CustomerRepositoryInterface extends RepositoryInterface
{
    public function getAll();
    public function add($obj);
    public function findById($id);
    public function edit($id);
    public function update($obj);
    public function delete($obj);
}
