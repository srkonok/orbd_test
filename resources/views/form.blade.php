<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    
    <!-- Include Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-3">
        <div class="row mb-2" >
            <div class="col-md-3">
               <h3>Profile</h3> 
            </div>
            <div class="col-md-6">
                <h3>User Details</h3>

                <form method="post" action="{{ url('/form') }}">
                    @csrf
                    <div class="row mb-2">
                        <div class="col-md-6">
                            <label for="name" class="form-label">Name:</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="col-md-6">
                            <label for="name_eng" class="form-label">Name (English):</label>
                            <input type="text" class="form-control" id="name_eng" name="name_eng" required>
                        </div>
                    </div>
                    <div class="row mb-2 ">
                        <div class=" col-md-6">
                            <label for="fathers_name" class="form-label">Fathers Name:</label>
                            <input type="text" class="form-control" id="fathers_name" name="fathers_name" required>
                        </div>
                        <div class="col-md-6">
                            <label for="fathers_name_eng" class="form-label">Fathers Name (English):</label>
                            <input type="text" class="form-control" id="fathers_name_eng" name="fathers_name_eng" required>
                        </div>
                    </div>
                    <div class="row mb-2 ">
                        <div class=" col-md-6">
                            <label for="mothers_name" class="form-label">Mothers Name:</label>
                            <input type="text" class="form-control" id="mothers_name" name="mothers_name" required>
                        </div>
                        <div class="col-md-6">
                            <label for="mothers_name_eng" class="form-label">Mothers Name (English):</label>
                            <input type="text" class="form-control" id="mothers_name_eng" name="mothers_name_eng" required>
                        </div>
                    </div>
                    <div class="row mb-2 ">
                        <div class=" col-md-6">
                            <label for="spouse_name" class="form-label">Spouse Name:</label>
                            <input type="text" class="form-control" id="spouse_name" name="spouse_name" required>
                        </div>
                        <div class="col-md-6">
                            <label for="spouse_name_eng" class="form-label">Spouse Name (English):</label>
                            <input type="text" class="form-control" id="spouse_name_eng" name="spouse_name_eng" required>
                        </div>
                    </div>
                    <div class="row mb-2 ">
                        <div class=" col-md-4">
                            <label for="dob" class="form-label">Date of Birth:</label>
                            <input type="date" class="form-control" id="dob" name="dob" required>
                        </div>
                        <div class="col-md-4">
                            <label for="religion" class="form-label">Religion:</label>
                            <input type="text" class="form-control" id="religion" name="religion" required>
                        </div>
                        <div class="col-md-4">
                            <label for="gender" class="form-label">Gender:</label>
                            <input type="text" class="form-control" id="gender" name="gender" required>
                        </div>
                    </div>
                    <div class="row mb-2 ">
                        <div class=" col-md-4">
                            <label for="nid" class="form-label">NID</label>
                            <input type="text" class="form-control" id="nid" name="nid" required>
                        </div>
                        <div class="col-md-4">
                            <label for="occupation" class="form-label">Occupation:</label>
                            <input type="text" class="form-control" id="occupation" name="occupation" required>
                        </div>
                        <div class="col-md-4">
                            <label for="nationality" class="form-label">Nationality:</label>
                            <input type="text" class="form-control" id="nationality" name="nationality" required>
                        </div>
                    </div>
                    <div class="row mb-2 ">
                        <div class=" col-md-4">
                            <label for="tin" class="form-label">TIN</label>
                            <input type="text" class="form-control" id="tin" name="tin" required>
                        </div>
                        <div class="col-md-4">
                            <label for="brn" class="form-label">BRN:</label>
                            <input type="text" class="form-control" id="brn" name="brn" required>
                        </div>
                        
                    </div>
                    
                    <div class="mb-2">
                        <label for="present_address" class="form-label">Present Address:</label>
                        <input type="text" class="form-control" id="present_address" name="present_address" required>
                    </div>
                    <div class="row mb-2 ">
                        <div class=" col-md-4">
                            <label for="division" class="form-label">Division:</label>
                            <input type="text" class="form-control" id="division" name="division" required>
                        </div>
                        <div class="col-md-4">
                            <label for="district" class="form-label">District:</label>
                            <input type="text" class="form-control" id="district" name="district" required>
                        </div>
                        <div class="col-md-4">
                            <label for="upazila" class="form-label">Upazila:</label>
                            <input type="text" class="form-control" id="upazila" name="upazila" required>
                        </div>
                    </div>
                    <div class="mb-2">
                        <label for="permanent_address" class="form-label">Permanent Address:</label>
                        <input type="text" class="form-control" id="permanent_address" name="permanent_address" required>
                    </div>
                    <div class="row mb-2 ">
                        <div class=" col-md-4">
                            <label for="division" class="form-label">Division:</label>
                            <input type="text" class="form-control" id="division" name="division" required>
                        </div>
                        <div class="col-md-4">
                            <label for="district" class="form-label">District:</label>
                            <input type="text" class="form-control" id="district" name="district" required>
                        </div>
                        <div class="col-md-4">
                            <label for="upazila" class="form-label">Upazila:</label>
                            <input type="text" class="form-control" id="upazila" name="upazila" required>
                        </div>
                    </div>
        
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Include Bootstrap 5 JavaScript (optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
