<div>
    <x-slot:phead>Countries List</x-slot>

    <div class="container">

        <div class="row">
            <div class="col-xl-12">

                <div class="card shd">
                    <div class="card-header d-flex justify-content-between align-items-center gap-1">
                        <h4 class="card-title flex-grow-1 mb-1 anchor" id="alert-link">
                            <a href="{{ route('countries.index') }}" target="_blank" class="btn btn-soft-primary">
                               Users View
                            </a>

                        </h4>

                        <a href="{{ route('admin.countries.create') }}" wire:navigate class="btn btn-sm btn-success">
                            Create new Countries
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
                                            <th>Countries</th>
                                            <th>short  Intro</th>
                                            <th>Created at</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($countries as $country)
                                            <tr :key="{{ $country->country_id }}">
                                                <td>
                                                    <div class="form-check">
                                                        {{ $loop->iteration }}
                                                    </div>
                                                </td>
                                                {{-- <td></td> --}}
                                                <td title="{{ Str::of($country->country)->headline() }}">
                                                    {{ Str::of($country->country)->headline() }}
                                                </td>
                                                <td>
                                                    
                                                    {{ Str::limit($country->short_note	, $limit = 53, $end = '...') }}
                                                </td>
                                                <td>
                                                    {!! date('D, d-M-y', strtotime($country->created_at)) !!}
                                                </td>
                                                <td>
                                                    <div class="d-flex gap-2">
                                                        <a target="_blank" href="{{ route('countries.show',['slug'=>$country->slug]) }}"
                                                            target="_blank" class="btn btn-light btn-sm">
                                                            Guest View
                                                        </a>
                                                        <button wire:navigate
                                                            wire:click="OpenPostEditor({{ $country->country_id }})"
                                                            class="btn btn-soft-success btn-sm">
                                                            Edit
                                                        </button>
                                                        
                                                        <button
                                                            wire:click="$dispatch('edit-assistance', {id: {{ $country->post_id }}})"
                                                            wire:navigate class="btn btn-soft-danger btn-sm">
                                                            Delete
                                                        </button>
                                                    </div>
                                                </td>

                                            </tr>
                                        @empty
                                            <h3 class="text-center">
                                                No Countries created yet! Please create some to display!!
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
</div>
