@extends('layout')
@section('content')

    


    
    
<div class="col-md-10 m-auto "style="padding-top:109px;">
    <style>
    .form-control{
        width: 66%!important;
    }
    .textbox{
        height: 50px;
    }
    </style>
                <h3 class="title">
                  Wijzig je profiel gegevens </h3>
    
                <p>
    
                    <form class="kleinertext" action="/admin/update/klas" method="POST" enctype="multipart/form-data">
                    {{ @csrf_field() }}
                        <div class="form-group">
                            <label for="text">Id</label>
                            <input type="text" value="{{$klassen->id}}" name="id" class="form-control"
                                id="text">
                        </div>
    <input type="hidden" name="oldid" value="{{$klassen->id}}"/>
                        <div class="form-group">
                            <label for="text">Naam</label>
                            <input type="text" value="{{$klassen->klas}}" name="klas" class="form-control"
                                id="text">
                                <label for="text"><b>Ondersteunt:</b> Links, HEX(#FF5733)</label>
    
                        </div>
                        <div class="form-group">
                            <label for="text">Niet zien</label>
                            <input type="text" value="{{$klassen->zien}}" name="zien" class="form-control"
                                id="text">
                                <label>0 = zien / 1 = niet zien</label>
    
                        </div>
                       
                        <button type="submit" class="btn btn-success">Wijzig</button>
                    </form>
                </p>
    
    
    
    
    
    </div>
    
@endsection