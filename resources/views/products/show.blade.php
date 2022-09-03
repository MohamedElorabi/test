@extends('layout.app')


@section('content')

<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Description</th>
        <th scope="col">Price</th>
        
      </tr>
    </thead>
    <tbody class="table-group-divider">

      <tr>
        <th scope="row">{{$product->id}}</th>
        <td>{{$product->name}}</td>
        <td>{{$product->description}}</td>
        <td>{{$product->price}}</td>
      </tr>
      
      
      
    </tbody>
  </table>
    
@endsection