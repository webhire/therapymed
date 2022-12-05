<div class="modal fade" id="modal35" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title modal-text fs-5" id="ModalLabel">Taxminiy tashxis</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                @foreach($answer as $result)
                    <div class="modal-body">
                        {{ $result->result_explanation_uz }}
                    </div>
                @endforeach
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Yopish</button>
                </div>
            </div>
        </div>
    </div>
</div>
