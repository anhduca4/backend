@extends ('backend.layouts.app')

@section ('title', __('labels.backend.access.block.introduce.management'). ' - Admin ' . app_name())

@section('content')
{{ html()->modelForm($blockIntroduces, 'PATCH', route('admin.block.introduce.update'))->class('form-horizontal')->open() }}
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-5">
                    <h4 class="card-title mb-0">
                        {{__('labels.backend.access.block.introduce.management')}}
                    </h4>
                </div><!--col-->
            </div><!--row-->
            <!--row-->

            <hr />
            <div class="card">
                <div class="card-body">
                    <div class="row mt-4">
                        <div class="col">
                            <div class="form-group row">
                                {{ html()->label('Title')
                                    ->class('col-md-2 form-control-label')
                                    ->for('introduce_title') }}
            
                                <div class="col-md-10">
                                    {{ html()->text('title', $blockIntroduces['title'] ?? '')
                                        ->class('form-control')
                                        ->placeholder('Title')
                                        ->attribute('maxlength', 191)
                                        ->id('introduce_title')
                                        ->required() }}
                                </div><!--col-->
                            </div><!--form-group-->
                            <div class="form-group row">
                                    {{ html()->label('Content')
                                        ->class('col-md-2 form-control-label')
                                        ->for('introduce_content') }}
                
                                    <div class="col-md-10">
                                        <div id="toolbar-container"></div>
                                        {{ html()->textarea('content', $blockIntroduces['content'] ?? '')
                                            ->class('form-control')
                                            ->placeholder('Content')
                                            ->attributes(['rows' => 20])
                                            ->id('introduce_content')
                                            ->required() }}
                                    </div><!--col-->
                                </div><!--form-group-->
                        </div><!--col-->
                    </div><!--row-->
                </div><!--card-body-->
            </div><!--card-->
        </div><!--card-body-->
        <div class="card-footer">
            <div class="row">
                <div class="col text-right">
                    {{ form_submit(__('buttons.general.crud.update')) }}
                </div><!--col-->
            </div><!--row-->
        </div><!--card-footer-->
    </div><!--card-->
{{ html()->closeModelForm() }}
@endsection
@push('before-scripts')
    {!! script('js/ckeditor/ckeditor.js') !!}
@endpush