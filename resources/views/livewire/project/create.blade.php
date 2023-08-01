<div class="row">
    <div class="col-xxl">
        <div class="card mb-4">
            <h5 class="card-header">
                Project Information
            </h5>
            <form class="card-body" method="post" enctype="multipart/form-data">
                @csrf

                <h6 class="mb-b fw-semibold">1. Project Detail</h6>
                <div class="row mb-3">
                    <label class="col-sm-3 col-form-label text-sm-end" for="programTitle">Program Title</label>
                    <div class="col-sm-9">
                        <textarea id="programTitle" class="form-control" name="programTitle"></textarea>
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-3 col-form-label text-sm-end" for="projectTitle">Project Title</label>
                    <div class="col-sm-9">
                        <textarea id="projectTitle" class="form-control" name="projectTitle"></textarea>
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-3 col-form-label text-sm-end" for="projectLeader">Project Leader</label>
                    <div class="col-sm-9">
                        <input type="text" id="projectLeader" class="form-control" name="projectLeader" value="">
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-3 col-form-label text-sm-end" for="agency">Agency</label>
                    <div class="col-sm-9">
                        <textarea id="agency" class="form-control" name="agency"></textarea>
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-3 col-form-label text-sm-end" for="address">Address</label>
                    <div class="col-sm-9">
                        <textarea id="address" class="form-control" name="address"></textarea>
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-3 col-form-label text-sm-end" for="telephone">Telephone</label>
                    <div class="col-sm-9">
                        <input type="text" id="telephone" class="form-control" name="telephone" value="">
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-3 col-form-label text-sm-end" for="fax">Fax</label>
                    <div class="col-sm-9">
                        <input type="text" id="fax" class="form-control" name="fax" value="">
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-3 col-form-label text-sm-end" for="email">Email</label>
                    <div class="col-sm-9">
                        <input type="text" id="email" class="form-control" name="email" value="">
                    </div>
                </div>

                <hr class="my-4 mx-n4">

                <h6 class="mb-3 fw-semibold">2. Cooperating Agencies</h6>
                <div class="row mb-3">
                    <label class="col-sm-3 col-form-label text-sm-end" for="cooperatingAgency">Cooperating Agency</label>
                    <div class="col-sm-9">
                        <textarea id="cooperatingAgency" class="form-control" name="cooperatingAgency"></textarea>
                    </div>
                </div>

                <hr class="my-4 mx-n4">

                <h6 class="mb-3 fw-semibold">3. Site/s of Implementation</h6>
                <div class="row mb-3">
                    <label class="col-sm-3 col-form-label text-sm-end" for="baseStation">Base Station</label>
                    <div class="col-sm-9">
                        <input type="text" id="baseStation" class="form-control" name="baseStation"  value="">
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-3 col-form-label text-sm-end" for="siteOfImplementation">Site of Implementation</label>
                    <div class="col-sm-9">
                        <input type="text" id="siteOfImplementation" class="form-control" name="siteOfImplementation"  value="">
                    </div>
                </div>

                <hr class="my-4 mx-n4">
                <h6 class="mb-3 fw-semibold">4. Project Duration</h6>
                <div class="row mb-3">
                    <label class="col-sm-3 col-form-label text-sm-end" for="projectDuration">Project Duration</label>
                    <div class="col-sm-9">
                        <input type="number" id="projectDuration" class="form-control" name="projectDuration"  value="">
                        <small class="text-muted">(number of months)</small>
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-3 col-form-label text-sm-end" for="projectStartDate">Project Start Date</label>
                    <div class="col-sm-9">
                        <input type="year" id="projectStartDate" class="form-control" name="projectStartDate"  value="{{ setToday('Y') }}">
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-3 col-form-label text-sm-end" for="projectEndDate">Project End Date</label>
                    <div class="col-sm-9">
                        <input type="year" id="projectEndDate" class="form-control" name="projectEndDate"  value="{{ setToday('Y') }}">
                    </div>
                </div>

                <div class="pt-4">
                    <div class="row justify-content-end">
                        <div class="col-sm-9">
                            <button type="submit" class="btn btn-primary me-sm-2 me-1" name="submit">Submit</button>
                            <button type="reset" class="btn btn-label-secondary" name="cancel">Cancel</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
