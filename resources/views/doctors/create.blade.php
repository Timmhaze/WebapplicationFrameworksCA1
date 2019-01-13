@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Create New Doctor</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('doctors.store' )}}">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <table>
                            <tbody>
                                <tr>
                                    <td>Name</td>
                                    <td><input type="text" name="name" value="{{ old('name') }}" /></td>
                                    <td>{{ ($errors->has('name')) ? $errors->first('name') : "" }}</td>
                                </tr>
                                <tr>
                                    <td>Postal Address</td>
                                    <td><input type="text" name="postalAddress" value="{{ old('postalAddress') }}" /></td>
                                    <td>{{ ($errors->has('postalAddress')) ? $errors->first('postalAddress') : "" }}</td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td><input type="text" name="email" value="{{ old('email') }}" /></td>
                                    <td>{{ ($errors->has('email')) ? $errors->first('email') : "" }}</td>
                                </tr>
                                <tr>
                                    <td>Phone Number</td>
                                    <td><input type="text" name="phoneNumber" value="{{ old('phoneNumber') }}" /></td>
                                    <td>{{ ($errors->has('phoneNumber')) ? $errors->first('phoneNumber') : "" }}</td>
                                </tr>
                                <tr>
                                    <td>Date Started</td>
                                    <td><input type="date" name="dateStarted" value="{{ old('dateStarted') }}" /></td>
                                    <td>{{ ($errors->has('dateStarted')) ? $errors->first('dateStarted') : "" }}</td>
                                </tr>
                            </tbody>
                        </table>
                        <button type="submit" value="Store">Submit</button>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
