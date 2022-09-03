
@extends('layout.app')


@section('content')





<form action="{{route('products.update', $product->id)}}" method="POST">
  
  <input type="hidden" name="_method" value="PUT">
  @csrf
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">name</label>
      <input type="text" class="form-control" value="{{$product->name}}" name="name">
    </div>
    <div class="form-floating">
        <label class="form-label">description</label>
        <textarea class="form-control" name="description" value="{{$product->description}}" style="height: 100px"></textarea>
      </div>

      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">price</label>
        <input type="text" class="form-control" value="{{$product->price}}" name="price">
      </div>
   <br>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

  @endsection