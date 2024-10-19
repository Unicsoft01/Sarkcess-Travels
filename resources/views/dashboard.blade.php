<x-app-layout>

    <x-slot:phead>Admin Dashboard</x-slot>

    <div class="container-fluid">
        <div class="alert alert-primary alert-dismissible fade show" role="alert">
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            Notice Any unresponsiveness in the UI? Please refresh the page!!
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="card shd">
                    <div class="card-body">
                        <h3>
                            Dashboard for {{ Auth::user()->name }}
                        </h3>
                    </div>
                </div>
            </div>
        </div>


    </div>
</x-app-layout>
