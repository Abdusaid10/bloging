@if(isset($errors) &&count($errors)>0)
    <div class="alert alert-dismissable allert-danger">
        <button type="button" data-dismiss="alert" aria-label="close" class="close">
            <span aria-hidden="true">&times;</span>
        </button>
        @foreach($errors->all() as $error)
            <li><strong>{!! $error !!}</strong></li>
        @endforeach
    </div>

@endif