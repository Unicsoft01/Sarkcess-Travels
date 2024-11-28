<div>
    <x-slot:phead>FAQs and Answers</x-slot>

    <div class="container">

        <div class="row">
            <div class="col-xl-12">

                <div class="card shd">
                    <div class="card-header d-flex justify-content-between align-items-center gap-1">
                        <h4 class="card-title flex-grow-1 mb-1 anchor" id="alert-link">
                            <a href="{{ route('faq.frontend') }}" target="_blank" class="btn btn-soft-primary">
                               Users View
                            </a>

                        </h4>

                        <a href="{{ route('admin.faq.create') }}" wire:navigate class="btn btn-sm btn-success">
                            Create Q&A
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
                                            <th>Question</th>
                                            <th>Answer</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($faqs as $faq)
                                            <tr :key="{{ $faq->id }}">
                                                <td>
                                                    <div class="form-check">
                                                        {{ $loop->iteration }}
                                                    </div>
                                                </td>
                                                {{-- <td></td> --}}
                                                <td title="{{ Str::of($faq->question)->headline() }}">
                                                    {{ Str::of($faq->question)->headline() }}
                                                </td>
                                                <td title="{{ Str::of($faq->answer)->headline() }}">
                                                    
                                                    {{ Str::limit($faq->answer	, $limit = 53, $end = '...') }}
                                                </td>
                                                
                                                <td>
                                                    <div class="d-flex gap-2">
                                                       
                                                        <button wire:navigate
                                                            wire:click="OpenPostEditor({{ $faq->id }})"
                                                            class="btn btn-soft-success btn-sm">
                                                            Edit
                                                        </button>
                                                        
                                                        <button
                                                        wire:click="$dispatch('delete-prompt', {id: {{ $faq->id }}})" class="btn btn-soft-danger btn-sm">
                                                            Delete
                                                        </button>
                                                    </div>
                                                </td>

                                            </tr>
                                        @empty
                                            <h3 class="text-center">
                                                Please create some Q&A
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
