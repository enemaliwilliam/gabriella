
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

                    <form class="form-horizontal" method="POST" action="{{ route('client.store') }}">

                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name"  required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>



                        <div class="form-group{{ $errors->has('date_of_birth') ? ' has-error' : '' }}">
                            <label for="date_of_birth" class="col-md-4 control-label">Date Of Birth</label>

                            <div class="col-md-6">
                                <input id="date_of_birth" type="date" class="form-control" name="date_of_birth">

                                @if ($errors->has('date_of_birth'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('date_of_birth') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('mobile_number') ? ' has-error' : '' }}">
                            <label for="mobile_number" class="col-md-4 control-label">Phone Number</label>

                            <div class="col-md-6">
                                <input id="mobile_number" type="text" class="form-control" name="mobile_number">

                                @if ($errors->has('mobile_number'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('mobile_number') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('is_pregnant') ? ' has-error' : '' }}">
                            <label for="is_pregnant" class="col-md-4 control-label">is pregnant</label>

                            <div class="col-md-6">
                                <input id="is_pregnant" value="1" type="checkbox" class="form-control" name="is_pregnant">

                                @if ($errors->has('is_pregnant'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('is_pregnant') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('weeks') ? ' has-error' : '' }}">
                            <label for="weeks" class="col-md-4 control-label">weeks</label>

                            <div class="col-md-6">
                                <input id="weeks" type="number" class="form-control" name="weeks">

                                @if ($errors->has('weeks'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('weeks') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('emmergency_number') ? ' has-error' : '' }}">
                            <label for="emmergency_number" class="col-md-4 control-label">Emmergency Number</label>

                            <div class="col-md-6">
                                <input id="emmergency_number" type="text" class="form-control" name="emmergency_number">

                                @if ($errors->has('emmergency_number'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('emmergency_number') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('preferred_contact') ? ' has-error' : '' }}">
                            <label for="preferred_contact" class="col-md-4 control-label">Preferred Channel</label>

                            <div class="col-md-6">
                                <input id="preferred_contact" type="radio" class="form-control" value="sms" name="preferred_contact"> SMS
                                <input id="preferred_contact" type="radio" class="form-control" value="voice" name="preferred_contact"> VOICE

                                @if ($errors->has('preferred_contact'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('preferred_contact') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Add
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

