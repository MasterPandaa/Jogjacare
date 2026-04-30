<form method="POST" action="{{ $action_url }}" enctype="multipart/form-data">
    <div class="row">
        <div class="col-12 col-sm-4 mb-3">
            <div class="form-group">
                <?php
                $field_name = 'name';
                $field_lable = 'Nama Layanan';
                $field_placeholder = $field_lable;
                $required = "required";
                ?>
                {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! field_required($required) !!}
                {{ html()->text($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["$required"]) }}
            </div>
        </div>
        <div class="col-12 col-sm-4 mb-3">
            <div class="form-group">
                <?php
                $field_name = 'lowest_price';
                $field_lable = 'Harga Terendah';
                $field_placeholder = 'Masukkan harga terendah';
                $required = "required";
                ?>
                {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! field_required($required) !!}
                <div class="input-group">
                    <span class="input-group-text">Rp</span>
                    {{ html()->number($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["$required", "min" => "0"]) }}
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-4 mb-3">
            <div class="form-group">
                <?php
                $field_name = 'highest_price';
                $field_lable = 'Harga Tertinggi';
                $field_placeholder = 'Masukkan harga tertinggi';
                $required = "required";
                ?>
                {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! field_required($required) !!}
                <div class="input-group">
                    <span class="input-group-text">Rp</span>
                    {{ html()->number($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["$required", "min" => "0"]) }}
                </div>
            </div>
        </div>
    </div>
</form>

<x-library.select2 />