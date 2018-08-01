@extends('layouts.app')

@section('content')

<div class="row">

	<!-- ___    FORMULAIRE AJOUT OU MODIFIER UN FORMULAIRE   ___-->
	<div class="col-md-5 col-md-offset-3">
		@include('../includes/_file_ariane')
	    
	    @include('etudiant._form')

	</div> 
	<!-- ___    FIN FORMULAIRE AJOUT OU MODIFIER UN ETUDIANT  ___-->
</div>
@endsection