<div class="card {{$class ?? 'block-welcome'}}" data-id="{{$kBlockName}}" id="block_welcome_{{$kBlockName}}">
    <div class="card-body">
        <div class="row mt-4">
            <div class="col">
                <div class="form-group row">
                    {{ html()->label('Product name')
                        ->class('col-md-2 form-control-label')
                        ->for('title_small_'.$kBlockName) }}

                    <div class="col-md-10">
                        {{ html()->text('title_small['.$kBlockName.']', $blockProduct['title_small'] ?? '')
                            ->class('form-control')
                            ->placeholder('Product name')
                            ->attribute('maxlength', 191)
                            ->id('title_small_'.$kBlockName)
                            ->required() }}
                    </div><!--col-->
                </div><!--form-group-->
                <div class="form-group row">
                    {{ html()->label('Product description')
                        ->class('col-md-2 form-control-label')
                        ->for('content_small_'.$kBlockName) }}

                    <div class="col-md-10">
                        {{ html()->textarea('content_small['.$kBlockName.']', $blockProduct['content_small'] ?? '')
                            ->class('form-control')
                            ->placeholder('Product description')
                            ->attribute('rows', 10)
                            ->id('content_small_'.$kBlockName)
                            ->required() }}
                    </div><!--col-->
                </div><!--form-group-->
                <div class="form-group row">
                    {{ html()->label('Product benefit')
                        ->class('col-md-2 form-control-label')
                        ->for('title_large_'.$kBlockName) }}

                    <div class="col-md-10">
                        {{ html()->text('title_large['.$kBlockName.']', $blockProduct['title_large'] ?? '')
                            ->class('form-control')
                            ->placeholder('Product benefit')
                            ->id('title_large_'.$kBlockName)
                            ->required() }}
                    </div><!--col-->
                </div><!--form-group-->
                <div class="form-group row">
                    {{ html()->label('Product details')
                        ->class('col-md-2 form-control-label')
                        ->for('content_large_'.$kBlockName) }}

                    <div class="col-md-10">
                        {{ html()->textarea('content_large['.$kBlockName.']', $blockProduct['content_large'] ?? '')
                            ->class('form-control ckediter')
                            ->placeholder('Product details')
                            ->attribute('rows', 10)
                            ->id('content_large_'.$kBlockName)
                            ->required() }}
                    </div><!--col-->
                </div><!--form-group-->
                <div class="form-group row">
                    {{ html()->label('Button text')
                        ->class('col-md-2 form-control-label')
                        ->for('button_title_'.$kBlockName) }}

                    <div class="col-md-10">
                        {{ html()->text('button_title['.$kBlockName.']', $blockProduct['button_title'] ?? '')
                            ->class('form-control')
                            ->placeholder('Button text')
                            ->id('button_title_'.$kBlockName)
                            ->required() }}
                    </div><!--col-->
                </div><!--form-group-->
                <div class="form-group row">
                    {{ html()->label('Button link')
                        ->class('col-md-2 form-control-label')
                        ->for('button_link_'.$kBlockName) }}

                    <div class="col-md-10">
                        {{ html()->text('button_link['.$kBlockName.']', $blockProduct['button_link'] ?? '')
                            ->class('form-control')
                            ->placeholder('Button link')
                            ->id('button_link_'.$kBlockName)
                            ->required() }}
                    </div><!--col-->
                </div><!--form-group-->

            </div><!--col-->
        </div><!--col-->
    </div><!--col-->
</div><!--col-->
