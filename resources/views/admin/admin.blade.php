@extends('website/layout')
@section('content')


<div style="margin-top: 100px"></div>


<h3 class="board">Studenten </h3>

<table>
    <tbody>


        <tr>


            <td>ID</td>
            <td>Name</td>
            <td>Email</td>
            <td></td>
            <td></td>
        </tr>
        @foreach ($users as $users)
        <div class="modal fade" id="confirm{{$users->id}}" tabindex="-1" role="dialog"
            aria-labelledby="confirm{{$users->id}}Label" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="confirm{{$users->id}}Label">Weet je het zeker?</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p><b>Je gaat deze student verwijderen:</b></p>
                        <p>ID: {{$users->id}}</p>
                        <p>Naam: {{$users->name}}</p>
                        <p>Email: {{$users->email}}</p>
                        <p>ContactEmail: {{$users->contactemail}}</p>

                        <p>Klas: {{$users->klas}}</p>


                    </div>
                    <div class="modal-footer">
                        <a class="btn bg-success" data-dismiss="modal">terug</a>

                        <a href="{{url('/admin/user/delete/'.$users->id)}}" class="btn bg-danger">Delete</a>

                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="confirm{{$users->id}}{{$users->id}}" tabindex="-1" role="dialog"
            aria-labelledby="confirm{{$users->id}}{{$users->id}}Label" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="confirm{{$users->id}}{{$users->id}}Label">Wijzig roles voor
                            gebruiker</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Roles:

                    </div>
                    <div class="modal-footer">
                        <a class="btn bg-secondary" href="{{url('/admin/rank/setup/'.$users->id)}}">Setup</a>
                        <a class="btn bg-secondary" href="{{url('/admin/rank/user/'.$users->id)}}">User</a>

                        <a class="btn bg-danger" href="{{url('/admin/rank/admin/'.$users->id)}}">Admin</a>
                        <a class="btn bg-success" data-dismiss="modal">terug</a>



                    </div>
                </div>
            </div>
        </div>
        <tr>
            <td>{{$users->id}}</td>
            <td>{{$users->name}}</td>
            <td>{{$users->email}}</td>
            <td class="but bg-success"><a href="{{url('/admin/user/'.$users->id)}}">Edit</a> </td>
            <td class="but bg-danger"><a href="#" data-toggle="modal" data-target="#confirm{{$users->id}}">Del</a> </td>
            <td class="but bg-secondary"><a href="#" data-toggle="modal"
                    data-target="#confirm{{$users->id}}{{$users->id}}">Roles</a> </td>



        </tr>
        @endforeach
    </tbody>
</table>


<h3 class="board">Klassen </h3>

<table>
    <tbody>
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Niet zien</td>
        </tr>
        @foreach ($klassen as $klassen)
        <div class="modal fade" id="klas{{$klassen->klas}}" tabindex="-1" role="dialog"
            aria-labelledby="klas{{$klassen->klas}}Label" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="klas{{$klassen->klas}}Label">Weet je het zeker?</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p><b>Je gaat deze klas verwijderen:</b></p>
                        <p>ID: {{$klassen->id}}</p>
                        <p>Naam: {{$klassen->klas}}</p>
                        <p>Niet zien: {{$klassen->zien}}</p>



                    </div>
                    <div class="modal-footer">
                        <a class="btn bg-success" data-dismiss="modal">terug</a>

                        <a href="{{url('/admin/klas/delete/'.$klassen->id)}}" class="btn bg-danger">Deletse</a>

                    </div>
                </div>
            </div>
        </div>
        <tr>


            <td>{{$klassen->id}}</td>
            <td>{{$klassen->klas}}</td>
            <td>{{$klassen->zien}}</td>
            <td class="but bg-success"><a href="{{url('/admin/klas/'.$klassen->id)}}">Edit</a> </td>
            <td class="but bg-danger"><a href="#" data-toggle="modal" data-target="#klas{{$klassen->klas}}">Del</a>
            </td>


        </tr>
        @endforeach
    </tbody>
</table>

<h3 class="board">Voeg klas toe </h3>
<form class="admin_klas" action="klasadd" method="POST">
    {!! csrf_field() !!}
    <div class="form-group admin_form">
        <label for="text">Klas</label>
        <input type="text" value="" name="klas" class="form-control" id="text">
    </div>
    <input type="radio" id="male" name="zien" value="0" required>
    <label for="male">Zien</label><br>
    <input type="radio" id="male" name="zien" value="1" required>
    <label for="male">Niet zien</label><br>



    <button type="submit" name="updateUsersRed" class="btn btn-default">Submit</button>
</form>
@endsection