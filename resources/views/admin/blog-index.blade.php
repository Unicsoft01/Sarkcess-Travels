<div>
    <x-slot:phead>Blog posts</x-slot>

    <div class="container">

        <div class="row">
            <div class="col-xl-12">

                <div class="card shd">
                    <div class="card-header d-flex justify-content-between align-items-center gap-1">
                        <h4 class="card-title flex-grow-1 mb-1 anchor" id="alert-link">
                            <a href="{{ route('blog.frontend') }}" target="_blank" class="btn btn-soft-primary">
                               Goto blog view
                            </a>

                        </h4>

                        <a href="{{ route('admin.blog-post.create') }}" wire:navigate class="btn btn-sm btn-success">
                            Create new Post
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
                                            <th>Post Title</th>
                                            <th>Created by</th>
                                            <th>Created at</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($posts as $post)
                                            <tr :key="{{ $post->post_id }}">
                                                <td>
                                                    <div class="form-check">
                                                        {{ $loop->iteration }}
                                                    </div>
                                                </td>
                                                <td title="{{ Str::of($post->post_title)->headline() }}">
                                                    {{ Str::limit($post->post_title, $limit = 53, $end = '...') }}
                                                </td>
                                                <td>
                                                    {{ Str::of($post->user->name)->headline() }}
                                                </td>
                                                <td>
                                                    {!! date('D, d-M-y', strtotime($post->created_at)) !!}
                                                </td>
                                                <td>
                                                    <div class="d-flex gap-2">
                                                        <a href="#"
                                                            target="_blank" class="btn btn-light btn-sm">
                                                            Guest View
                                                        </a>
                                                        <button wire:navigate
                                                            wire:click="OpenPostEditor({{ $post->post_id }})"
                                                            class="btn btn-soft-success btn-sm">
                                                            Post Editor
                                                        </button>
                                                        
                                                        <button
                                                            wire:click="$dispatch('edit-assistance', {id: {{ $post->post_id }}})"
                                                            wire:navigate class="btn btn-soft-danger btn-sm">
                                                            Delete Post
                                                        </button>
                                                    </div>
                                                </td>

                                            </tr>
                                        @empty
                                            <h3 class="text-center">
                                                No posts yet! Please create some posts to display!!
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
