@extends('layouts-admin.app')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Dashboard' )

@section('content')
<div class="page-wrapper">
    <!-- Page header -->
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
              <div class="col">
                <!-- Page pre-title -->
                <h1 class="page-title">
                  Dashboard
                </h1>
              </div>
            </div>
        </div>
    </div>
</div>
@endsection