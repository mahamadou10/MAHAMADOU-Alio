<!-- DEBUT liste des etudiants -->
		<div class="card card-nav-tabs">
			<div class="card-header text-center" style="background: #0A74AE">
                <h4 class="title"> <i class="material-icons">group</i></h4>
                <p class="category"> {{trans('file.listEtudiant')}}</p>
            </div>
			<div class="card-content table-responsive">
				<table id="example" class="table table-striped table-bordered table-hover" style="width:100%; background: #fff;">

			        <thead>
			            <tr> 
			                <th style="border-left: transparent;">{{trans('file.nom')}}</th>
			                <th style="border-right: transparent;">{{trans('file.prenom')}}</th>
			                <th style="border-left: : transparent; display: none; "></th>
			            </tr>
			        </thead>
			        <tbody>
			        	@foreach($etudiants as $etudiant)
				            <tr>
				                <td style="border-left: transparent;"> 
				                	<a href="#"> 
				                		{{$etudiant->nom}}
				                	</a>
				                </td>
				                <td style="border-right: transparent;">
				                	<a href="#">
				                		{{$etudiant->prenom}}

				                	</a>
				                </td>
				                <td>
				                	<a href="#" class="pull-right"><i class="material-icons">edit</i></a>
				                	<a href="#" class="pull-right"><i class="material-icons">delete</i></a>
				                </td>
				            </tr>
			            @endforeach

			        </tbody>
			        <tfoot>
			            <tr>
			                <th style="border-left: transparent;">{{trans('file.nom')}}</th>
			                <th style="border-right: transparent;">{{trans('file.prenom')}}</th>
			                <th style="border-left: : transparent;"></th>
			            </tr>
			        </tfoot>
			    </table>
			</div>
		</div>
	<!-- FIN Liste des étudiant -->	