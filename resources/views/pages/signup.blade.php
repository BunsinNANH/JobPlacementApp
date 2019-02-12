<style>
    body{
        background-image: url('img/job.jpg');
        background-repeat: no-repeat;
        background-size: cover;
    }
    .container-fluid{
        background: #f5f5f0;
        width: 100%;
        height: 100%;
        position: absolute;
        opacity: 0.4;
        margin-top: -2%;
    }
</style>
<link rel="stylesheet" href="{{asset('css/app.css')}}">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<div class="container-fluid"></div>
<div class="container mt-4">
    <div class="row">
        <div class="col-12">
            <div class="card" style="width:30%; margin:0 auto;">
                <div class="card-header text-center">
                    <img class="card-img-top" src="img/logo.png" alt="Logo" style="width:50%;">
                </div>
                <div class="card-body">
                    <form action="#">
                        <div class="form-group ">
                            <div class="row">
                                <div class="col-2 col-sm-2">
                                    <i class="material-icons text-primary">person</i>
                                </div>
                                <div class="col-10 col-sm-10">
                                    <input type="text" name="fname" id="fname" class="form-control" placeholder="Firstname" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group ">
                            <div class="row">
                                <div class="col-2 col-sm-2">
                                    <i class="material-icons text-primary">people</i>
                                </div>
                                <div class="col-10 col-sm-10">
                                    <input type="text" name="lname" id="lname" class="form-control" placeholder="Lastname" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group ">
                            <div class="row">
                                <div class="col-2 col-sm-2">
                                    <i class="material-icons text-primary">mail</i>
                                </div>
                                <div class="col-10 col-sm-10">
                                    <input type="email" name="email" id="email" class="form-control" placeholder="Example@gmail.com" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group ">
                            <div class="row">
                                <div class="col-2 col-sm-2">
                                    <i class="material-icons text-primary">lock</i>
                                </div>
                                <div class="col-10 col-sm-10">
                                    <input type="password" name="pwd" id="pwd" class="form-control" placeholder="Password" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <a href="" class="btn btn-warning ">Cancel</a>
                            <a href="" class="btn btn-primary float-right">Register Now</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>