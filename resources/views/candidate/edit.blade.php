@extends('layouts.app')

@section('content')
<div class="container">
    <form action="{{ url('/candidate/' . $candidate->id) }}" method="post" enctype="multipart/form-data">

        {{ csrf_field() }}

        {{ method_field('PATCH') }}

        @include('candidate.form',['Modo'=>'edit'])

    </form>
</div>

</div>
@endsection