@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Create New Patient</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('patients.store' )}}">
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
                                    <td>Phone Number</td>
                                    <td><input type="text" name="phoneNumber" value="{{ old('phoneNumber') }}" /></td>
                                    <td>{{ ($errors->has('phoneNumber')) ? $errors->first('phoneNumber') : "" }}</td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td><input type="text" name="email" value="{{ old('email') }}" /></td>
                                    <td>{{ ($errors->has('email')) ? $errors->first('email') : "" }}</td>
                                </tr>
                                <tr>
                                    <td>Medical Insurance?</td>
                                    <td><input type="text" name="medicalInsurance" value="{{ old('medicalInsurance') }}" /></td>
                                    <td>{{ ($errors->has('dateStarted')) ? $errors->first('dateStarted') : "" }}</td>
                                </tr>
                                <tr>
                                    <td>Insurance Number</td>
                                    <td><input type="text" name="insuranceNumber" value="{{ old('insuranceNumber') }}" /></td>
                                    <td>{{ ($errors->has('dateStarted')) ? $errors->first('dateStarted') : "" }}</td>
                                </tr>
                                <tr>
                                    <td>Policy Number</td>
                                    <td><input type="text" name="policyNumber" value="{{ old('policyNumber') }}" /></td>
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
