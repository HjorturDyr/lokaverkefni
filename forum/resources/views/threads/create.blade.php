@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create a New Thread</div>


                <div class="alert alert-success" role="alert">
                    
                    <form method="POST" action="/threads">
                        @csrf

                        <div class="form-group">
                            <label for="channel_id">Choose a Channel:</label>
                            <select name="channel_id" id="channel_id" class="form-control" required>
                                <option value="">Choose One...</option>
                                @foreach ($channels as $channel)
                                    <option value="{{$channel->id}}" {{old('channel_id') == $channel->id ? 'selected' : ''}}>
                                        {{$channel->name}}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="title"></label>
                            <input type="text" id="title" class="form-control" name="title" value="{{old('title')}}" required>
                        </div>

                        <div>
                            <label for="body"></label>
                            <textarea name="body" id="body" class="form-control" rows="8" required>{{old('body')}}</textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-default">publish</button>
                        </div>

                        @if (count($errors))
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{$error}}</li>
                                @endforeach
                            </ul>
                        @endif
                    </form>

                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
