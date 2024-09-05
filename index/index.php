<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
       
        .gender-options {
            text-align: left;
            margin-left: 15px; 
            margin-top: 15px; 
        }
        .form-check {
            margin-bottom: 10px; 
        }
        
        #btn-submit {
            margin-top: 20px; 
        }
        .form-group {
            margin-bottom: 20px; 
        }
    </style>
</head>
<body>
<div class="container-fluid px-1 py-5 mx-auto">
    <div class="row d-flex justify-content-center">
        <div class="col-xl-7 col-lg-8 col-md-9 col-11 text-center">
            <h3>Contact Form</h3>
            <p class="black-text">Mohon berikan saran anda<br> agar saya mengetahui kekurangan saya.</p>
            <!-- <div class="card"> -->
                <h5 class="text-center mb-4">Mohon untuk mengisi form berikut</h5>
                <form class="form-card" action="../process_contact/process.php" method="post">
                    <div class="row justify-content-between text-left">
                        <div class="form-group col-sm-6 flex-column d-flex">
                            <label class="form-control-label px-3" for="fname">Nama awal<span class="text-danger"> *</span></label>
                            <input type="text" id="fname" name="Nama_awal" placeholder="Enter your first name" class="form-control" required>
                        </div>
                        <div class="form-group col-sm-6 flex-column d-flex">
                            <label class="form-control-label px-3" for="lname">Nama akhir<span class="text-danger"> *</span></label>
                            <input type="text" id="lname" name="Nama_akhir" placeholder="Enter your last name" class="form-control" required>
                        </div>
                    </div>
                    <div class="row justify-content-between text-left">
                        <div class="form-group col-sm-6 flex-column d-flex">
                            <label class="form-control-label px-3" for="email">Email<span class="text-danger"> *</span></label>
                            <input type="email" id="email" name="Email" placeholder="Enter your email" class="form-control" required>
                        </div>
                        <div class="form-group col-sm-6 flex-column d-flex">
                            <label class="form-control-label px-3" for="kelas">Kelas<span class="text-danger"> *</span></label>
                            <input type="text" id="kelas" name="Kelas" placeholder="Enter your class" class="form-control" required>
                        </div>
                    </div>
                    <div class="row justify-content-between text-left">
                        <div class="form-group col-sm-12 flex-column d-flex gender-options">
                            <label class="form-control-label px-3">Gender<span class="text-danger"> *</span></label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" id="genderLaki-laki" name="Gender" value="Laki-laki" required>
                                <label class="form-check-label" for="genderLaki-laki">Laki-laki</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" id="genderPerempuan" name="Gender" value="Perempuan" required>
                                <label class="form-check-label" for="genderPerempuan">Perempuan</label>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-between text-left">
                        <div class="form-group col-12 flex-column d-flex">
                            <label class="form-control-label px-3" for="saran">Saran<span class="text-danger"> *</span></label>
                            <textarea id="saran" name="Saran" placeholder="Enter your feedback" class="form-control" rows="4" required></textarea>
                        </div>
                    </div>
                    <div class="row justify-content-end">
                        <div class="form-group col-sm-6 d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary" id="btn-submit">Send</button>
                        </div>
                    </div>
                </form>
            <!-- </div> -->
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
