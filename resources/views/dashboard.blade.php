@extends('layout.template')
@section('content')
    {{-- header content --}}
    <div class="page-header">
        <h3 class="page-title">
            <span class="page-title-icon bg-gradient-primary text-white me-2">
                <i class="mdi mdi-view-dashboard"></i>
            </span> Dashboard
        </h3>
    </div>
    {{-- end-header content --}}

    {{-- card dashboard --}}
    <div class="row">
        <div class="col-md-4 stretch-card grid-margin">
            <div class="card bg-gradient-danger card-img-holder text-white">
                <div class="card-body">
                    <img src="{{ asset('assets') }}/images/dashboard/circle.svg" class="card-img-absolute"
                        alt="circle-image" />
                    <h4 class="font-weight-normal mb-3">Jumlah produk <i class="mdi mdi-tshirt-v mdi-24px float-right"></i>
                    </h4>
                    <h2 class="mb-5">{{ $data }}</h2>
                </div>
            </div>
        </div>
        <div class="col-md-4 stretch-card grid-margin">
            <div class="card bg-gradient-info card-img-holder text-white">
                <div class="card-body">
                    <img src="{{ asset('assets') }}/images/dashboard/circle.svg" class="card-img-absolute"
                        alt="circle-image" />
                    <h4 class="font-weight-normal mb-3">Jumlah terjual <i class="mdi mdi-shopping mdi-24px float-right"></i>
                    </h4>
                    <h2 class="mb-5">0</h2>
                </div>
            </div>
        </div>
        <div class="col-md-4 stretch-card grid-margin">
            <div class="card bg-gradient-success card-img-holder text-white">
                <div class="card-body">
                    <img src="{{ asset('assets') }}/images/dashboard/circle.svg" class="card-img-absolute"
                        alt="circle-image" />
                    <h4 class="font-weight-normal mb-3">Jumlah pesanan <i class="mdi mdi-cart mdi-24px float-right"></i>
                    </h4>
                    <h2 class="mb-5">0</h2>
                </div>
            </div>
        </div>
    </div>
    {{-- end-card dashboard --}}

    {{-- <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Recent Updates</h4>
                    <div class="d-flex">
                        <div class="d-flex align-items-center me-4 text-muted font-weight-light">
                            <i class="mdi mdi-account-outline icon-sm me-2"></i>
                            <span>jack Menqu</span>
                        </div>
                        <div class="d-flex align-items-center text-muted font-weight-light">
                            <i class="mdi mdi-clock icon-sm me-2"></i>
                            <span>October 3rd, 2018</span>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-6 pe-1">
                            <img src="{{ asset('assets') }}/images/dashboard/img_1.jpg" class="mb-2 mw-100 w-100 rounded"
                                alt="image">
                            <img src="{{ asset('assets') }}/images/dashboard/img_4.jpg" class="mw-100 w-100 rounded"
                                alt="image">
                        </div>
                        <div class="col-6 ps-1">
                            <img src="{{ asset('assets') }}/images/dashboard/img_2.jpg" class="mb-2 mw-100 w-100 rounded"
                                alt="image">
                            <img src="{{ asset('assets') }}/images/dashboard/img_3.jpg" class="mw-100 w-100 rounded"
                                alt="image">
                        </div>
                    </div>
                    <div class="d-flex mt-5 align-items-top">
                        <img src="{{ asset('assets') }}/images/faces/face3.jpg" class="img-sm rounded-circle me-3"
                            alt="image">
                        <div class="mb-0 flex-grow">
                            <h5 class="me-2 mb-2">School Website - Authentication Module.</h5>
                            <p class="mb-0 font-weight-light">It is a long established fact that a reader will be distracted
                                by the readable content of a page.</p>
                        </div>
                        <div class="ms-auto">
                            <i class="mdi mdi-heart-outline text-muted"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
@endsection
