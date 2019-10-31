@extends('home')
@section('bigboss')

    <form>
        @csrf
        <table class="table">
            <thead class="thead-dark">
            <tr>
                <th scope="col">STT</th>
                <th scope="col">Name</th>
                <th scope="col">City</th>
                <th scope="col">Phone</th>
                <th scope="col">Image</th>
                <th><a href="{{route('customers.formAdd')}}">ADD CUSTOMER</a></th>
            </tr>
            </thead>
            <tbody>
            @foreach($customers as $key => $customer)
                <tr>
                    <th scope="row">{{++$key}}</th>
                    <td>{{$customer->name}}</td>
                    @if($customer->city)
                        <td>{{$customer->city->name}}</td>
                    @else
                        {{"No Data"}}
                    @endif
                    <td>{{$customer->phone}}</td>
                    <td><img src="{{asset("storage/$customer->image")}}" class="img-fluid" width="80" alt=""></td>
                <td><a href="{{route('customers.edit',$customer->id)}}">EDIT</a>
                <a href="{{route('customers.delete',$customer->id)}}">DELETE</a></td>
            @endforeach
            </tbody>
        </table>
    </form>
@endsection
