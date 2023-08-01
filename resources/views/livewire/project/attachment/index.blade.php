<div class="row">
    <div class="col-md-12">

        <div class="card mb-4">
            <div class="card-header">
                <h5 class="card-title">Project attachment</h5>
            </div>
            <div class="table-responsive text-nowrap perfect-sc" id="perfect-0">

                {{-- Separate Component --}}
                @include('includes.table-top',['root' => 'project/attachment', 'text' => 'Add attachment'])
                {{-- Separate Component --}}

                <table class="table table-hover datatable" id="datatable">
                    <thead class="table-light">
                        <tr>
                            <th>File</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                            <td>RAISE Memorandum of Agreement.pdf</td>
                            <td>
                                <a href="/project/edit/1" class="btn btn-sm btn-icon" title="Edit">
                                    <i class='bx bx-edit'></i>
                                </a>
                                <button class="btn btn-sm btn-icon" title="Delete" type="button">
                                    <i class='bx bx-trash'></i>
                                </button>
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
</div>
