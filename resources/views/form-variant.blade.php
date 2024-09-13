@extends('layout.app')
@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Form Variant</h1>
            <nav style="--bs-breadcrumb-divider: '|';">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Form Variant</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section dashboard">
            <div class="row">

                <!-- Left side columns -->
                <div class="col-lg-12">
                    <div class="row">

                        <!-- Form Variant Add -->
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <!-- Multi Columns Form -->
                                    <form class="row g-3 pt-3">
                                        <div class="col-md-12">
                                            <label for="inputName5" class="form-label">Your Name</label>
                                            <input type="text" class="form-control" id="inputName5">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputEmail5" class="form-label">Email</label>
                                            <input type="email" class="form-control" id="inputEmail5">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputPassword5" class="form-label">Bobot</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" aria-label="Bobot"
                                                    aria-describedby="basic-addon1">
                                                <span class="input-group-text" id="basic-addon1">%</span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputEmail5" class="form-label">Email</label>
                                            <input type="email" class="form-control" id="inputEmail5">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputPassword5" class="form-label">Bobot</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" aria-label="Bobot"
                                                    aria-describedby="basic-addon1">
                                                <span class="input-group-text" id="basic-addon1">%</span>
                                            </div>
                                        </div>
                                        <div class="d-grid gap-2 mt-3">
                                            <button class="btn btn-primary bgc-primary" type="button">Block Button <i
                                                    class="bi bi-plus-circle-fill"></i></button>
                                        </div>
                                    </form><!-- End Multi Columns Form -->

                                    <h3 class="text-primary my-4">Conversion</h3>
                                    <form class="row g-3">
                                        <div class="col-md-12">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="gridRadios"
                                                    id="gridRadios1" value="option1" checked="">
                                                <div>
                                                    <label for="inputName5" class="form-label">Your Name</label>
                                                    <input type="text" class="form-control" id="inputName5"
                                                        placeholder="Masukan classname tombol">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="gridRadios"
                                                    id="gridRadios1" value="option1">
                                                <div>
                                                    <label for="inputName5" class="form-label">Your Name</label>
                                                    <input type="text" class="form-control" id="inputName5"
                                                        placeholder="Masukan URL">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="gridRadios"
                                                    id="gridRadios1" value="option1">
                                                <div>
                                                    <label for="inputName5" class="form-label">Your Name</label>
                                                    <input type="text" class="form-control" id="inputName5"
                                                        placeholder="Masukan form id">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 text-end">
                                            <button type="button"
                                                class="btn btn-primary rounded-pill bgc-primary">Primary</button>
                                        </div>
                                    </form><!-- End Multi Columns Form -->
                                </div>
                            </div><!-- End Form Variant Add -->
                        </div>
                    </div>
                </div>
        </section>

    </main><!-- End #main -->
@endsection
