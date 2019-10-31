@extends('home')
@section('bigboss')


    <form method="post" action="{{route('customers.add')}}" enctype="multipart/form-data">
        @csrf
        <center>
            <div class="form-group">
                <label for="exampleInputEmail1">Name</label>
                <input style="width: 300px" type="text" class="form-control" name="name" id="exampleInputEmail1" placeholder="Enter Name">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">City</label>
                <select name="city">
                    @foreach($cities as $city)
                        <option value="{{$city->id}}">{{$city->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Phone</label>
                <input style="width: 300px" type="text" class="form-control" name="phone" id="exampleInputPassword1" placeholder="Enter Phone">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Image</label>
                <input style="width: 300px" type="file" name="image">
            </div>
            <button type="submit" class="btn btn-primary">ADD</button>
        </center>
    </form>


@endsection
