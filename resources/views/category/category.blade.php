@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Category') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @include('layouts.message')

                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <form method="POST" action="@if(Route::currentRouteName() != 'category.edit') {{ route('category.store') }} @else {{ route('category.update', $category->id) }} @endif">
                                        @csrf
                                        
                                        @if(Route::currentRouteName() == 'category.edit')
                                            @method('put')
                                        @endif

                                        <div class="row mb-3">
                                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>
                                            
                                            <div class="col-md-6">
                                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="@if(Route::currentRouteName() != 'category.edit') {{old('name')}} @else {{ $category->name }} @endif" required autocomplete="name" autofocus>
                
                                                @error('name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                
                                        <div class="row mb-3">
                                            <label for="description" class="col-md-4 col-form-label text-md-end">{{ __('Description') }}</label>
                
                                            <div class="col-md-6">
                                                <input id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="@if(Route::currentRouteName() != 'category.edit') {{ old('description') }} @else {{ $category->description }} @endif"  autocomplete="description">
                
                                                @error('description')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                
                                        
                
                                        <div class="row mb-0">
                                            <div class="col-md-6 offset-md-4">
                                                <button type="submit" class="btn btn-primary">
                                                    @if(Route::currentRouteName() != 'category.edit') 
                                                    {{ __('Save') }}
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
            </div>
        </div>
    </div>
</div>
@endsection
