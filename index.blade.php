<?php

@extends('layouts.app')

@section('content')
    <h1>Daftar User</h1>
    <ul>
        @foreach ($users as $user)
            <li>{{ $user->name }} - {{ $user->email }}</li>
        @endforeach
    </ul>
@endsection
