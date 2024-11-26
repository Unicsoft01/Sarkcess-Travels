<div>
    <x-slot:phead>Application submitted by {{ $details->last_name }}</x-slot>

    {{-- 
    "appication_id" => 41
    "university_id" => 1
    "first_name" => "Hop"
    "last_name" => "Wall"
    "email" => "nojuz@mailinator.com"
    "phone" => "+1 (103) 486-4837"
    "qualification" => "olevel"
    "country" => "Id deserunt deserunt"
    "state" => "Ut iste eius vitae n"
    "budget" => "5000-10999"
    "created_at" => "2024-11-23 15:30:31" 
    --}}

    <div class="container mt-2">

        <div class="row">
            <div class="col-12">
                <div class="text-center my-4">
                    <h3>
                        Applied to study in {{ $details->university->university }}
                    </h3>
                    <p class="text-muted text-center">
                        {!! date('D, d-M-Y', strtotime($details->created_at)) !!}
                    </p>
                </div>
                <div class="row justify-content-center">

                    <div class="col-md-10">
                        <div class="card card-pricing">
                            <div class="card-body">
                                <div class="pricing-ribbon pricing-ribbon-primary float-end">
                                   Submitted {{ $details->created_at->diffForHumans() }}
                                </div>
                                <h5 class="mt-0 mb-3 fs-14 text-uppercase fw-semibold">Application Details</h5>
                                {{-- <h2 class="mt-0 mb-3 fw-bold"> <span class="fs-14 fw-medium text-muted">/ Month</span></h2> --}}

                                <ul class="card-pricing-features text-muted border-top pt-2 mt-2 ps-0 list-unstyled">
                                    <li class="text-dark">
                                        <i class="bx bx-check-circle text-primary fs-15 me-1"></i>
                                        <b>Full Name:</b> {{ $details->last_name }} {{ $details->first_name }}
                                    </li>
                                    <li class="text-dark">
                                        <i class="bx bx-check-circle text-primary fs-15 me-1"></i>
                                        <b>Email:</b> {{ $details->email }} 
                                    </li>
                                    <li class="text-dark">
                                        <i class="bx bx-check-circle text-primary fs-15 me-1"></i>
                                        <b>Phone:</b> {{ $details->phone }} 
                                    </li>
                                    <li class="text-dark">
                                        <i class="bx bx-check-circle text-primary fs-15 me-1"></i>
                                        <b>Qualification:</b> {{ $details->qualification }} 
                                    </li>
                                    <li class="text-dark">
                                        <i class="bx bx-check-circle text-primary fs-15 me-1"></i>
                                        <b>Country:</b> {{ $details->country }} 
                                    </li>
                                    <li class="text-dark">
                                        <i class="bx bx-check-circle text-primary fs-15 me-1"></i>
                                        <b>State:</b> {{ $details->state }} 
                                    </li>
                                    <li class="text-dark">
                                        <i class="bx bx-check-circle text-primary fs-15 me-1"></i>
                                        <b>Student's Budget:</b> ${{ $details->budget }} 
                                    </li>
                                    
                                </ul>

                                {{-- <div class="mt-4 text-center">
                                    <button class="btn btn-primary px-sm-4 disabled w-100">Current Plan</button>
                                </div> --}}
                            </div> <!-- end card body -->
                        </div> <!-- end card -->
                    </div>


                </div> <!-- end row -->
            </div> <!-- end col -->
        </div>

    </div>
    @include('components.alerts')
</div>
