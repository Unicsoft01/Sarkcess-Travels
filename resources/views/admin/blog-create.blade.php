<x-slot:phead>Edit </x-slot>

<x-head.tinymce-config />

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card shd">
                <div class="card-body">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 py-0">
                            <li class="breadcrumb-item">
                                <a href="{{ route('welcome') }}">
                                    Home
                                </a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="{{ route('dashboard') }}">
                                    Dashboard
                                </a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="{{ route('admin.homepage') }}#alert-link">
                                    previous
                                </a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Edit
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="card shd">
                <div class="card-header">
                    <h4 class="card-title">Update </h4>
                </div>
                <div class="card-body">
                    <form method="post" action="{{ route('blog-post.create') }}" enctype="multipart/form-data">
                        @csrf
                        {{-- @method('PATCH') --}}
                        <div class="col-12">
                            <label for="logo" class="form-label">Displayed Image</label>

                            <input class="form-control @error('thumbnail') is-invalid @enderror" id="thumbnail"
                                type="file" required name="thumbnail">
                            @error('thumbnail')
                                <div id="thumbnail" class="text-danger mt-1">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="col-md-12 mb-3">
                            <label for="Post Title" class="form-label">Post Title</label>

                            <input type="text" required name="post_title" class="form-control"
                                placeholder="Enter a conscise Blog Title">

                            @error('post_title')
                                <div id="post_title" class="text-danger mt-1">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        {{-- body --}}

                        <textarea id="mytextarea" class="form-control" placeholder="Blog Post" name="post">
                            
                        </textarea>

                        <input type="hidden" name="user_id" value="{{ Auth::User()->user_id }}">

                        <input type="submit" class="btn btn-secondary btn-lg mt-5">
                    </form>
                </div>
            </div>
        </div>
    </div>

    @include('components.alerts')
</div>
