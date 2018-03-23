@extends('layouts.app')

@section('content')

    <h1>Contact</h1>

    {{ csrf_field()}}

    {!! Form::open(['url' => '/contact/submit']) !!}

        <div class="form-group">

            {{ Form::label('name', 'Nom') }}

            {{ Form::text('name', '' ,['class' => 'form-control' , 'placeholder ' => 'Enter votre nom' ]) }}

        </div>

        <div class="form-group">

        {{ Form::label('email', 'Adresse Mail') }}

        {{ Form::text('email', '' ,['class' => 'form-control' , 'placeholder ' => "Entrer l'email"    ]) }}

        </div>

        <div class="form-group">

            {{ Form::label('message', 'Message') }}

            {{ Form::textarea('message', '' ,['class' => 'form-control' , 'placeholder ' => 'Entrer votre message' ]) }}

        </div>

        <div>
            {{Form::submit ('Envoyer' , ['class' => 'btn btn-primary'])}}
        </div>


    {!! Form::close() !!}

@stop




