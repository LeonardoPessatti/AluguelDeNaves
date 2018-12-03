<?php
/**
 * Created by PhpStorm.
 * User: leonardo
 * Date: 25/11/2018
 * Time: 23:15
 */
?>
<!-- app/views/login.blade.php -->

<!doctype html>
<html>
<head>
    <title>Look at me Login</title>
</head>
<body><

{{ Form::open(array('url' => 'login')) }}
<h1>Login</h1>

<!-- if there are login errors, show them here -->
<p>
    {{ $errors->first('email') }}
    {{ $errors->first('password') }}
</p>

<p>
    {{ Form::label('email', 'Email Address') }}
    {{ Form::text('email', Input::old('email'), array('placeholder' => 'awesome@awesome.com')) }}
</p>

<p>
    {{ Form::label('password', 'Password') }}
    {{ Form::password('password') }}
</p>

<p>{{ Form::submit('Submit!') }}</p>
{{ Form::close() }}
