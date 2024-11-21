@extends('layouts.app')
@section('content')
<div class='container bg-green-300'>

    <h1> hello Invoices   - {{ $name }}     </h1>
    
<form method'"POST" action="/invoices-create">
@csrf
<input type="text" name="invoice_number">
<input type="text" name="amount">

<h1 class='text-red-300'> Isabel </h1>
<x-text-input></x-text-input>

<button> Submit </button>
</form>
</div>
@endsection



