<div>
    <div class="modal commonModal fade {{ $show == true ? 'show' : null }}" id="modal" tabindex="-1" style="display: {{ $show == true ? 'block' : 'none' }} ;"  {{ $show == true ? 'aria-modal="true" role="dialog"' : 'aria-hidden="true"' }}>
        <div class="modal-dialog modal-dialog-centered1 modal-simple modal-add-new-cc">
            <div class="modal-content p-3 p-md-5">
                <div class="modal-body">
                    <button type="button" class="btn-close" aria-label="Close" wire:click.prevent="doClose()"></button>
                    <div class="text-center mb-4">
                        <h3>{{ $modalTitle }}</h3>
                        @if(strlen($modalSubTitle) > 0)
                            <p>{{ $modalSubTitle }}</p>
                        @endif
                    </div>
                    <div  class="row g-3 fv-plugins-bootstrap5 fv-plugins-framework" >

                        {{ $modalContent }}

                        <div class="col-12 text-center">
                            <button type="submit" class="btn btn-primary me-sm-3 me-1 mt-3" wire:click.prevent="doSomething()">Submit</button>
                            <button type="reset" class="btn btn-label-secondary btn-reset mt-3" wire:click.prevent="doClose()" aria-label="Close">Cancel</button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    @if($show == true)
        <div class="modal-backdrop fade show"></div>
    @endif
</div>
