<a class="btn btn-success waves-effect waves-light" href="javascript:void(0)" data-toggle="modal"

   data-target="#hh-add-new-term-modal">

    <i class="ti-plus mr-1"></i>

    {{__('Create New')}}

</a>

<div id="hh-add-new-term-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">

    <div class="modal-dialog">

        <div class="modal-content">

            <form class="form form-action form-add-term-modal form-translation"

                  data-validation-id="form-add-term"

                  action="{{ dashboard_url('add-new-term') }}">

                <div class="modal-header">

                    <h4 class="modal-title">{{__('Create New')}}</h4>

                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×

                    </button>

                </div>

                <div class="modal-body relative">

                    @include('common.loading')

                    <?php

                    show_lang_section('mb-2');

                    $langs = get_languages_field();

                    ?>

                    <div class="form-group">

                        <label for="term_name">{{__('Name')}}</label>

                        @foreach($langs as $key => $item)

                            <input type="text" class="form-control has-validation {{get_lang_class($key, $item)}}"

                                   data-validation="required" id="term_name{{get_lang_suffix($item)}}"

                                   name="term_name{{get_lang_suffix($item)}}" @if(!empty($item)) data-lang="{{$item}}"

                                   @endif

                                   placeholder="{{__('Name')}}">

                        @endforeach

                    </div>

                    <div class="form-group">

                        <label for="">{{__('All Categories')}}</label>
                        @foreach($langs as $key => $item)
                            <?php
                                $categories = App\Models\Category::get();
                            ?>
                            <select type="text" class="form-control has-validation {{get_lang_class($key, $item)}}"

                                data-validation="required" id="term_name{{get_lang_suffix($item)}}"

                                name="category_id" @if(!empty($item)) data-lang="{{$item}}"

                                @endif

                                placeholder="{{__('Name')}}">
                                @foreach($categories as  $item1)
                                    <option value="{{$item1->id}}">{{ get_translate($item1->name, $item) }}</option>
                                @endforeach
                            </select>
                        @endforeach

                    </div>

                    <div class="form-group">

                        <label for="term_description">{{__('Description')}}</label>

                        @foreach($langs as $key => $item)

                            <textarea name="term_description{{get_lang_suffix($item)}}"

                                      id="term_description{{get_lang_suffix($item)}}"

                                      class="form-control {{get_lang_class($key, $item)}}"

                                      placeholder="{{__('Description')}}"

                                      @if(!empty($item)) data-lang="{{$item}}" @endif></textarea>

                        @endforeach

                    </div>

                    <div class="form-group field-icon relative">

                        <label for="term_icon">

                            {{__('Icon')}}

                        </label>

                        <input type="text" class="form-control hh-icon-input"

                               id="term_icon" name="term_icon"

                               data-action="{{ dashboard_url('get-font-icon') }}"

                               data-plugin="fonticon" value=""

                               placeholder="{{__('Icon')}}">

                    </div>

                </div>

                <div class="modal-footer">

                    <input type="hidden" name="taxonomy_name"

                           value="home-amenity">

                    <button type="submit"

                            class="btn btn-info waves-effect waves-light">{{__('Create New')}}

                    </button>

                </div>

            </form>

        </div>

    </div>

</div><!-- /.modal -->

