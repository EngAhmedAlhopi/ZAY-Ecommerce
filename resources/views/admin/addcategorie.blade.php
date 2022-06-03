@extends('layouts.admin')

@section('container')


<form class="addForm" action="{{ route('storeCategorie') }}" method="POST">
    @csrf
    <label for="staticEmail" class="col-sm-2 col-form-label">Name Categorie</label>
    <br>
    <input class="form-control form-control-lg" type="text" placeholder=".form-control-lg" name="name">
    <br>
    <button type="submit" class="btn btn-success">Save</button>
</form>



@endsection



@section('style')
<style>
.addForm{
    margin-left: 60px;
    margin-top: 60px;
}

</style>

@endsection

