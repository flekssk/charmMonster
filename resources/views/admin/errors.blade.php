<?php
/**
 * @var \Illuminate\Support\ViewErrorBag $errors
 */
?>

@if($errors->count())
    @foreach($errors->all() as $field => $error)
        <div class="err">
            {{ $error }}
        </div>
    @endforeach
@endif
