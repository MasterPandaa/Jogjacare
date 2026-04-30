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
<div class="card">
    <div class="card-body">
        <x-backend.section-header>
            <i class="{{ $module_icon }}"></i> {{ __($module_title) }} <small class="text-muted">{{ __($module_action) }}</small>

            <x-slot name="subtitle">
                @lang(":module_name Management Dashboard", ['module_name'=>Str::title($module_name)])
            </x-slot>
            <x-slot name="toolbar">
                <x-backend.buttons.return-back />
                <x-buttons.edit route='{!!route("backend.$module_name.edit", $$module_name_singular)!!}' title="{{__('Edit')}} {{ ucwords(Str::singular($module_name)) }}" class="ms-1" />
            </x-slot>
        </x-backend.section-header>

        <div class="row mt-4">
            <div class="col">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <tr>
                            <th>{{ __("medicalpoint::text.name") }}</th>
                            <td>{{ $$module_name_singular->name }}</td>
                        </tr>
                        <tr>
                            <th>{{ __("medicalpoint::text.slug") }}</th>
                            <td>{{ $$module_name_singular->slug }}</td>
                        </tr>
                        <tr>
                            <th>{{ __("medicalpoint::text.image") }}</th>
                            <td>
                                <img src="{{ asset($$module_name_singular->image) }}" class="img-fluid" style="max-width: 200px;" alt="{{ $$module_name_singular->name }}">
                            </td>
                        </tr>
                        <tr>
                            <th>{{ __("medicalpoint::text.intro") }}</th>
                            <td>{{ $$module_name_singular->intro }}</td>
                        </tr>
                        <tr>
                            <th>{{ __("medicalpoint::text.description") }}</th>
                            <td>{{ $$module_name_singular->description }}</td>
                        </tr>
                        <tr>
                            <th>{{ __("medicalpoint::text.district") }}</th>
                            <td>{{ $$module_name_singular->district }}</td>
                        </tr>
                        <tr>
                            <th>{{ __("medicalpoint::text.sub_district") }}</th>
                            <td>{{ $$module_name_singular->sub_district }}</td>
                        </tr>
                        <tr>
                            <th>{{ __("medicalpoint::text.contact") }}</th>
                            <td>{{ $$module_name_singular->contact }}</td>
                        </tr>
                        <tr>
                            <th>{{ __("medicalpoint::text.type") }}</th>
                            <td>{{ $$module_name_singular->type }}</td>
                        </tr>
                        <tr>
                            <th>{{ __("medicalpoint::text.address") }}</th>
                            <td>{{ $$module_name_singular->address }}</td>
                        </tr>
                        <tr>
                            <th>{{ __("medicalpoint::text.maps") }}</th>
                            <td>{{ $$module_name_singular->maps }}</td>
                        </tr>
                        <tr>
                            <th>{{ __("medicalpoint::text.meta_title") }}</th>
                            <td>{{ $$module_name_singular->meta_title }}</td>
                        </tr>
                        <tr>
                            <th>{{ __("medicalpoint::text.meta_description") }}</th>
                            <td>{{ $$module_name_singular->meta_description }}</td>
                        </tr>
                        <tr>
                            <th>{{ __("medicalpoint::text.meta_keywords") }}</th>
                            <td>{{ $$module_name_singular->meta_keywords }}</td>
                        </tr>
                        <tr>
                            <th>{{ __("medicalpoint::text.created_at") }}</th>
                            <td>{{ $$module_name_singular->created_at->format('d-m-Y H:i:s') }}</td>
                        </tr>
                        <tr>
                            <th>{{ __("medicalpoint::text.updated_at") }}</th>
                            <td>{{ $$module_name_singular->updated_at->format('d-m-Y H:i:s') }}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection