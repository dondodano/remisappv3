<div class="row">
    <div class="col-md-12">

        <div class="card mb-4">
            <div class="card-header">
                <h5 class="card-title">Projects</h5>
            </div>
            <div class="table-responsive text-nowrap perfect-sc" id="perfect-0">

                {{-- Separate Component --}}
                @include('includes.table-top',['root' => 'project', 'text' => 'Add New Project'])
                {{-- Separate Component --}}

                <table class="table table-hover datatable" id="datatable">
                    <thead class="table-light">
                        <tr>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Leader</th>
                            <th>Duration</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                            <td>RAISE UGMARA</td>
                            <td>RAISE UGMARA</td>
                            <td>Ariel E. San Jose</td>
                            <td>January 1, 2022 - December 31, 2023</td>
                            <td><span class="badge bg-label-success">Completed</span></td>
                            <td>
                                <a href="/project/edit/1" class="btn btn-sm btn-icon" title="Edit">
                                    <i class='bx bx-edit'></i>
                                </a>
                                <button class="btn btn-sm btn-icon" title="Delete" type="button">
                                    <i class='bx bx-trash'></i>
                                </button>
                                <button class="btn btn-sm btn-icon dropdown-toggle hide-arrow" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="bx bx-dots-vertical-rounded me-2"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-end m-0" data-popper-placement="top-end">
                                    <a href="javascript:;" class="dropdown-item">Completed</a>
                                    <a href="javascript:;" class="dropdown-item">Occurring</a>
                                    <div class="dropdown-divider"></div>
                                    <a href="/project/attachment/" class="dropdown-item">View full details</a>
                                    <div class="dropdown-divider"></div>
                                    <a href="/project/attachment/" class="dropdown-item">Add attachment</a>
                                    <a href="/project/attachment/" class="dropdown-item">View attachment</a>
                                </div>
                            </td>
                        </tr>

                    </tbody>
                </table>

                {{-- Separate Component --}}
                @if(isset($projects))
                    @include('includes.table-bottom', ['collection' => $projects])
                @endif
                {{-- Separate Component --}}

            </div>
        </div>

    </div>

    <button class="btn btn-primary btn-lg" type="button" wire:click.prevent="$emit('showModal')">Open Modal</button>

    @livewire('modal.master')

</div>
