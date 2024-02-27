@extends('layouts.app')

@section('content')
<div class="jumbotron text-center mt-8">
    <h1>Tbest Blog</h1>
</div>
    @if($errors->any())
    <div class="w-4/5 m-auto">
        <ul>
            @foreach ($error->all() as $error)
            <li class="w-4/5 mb-4 text-gray-50 bg-red-700 rounded-2xl py-4">
                {{$error}}
            </li>
            @endforeach
        </ul>

    </div>
    @endif
    @include('layouts.message')
        <hr>
        <div class="container m-8">
            <div class="row m-8 p-5">
                <div class="col-xs-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="mb-3" id="messageOutput">
                                <hr>
                                
                                <form method="POST" action="@if(Route::currentRouteName() != 'blog.edit') {{ route('blog.store') }} @else {{ route('blog.update', $blog->id) }} @endif" enctype="multipart/form-data">
                                    @csrf
                                    
                                    @if(Route::currentRouteName() == 'blog.edit')
                                        @method('put')
                                    @endif
                                       
                                    <div class="row mb-3">
                                        <label for="title" class="col-md-4 col-form-label text-md-end">{{ __('Title') }}</label>
                                        
                                        <div class="col-md-6">
                                            <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="@if(Route::currentRouteName() != 'blog.edit') {{old('title')}} @else {{ $blog->title}} @endif" required autocomplete="title" autofocus>
            
                                            @error('title')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="content" class="col-md-4 col-form-label text-md-end">{{ __('Content') }}</label>
            
                                        <div class="col-md-6">
                                            <textarea id="content" type="text" class="form-control @error('content') is-invalid @enderror" name="content" value="@if(Route::currentRouteName() != 'blog.edit') {{ old('content') }} @else {{ $blog->content }} @endif"  autocomplete="content"></textarea>
            
                                            @error('content')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                       
                                        <div class="col-md-6">
                                            <input id="content" type="file" class="form-control @error('image') is-invalid @enderror" name="image" value="@if(Route::currentRouteName() != 'blog.edit') {{ old('image') }} @else {{ $blog->content }} @endif"  autocomplete="image">
            
                                            @error('content')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row mb-0">
                                        <div class="col-md-6 offset-md-4">
                                            <button type="submit" class="btn btn-primary">
                                                @if(Route::currentRouteName() != 'blog.edit') 
                                                {{ __('Post') }}
                                                @else 
                                                {{ __('Update') }}
                                                @endif
                                                
                                            </button>
                                        </div>
                                    </div>
                                        
                                </form>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
@endsection