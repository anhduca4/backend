@extends ('backend.layouts.app')

@section ('title', app_name() . ' | '. __('labels.backend.access.roles.management'))

@section('content')
{{ html()->modelForm($blockWelcomes, 'PATCH', route('admin.block.welcome.update'))->class('form-horizontal')->open() }}
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-5">
                    <h4 class="card-title mb-0">
                        Welcome Management
                    </h4>
                </div><!--col-->
            </div><!--row-->
            <!--row-->

            <hr />
            @if(!empty($blockWelcomes))
                @foreach($blockWelcomes as $kBlockName => $blockWelcome)
                    <div class="card block-welcome" data-id="{{$kBlockName}}" id="block_welcome_{{$kBlockName}}">
                        <div class="card-body">
                            <div class="row mt-4">
                                <div class="col">
                                    <div class="form-group row">
                                        {{ html()->label('Title')
                                            ->class('col-md-2 form-control-label')
                                            ->for('title_'.$kBlockName) }}
                
                                        <div class="col-md-10">
                                            {{ html()->text('title['.$kBlockName.']', $blockWelcome['title'] ?? '')
                                                ->class('form-control')
                                                ->placeholder('Title')
                                                ->attribute('maxlength', 191)
                                                ->id('title_'.$kBlockName)
                                                ->required() }}
                                        </div><!--col-->
                                    </div><!--form-group-->
                                    <div class="form-group row">
                                        {{ html()->label('Description')
                                            ->class('col-md-2 form-control-label')
                                            ->for('description_'.$kBlockName) }}
                
                                        <div class="col-md-10">
                                            {{ html()->textarea('description['.$kBlockName.']', $blockWelcome['description'] ?? '')
                                                ->class('form-control')
                                                ->placeholder('Description')
                                                ->id('description_'.$kBlockName)
                                                ->required() }}
                                        </div><!--col-->
                                    </div><!--form-group-->
                                    <div class="form-group row">
                                        {{ html()->label('Button text')
                                            ->class('col-md-2 form-control-label')
                                            ->for('button_text_'.$kBlockName) }}
                
                                        <div class="col-md-10">
                                            {{ html()->text('button_text['.$kBlockName.']', $blockWelcome['button_text'] ?? '')
                                                ->class('form-control')
                                                ->placeholder('Button Text')
                                                ->attribute('maxlength', 191)
                                                ->id('button_text_'.$kBlockName)
                                                ->required() }}
                                        </div><!--col-->
                                    </div><!--form-group-->
                                    <div class="form-group row">
                                        {{ html()->label('Button Link')
                                            ->class('col-md-2 form-control-label')
                                            ->for('button_link_'.$kBlockName) }}
                
                                        <div class="col-md-10">
                                            {{ html()->text('button_link['.$kBlockName.']', $blockWelcome['button_link'] ?? '')
                                                ->class('form-control')
                                                ->placeholder('Button Link')
                                                ->attribute('maxlength', 191)
                                                ->id('button_link_'.$kBlockName)
                                                ->required() }}
                                        </div><!--col-->
                                    </div><!--form-group-->

                                </div><!--col-->
                            </div><!--col-->
                            <div class="row">
                                <div class="col text-right">
                                    <button type="button" data-id="{{$kBlockName}}" class="btn btn-danger btn-sm pull-right remove-row"><i class="fa fa-trash" aria-hidden="true"></i> Remove this row</button>
                                </div><!--col-->
                            </div><!--row-->
                        </div><!--col-->
                    </div><!--col-->
                @endforeach
            @endif
            <div id="insert_new_form_welcome">
            </div>
            <div class="row">
                <div class="col text-right">
                    <button type="button" id="add_new_row" class="btn btn-success btn-sm pull-right"><i class="fa fa-plus" aria-hidden="true"></i> Add new row</button>
                </div><!--col-->
            </div><!--row-->
        </div>
        <div class="card-footer">
            <div class="row">
                <div class="col text-right">
                    {{ form_submit(__('buttons.general.crud.update')) }}
                </div><!--col-->
            </div><!--row-->
        </div><!--card-footer-->
    </div>
{{ html()->closeModelForm() }}
<div id="block_welcome_new" style="display:none;">
    <div class="card class-room" data-id="id_replace_form_welcome" id="block_welcome_id_replace_form_welcome">
        <div class="card-body">
            <div class="row mt-4">
                <div class="col">
                    <div class="form-group row">
                        {{ html()->label('Title')
                            ->class('col-md-2 form-control-label')
                            ->for('title_id_replace_form_welcome') }}

                        <div class="col-md-10">
                            {{ html()->text('title[id_replace_form_welcome]', '')
                                ->class('form-control')
                                ->placeholder('Title')
                                ->attribute('maxlength', 191)
                                ->id('title_id_replace_form_welcome')
                                ->required() }}
                        </div><!--col-->
                    </div><!--form-group-->
                    <div class="form-group row">
                        {{ html()->label('Description')
                            ->class('col-md-2 form-control-label')
                            ->for('description_id_replace_form_welcome') }}

                        <div class="col-md-10">
                            {{ html()->textarea('description[id_replace_form_welcome]', '')
                                ->class('form-control')
                                ->placeholder('Description')
                                ->id('description_id_replace_form_welcome')
                                ->required() }}
                        </div><!--col-->
                    </div><!--form-group-->
                    <div class="form-group row">
                        {{ html()->label('Button text')
                            ->class('col-md-2 form-control-label')
                            ->for('button_text_id_replace_form_welcome') }}

                        <div class="col-md-10">
                            {{ html()->text('button_text[id_replace_form_welcome]', '')
                                ->class('form-control')
                                ->placeholder('Button Text')
                                ->attribute('maxlength', 191)
                                ->id('button_text_id_replace_form_welcome')
                                ->required() }}
                        </div><!--col-->
                    </div><!--form-group-->
                    <div class="form-group row">
                        {{ html()->label('Button Link')
                            ->class('col-md-2 form-control-label')
                            ->for('button_link_id_replace_form_welcome') }}

                        <div class="col-md-10">
                            {{ html()->text('button_link[id_replace_form_welcome]', '')
                                ->class('form-control')
                                ->placeholder('Button Link')
                                ->attribute('maxlength', 191)
                                ->id('button_link_id_replace_form_welcome')
                                ->required() }}
                        </div><!--col-->
                    </div><!--form-group-->

                </div><!--col-->
            </div><!--col-->
            <div class="row">
                <div class="col text-right">
                    <button type="button" data-id="id_replace_form_welcome" class="btn btn-danger btn-sm pull-right remove-row"><i class="fa fa-trash" aria-hidden="true"></i> Remove this row</button>
                </div><!--col-->
            </div><!--row-->
        </div><!--col-->
    </div><!--col-->
</div>
@endsection
