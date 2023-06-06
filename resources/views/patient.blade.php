@extends('layouts.app')
@section('title', 'OCU-SENSE')
@section('css')

@endsection
@section('contant')

    <div class="container-fluid py-4">
        <h2 style="text-align: center; color:white;padding:30px;">
            Patient's {{ $patient -> name }}
        </h2>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Full Name</label>
                    <input readonly class="form-control" name="name" type="text" value="{{ $patient->name }}">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Age</label>
                    <input readonly class="form-control" name="age" type="text" value="{{ $patient->age }}">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Data Of Birth</label>
                    <input readonly class="form-control" name="date_birth" type="date"
                        value="{{ $patient->date_birth }}">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Phone Number</label>
                    <input readonly class="form-control" type="text" name="phone" value="{{ $patient->phone }}">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Gender</label>
                    <br>
                    <input readonly type="radio" id="html" name="gender" value="Male"
                        {{ $patient->gender == 'Male' ? 'checked' : '' }}>
                    <label for="html">Male</label>
                    <span style="padding: 0 20px;"> OR </span>
                    <input readonly type="radio" id="css" name="gender" value="Female"
                        {{ $patient->gender == 'Female' ? 'checked' : '' }}>
                    <label for="css">Female</label>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Diabetes</label>
                    <br>
                    <input readonly type="radio" id="html1" name="diabetes" value="YES"
                        {{ $patient->diabetes == 'YES' ? 'checked' : '' }}>
                    <label for="html1">YES</label>
                    <span style="padding: 0 20px;"> OR </span>
                    <input readonly type="radio" id="css1" name="diabetes"
                        value="NO"{{ $patient->diabetes == 'NO' ? 'checked' : '' }}>
                    <label for="css1">NO</label>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Blood Pressure</label>
                    <select class="form-select" name="pressure" aria-label="Default select example">
                        <option selected>Select Blood Pressure...</option>
                        <option value="1" {{ $patient->pressure == '1' ? 'selected' : '' }}>High</option>
                        <option value="2" {{ $patient->pressure == '2' ? 'selected' : '' }}>Normal</option>
                        <option value="3" {{ $patient->pressure == '3' ? 'selected' : '' }}>Low</option>
                    </select>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Alleragies Of</label>
                    <input readonly class="form-control" type="text" name="alleragies"
                        value="{{ $patient->alleragies }}">
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Other Medical Conditions</label>
                    <textarea name="medical" cols="30" rows="10" class="form-control" readonly>
                        {{ $patient->medical }}
                    </textarea>
                </div>
            </div>
        </div>
        {{-- ===================================================
             ===================================================
             =========================API=======================
             ===================================================
             =================================================== --}}
      
            {{-- test link --}}
            <a href="https://ocu-sense.ooguy.com/py" class="btn btn-primary">TEST</a>
    </div>
@endsection
@section('js')

@endsection
