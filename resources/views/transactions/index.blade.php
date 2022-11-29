@extends('layouts.app')

@section('content')
<div class="px-6 pt-6 2xl:container">
    <h2>Transactions History</h2>
    
    <livewire:transaction-datatable />

        
</div>
@endsection