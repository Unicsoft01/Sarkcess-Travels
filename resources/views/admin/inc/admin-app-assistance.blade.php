<div class="card shd">
    <div class="card-header d-flex justify-content-between align-items-center gap-1">
        <h4 class="card-title flex-grow-1 mb-1 anchor" id="alert-link">
            <button type="button" class="btn btn-soft-dark">
                {{ Str::of($assistance[0]->section->section_title)->headline() }}
                <a class="anchor-link" href="#alert-link">#</a>
            </button>
            
        </h4>

        <a href="#" class="btn btn-sm btn-success">
            Hide/show From homepage
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
                            <th>Short Name</th>
                            <th>Full name</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($assistance as $assist)
                            <tr :key="{{ $assist->ad_id }}">
                                <td>
                                    <div class="form-check">
                                        {{ $loop->iteration }}
                                    </div>
                                </td>
                                <td>{{ Str::upper($assist->short_name) }}</td>
                                <td>{{ Str::of($assist->fullname)->headline() }}</td>
                                <td>
                                    <div class="d-flex gap-2">
                                        <a href="{{ url('/') }}/{{ $assist->slug }}" target="_blank" class="btn btn-light btn-sm">
                                            Guest View
                                        </a>
                                        <button wire:click="$dispatch('edit-assistance', {id: {{ $assist->ad_id }}})" wire:navigate class="btn btn-soft-primary btn-sm">
                                            Edit {{ Str::upper($assist->short_name) }}
                                        </button>
                                        <button wire:navigate wire:click="OpenPostEditor({{ $assist->post_id }})" class="btn btn-soft-success btn-sm">
                                            Post Editor
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- end table-responsive -->
        </div>
    </div>
</div>
