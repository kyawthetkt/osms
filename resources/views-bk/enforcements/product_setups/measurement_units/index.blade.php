@extends('layouts.app')
@section('content')
    <div class="row mt-2">
        <div class="col-md-12">

            <x-utils.card :attrs="['title' => 'Creating New Measurement Unit']">
                <x-forms.form-tag :attrs="['id' => 'admin-user-form', 'class' => 'admin-user-form', 'method' => 'post', 'action' => route('product_setup.measurement_unit.store') ]">
                    <div class="col-md-6">
                        <input type="hidden" name="id" value="" id="id">
                        <x-forms.text-input :attrs="['name' => 'name', 'value' => '', 'placeholder' => '', 'label' => 'Name', 'id' => 'name']" />
                    </div>
                    <div class="col-md-6">
                        <x-forms.text-input :attrs="['name' => 'desc', 'value' => '', 'placeholder' => '', 'label' => 'Description', 'id' => 'desc']" />
                    </div>
                    <x-forms.submit :attrs="['name' => 'submit', 'value' => '', 'placeholder' => '', 'label' => 'Save']" />
                </x-forms.form-tag>
            </x-utils.card>

        </div>
    </div>

    <x-utils.card :attrs="['title' => 'Measurement Units']">

{{--        <a href="" class="btn btn-primary float-left mb-3">Add Office User</a>--}}

        <x-utils.data-table :ths="['No', 'Name', 'Description', 'Action']">
            @foreach ($units as $k => $data)
                <tr>
                    <td>{{ $k+1 }}</td>
                    <td>{{ $data->name }}</td>
                    <td>{{ $data->description }}</td>
                    <td>
                        <button href="" class="btn btn-sm btn-warning btn_edit" data-id="{{$data->id}}">
                            Edit <i class='fa fa-pencil'></i>
                        </button>
                        <button class="btn btn-sm btn-danger no-alert btn_delete" data-id="{{$data->id}}">
                            Delete <i class='fa fa-trash'></i></button>
                    </td>
                </tr>
            @endforeach
        </x-utils.data-table>
    </x-utils.card>
@endsection
@section('js')
    <script>
       $(document).ready(function() {
           $('.btn_edit').on('click', function() {
               $("#submit").attr("value","Update");
               let id = $(this).data('id');
               $.ajax({
                   type:'json',
                   url:'/productSetup/measurement_unit/get_measurement',
                   method:'GET',
                   data:{id:id},
                   success: function(response) {
                       console.log(response);
                       $('html, body').animate({scrollTop: '0px'}, 300);
                       $("#id").val(response.data.id);
                       $("#name").val(response.data.name);
                       $("#desc").val(response.data.desc);
                   }
               });
           });
           $('.btn_delete').on('click', function() {
               let id = $(this).data('id');
               Swal.fire({
                   title: 'Are you sure?',
                   text: "You won't be able to revert this!",
                   icon: 'warning',
                   showCancelButton: true,
                   confirmButtonColor: '#3085d6',
                   cancelButtonColor: '#6c757d',
                   confirmButtonText: 'Yes!'
               }).then((result) => {
                   if (result.isConfirmed) {
                       window.location.href="/productSetup/measurement_unit/delete/"+id;
                   }
               })
           });
       })
    </script>
@endsection
