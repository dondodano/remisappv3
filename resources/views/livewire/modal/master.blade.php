<div>
    <div class="modal fade {{ $show == true ? 'show' : null }}" id="addNewCCModal" tabindex="-1" style="display: {{ $show == true ? 'block' : 'none' }} ;"  {{ $show == true ? 'aria-modal="true" role="dialog"' : 'aria-hidden="true"' }}>
        <div class="modal-dialog modal-dialog-centered1 modal-simple modal-add-new-cc">
            <div class="modal-content p-3 p-md-5">
                <div class="modal-body">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="text-center mb-4">
                    <h3>Add New Card</h3>
                    <p>Add new card to complete payment</p>
                    </div>
                    <form id="addNewCCForm" class="row g-3 fv-plugins-bootstrap5 fv-plugins-framework" onsubmit="return false" novalidate="novalidate">
                    <div class="col-12 fv-plugins-icon-container">
                        <label class="form-label w-100" for="modalAddCard">Card Number</label>
                        <div class="input-group input-group-merge has-validation">
                        <input id="modalAddCard" name="modalAddCard" class="form-control credit-card-mask" type="text" placeholder="1356 3215 6548 7898" aria-describedby="modalAddCard2">
                        <span class="input-group-text cursor-pointer p-1" id="modalAddCard2"><span class="card-type"></span></span>
                        </div><div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
                    </div>
                    <div class="col-12 col-md-6">
                        <label class="form-label" for="modalAddCardName">Name</label>
                        <input type="text" id="modalAddCardName" class="form-control" placeholder="John Doe">
                    </div>
                    <div class="col-6 col-md-3">
                        <label class="form-label" for="modalAddCardExpiryDate">Exp. Date</label>
                        <input type="text" id="modalAddCardExpiryDate" class="form-control expiry-date-mask" placeholder="MM/YY">
                    </div>
                    <div class="col-6 col-md-3">
                        <label class="form-label" for="modalAddCardCvv">CVV Code</label>
                        <div class="input-group input-group-merge">
                        <input type="text" id="modalAddCardCvv" class="form-control cvv-code-mask" maxlength="3" placeholder="654">
                        <span class="input-group-text cursor-pointer" id="modalAddCardCvv2"><i class="bx bx-help-circle text-muted" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Card Verification Value" data-bs-original-title="Card Verification Value"></i></span>
                        </div>
                    </div>
                    <div class="col-12">
                        <label class="switch">
                        <input type="checkbox" class="switch-input">
                        <span class="switch-toggle-slider">
                            <span class="switch-on"></span>
                            <span class="switch-off"></span>
                        </span>
                        <span class="switch-label">Save card for future billing?</span>
                        </label>
                    </div>
                    <div class="col-12 text-center">
                        <button type="submit" class="btn btn-primary me-sm-3 me-1 mt-3">Submit</button>
                        <button type="reset" class="btn btn-label-secondary btn-reset mt-3" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                    </div>
                    <input type="hidden"></form>
                </div>
            </div>
        </div>
    </div>

    @if($show == true)
        <div class="modal-backdrop fade show"></div>
    @endif
</div>
