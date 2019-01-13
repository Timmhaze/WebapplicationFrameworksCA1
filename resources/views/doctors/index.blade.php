@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Doctors</div>

                <div class="card-body">
                    <a href="{{ route( 'doctors.create' ) }}">Add</a>
                    <table>
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Postal Address</th>
                                <th>Phone Number</th>
                                <th>Email</th>
                                <th>Date Started</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($doctors as $doctor)
                            <tr>
                                <td>{{ $doctor->name }}</td>
                                <td>{{ $doctor->postalAddress }}</td>
                                <td>{{ $doctor->phoneNumber }}</td>
                                <td>{{ $doctor->email }}</td>
                                <td>{{ $doctor->dateStarted }}</td>
                                <td>
                                    <a href="{{ route('doctors.show', $doctor ) }}">View</a>
                                    <a href="{{ route('doctors.edit', $doctor) }}">Edit</a>
                                    <form action="{{ route('doctors.destroy', $doctor)}}" method="POST">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <button>Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
