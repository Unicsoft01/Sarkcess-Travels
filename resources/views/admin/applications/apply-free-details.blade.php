<div>
    <x-slot:phead>Application submitted by {{ $details->fullname }}</x-slot>

    <div class="container mt-2">

        {{-- 
                                            application_id
                                            fullname
                                            qualification
                                            email
                                            purpose
                                            country
                                            zip
                                            phone
                                            message
                                            created_at 
                                            --}}
        <div class="row">
            <div class="col-12">
                <div class="text-center my-4">
                    <h3>
                        {{ $details->university }}
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

                            </div> <!-- end card body -->
                        </div> <!-- end card -->
                    </div>


                </div> <!-- end row -->
            </div> <!-- end col -->
        </div>

    </div>
    @include('components.alerts')
</div>
