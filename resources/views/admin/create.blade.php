@extends('layouts.app')

@section('content')
<div class="container">
    <form action="{{route('admin.products.store')}}" method="post">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" name="name" id="name" aria-describedby="helpId" placeholder="product here " required>
            <small id="helpId" class="form-text text-muted">insert here product' name</small>
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="number" class="form-control" name="price" id="price" aria-describedby="helpId" placeholder="" step="0.01">
            <small id="helpId" class="form-text text-muted">Help text</small>
        </div>
        <div class="mb-3">
            <label for="img" class="form-label">img url</label>
            <input type="text" class="form-control" name="img" id="img" aria-describedby="helpId" placeholder="">
            <small id="helpId" class="form-text text-muted">Help text</small>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="1" id="in_stock" name="in_stock" checked>
            <label class="form-check-label" for="in_stock">
                in stock?
            </label>
        </div>
        <div class="mb-3">
            <label for="weight" class="form-label">weight</label>
            <input type="number" class="form-control" name="weight" id="weight" aria-describedby="helpId" placeholder="">
            <small id="helpId" class="form-text text-muted">Help text</small>
        </div>
        <div class="mb-3">
            <label for="product_code" class="form-label">product code</label>
            <input type="text" class="form-control" name="product_code" id="product_code" aria-describedby="helpId" placeholder="">
            <small id="helpId" class="form-text text-muted">Help text</small>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">description</label>
            <textarea class="form-control" name="description" id="description" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">send</button>
    </form>
</div>

@endsection