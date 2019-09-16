@extends('layouts.app')


@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h3>Message from contact</h3>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <td>ID</td>
                            <td>Name</td>
                            <td>Email</td>
                            <td>Subject</td>
                            <td>Message</td>
                            <td>Delete</td>
                        </tr>
                    </thead>
                    <tbody>
                        @if($contacts->count()>0)
                        @foreach($contacts as $contact)
                        <tr>
                            <td>{{$contact->id}}</td>
                            <td>{{$contact->name}}</td>
                            <td>{{$contact->email}}</td>
                            <td>{{$contact->subject}}</td>
                            <td>{{$contact->message}}</td>
                            <td>
                                <a href="{{route('contact.delete',['id'=>$contact->id])}}" class="btn btn-danger"><i class="fa fa-trash">Delete</i></a>
                            </td>
                        </tr>
                        @endforeach
                        @else
                            <tr>
                                <td class="text-center" colspan="5">No contact information</td>
                            </tr>
                        @endif    
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection