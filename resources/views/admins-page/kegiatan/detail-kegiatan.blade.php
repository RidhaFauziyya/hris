@extends('layouts-admin.app')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Detail Kegiatan' )

@section('content')
<div class="card">
<div class="row row-0">
<div class="col-3">
    <!-- Photo -->
    <img src="./static/photos/beautiful-blonde-woman-relaxing-with-a-can-of-coke-on-a-tree-stump-by-the-beach.jpg" class="w-100 h-100 object-cover card-img-start" alt="Beautiful blonde woman relaxing with a can of coke on a tree stump by the beach" />
</div>
<div class="col">
    <div class="card-body">
    <h3 class="card-title">Card with left side image</h3>
    <p class="text-secondary">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam deleniti fugit
        incidunt, iste, itaque minima
        neque pariatur perferendis sed suscipit velit vitae voluptatem.</p>
    </div>
</div>
</div>
@endsection