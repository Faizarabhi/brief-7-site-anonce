@extends('layouts.app')
@section('content')
<div class="flex justify-center ">
<div class=" p-6 rounded-lg">
    <x-post :post="$post"/>
</div>


@endsection
