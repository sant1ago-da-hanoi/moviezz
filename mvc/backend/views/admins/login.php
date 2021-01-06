<div class="home-btn d-none d-sm-block">
    <a href="index.php"><i class="mdi mdi-home-variant h2 text-white"></i></a>
</div>

<div class="account-pages my-5 pt-sm-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="text-center mb-5">
                    <h5 class="font-size-16 text-white-50 mb-4">Admin Dashboard</h5>
                </div>
            </div>
        </div>
            <!-- end row -->

        <div class="row justify-content-center">
            <div class="col-xl-5 col-sm-8">
                <div class="card">
                    <div class="card-body p-4">
                        <div class="p-2">
                            <h5 class="mb-5 text-center">Sign in to continue to Dashboard.</h5>
                            <form class="form-horizontal" action="" method="post">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group form-group-custom mb-4">
                                            <input type="text" class="form-control" id="username" name="username" required>
                                            <label for="username">User Name</label>
                                        </div>

                                        <div class="form-group form-group-custom mb-4">
                                            <input type="password" class="form-control" id="password" name="password" required>
                                            <label for="password">Password</label>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="customControlInline">
                                                    <label class="custom-control-label" for="customControlInline">Remember me</label>
                                                </div>
                                            </div>
                                                <div class="col-md-6">
                                                    <div class="text-md-right mt-3 mt-md-0">
                                                        <a href="#" class="text-muted"><i class="mdi mdi-lock"></i>Forgot your password?</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-4">
                                                <button class="btn btn-success btn-block waves-effect waves-light" type="submit" name="submit">Log In</button>
                                            </div>
                                            <div class="mt-4 text-center">
                                                <a href="index.php?controller=login&action=register" class="text-muted"><i class="mdi mdi-account-circle mr-1"></i>Create an account</a>
                                            </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->
    </div>
</div>
    <!-- end Account pages -->