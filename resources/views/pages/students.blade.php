@extends('layout.layout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <table class="table">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Gender</th>
                    <th>Email</th>
                    <th>Batch</th>
                </tr>
            </table>
        </div>
    </div>
</div>
@endsection
    {{-- {{dd($students)}} --}}