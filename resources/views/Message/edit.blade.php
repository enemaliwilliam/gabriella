
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    Contact
                </div>

                <div class="card-body">

                    <form class="form-horizontal" method="POST" action="{{ route('message.update',['id' => $message->id ]) }}">

                        {{ csrf_field() }}
                        {{ method_field('PUT') }}

                        <div class="form-group{{ $errors->has('is_pregnant') ? ' has-error' : '' }}">
                            <label for="is_pregnant" class="col-md-4 control-label">is pregnant</label>

                            <div class="col-md-6">
                                <input id="is_pregnant" value="1" type="checkbox" class="form-control" name="is_pregnant" checked="{{$message->is_pregnant}}">

                                @if ($errors->has('is_pregnant'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('is_pregnant') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('week') ? ' has-error' : '' }}">
                            <label for="week" class="col-md-4 control-label">week</label>

                            <div class="col-md-6">
                                <input id="week" type="number" class="form-control" name="week" value="{{$message->week}}">

                                @if ($errors->has('week'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('week') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('content') ? ' has-error' : '' }}">
                            <label for="content" class="col-md-4 control-label">Content</label>

                            <div class="col-md-6">
                                <textarea id="content" type="text" class="form-control" name="content">{{$message->content}}
                                </textarea>
                                @if ($errors->has('content'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('content') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Update
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

