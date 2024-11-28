<x-app-layout>

    @php
        // $posts = App\Models\Blog::latest()->get();
        $posts = App\Models\Blog::latest()->get();
        $freeApps = App\Models\FreeAdviceApplications::latest()->get();

        $admins = App\Models\User::get()->count();
        $universities = App\Models\Universities::get()->count();
        $countries = App\Models\countries::get()->count();
    @endphp
    <x-slot:phead>Admin Dashboard</x-slot>

    <div class="container-fluid">
        <div class="alert alert-primary alert-dismissible fade show" role="alert">
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            Notice Any unresponsiveness in the UI? Please refresh the page!!
        </div>

        {{-- <div class="row">
            <div class="col-md-12">
                <div class="card shd">
                    <div class="card-body">
                        <h3>
                            Dashboard for {{ Auth::user()->name }}
                        </h3>
                    </div>
                </div>
            </div>
        </div> --}}

        <div class="row">
            <div class="col-md-4">
                <div class="card overflow-hidden">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <div class="avatar-md bg-soft-success rounded">
                                    <iconify-icon icon="solar:user-speak-rounded-bold-duotone"
                                        class="avatar-title fs-32 text-success"></iconify-icon>
                                </div>
                            </div> <!-- end col -->
                            <div class="col-6 text-end">
                                <p class="text-muted mb-0 text-truncate">Site Admins</p>
                                <h3 class="text-dark mt-1 mb-0">{{ $admins }}</h3>
                            </div> <!-- end col -->
                        </div> <!-- end row-->
                    </div> <!-- end card body -->
                    <div class="card-footer py-2 bg-light bg-opacity-50">
                        <div class="d-flex align-items-center justify-content-between">
                        
                            <a href="#!" class="text-reset fw-semibold fs-12">View More</a>
                        </div>
                    </div> <!-- end card body -->
                </div> <!-- end card -->
            </div> <!-- end col -->

            <div class="col-md-4">
                <div class="card overflow-hidden">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <div class="avatar-md bg-soft-info rounded">
                                    <i class="bx bx-award avatar-title fs-24 text-info"></i>
                                </div>
                            </div> <!-- end col -->
                            <div class="col-6 text-end">
                                <p class="text-muted mb-0 text-truncate">Universities</p>
                                <h3 class="text-dark mt-1 mb-0">{{ $universities }}</h3>
                            </div> <!-- end col -->
                        </div> <!-- end row-->
                    </div> <!-- end card body -->
                    <div class="card-footer py-2 bg-light bg-opacity-50">
                        <div class="d-flex align-items-center justify-content-between">
                            
                            <a href="{{ route('admin.universities') }}" class="text-reset fw-semibold fs-12">View More</a>
                        </div>
                    </div> <!-- end card body -->
                </div> <!-- end card -->
            </div> <!-- end col -->

            <div class="col-md-4">
                <div class="card overflow-hidden">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <div class="avatar-md bg-soft-primary rounded">
                                    <i class="bx bxs-backpack avatar-title fs-24 text-primary"></i>
                                </div>
                            </div> <!-- end col -->
                            <div class="col-6 text-end">
                                <p class="text-muted mb-0 text-truncate">Countries</p>
                                <h3 class="text-dark mt-1 mb-0">{{ $countries }}</h3>
                            </div> <!-- end col -->
                        </div> <!-- end row-->
                    </div> <!-- end card body -->
                    <div class="card-footer py-2 bg-light bg-opacity-50">
                        <div class="d-flex align-items-center justify-content-between">
                            
                            <a href="{{ route('admin.countries') }}" class="text-reset fw-semibold fs-12">View More</a>
                        </div>
                    </div> <!-- end card body -->
                </div> <!-- end card -->
            </div> <!-- end col -->

            {{-- <div class="col-md-3">
                <div class="card overflow-hidden">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <div class="avatar-md bg-soft-primary rounded">
                                    <i class="bx bx-dollar-circle avatar-title text-primary fs-24"></i>
                                </div>
                            </div> <!-- end col -->
                            <div class="col-6 text-end">
                                <p class="text-muted mb-0 text-truncate">Booked Revenue</p>
                                <h3 class="text-dark mt-1 mb-0">$123.6k</h3>
                            </div> <!-- end col -->
                        </div> <!-- end row-->
                    </div> <!-- end card body -->
                    <div class="card-footer py-2 bg-light bg-opacity-50">
                        <div class="d-flex align-items-center justify-content-between">
                            <div>
                                <span class="text-danger"> <i class="bx bxs-down-arrow fs-12"></i> 10.6%</span>
                                <span class="text-muted ms-1 fs-12">Last Month</span>
                            </div>
                            <a href="#!" class="text-reset fw-semibold fs-12">View More</a>
                        </div>
                    </div> <!-- end card body -->
                </div> <!-- end card -->
            </div> <!-- end col --> --}}
        </div>


        <div class="row">
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h4 class="card-title">Latest Enquiries</h4>
                        <div>
                            <a href="{{ route('admin.apply-free') }}" wire:navigate class="btn btn-sm btn-success">
                                <i class="bx bx-book me-1"></i>See All
                            </a>
                        </div>
                    </div> <!-- end card-header-->
                    <div class="card-body p-0 pb-3">
                        <div class="p-3" data-simplebar="init" style="max-height: 386px;">
                            <div class="simplebar-wrapper" style="margin: -24px;">
                                <div class="simplebar-height-auto-observer-wrapper">
                                    <div class="simplebar-height-auto-observer"></div>
                                </div>
                                <div class="simplebar-mask">
                                    <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                                        <div class="simplebar-content-wrapper" tabindex="0" role="region"
                                            aria-label="scrollable content"
                                            style="height: auto; overflow: hidden scroll;">
                                            <div class="simplebar-content" style="padding: 24px;">
                                                @forelse ($freeApps as $app)
                                                <div class="d-flex align-items-center mb-3">
                                                    
                                                    <div class="flex-grow-1">
                                                        <h5 class="mb-1 fs-14 ">
                                                            <a class="text-success"
                                                                href="{{ route('admin.apply-free.details', ['id' => $app->application_id]) }}"
                                                                target="_blank">{{ Str::of($app->purpose)->headline }} ({!! date('D, d-M', strtotime($app->created_at)) !!})</a>
                                                        </h5>
                                                        <p class="mb-0">
                                                            {{ Str::of($app->fullname)->headline }}
                                                        </p>
                                                    </div>

                                                </div>
                                                @empty

                                                    <li>
                                                        <p style="text-align: center; font-size: 18px; ">
                                                            Sorry No Applications submitted at the moment!
                                                        </p>
                                                    </li>
                                                @endforelse

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="simplebar-placeholder" style="width: auto; height: 468px;"></div>
                            </div>
                            <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                                <div class="simplebar-scrollbar" style="width: 0px; display: none;"></div>
                            </div>
                            <div class="simplebar-track simplebar-vertical" style="visibility: visible;">
                                <div class="simplebar-scrollbar"
                                    style="height: 318px; transform: translate3d(0px, 0px, 0px); display: block;">
                                </div>
                            </div>
                        </div>
                    </div> <!-- end card body -->
                </div> <!-- end card-->
            </div> <!-- end col-->

            <div class="col-xl-6">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h4 class="card-title">Blog Posts ({{ count($posts) }})</h4>
                        <div>
                            <a href="{{ route('admin.blog-post.create') }}" class="btn btn-sm btn-success">
                                <i class="bx bx-plus me-1"></i>Add New
                            </a>
                        </div>
                    </div> <!-- end card-header-->
                    <div class="card-body p-0 pb-3">
                        <div class="p-3" data-simplebar="init" style="max-height: 400px;">
                            <div class="simplebar-wrapper" style="margin: -24px;">
                                <div class="simplebar-height-auto-observer-wrapper">
                                    <div class="simplebar-height-auto-observer"></div>
                                </div>
                                <div class="simplebar-mask">
                                    <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                                        <div class="simplebar-content-wrapper" tabindex="0" role="region"
                                            aria-label="scrollable content"
                                            style="height: auto; overflow: hidden scroll;">
                                            <div class="simplebar-content" style="padding: 24px;">
                                                @forelse ($posts as $post)
                                                    <div class="d-flex align-items-center mb-3">
                                                        <div class="flex-shrink-0">
                                                            <img src="{{ Storage::url($post->thumbnail) }}"
                                                                class="img-fluid avatar-sm rounded me-2"
                                                                alt="avatar-5">
                                                        </div>
                                                        <div class="flex-grow-1">
                                                            <h5 class="mb-1 fs-14"><a class="text-success"
                                                                    href="{{ route('blog.show', ['slug' => $post->slug]) }}"
                                                                    target="_blank">{{ Str::of($post->post_title)->headline }}</a>
                                                            </h5>
                                                            <p class="mb-0">
                                                                {!! date('D, d-M, Y', strtotime($post->created_at)) !!}
                                                            </p>
                                                        </div>

                                                    </div>
                                                @empty

                                                    <li>
                                                        <p style="text-align: center; font-size: 18px; ">
                                                            Sorry No Post at the moment!, Please check back later!!!
                                                        </p>
                                                    </li>
                                                @endforelse
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="simplebar-placeholder" style="width: auto; height: 688px;"></div>
                            </div>
                            <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                                <div class="simplebar-scrollbar" style="width: 0px; display: none;"></div>
                            </div>
                            <div class="simplebar-track simplebar-vertical" style="visibility: visible;">
                                <div class="simplebar-scrollbar"
                                    style="height: 232px; transform: translate3d(0px, 168px, 0px); display: block;">
                                </div>
                            </div>
                        </div>
                    </div> <!-- end card body -->
                </div> <!-- end card-->
            </div> <!-- end col-->

            {{-- <div class="col-xl-4">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h4 class="card-title">Recent Transactions</h4>
                        <div>
                            <a href="#!" class="btn btn-sm btn-primary">
                                <i class="bx bx-plus me-1"></i>Add
                            </a>
                        </div>
                    </div> <!-- end card-header-->
                    <div class="card-body p-0">
                        <div class="px-3" data-simplebar="init" style="max-height: 406px;">
                            <div class="simplebar-wrapper" style="margin: 0px -24px;">
                                <div class="simplebar-height-auto-observer-wrapper">
                                    <div class="simplebar-height-auto-observer"></div>
                                </div>
                                <div class="simplebar-mask">
                                    <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                                        <div class="simplebar-content-wrapper" tabindex="0" role="region"
                                            aria-label="scrollable content"
                                            style="height: auto; overflow: hidden scroll;">
                                            <div class="simplebar-content" style="padding: 0px 24px;">
                                                <table class="table table-hover mb-0 table-centered">
                                                    <tbody>
                                                        <tr>
                                                            <td>24 April, 2024</td>
                                                            <td>$120.55</td>
                                                            <td><span class="badge bg-success">Cr</span></td>
                                                            <td>Commisions </td>
                                                        </tr>
                                                        <tr>
                                                            <td>24 April, 2024</td>
                                                            <td>$9.68</td>
                                                            <td><span class="badge bg-success">Cr</span></td>
                                                            <td>Affiliates </td>
                                                        </tr>
                                                        <tr>
                                                            <td>20 April, 2024</td>
                                                            <td>$105.22</td>
                                                            <td><span class="badge bg-danger">Dr</span></td>
                                                            <td>Grocery </td>
                                                        </tr>
                                                        <tr>
                                                            <td>18 April, 2024</td>
                                                            <td>$80.59</td>
                                                            <td><span class="badge bg-success">Cr</span></td>
                                                            <td>Refunds </td>
                                                        </tr>
                                                        <tr>
                                                            <td>18 April, 2024</td>
                                                            <td>$750.95</td>
                                                            <td><span class="badge bg-danger">Dr</span></td>
                                                            <td>Bill Payments </td>
                                                        </tr>
                                                        <tr>
                                                            <td>17 April, 2024</td>
                                                            <td>$455.62</td>
                                                            <td><span class="badge bg-danger">Dr</span></td>
                                                            <td>Electricity </td>
                                                        </tr>
                                                        <tr>
                                                            <td>17 April, 2024</td>
                                                            <td>$102.77</td>
                                                            <td><span class="badge bg-success">Cr</span></td>
                                                            <td>Interest </td>
                                                        </tr>
                                                        <tr>
                                                            <td>16 April, 2024</td>
                                                            <td>$79.49</td>
                                                            <td><span class="badge bg-success">Cr</span></td>
                                                            <td>Refunds </td>
                                                        </tr>
                                                        <tr>
                                                            <td>05 April, 2024</td>
                                                            <td>$980.00</td>
                                                            <td><span class="badge bg-danger">Dr</span></td>
                                                            <td>Shopping</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="simplebar-placeholder" style="width: auto; height: 442px;"></div>
                            </div>
                            <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                                <div class="simplebar-scrollbar"
                                    style="width: 0px; display: none; transform: translate3d(0px, 0px, 0px);"></div>
                            </div>
                            <div class="simplebar-track simplebar-vertical" style="visibility: visible;">
                                <div class="simplebar-scrollbar"
                                    style="height: 372px; transform: translate3d(0px, 0px, 0px); display: block;">
                                </div>
                            </div>
                        </div>
                    </div> <!-- end card body -->
                </div> <!-- end card-->
            </div> <!-- end col--> --}}

        </div>
    </div>
</x-app-layout>
