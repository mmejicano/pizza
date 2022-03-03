@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">Menu</div>

                <div class="card-body">
                    <ul class="list-group">
                        <a href="" class="list-group-item list-group-item-group">View</a>
                        <a href="" class="list-group-item list-group-item-group">Create</a>
                    </ul>

                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create Pizza</div>

                <div class="card-body">
                @if (count($errors)>0)
                    <div class="alert alert-danger">
                        @foreach ($errors->all() as $error)
                               <li>{{ $error }}</li>
                        @endforeach
                    </div>
                @endif
                <form action="{{ route('pizza.store')}}" method="POST">
                    @csrf

                    <div class="mb-3">
                        <label class="form-label" for="name">Name of pizza</label>
                        <input type="text" class="form-control" name="name">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="description">Description of pizza</label>
                        <textarea class="form-control" name="description"></textarea>
                    </div>
                    <div class="row row-cols-lg-auto g-3 align-items-center">
                        <div class="col-12">
                            <div class="input-group">

                                <label class="form-label" for="">Pizza price ($)</label>
                                <input name="small_price" type="number" class="form-control" id="" placeholder="Small pizza price">
                                <input name="medium_price" type="number" class="form-control" id="" placeholder="Medium pizza price">
                                <input name="large_price" type="number" class="form-control" id="" placeholder="Large pizza price">
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="category">Category</label>
                        <select class="form-control" name="category">
                            <option value="vegetarian">Vegetarian</option>
                            <option value="nonvegetarian">No Vegetarian</option>
                            <option value="traditional">Traditional</option>

                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="image">Image</label>
                        <input type="file" name="image" id="image" class="form-control">
                    </div>
                    <div class="mb-3 text-center">
                        <button class="btn btn-primary" type="submit">
                            Save
                        </button>
                    </div>

                </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
