@extends('app')

@section('content')
<div class="container mx-auto p-4">
    <h1 class="text-2xl font-bold mb-4">Employers List</h1>
    <a href="{{ url('/employers/create') }}" class="bg-blue-500 text-white px-4 py-2 rounded">Add Employer</a>
    <ul class="mt-4">
        @foreach ($employers as $employer)
            <li class="border-b py-2">{{ $employer->name }}</li>
        @endforeach
    </ul>

    @if (session('success'))
        <div class="mt-4 text-green-500">{{ session('success') }}</div>
    @endif
</div>
@endsection
