<?php


@extends('layouts.app')

@section('content')
    <h1>Polling yang telah dibuat oleh {{ $user->name }}</h1>
    <ul>
        @foreach ($pollings as $polling)
            <li>{{ $polling->title }} - {{ $polling->description }}</li>
        @endforeach
    </ul>
@endsection

