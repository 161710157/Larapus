@extends('layouts.app')

@section('content')
<div class="card">
<div class="card-header">Tambah Buku</div>
<br>
<ul class="nav nav-tabs" role="tablist">
<li role="presentation" class="active">
<a href="#form" aria-controls="form" role="tab" data-toggle="tab">
<i class="fa fa-pencil-square-o"></i> Isi Form
</a>
</li>
<li role="presentation">
<a href="#upload" aria-controls="upload" role="tab" data-toggle="tab">
<i class="fa fa-cloud-upload"></i> Upload Excel
</a>
</li>
</ul>
<div class="tab-content">
<div role="tabpanel" class="tab-pane active" id="form">
{!! Form::open(['url' => route('books.store'),
'method' => 'post', 'files'=>'true', 'class'=>'form-horizontal']) !!}
@include('books._form')
{!! Form::close() !!}
</div>
<div role="tabpanel" class="tab-pane" id="upload">
{!! Form::open(['url' => route('import.books'),
'method' => 'post', 'files'=>'true', 'class'=>'form-horizontal']) !!}
@include('books._import')
{!! Form::close() !!}
</div>
</div>
</div>
@endsection