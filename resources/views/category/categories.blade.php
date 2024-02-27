@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Category') }}</div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Slug</th>
                            <th scope="col">Description</th>
                            <th scope="col">Created On</th>
                            <th scope="col">Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                            @php $i = 0; @endphp
                            @foreach($categories as $category)
                            <tr>
                              <th scope="row">{{++$i}}</th>
                              <td>{{$category->name}}</td>
                              <td>{{$category->slug}}</td>
                              <td>{{$category->description}}</td>
                              <td>{{$category->created_at}}</td>
                              <td>
                                <div class="row">
                                  <a href="{{route('category.edit', $category->id)}}" class="btn btn-small btn-secondary col">Edit</a>
                                  <a href="{{route('category.show', $category->id)}}" class="btn btn-small btn-info col">View</a>
                                  <form action="{{ route('category.destroy', $category->id) }}" method="POST" class="col">
                                    <button class="btn btn-danger">Delete</button>
                                    {{ method_field('DELETE') }}
                                    {{ csrf_field() }}
                                </form>
                                </div>
                              </td>
                            </tr>
                            @endforeach
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


