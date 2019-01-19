@if(session()->has('success'))
    <div class="alert allert-success">
        <button type="button" data-dismiss="alert" aria-label="Close" class="close">
            <span aria-hidden="true">&times;</span>
        </button>
        <strong>
            {!! session()->get('success') !!}
        </strong>

    </div>

@endif