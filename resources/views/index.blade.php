@extends('layouts.app')
@section('content')
<style>
</style>
<section>
<div class="container-fluid">
  <div style="margin-top:5px">
        @include('layouts/news')
  </div>  
  <div style="margin-top:5px">
        @include('layouts/cat-news')
  </div>  
</div>

</section>
@endsection
