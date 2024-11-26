<div>
    <x-slot:phead>Applications and Enquiries</x-slot>

    <div class="container mt-2">

        <div class="row">
            <div class="col-xl-12">

                <div class="card shd">

                    <div class="card-body">
                        <div>
                            <div class="table-responsive">
                                <table class="table align-middle mb-0 table-hover table-centered">
                                    <thead class="bg-light-subtle">

                                        <tr>
                                            <th style="width: 20px;">
                                                <div class="form-check">
                                                    #
                                                </div>
                                            </th>

                                           
                                            <th>Applicant's Name</th>
                                            <th>Email</th>
                                            <th>Purpose</th>
                                            <th>Qualification</th>
                                            <th>Submission date</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($applications as $application)
                                            <tr :key="{{ $application->application_id }}">
                                                <td>
                                                    <div class="form-check">
                                                        {{ $loop->iteration }}
                                                    </div>
                                                </td>
                                                <td>
                                                    {{ Str::of($application->fullname)->headline() }}
                                                </td>
                                                <td>
                                                    {{ $application->email }}
                                                </td>
                                                <td>
                                                    {{ $application->purpose }}
                                                </td>
                                                <td>
                                                    {{ $application->qualification }}
                                                </td>
                                                <td>
                                                    {!! date('D, d-M-y', strtotime($application->created_at)) !!}
                                                </td>
                                                <td>
                                                    <div class="d-flex gap-2">
                                                        <button wire:navigate
                                                            href="{{ route('admin.apply-free.details', ['id' => $application->application_id]) }}"
                                                            class="btn btn-soft-success btn-sm">
                                                            Full Details
                                                        </button>

                                                        <button
                                                            wire:click="$dispatch('delete-prompt', {id: {{ $application->application_id }}})"
                                                            class="btn btn-soft-danger btn-sm"
                                                            title="Delete this application with id: {{ $application->application_id }}">
                                                            Delete
                                                        </button>
                                                    </div>
                                                </td>

                                            </tr>
                                        @empty
                                            <h3 class="text-center">
                                                No applications submitted yet,The list will be updated once an applicant
                                                applies!!
                                            </h3>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                            <!-- end table-responsive -->
                        </div>
                    </div>
                </div>

            </div> <!-- end col -->
        </div> <!-- end row -->

    </div>
    @include('components.alerts')
</div>
