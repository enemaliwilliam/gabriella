
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Message
                    <a href="{{route('message.create')}}" class="float-right">Add Message</a>
                </div>

                <div class="card-body">
                       <table class="table">
                            <thead>
                                <th>SN</th>
                                <th>Week</th>
                                <th>For Pregnant ?</th>
                                <th>Content</th>
                                <th></th>
                                <th></th>
                            </thead>
                            <tbody>
                                @foreach($messages as $message)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$message->week}}</td>
                                        <td>{{ ($message->is_pregnant == 1) ? "Yes":"No"}}</td>
                                        <td>{{$message->content}}</td>
                                        <td><a href="{{ route( 'message.edit',['id' => $message->id ] )}} ">Edit</a></td>
                                        <td>

                                                <form method="POST" action="{{ route('message.destroy',['id' => $message->id ]) }}">
                                                    {{ method_field('DELETE') }}
                                                     {{ csrf_field() }}
                                                    <input type="submit" value="Delete" class="btn btn-default" >
                                                </form>
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

