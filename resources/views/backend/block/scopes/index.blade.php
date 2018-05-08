@extends ('backend.layouts.app')

@section ('title', __('labels.backend.access.block.scopes.management'). ' - Admin ' . app_name())

@section('content')
<div id="message">
</div>
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-sm-5">
                <h4 class="card-title mb-0">
                    {{__('labels.backend.access.block.scopes.management')}}
                </h4>
            </div><!--col-->
        </div><!--row-->
        <!--row-->

        <hr />
        <div class="row">
            <div class="col-md-6">
                <h3>Menu</h3>
                <div class="dd nestable" data-output="#content" id="nestable">
                    @include('backend.block.scopes.list', ['blockScopes' => $blockScopes, 'index' => 0])
                </div>
            </div>
            <div class="col-md-6">
                <form class="form-inline" id="menu-add">
                    <h3>Add new item</h3>
                    <div class="form-group">
                        <label for="addInputName">Name</label>
                        <input type="text" class="form-control" id="addInputName" placeholder="Item name" required>
                    </div>
                    <button class="btn btn-info" id="addButton">Add</button>
                </form>
                <form class="" id="menu-editor" style="display: none;">
                    <h3>Editing <span id="currentEditName"></span></h3>
                    <div class="form-group">
                        <label for="addInputName">Name</label>
                        <input type="text" class="form-control" id="editInputName" placeholder="Item name" required>
                    </div>
                    <button class="btn btn-info" id="editButton">Edit</button>
                    <button type="button" class="btn btn-danger" id="editButtonCancel">Cancel</button>
                </form>
            </div>
        </div>
    </div><!--card-body-->
    {{ html()->form('PATCH', route('admin.block.scopes.update'))->class('form-horizontal')->open() }}
    <input type="hidden" name="content" id="content">
    <div class="card-footer">
        <div class="row">
            <div class="col text-right">
                {{ html()->button(__('buttons.general.crud.update'), 'button')
                    ->class('btn btn-success btn-sm pull-right')
                    ->attributes(['data-url' => route('admin.block.scopes.update')])
                    ->id('update_scopes') }}
            </div><!--col-->
        </div><!--row-->
    </div><!--card-footer-->
    {{ html()->closeModelForm() }}
</div>
@endsection
@push('after-styles')
    {!! style('css/nestable.css') !!}
@endpush