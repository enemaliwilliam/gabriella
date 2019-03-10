
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Contact
                    <a href="{{route('client.create')}}" class="float-right">Add Contact</a>
                </div>

                <div class="card-body">
                       <table class="table">
                            <thead>
                                <th>SN</th>
                                <th>Name</th>
                                <th>Age</th>
                                <th>Number</th>
                                <th>Pregnant</th>
                                <th>Weeks</th>
                                <th>Preferred Contact</th>
                                <th>Emmergency Number</th>
                                <th></th>
                                <th></th>
                            </thead>
                            <tbody>
                                @foreach($clients as $client)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$client->name}}</td>
                                        <td>{{$client->date_of_birth}}</td>
                                        <td>{{$client->mobile_number}}</td>
                                        <td>{{ ($client->is_pregnant == 1) ? "Yes":"No"}}</td>
                                        <td>{{$client->weeks}}</td>
                                        <td>{{$client->preferred_contact}}</td>
                                        <td>{{$client->emmergency_number}}</td>
                                        <td><a href="{{ route( 'client.edit',['id' => $client->id ] )}} ">Edit</a></td>
                                        <td>

                                                <form method="POST" action="{{ route('client.destroy',['id' => $client->id ]) }}">
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

