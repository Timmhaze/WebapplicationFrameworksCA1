@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Book details</div>

                <div class="card-body">
                    <table>
                        <tbody>
                            <tr>
                                <td rowspan="6"></td>
                            </tr>
                            <tr>
                                <td>Name</td>
                                <td>{{ $doctor->name }}</td>
                            </tr>
                            <tr>
                                <td>Postal Address</td>
                                <td>{{ $doctor->postalAddress }}</td>
                            </tr>
                            <tr>
                                <td>Phone Number</td>
                                <td>{{ $doctor->phoneNumber }}</td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>{{ $doctor->email }}</td>
                            </tr>
                            <tr>
                                <td>Date Started</td>
                                <td>{{ $doctor->dateStarted }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
