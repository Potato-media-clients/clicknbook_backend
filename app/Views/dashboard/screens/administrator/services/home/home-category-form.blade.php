<?php
show_lang_section('mb-2');
$langs = get_languages_field();
?>
<div class="form-group">
    <label for="term_name_update">
        {{__('Name')}}
    </label>
    @foreach($langs as $key => $item)
        <input type="text" class="form-control has-validation {{get_lang_class($key, $item)}}"
               data-validation="required" id="term_name_update{{get_lang_suffix($item)}}"
               name="name{{get_lang_suffix($item)}}"
               value="{{ get_translate($termObject->name, $item) }}" @if(!empty($item)) data-lang="{{$item}}"
               @endif
               placeholder="Name">
    @endforeach
    <input type="hidden" name="term_id" value="{{ $termObject->id }}">
    <input type="hidden" name="term_encrypt" value="{{ hh_encrypt($termObject->id) }}">
</div>
