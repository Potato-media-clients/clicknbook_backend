<?php
                $categories = App\Models\Category::get();
$layout = (!empty($layout)) ? $layout : 'col-12';
if (empty($value) && !is_array($value)) {
    $value = $std;
}
$idName = str_replace(['[', ']'], '_', $id);
$value = explode(',', $value);
$langs = $translation == false ? [""] : get_languages_field();
?>

<div id="setting-{{ $idName }}" data-condition="{{ $condition }}"
     data-unique="{{ $unique }}"
     data-operator="{{ $operation }}"
     class="form-group mb-3 col {{ $layout }} field-{{ $type }}">
    <label for="{{ $idName }}">
        {{ __($label) }}
        @if (!empty($desc))
            <i class="dripicons-information field-desc" data-toggle="popover" data-placement="right"
               data-trigger="hover"
               data-content="{{ __($desc) }}"></i>
        @endif
    </label><br/>
    <div class="checkbox-wrapper">
        @if (!empty($choices))
            @if (!is_array($choices))
                <?php
                $choicesTemp = explode(':', $choices);
                if ($choicesTemp[0] == 'taxonomy') {
                    $choicesTemp = get_taxonomies();
                } elseif ($choicesTemp[0] == 'terms') {
                    $choicesTemp = get_terms($choicesTemp[1]);
                }
                ?>
            @else
                <?php $choicesTemp = $choices; 
                 ?>
            @endif

            @php
            $categories = App\Models\Category::get();
            $term = App\Models\Term::get();
            @endphp
            
            @if(!empty($term))
                @if ($style == 'col')
                    <div class="row">
                        @endif
                        @foreach($categories as $category)
                                    <div class="col-12 col-sm-4 col-md-12">
                                        <div id="accordion{{$category->id}}">
                                            <div class="card">
                                              <div class="card-header" id="headingOne{{$category->id}}">
                                                <h5 class="mb-0">
                                                  <a class="btn btn-link" data-toggle="collapse" data-target="#collapseOne{{$category->id}}" aria-expanded="true" aria-controls="collapseOne{{$category->id}}">
                                                    @foreach($langs as $key => $item)
                                                        <span class="{{get_lang_class($key, $item)}}"
                                                            @if(!empty($item)) data-lang="{{$item}}" @endif>{!! balanceTags(get_translate($category->name, $item)) !!}
                                                        </span>
                                                    @endforeach
                                                    </a>
                                                </h5>
                                              </div>
                                          
                                              <div id="collapseOne{{$category->id}}" class="collapse show" aria-labelledby="headingOne{{$category->id}}" data-parent="#accordion{{$category->id}}">
                                                <div class="card-body">
                                                    @foreach ($term->where('category_id',$category->id) as $title)

                                                        <div class="checkbox  checkbox-success @if ($style != 'col') {{$style}} @endif">
                                                            <input type="checkbox"
                                                                name="{{ $id }}[]"
                                                                value="{{ $title->term_id }}"
                                                                @if(in_array($title->term_id, $value)) checked @endif
                                                                id="{{ $idName }}-{{ $title->term_id }}">
                
                                                            <label for="{{ $idName }}-{{ $title->term_id }}">
                                                                @foreach($langs as $key => $item)
                                                                    <span class="{{get_lang_class($key, $item)}}"
                                                                        @if(!empty($item)) data-lang="{{$item}}" @endif>
                                                                    {!! balanceTags(get_translate($title->term_title, $item)) !!}
                                                                </span>
                                                                @endforeach
                                                            </label>
                                                        </div>
                                                    @endforeach

                                                </div>
                                              </div>
                                            </div>
                                        </div>
                                    </div>
                        @endforeach
                        @if ($style == 'col')
                    </div>
                @endif
            @else
                <small><i>{{__('No data')}}</i></small>
            @endif
        @endif
    </div>
</div>
@if($break)
    <div class="w-100"></div> @endif
