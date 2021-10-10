@extends('layouts.app')
@section('content')
    <x-utils.card :attrs="['title' => 'Type Of Procedure Category']">

                <a href="{{ route('product_setup.type_of_procedure_category.create') }}" class="btn btn-primary float-left mb-3">Add New Type Of Procedure Category</a>

        <x-utils.data-table :ths="['No', 'Code', 'Name', 'Description', 'Procedure', 'Product Type', 'Status', 'Action']">
            @foreach ($result as $k => $data)
                <tr>
                    <td>{{ $k+1 }}</td>
                    <td>{{ $data->code }}</td>
                    <td>{{ $data->name }}</td>
                    <td>{{ $data->description }}</td>
                    <td>{{ $data->proc_type_id }}</td>
                    <td>{{ $data->product_type_id }}</td>
                    <td>{{ $data->status }}</td>
                    <td>
                        <a href="{{ route('product_setup.type_of_procedure_category.edit',[$data->id]) }}" class="btn btn-sm btn-warning btn_edit" data-id="{{$data->id}}">
                            Edit <i class='fa fa-pencil'></i>
                        </a>
                        <form action="{{ route('product_setup.type_of_procedure_category.destroy', $data->id) }}" method="post" style="display: inline;">
                            @method('delete')
                            @csrf
                            <button class="btn btn-sm btn-danger no-alert btn_delete" type="button">
                                Delete <i class='fa fa-trash'></i></button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </x-utils.data-table>
    </x-utils.card>
@endsection
@section('js')
    <script>
        $(document).ready(function() {
           $('.btn_delete').on('click', function() {
               Swal.fire({
                   title: 'Warning!',
                   text: "Are you sure want to delete this?",
                   icon: 'warning',
                   showCancelButton: true,
                   confirmButtonColor: '#3085d6',
                   cancelButtonColor: '#6c757d',
                   confirmButtonText: 'Yes!'
               }).then((result) => {
                   if (result.isConfirmed) {
                       $(this).parent('form').submit();
                   }
               })
           });
        });
    </script>
@endsection
