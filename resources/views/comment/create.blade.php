        @extends('layouts.app')

        @section('content')
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">{{ __('Comment') }}</div>
        
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
                                            <form method="POST" action="@if(Route::currentRouteName() != 'comment.edit') {{ route('comment.store') }} @else {{ route('comment.update', $comment->id) }} @endif">
                                                @csrf
                                                
                                                @if(Route::currentRouteName() == 'comment.edit')
                                                    @method('put')
                                                @endif
        
                                                <div class="row mb-3">
                                                    <div class="col-md-6">
                                                        <input id="comment" type="text" class="form-control @error('comment') is-invalid @enderror" name="comment" value="@if(Route::currentRouteName() != 'comment.edit') {{old('comment')}} @else {{ $comment->comment }} @endif" required autocomplete="comment" autofocus>
                        
                                                        @error('comment')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>                                                                 
                        
                                                <div class="row mb-0">
                                                    <div class="col-md-6 offset-md-4">
                                                        <button type="submit" class="btn btn-primary">
                                                            @if(Route::currentRouteName() != 'comment.edit') 
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
        