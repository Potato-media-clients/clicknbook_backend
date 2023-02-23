@include('dashboard.components.header')
<div id="wrapper">
    @include('dashboard.components.top-bar')
    @include('dashboard.components.nav')
    <div id="hh-add-new-term-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form class="form form-action form-add-term-modal form-translation"
                  data-validation-id="form-add-term"
                  action="{{ route('add-new-category') }}"  method="post">
                  @csrf
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
</div>
    <div class="content-page">
        <div class="content">
            @include('dashboard.components.breadcrumb', ['heading' => __('Amenity Category')])
            {{--Start Content--}}
           
            <div class="card-box">
                <div class="header-area d-flex align-items-center">
                    <h4 class="header-title mb-0">{{__('All Categories')}}</h4>
                    <a class="btn btn-success waves-effect waves-light m-3" href="javascript:void(0)" data-toggle="modal"
                    data-target="#hh-add-new-term-modal">
                        <i class="ti-plus mr-1"></i>
                        {{__('Create New')}}
                    </a>
                  
                </div>
               
                <?php
                enqueue_style('datatables-css');
                enqueue_script('datatables-js');
                enqueue_script('pdfmake-js');
                enqueue_script('vfs-fonts-js');
                ?>
                <table class="table table-large mb-0 dt-responsive nowrap w-100" data-plugin="datatable"
                       data-paging="false"
                       data-ordering="false">
                    <thead>
                    <tr>
                        <th data-priority="1">
                            {{__('ID')}}
                        </th>
                        <th data-priority="1" class="force-show">
                            {{__('Name')}}
                        </th>
                        <th data-priority="-1" class="text-center">{{__('Actions')}}</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if ($categories)
                        @foreach ($categories as $item)
                            <tr>
                                <td class="align-middle">
                                    {{$item->id}}
                                </td>
                                <td class="align-middle force-show">
                                    <div class="media align-items-center">
                                        <div class="media-body">
                                            <h5 class="m-0">
                                                {{ get_translate($item->name) }}
                                            </h5>
                                        </div>
                                    </div>
                                </td>
                                <td class="align-middle text-center">
                                    <div class="dropdown d-inline-block">
                                        <a href="javascript: void(0)" class="dropdown-toggle table-action-link"
                                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                                                class="ti-settings"></i></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <?php
                                            $data = [
                                                'termID' => $item->id,
                                                'termEncrypt' => hh_encrypt($item->id)
                                            ];
                                            ?>
                                            <a href="javascript:void(0)" class="dropdown-item" data-toggle="modal"
                                               data-params="{{ base64_encode(json_encode($data)) }}"
                                               data-target="#hh-update-home-amenity-modal">{{__('Edit')}}</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td class="d-none"></td>
                            <td class="d-none"></td>
                            <td class="d-none"></td>
                            <td class="d-none"></td>
                            <td colspan="5">
                                <h4 class="mt-3 text-center">{{__('No term yet.')}}</h4>
                            </td>
                        </tr>
                    @endif
                    </tbody>
                </table>
               
            </div>
            <div id="hh-update-home-amenity-modal" class="modal fade hh-get-modal-content" tabindex="-1" role="dialog"
                 aria-hidden="true"
                 data-url="{{ dashboard_url('get-category-item') }}">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <form class="form form-action form-update-term-modal relative form-translation"
                              data-validation-id="form-add-term"
                              action="{{ dashboard_url('update-category') }}">
                            @include('common.loading')
                            <div class="modal-header">
                                <h4 class="modal-title">{{__('Update Home Amenity')}}</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×
                                </button>
                            </div>
                            <div class="modal-body">
                            </div>
                            <div class="modal-footer">
                                <button type="submit"
                                        class="btn btn-info waves-effect waves-light">{{__('Update')}}
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div><!-- /.modal -->
            {{--End content--}}
            @include('dashboard.components.footer-content')
        </div>
    </div>
</div>
@include('dashboard.components.footer')
<!-- /.modal -->
