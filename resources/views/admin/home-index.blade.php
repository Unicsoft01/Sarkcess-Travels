<div>
    <x-slot:phead>Customize Site Index page</x-slot>

    <div class="container">

        <div class="row">
            <div class="col-xl-9">

                <livewire:admin.inc.slider-one :id="1" />
                <livewire:admin.inc.slider-one :id="2" />
                <livewire:admin.inc.slider-one :id="3" />
                <livewire:admin.inc.intro-section :id="3" />

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title mb-1 anchor" id="alert-dismissible">
                            How to Apply <a class="anchor-link text-success" href="#alert-dismissible">#</a>
                        </h5>
                        <form class="row g-2" wire:submit="store" novalidate>
                            <x-forms.text-input label="Step One" type="text" required name="form.title"
                                wire:model.blur="form.title" />
                            @error('form.title')
                                <div id="title" class="text-danger mt-1">
                                    {{ $message }}
                                </div>
                            @enderror

                            <x-forms.text-input type="text" required name="form.slug" wire:model.blur="form.slug" />
                            @error('form.slug')
                                <div id="slug" class="text-danger mt-1">
                                    {{ $message }}
                                </div>
                            @enderror

                            <div class="col-md-12">
                                <label for="description" class="form-label">Description</label>
                                <textarea class="form-control  @error('form.description') is-invalid @enderror" id="description"
                                    placeholder="Describe task description [Optional]" wire:model.blur="form.description"></textarea>
                                <div>
                                    @error('form.description')
                                        <div id="description" class="text-danger mt-1">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            {{--  --}}
                            {{-- <div class="col-6">
                                <label for="status" class="form-label">Status</label>
                                <select class="form-select @error('form.status') is-invalid @enderror" required=""
                                    aria-label="status" wire:model.live="form.status">
                                    <option value="">Task status</option>
                                    @foreach (\App\Enums\StatusType::cases() as $status)
                                        <option value="{{ $status->value }}">
                                            {{ $status->name }}
                                        </option>
                                    @endforeach
                                </select>
                                <div>
                                    @error('form.status')
                                        <div id="status" class="text-danger mt-1">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-6">
                                <label for="priority" class="form-label">Priority</label>
                                <select class="form-select  @error('form.priority') is-invalid @enderror" required=""
                                    aria-label="priority" wire:model.live="form.priority">
                                    <option value="">Open this select menu</option>
                                    @foreach (\App\Enums\PriorityType::cases() as $priority)
                                        <option value="{{ $priority->value }}">
                                            {{ $priority->name }}
                                        </option>
                                    @endforeach
                                </select>
                                <div>
                                    @error('form.priority')
                                        <div id="priority" class="text-danger mt-1">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-12 mb-1">
                                <label for="deadline" class="form-label">Deadline</label>
                                <input type="date" class="form-control @error('form.deadline') is-invalid @enderror"
                                    id="deadline" required wire:model.live="form.deadline">

                                <div>
                                    @error('form.deadline')
                                        <div id="deadline" class="text-danger mt-1">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div> --}}
                            <div class="col-12">
                                <button class="btn btn-primary btn-md me-2" type="submit">
                                    <span class="spinner-border spinner-border-sm me-1" role="status"
                                        aria-hidden="true" wire:loading></span>
                                    Create Task
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

                <livewire:admin.inc.admin-app-assistance />

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title mb-1 anchor" id="alert-icon">
                            Icons Alert Example <a class="anchor-link" href="#alert-icon">#</a>
                        </h5>
                        <p class="text-muted">
                            You can also include additional elements like icons, heading, etc along side the actual
                            message.
                        </p>

                        <div class="mb-3">
                            <div class="alert alert-primary alert-icon" role="alert">
                                <div class="d-flex align-items-center">
                                    <div
                                        class="avatar-sm rounded bg-primary d-flex justify-content-center align-items-center fs-18 me-2 flex-shrink-0">
                                        <i class="bx bx-info-circle text-white"></i>
                                    </div>
                                    <div class="flex-grow-1">
                                        A simple primary alert—check it out!
                                    </div>
                                </div>
                            </div>
                            <div class="alert alert-secondary alert-icon" role="alert">
                                <div class="d-flex align-items-center">
                                    <div
                                        class="avatar-sm rounded bg-secondary d-flex justify-content-center align-items-center fs-18 me-2 flex-shrink-0">
                                        <i class="bx bx-x-circle text-white"></i>
                                    </div>
                                    <div class="flex-grow-1">
                                        A simple secondary alert—check it out!
                                    </div>
                                </div>
                            </div>
                            <div class="alert alert-success alert-icon" role="alert">
                                <div class="d-flex align-items-center">
                                    <div
                                        class="avatar-sm rounded bg-success d-flex justify-content-center align-items-center fs-18 me-2 flex-shrink-0">
                                        <i class="bx bx-check-shield text-white"></i>
                                    </div>
                                    <div class="flex-grow-1">
                                        A simple success alert—check it out!
                                    </div>
                                </div>
                            </div>
                            <div class="alert alert-danger alert-icon mb-0" role="alert">
                                <div class="d-flex align-items-center">
                                    <div
                                        class="avatar-sm rounded bg-danger d-flex justify-content-center align-items-center fs-18 me-2 flex-shrink-0">
                                        <i class="bx bx-info-circle text-white"></i>
                                    </div>
                                    <div class="flex-grow-1">
                                        A simple danger alert—check it out!
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="highlight">
                            <div class="highlight-toolbar">
                                <small class="text-uppercase">html</small>
                                <button class="btn btn-sm btn-outline-success btn-copy-clipboard"
                                    data-clipboard-action="copy">Copy</button>
                            </div>
                            <div class="code">
                                <pre class="language-html">
                                    <code id="alertWithIcon">
                                        &lt;div class=&quot;alert alert-primary alert-icon&quot; role=&quot;alert&quot;&gt;
                                            &lt;div class=&quot;d-flex align-items-center&quot;&gt;
                                                &lt;div class=&quot;avatar-sm rounded bg-primary d-flex justify-content-center align-items-center fs-18 me-2 flex-shrink-0&quot;&gt;
                                                    &lt;i class=&quot;bx bx-info-circle text-white&quot;&gt;&lt;/i&gt;
                                                &lt;/div&gt;
                                                &lt;div class=&quot;flex-grow-1&quot;&gt;
                                                    A simple primary alert&mdash;check it out!
                                                &lt;/div&gt;
                                            &lt;/div&gt;
                                        &lt;/div&gt;
                                        &lt;div class=&quot;alert alert-secondary alert-icon&quot; role=&quot;alert&quot;&gt;
                                            &lt;div class=&quot;d-flex align-items-center&quot;&gt;
                                                &lt;div class=&quot;avatar-sm rounded bg-secondary d-flex justify-content-center align-items-center fs-18 me-2 flex-shrink-0&quot;&gt;
                                                    &lt;i class=&quot;bx bx-x-circle text-white&quot;&gt;&lt;/i&gt;
                                                &lt;/div&gt;
                                                &lt;div class=&quot;flex-grow-1&quot;&gt;
                                                    A simple secondary alert&mdash;check it out!
                                                &lt;/div&gt;
                                            &lt;/div&gt;
                                        &lt;/div&gt;
                                        &lt;div class=&quot;alert alert-success alert-icon&quot; role=&quot;alert&quot;&gt;
                                            &lt;div class=&quot;d-flex align-items-center&quot;&gt;
                                                &lt;div class=&quot;avatar-sm rounded bg-success d-flex justify-content-center align-items-center fs-18 me-2 flex-shrink-0&quot;&gt;
                                                    &lt;i class=&quot;bx bx-check-shield text-white&quot;&gt;&lt;/i&gt;
                                                &lt;/div&gt;
                                                &lt;div class=&quot;flex-grow-1&quot;&gt;
                                                    A simple success alert&mdash;check it out!
                                                &lt;/div&gt;
                                            &lt;/div&gt;
                                        &lt;/div&gt;
                                        &lt;div class=&quot;alert alert-danger alert-icon mb-0&quot; role=&quot;alert&quot;&gt;
                                            &lt;div class=&quot;d-flex align-items-center&quot;&gt;
                                                &lt;div class=&quot;avatar-sm rounded bg-danger d-flex justify-content-center align-items-center fs-18 me-2 flex-shrink-0&quot;&gt;
                                                    &lt;i class=&quot;bx bx-info-circle text-white&quot;&gt;&lt;/i&gt;
                                                &lt;/div&gt;
                                                &lt;div class=&quot;flex-grow-1&quot;&gt;
                                                    A simple danger alert&mdash;check it out!
                                                &lt;/div&gt;
                                            &lt;/div&gt;
                                        &lt;/div&gt;    
                                    </code>
                                </pre>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title mb-1 anchor" id="alert-additional">
                            Additional Content Alert Example <a class="anchor-link" href="#alert-additional">#</a>
                        </h5>
                        <p class="text-muted">
                            Alerts can also contain additional HTML elements like headings, paragraphs and dividers.
                        </p>

                        <div class="mb-3">
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="alert alert-primary mb-3 p-3 mb-xl-0" role="alert">
                                        <h4 class="alert-heading">Well done!</h4>
                                        <p class="mb-0">Aww yeah, you successfully read this important alert message.
                                            This example text is going to run a bit longer so that you can see how
                                            spacing within an alert works with this kind of content.</p>
                                        <hr>
                                        <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep
                                            things nice and tidy.</p>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="alert alert-secondary p-3 mb-0" role="alert">
                                        <h4 class="alert-heading">Well done!</h4>
                                        <p class="mb-0">Aww yeah, you successfully read this important alert message.
                                            This example text is going to run a bit longer so that you can see how
                                            spacing within an alert works with this kind of content.</p>
                                        <hr>
                                        <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep
                                            things nice and tidy.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="highlight">
                            <div class="highlight-toolbar">
                                <small class="text-uppercase">html</small>
                                <button class="btn btn-sm btn-outline-success btn-copy-clipboard"
                                    data-clipboard-action="copy">Copy</button>
                            </div>
                            <div class="code">
                                <pre class="language-html">
                                    <code id="additionalContent">
                                        &lt;div class=&quot;alert alert-primary mb-3 p-3 mb-xl-0&quot; role=&quot;alert&quot;&gt;
                                            &lt;h4 class=&quot;alert-heading&quot;&gt;Well done!&lt;/h4&gt;
                                            &lt;p class=&quot;mb-0&quot;&gt;Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.&lt;/p&gt;
                                            &lt;hr&gt;
                                            &lt;p class=&quot;mb-0&quot;&gt;Whenever you need to, be sure to use margin utilities to keep things nice and tidy.&lt;/p&gt;
                                        &lt;/div&gt;
                                        &lt;div class=&quot;alert alert-secondary p-3 mb-0&quot; role=&quot;alert&quot;&gt;
                                            &lt;h4 class=&quot;alert-heading&quot;&gt;Well done!&lt;/h4&gt;
                                            &lt;p class=&quot;mb-0&quot;&gt;Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.&lt;/p&gt;
                                            &lt;hr&gt;
                                            &lt;p class=&quot;mb-0&quot;&gt;Whenever you need to, be sure to use margin utilities to keep things nice and tidy.&lt;/p&gt;
                                        &lt;/div&gt;
                                    </code>
                                </pre>
                            </div>
                        </div>
                    </div> <!-- end card body -->
                </div> <!-- end card -->
            </div> <!-- end col -->

            <div class="col-xl-3">
                <div class="card docs-nav">
                    <h4 class="text-center text-success">Page Sections</h4>
                    <ul class="nav bg-transparent flex-column">
                        <li class="nav-item">
                            <a href="#slider1" class="nav-link">Home Slider One</a>
                        </li>
                        <li class="nav-item">
                            <a href="#slider2" class="nav-link">Home Slider Two</a>
                        </li>
                        <li class="nav-item">
                            <a href="#slider3" class="nav-link">Home Slider Three</a>
                        </li>
                        <li class="nav-item">
                            <a href="#alert-dismissible" class="nav-link">How to Apply</a>
                        </li>
                        <li class="nav-item">
                            <a href="#alert-link" class="nav-link">Application Assistance</a>
                        </li>
                        <li class="nav-item">
                            <a href="#alert-icon" class="nav-link">Icons Alert</a>
                        </li>
                        <li class="nav-item">
                            <a href="#alert-additional" class="nav-link">Additional Content Alert</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div> <!-- end row -->

    </div>
</div>
