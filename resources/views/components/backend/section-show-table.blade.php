@props(["data"=>"", "module_name"])
<p>
    @lang("All values of :module_name (Id: :id)", ['module_name'=>ucwords(Str::singular($module_name)), 'id'=>$data->id])
</p>
<table class="table table-responsive-sm table-hover table-bordered">
    <?php
    $all_columns = $data->getTableColumns();
    ?>
    <thead>
        <tr>
            <th scope="col">
                <strong>
                    @lang('Name')
                </strong>
            </th>
            <th scope="col">
                <strong>
                    @lang('Value')
                </strong>
            </th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data->toArray() as $key => $value)
            <tr>
                <td>{{ $key }}</td>
                <td>{{ is_array($value) ? json_encode($value) : $value }}</td>
            </tr>
        @endforeach
    </tbody>
</table>

{{-- Lightbox2 Library --}}
<x-library.lightbox />