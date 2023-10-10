@extends('layouts.app')
@section('content')
<div class="container">
    <div class="mb-3">
        <h1>Display Rows</h1>
    </div>
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif
    
    <!-- Display your rows or data here -->
    
 
        <div class="mb-3">
            <a href="{{ route('create') }}" class="btn btn-success">Add New</a>
        </div>
        @if (count($rows) > 0)
        <table class="table table-striped table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Gender</th>
                    <th>Actions</th> <!-- Add a new column for actions -->
                </tr>
            </thead>
            <tbody>
                @foreach ($rows as $row)
                <tr>
                    <td>{{ $row->id }}</td>
                    <td>{{ $row->name }}</td>
                    <td>{{ $row->email }}</td>
                    <td>{{ $row->gender }}</td>
                    <td>
                        <a href="{{ route('edit', ['id' => $row->id]) }}" class="btn btn-primary">Edit</a>
                        <form method="POST" action="{{ route('delete', ['id' => $row->id]) }}" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                    <!-- Add other column data as needed -->
                </tr>
                @endforeach
            </tbody>
        </table>
        @else
        <div class="alert alert-info">
            <p>No data available.</p>
        </div>
        @endif
  
</div>
@endsection

