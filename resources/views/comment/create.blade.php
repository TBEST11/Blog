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
                                
                                <form method="POST" action="@if(Route::currentRouteName() != 'blog.edit') {{ route('blog.store') }} @else {{ route('blog.update', $blog->id) }} @endif" >
                                    @csrf
                                    
                                    @if(Route::currentRouteName() == 'comment.edit')
                                        @method('put')
                                    @endif
                                       
                                    <div class="row mb-3">
                                                                             
                                        <div class="col-md-6">
                                            <input id="comment" type="text" class="form-control @error('comment') is-invalid @enderror" name="comment" value="@if(Route::currentRouteName() != 'comment.edit') {{old('comment')}} @else {{ $comment->comment}} @endif" required autocomplete="comment" autofocus>
            
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
                                                {{ __('save') }}
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