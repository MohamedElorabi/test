@extends('layout.app')


@section('content')


<a href="{{route('products.create')}}" class="btn btn-success">Create</a>
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Description</th>
        <th scope="col">Price</th>
        <th scope="col">show</th>
        <th scope="col">edit</th>
        <th scope="col">delete</th>
      </tr>
    </thead>
    <tbody class="table-group-divider">

      @foreach ($products as $product)
      <tr>
        <th scope="row">{{$product->id}}</th>
        <td>{{$product->name}}</td>
        <td>{{$product->description}}</td>
        <td>{{$product->price}}</td>
        <td><a href="{{route('products.show', $product->id)}}" class="btn btn-primary"><i class="fa fa-eye"></i></a></td>
        <td><a href="{{route('products.edit', $product->id)}}" class="btn btn-info"><i class="fa fa-edit"></i></a></td>
        <td>
          <form method="post" action="{{url(route('products.destroy', $product->id))}}">
            @csrf
            <input type="hidden" name="_method" value="DELETE">
            <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
        </form>
        </td>
      </tr>
      @endforeach
      
      
    </tbody>
  </table>
    
@endsection