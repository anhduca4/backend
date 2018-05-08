@extends ('backend.layouts.app')

@section ('title', __('labels.backend.access.block.product.management'). ' - Admin ' . app_name())

@section('content')
{{ html()->modelForm($blockProducts, 'PATCH', route('admin.block.product.update'))->class('form-horizontal')->open() }}
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-5">
                    <h4 class="card-title mb-0">
                        {{__('labels.backend.access.block.product.management')}}
                    </h4>
                </div><!--col-->
            </div><!--row-->
            <!--row-->

            <hr />
            @for ($i = 0; $i <= 2; $i++)
                @include('backend.block.product.form', ['kBlockName' => $i, 'blockProduct' => $blockProducts[$i] ?? []])
            @endfor
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
@endsection
@push('before-scripts')
    {!! script('js/ckeditor/ckeditor.js') !!}
@endpush
