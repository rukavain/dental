@extends('admin.dashboard')
@section('content')
    <div class="m-4">
        @include('components.search')
    </div>
    <h1 class="text-3xl font-bold mb-6">Contact Submissions</h1>

    @if (session('success'))
        <div class="bg-green-500 text-white p-4 rounded-md mb-6">
            {{ session('success') }}
        </div>
    @endif

    <table class="min-w-full bg-white shadow-md rounded-lg">
        <thead>
            <tr>
                <th class="py-2 px-4 border-b">Name</th>
                <th class="py-2 px-4 border-b">Email</th>
                <th class="py-2 px-4 border-b">Message</th>
                <th class="py-2 px-4 border-b">Submitted At</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($submissions as $submission)
                <tr>
                    <td class="py-2 px-4 border-b">{{ $submission->name }}</td>
                    <td class="py-2 px-4 border-b">{{ $submission->email }}</td>
                    <td class="py-2 px-4 border-b">{{ $submission->message }}</td>
                    <td class="py-2 px-4 border-b">{{ $submission->created_at }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
