@extends('app')

@section('content')
    <div class="container mx-auto p-4">
        <h1 class="text-2xl font-bold mb-4">Add Employer</h1>
        <form action="{{ url('/employers') }}" method="POST" class="bg-white p-4 rounded shadow">
            @csrf
            <div class="mb-4">
                <label for="name" class="block text-gray-700">Employer Name</label>
                <input type="text" name="name" placeholder="Employer Name" required class="border rounded w-full py-2 px-3">
            </div>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Add Employer</button>
        </form>
    </div>
@endsection
