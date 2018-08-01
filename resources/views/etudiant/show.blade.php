@extends('layouts.app')

@section('content')

<div class="row">
	
	<div class="col-md-6 col-md-offset-3">
		@include('../includes/_file_ariane')
	    <div class="card card-profile">
	        <div class="card-header">
	            <h5>{{trans('file.etudiant')}}</h5>
	        </div>
	        <div class="content">
	            <h6 class="category text-gray">{{trans('file.etudiant')}}</h6>
	            <h4 class="card-title"><strong>{{ucfirst(trans('file.prenom'))}}</strong> : {{ucfirst(strtolower($etudiant->prenom))}}</h4>
	            <h4 class="card-title"><strong>{{ucfirst(trans('file.nom'))}}</strong> : {{strtoupper($etudiant->nom)}}</h4>
	            <a href="#" class="btn btn-primary btn-round btn  btn-xs" rel="tooltip" title="" data-original-title="{{trans('file.supprimer').' '.ucfirst(strtolower($etudiant->prenom)).' '.strtoupper($etudiant->nom)}}">
		            <i class="material-icons">delete</i>
	            </a>
	        </div>
	    </div>
	</div>
</div>
@endsection