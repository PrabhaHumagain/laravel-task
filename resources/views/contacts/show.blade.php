@extends('contacts.layout')
@section('content')
<div class="card">
  <div class="card-header background-20Color">Users Details</div>
  <div class="card-body">

        <div class="card-body">
        <h5 class="card-title">Name : {{ $contacts->name }}</h5>
        <p class="card-text">Address : {{ $contacts->address }}</p>
        <p class="card-text">Phone : {{ $contacts->mobile }}</p>
  </div>

    </hr>

  </div>
</div>
