<div class="card {{$class ?? 'block-welcome'}}" data-id="{{$kBlockName}}" id="block_welcome_{{$kBlockName}}">
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