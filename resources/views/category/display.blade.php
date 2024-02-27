

@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Category') }}</div>
                <h4> Name: {{$category->name}}</h4>
                <h4> Slug: {{$category->slug}}</h4>
                <h4>Description: {{$category->description}}</h4>
                <h4> Created At: {{$category->created_at}}</h4>  
                <a href="{{url('category')}}" class="btn btn-secondary sm">OK</a>
              </div>
            </div>
        </div>
    </div>
</div>
@endsection


