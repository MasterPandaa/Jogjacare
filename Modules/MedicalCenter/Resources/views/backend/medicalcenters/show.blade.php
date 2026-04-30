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
<div class="row mt-4">
    <div class="col">
        <div class="table-responsive">
            <table class="table table-hover">
                <tr>
                    <th>@lang('medicalcenter::text.name')</th>
                    <td>{{ $$module_name_singular->name }}</td>
                </tr>
                <tr>
                    <th>@lang('medicalcenter::text.slug')</th>
                    <td>{{ $$module_name_singular->slug }}</td>
                </tr>
                <tr>
                    <th>@lang('medicalcenter::text.type')</th>
                    <td>{{ $$module_name_singular->type }}</td>
                </tr>
                <tr>
                    <th>@lang('medicalcenter::text.district')</th>
                    <td>{{ $$module_name_singular->district }}</td>
                </tr>
                <tr>
                    <th>@lang('medicalcenter::text.sub_district')</th>
                    <td>{{ $$module_name_singular->sub_district }}</td>
                </tr>
                <tr>
                    <th>@lang('medicalcenter::text.address')</th>
                    <td>{{ $$module_name_singular->address }}</td>
                </tr>
                <tr>
                    <th>@lang('medicalcenter::text.contact')</th>
                    <td>{{ $$module_name_singular->contact }}</td>
                </tr>
                <tr>
                    <th>@lang('medicalcenter::text.intro')</th>
                    <td>{{ $$module_name_singular->intro }}</td>
                </tr>
                <tr>
                    <th>@lang('medicalcenter::text.description')</th>
                    <td>{!! $$module_name_singular->description !!}</td>
                </tr>
                @if($$module_name_singular->image)
                <tr>
                    <th>@lang('medicalcenter::text.image')</th>
                    <td><img src="{{ asset($$module_name_singular->image) }}" class="img-fluid" style="max-width: 300px;" alt="{{ $$module_name_singular->name }}"></td>
                </tr>
                @endif
                @if($$module_name_singular->maps)
                <tr>
                    <th>@lang('medicalcenter::text.maps')</th>
                    <td><a href="{{ $$module_name_singular->maps }}" target="_blank">View on Google Maps</a></td>
                </tr>
                @endif
            </table>
        </div>
    </div>
</div>
@endsection