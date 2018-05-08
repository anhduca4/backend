@extends ('backend.layouts.app')

@section ('title', __('labels.backend.access.block.welcome.management'). ' - Admin ' . app_name())

@section('content')
@php
$oldInputWelcomes = session()->getOldInput();
@endphp
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
                    @php
                        if(isset($oldInputWelcomes['title'][$kBlockName])){
                            unset($oldInputWelcomes['title'][$kBlockName]);
                        }
                    @endphp
                    @include('backend.block.welcome.form', ['kBlockName' => $kBlockName, 'blockWelcome' => $blockWelcome])
                @endforeach
            @endif
            <div id="insert_new_form_welcome">
                @if(isset($oldInputWelcomes['title']) && !empty($oldInputWelcomes['title']))
                    @foreach($oldInputWelcomes['title'] as $kInputOldWelcome => $oldInputWelcomeTitle)
                        @php
                            $oldInputWelcome = [
                                'title' => $oldInputWelcomeTitle,
                                'description' => $oldInputWelcomes['description'][$kInputOldWelcome] ?? '',
                                'button_text' => $oldInputWelcomes['button_text'][$kInputOldWelcome] ?? '',
                                'button_link' => $oldInputWelcomes['button_link'][$kInputOldWelcome] ?? '',
                            ];
                        @endphp
                        @include('backend.block.welcome.form', ['kBlockName' => $kInputOldWelcome, 'blockWelcome' => $oldInputWelcome])
                    @endforeach
                @endif
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
    @include('backend.block.welcome.form', ['kBlockName' => 'id_replace_form_welcome', 'blockWelcome' => [], 'class' => 'class-room'])
</div>
@endsection
