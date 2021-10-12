<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- <link rel="shortcut icon" href="{{ asset('rtad/assets/images/sme_logo.png') }}" /> -->

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@hasSection('title') @yield('title') | {{ config('app.name', 'Laravel') }} @else {{ config('app.name', 'Laravel') }} @endif</title>
    <meta name="description" content="FDA E-submission">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="apple-touch-icon" href="">
    <link rel="shortcut icon" href="{{asset('favicon.ico')}}">
    <script>
      window.base_url = "{{ url('/') }}/";
      var fileUpload, existingImages;
    </script>
  {{--
    @php
      $csses = array(
        'app.css',
        'lib-one.css',
        'lib-two.css',
        'vanillatoasts.css',
        'magnific-popup.css',
        'micromodal.css',
        'image-uploader.min.css',
        'custom.css'
      )
    @endphp
    @foreach($csses as $cssFile)
      <link loaded="initial" type="text/css" href="{{ asset('css/' . $cssFile) }}">
    @endforeach
    --}}

    <link rel="stylesheet" loaded="initial" type="text/css" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" loaded="initial" type="text/css" href="{{ asset('css/lib-one.css') }}">
    <link rel="stylesheet" loaded="initial" type="text/css" href="{{ asset('css/lib-two.css') }}">
    <link rel="stylesheet" loaded="initial" type="text/css" href="{{ asset('css/vanillatoasts.css') }}">
    <link rel="stylesheet" loaded="initial" type="text/css" href="{{ asset('css/custom.css') }}">
    <link rel="stylesheet" loaded="initial" type="text/css" href="{{ asset('css/magnific-popup.css') }}">
    <link rel="stylesheet" loaded="initial" type="text/css" href="{{ asset('css/micromodal.css') }}">
    <link
    rel="stylesheet"
    type="text/css"
    href="https://unpkg.com/file-upload-with-preview@4.1.0/dist/file-upload-with-preview.min.css"
/>
    <link rel="stylesheet" loaded="initial" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    </head>
  <body>
    <div class="container-scroller">
        @auth @include('layouts.navbar') @endauth
        <div class="container-fluid page-body-wrapper">
            @auth @include('layouts.sidebar') @endauth
            <div class="main-panel">
              <div class="content-wrapper" style="padding: 10px;">
              <!-- <div class="row mb-3">
                <div class="col-md-12">Notice BOX</div>
              </div> -->
                @include('layouts.message')                
                @yield('content')
              </div>
              @include('layouts.footer')
            </div>
        </div>
    </div>
  </body>
  <footer>
  {!! js_assets() !!}

@yield('ijs')

@yield('icss')
  </footer>
</html>