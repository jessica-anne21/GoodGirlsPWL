<?php
@extends('layouts.app')

@section('content')
    <h1>Informasi User</h1>
    <p>Nama: {{ $user->name }}</p>
    <p>Email: {{ $user->email }}</p>
    <p>Created at: {{ $user->created_at }}</p>
@endsection
