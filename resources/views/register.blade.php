@extends('layout.auth')
@section('content')
    <main>
        <div class="container">

            <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8 col-md-6 d-flex flex-column align-items-center justify-content-center">

                            <div class="card mb-3">

                                <div class="card-body">

                                    <div class="pt-4 pb-2">
                                        <h5 class="card-title text-center pb-0 fs-4">Create an account</h5>
                                    </div>

                                    <form class="row g-3 needs-validation" novalidate>

                                        <div class="col-12">
                                            <div class="input-group mb-1">
                                                <span class="input-group-text login-icon" id="basic-addon1">
                                                    <i class="bi bi-person-circle"></i>
                                                </span>
                                                <input type="text" class="form-control" placeholder="Your Name"
                                                    aria-label="Your Name" aria-describedby="basic-addon1">
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="input-group mb-1">
                                                <span class="input-group-text login-icon" id="basic-addon1">
                                                    <i class="bi bi-envelope"></i></span>
                                                <input type="text" class="form-control" placeholder="Your Email"
                                                    aria-label="Your Email" aria-describedby="basic-addon1">
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="input-group mb-1">
                                                <span class="input-group-text login-icon" id="basic-addon1"><i
                                                        class="bi bi-lock"></i></span>
                                                <input type="password" class="form-control" placeholder="Your Password"
                                                    aria-label="Your Password" aria-describedby="basic-addon1">
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="input-group mb-1">
                                                <span class="input-group-text login-icon" id="basic-addon1"><i
                                                        class="bi bi-lock"></i></span>
                                                <input type="password" class="form-control"
                                                    placeholder="Confirm Your Password" aria-label="Confirm Your Password"
                                                    aria-describedby="basic-addon1">
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="remember"
                                                    value="true" id="rememberMe">
                                                <label class="form-check-label" for="rememberMe">I agree with the
                                                    <strong>privacy
                                                        policy</strong> and <strong>terms & conditions</strong></label>
                                            </div>
                                        </div>
                                        <div class="col-12 text-center">
                                            <button type="button" class="btn btn-primary rounded-pill bgc-primary">Sign
                                                in</button>
                                        </div>
                                        <div class="col-12 text-center">
                                            <p class="small mb-0">Have account? <a href="pages-register.html">Sign In</a>
                                            </p>
                                        </div>
                                    </form>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </section>

        </div>
    </main><!-- End #main -->
@endsection
