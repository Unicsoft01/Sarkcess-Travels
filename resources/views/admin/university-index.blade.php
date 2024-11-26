<div>
    <x-slot:phead>Universities List</x-slot>

    <div class="container">

        <div class="row">
            <div class="col-xl-12">

                <div class="card shd">
                    <div class="card-header d-flex justify-content-between align-items-center gap-1">
                        <h4 class="card-title flex-grow-1 mb-1 anchor" id="alert-link">
                            <a href="{{ route('courses.index') }}" target="_blank" class="btn btn-soft-primary">
                                Users view
                            </a>
                        </h4>

                        <a href="{{ route('admin.universities.create') }}" wire:navigate class="btn btn-sm btn-success">
                            Create new University
                        </a>
                    </div>
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
                                            {{-- <th>thumbnail</th> --}}
                                            <th>Universities</th>
                                            <th>Country</th>
                                            <th>Created at</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($universities as $university)
                                            <tr>
                                                <td>
                                                    <div class="form-check">
                                                        {{ $loop->iteration }}
                                                    </div>
                                                </td>
                                                {{-- <td></td> --}}
                                                <td title="{{ Str::of($university->university)->headline() }}">
                                                    {{ Str::of($university->university)->headline() }}
                                                </td>
                                                <td>

                                                    {{ Str::of($university->countryLocated->country)->headline() }}
                                                </td>
                                                <td>
                                                    {!! date('D, d-M-y', strtotime($university->created_at)) !!}
                                                </td>
                                                <td>
                                                    <div class="d-flex gap-2">
                                                        <a href="{{ route('universities.show', ['slug' => $university->slug]) }}"
                                                            target="_blank" class="btn btn-light btn-sm">
                                                            Guest View
                                                        </a>
                                                        <button wire:navigate
                                                            wire:click="OpenPostEditor({{ $university->university_id }})"
                                                            class="btn btn-soft-success btn-sm">
                                                            Edit
                                                        </button>

                                                        <button
                                                            wire:click="$dispatch('delete-prompt', {id: {{ $university->university_id }}})"
                                                            class="btn btn-soft-danger btn-sm">
                                                            Delete
                                                        </button>
                                                    </div>
                                                </td>

                                            </tr>
                                        @empty
                                            <h3 class="text-center">
                                                No Universities yet! Please create some to display!!
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

        @include('components.alerts')
    </div>
</div>
