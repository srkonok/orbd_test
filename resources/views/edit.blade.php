@extends('layouts.app')

@section('content')
<div class="container">
    
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <div class="row mb-2">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <h3>Edit Record</h3>

            <form method="POST" action="{{ route('update', ['id' => $user->id]) }}">
                @csrf
                @method('PUT')
                <div class="row mb-2">
                    <div class="form-group col-md-6">
                        <label for="name">Name:</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}" required>
                    </div>
                
                    <div class="form-group col-md-6">
                        <label for="name_eng">Name (English):</label>
                        <input type="text" class="form-control" id="name_eng" name="name_eng" value="{{ $user->name_eng }}" required>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="form-group col-md-6">
                        <label for="fathers_name">Father's Name:</label>
                        <input type="text" class="form-control" id="fathers_name" name="fathers_name" value="{{ $user->fathers_name }}" required>
                    </div>
            
                    <div class="form-group col-md-6">
                        <label for="fathers_name_eng">Father's Name (English):</label>
                        <input type="text" class="form-control" id="fathers_name_eng" name="fathers_name_eng" value="{{ $user->fathers_name_eng }}" required>
                    </div>
                    
                </div>
                <!-- Add more fields here for fathers_name, fathers_name_eng, mothers_name, etc. -->
                <div class="row mb-2">
                    <div class="form-group col-md-6">
                        <label for="mothers_name">Mother's Name:</label>
                        <input type="text" class="form-control" id="mothers_name" name="mothers_name" value="{{ $user->mothers_name }}" required>
                    </div>
        
                    <div class="form-group col-md-6">
                        <label for="mothers_name_eng">Mother's Name (English):</label>
                        <input type="text" class="form-control" id="mothers_name_eng" name="mothers_name_eng" value="{{ $user->mothers_name_eng }}" required>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="form-group col-md-6">
                        <label for="spouse_name" class="form-label">Spouse Name:</label>
                        <input type="text" class="form-control" id="spouse_name" name="spouse_name" value="{{ $user->spouse_name }}" required>
                    </div>
                    
                    <div class="form-group col-md-6">
                        <label for="spouse_name_eng" class="form-label">Spouse Name (English):</label>
                        <input type="text" class="form-control" id="spouse_name_eng" name="spouse_name_eng" value="{{ $user->spouse_name_eng }}" required>
                    </div>
                </div>
                
                
                <div class="row mb-2">
                    <div class="form-group mb-3 col-md-4">
                        <label for="dob">Date of Birth:</label>
                        <input type="date" class="form-control" id="dob" name="dob" value="{{ $user->dob }}" required>
                    </div>
        
                    <div class="form-group mb-3 col-md-4">
                        <label for="religion">Religion:</label>
                        <input type="text" class="form-control" id="religion" name="religion" value="{{ $user->religion }}" required>
                    </div>
        
                    <div class="form-group mb-3 col-md-4">
                        <label for="gender">Gender:</label>
                        <select class="form-control" id="gender" name="gender" required>
                            <option value="Male" {{ $user->gender === 'Male' ? 'selected' : '' }}>Male</option>
                            <option value="Female" {{ $user->gender === 'Female' ? 'selected' : '' }}>Female</option>
                        </select>
                    </div>
        
                </div>
        
                <!-- Add more fields here for nid, occupation, nationality, etc. -->
        <!-- Add more fields here for nid, occupation, nationality, etc. -->
              <div class="row mb-2">
                <div class="form-group col-md-4">
                    <label for="nid">NID:</label>
                    <input type="text" class="form-control" id="nid" name="nid" value="{{ $user->nid }}" required>
                </div>
        
                <div class="form-group col-md-4">
                    <label for="occupation">Occupation:</label>
                    <input type="text" class="form-control" id="occupation" name="occupation" value="{{ $user->occupation }}" required>
                </div>
        
                <div class="form-group col-md-4">
                    <label for="nationality">Nationality:</label>
                    <input type="text" class="form-control" id="nationality" name="nationality" value="{{ $user->nationality }}" required>
                </div>
                </div>
                <div class="row mb-2">
                    <div class="form-group col-md-4">
                        <label for="tin" class="form-label">TIN:</label>
                        <input type="text" class="form-control" id="tin" name="tin" value="{{ $user->tin }}" required>
                    </div>
                    
                    <div class="form-group col-md-4">
                        <label for="brn" class="form-label">BRN:</label>
                        <input type="text" class="form-control" id="brn" name="brn" value="{{ $user->brn }}" required>
                    </div>
                    
                </div>
        
                <div class="form-group">
                    <label for="present_address">Present Address:</label>
                    <input type="text" class="form-control" id="present_address" name="present_address" value="{{ $user->present_address }}" required>
                </div>
                <div class="row mb-2">
                    <div class="col-md-4">
                        <label for="division" class="form-label">Division:</label>
                        <input type="text" class="form-control" id="division" name="division" value="{{ $user->division }}" required>
                    </div>
                    <div class="col-md-4">
                        <label for="district" class="form-label">District:</label>
                        <input type="text" class="form-control" id="district" name="district" value="{{ $user->district }}" required>
                    </div>
                    <div class="col-md-4">
                        <label for="upazila" class="form-label">Upazila:</label>
                        <input type="text" class="form-control" id="upazila" name="upazila" value="{{ $user->upazila }}" required>
                    </div>
                </div>
                
        
                <!-- Add more fields here for permanent_address, division, district, upazila, etc. -->
                <!-- Add more fields here for permanent_address, division, district, upazila, etc. -->
                        <div class="form-group">
                            <label for="permanent_address">Permanent Address:</label>
                            <input type="text" class="form-control" id="permanent_address" name="permanent_address" value="{{ $user->permanent_address }}" required>
                        </div>
                        <div class="row mb-2">
                    <div class="col-md-4">
                        <label for="division" class="form-label">Division:</label>
                        <input type="text" class="form-control" id="division" name="division" value="{{ $user->division }}" required>
                    </div>
                    <div class="col-md-4">
                        <label for="district" class="form-label">District:</label>
                        <input type="text" class="form-control" id="district" name="district" value="{{ $user->district }}" required>
                    </div>
                    <div class="col-md-4">
                        <label for="upazila" class="form-label">Upazila:</label>
                        <input type="text" class="form-control" id="upazila" name="upazila" value="{{ $user->upazila }}" required>
                    </div>
                </div>
        
        
                <div class="form-group">
                    <label for="division">Division:</label>
                    <input type="text" class="form-control" id="division" name="division" value="{{ $user->division }}" required>
                </div>
        
                <div class="form-group">
                    <label for="district">District:</label>
                    <input type="text" class="form-control" id="district" name="district" value="{{ $user->district }}" required>
                </div>
        
                <div class="form-group">
                    <label for="upazila">Upazila:</label>
                    <input type="text" class="form-control" id="upazila" name="upazila" value="{{ $user->upazila }}" required>
                </div>
        
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
</div>
</div>
@endsection
