@extends('backend.layouts.app')

@section('title') {{ __($module_action) }} {{ __($module_title) }} @endsection

@section('breadcrumbs')
<x-backend.breadcrumbs>
    <x-backend.breadcrumb-item route='{{route("backend.$module_name.index")}}' icon='{{ $module_icon }}'>
        {{ __($module_title) }}
    </x-backend.breadcrumb-item>
    <x-backend.breadcrumb-item type="active">{{ __($module_action) }}</x-backend.breadcrumb-item>
</x-backend.breadcrumbs>
@endsection

@section('content')
<x-backend.layouts.show :data="$$module_name_singular" :module_name="$module_name" :module_path="$module_path" :module_title="$module_title" :module_icon="$module_icon" :module_action="$module_action" />
<div class="col-12 col-sm-6">
    <div class="form-group">
        <strong>@lang("medicalcare::text.image")</strong>
        <p>
            @if($$module_name_singular->image)
                <img src="{{ asset($$module_name_singular->image) }}" class="img-fluid" alt="{{ $$module_name_singular->name }}">
            @else
                N/A
            @endif
        </p>
    </div>
</div>

<div class="col-12 col-sm-6">
    <div class="form-group">
        <strong>@lang("type")</strong>
        <p>{{ $$module_name_singular->type }}</p>
    </div>
</div>

<div class="col-12">
    <div class="form-group">
        <strong>@lang("intro")</strong>
        <p>{{ $$module_name_singular->intro }}</p>
    </div>
</div>
@endsection