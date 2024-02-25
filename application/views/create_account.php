<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Pharmacy system Registration Form</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
<div class="p-4 font-weight-bold text-primary" style="font-size: 25px;">For consultation: 0629 364 847 // 0692 123 237</div>




    <div class="container mt-5">
        <h2 class="mb-4">Account Registration</h2>

        <form action="<?php echo base_url("Login/store_user") ?>" method="post">
            <div class="row">
                
                <div class="form-group col-md-6">
                    <label for="fullName">Pharmacy Name:</label>
                    <input type="text" name="name" class="form-control" id="fullName" placeholder="Enter pharmacy name" required>
                    <small><?php echo form_error('name'); ?></small>
                </div>

                <div class="form-group col-md-6">
                    <label for="gender">Region:</label>
                    <select name="address" class="form-control" id="gender" required>
                    <option value="">Select a region</option>
                    <option value="Arusha">Arusha</option>
                    <option value="Dar es Salaam">Dar es Salaam</option>
                    <option value="Dodoma">Dodoma</option>
                    <option value="Geita">Geita</option>
                    <option value="Iringa">Iringa</option>
                    <option value="Kagera">Kagera</option>
                    <option value="Katavi">Katavi</option>
                    <option value="Kigoma">Kigoma</option>
                    <option value="Kilimanjaro">Kilimanjaro</option>
                    <option value="Lindi">Lindi</option>
                    <option value="Manyara">Manyara</option>
                    <option value="Mara">Mara</option>
                    <option value="Mbeya">Mbeya</option>
                    <option value="Morogoro">Morogoro</option>
                    <option value="Mtwara">Mtwara</option>
                    <option value="Mwanza">Mwanza</option>
                    <option value="Njombe">Njombe</option>
                    <option value="Pemba North">Pemba North</option>
                    <option value="Pemba South">Pemba South</option>
                    <option value="Pwani">Pwani</option>
                    <option value="Rukwa">Rukwa</option>
                    <option value="Ruvuma">Ruvuma</option>
                    <option value="Shinyanga">Shinyanga</option>
                    <option value="Simiyu">Simiyu</option>
                    <option value="Singida">Singida</option>
                    <option value="Tabora">Tabora</option>
                    <option value="Tanga">Tanga</option>
                    <option value="Zanzibar Central/South">Zanzibar Central/South</option>
                    <option value="Zanzibar North">Zanzibar North</option>
                    <option value="Zanzibar Urban/West">Zanzibar Urban/West</option>
                    <option value="Songwe">Songwe</option>
                    </select>
                </div>


                <!-- Email -->
                <div class="form-group col-md-6">
                    <label for="email">Pharmacy email</label>
                    <input type="email" name="email" class="form-control" id="email" placeholder="Enter valid email" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="email">Full Name</label>
                    <input type="text" name="full_name" class="form-control" id="email" placeholder="Enter your name" required>
                    <small><?php echo form_error('email'); ?></small>
                </div>
               
                <div class="form-group col-md-6">
                    <label for="email">Phone Number</label>
                    <input type="number" name="phone_number" class="form-control" id="email" placeholder="Enter valid phone number" required>
                    <small><?php echo form_error('email'); ?></small>
                </div>
                <!-- Email -->
                <div class="form-group col-md-6">
                    <label for="email">Password</label>
                    <input type="password" name="password" class="form-control" id="email" placeholder="Enter password" required>
                    <small><?php echo form_error('password'); ?></small>
                </div>
                <div class="form-group col-md-6">
                    <label for="email">confirm Password</label>
                    <input type="password" name="confirm" class="form-control" id="email" placeholder="Enter confirmation password" required>
                    <small><?php echo form_error('confirm'); ?></small>
                </div>
            </div>

           
            <!-- Submit Button -->
            <div class="d-flex justify-content-center">
                    <button type="submit" class="btn btn-primary">Create Account</button>
                </div>
        </form>
    </div>

    <!-- Bootstrap JS and Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>

