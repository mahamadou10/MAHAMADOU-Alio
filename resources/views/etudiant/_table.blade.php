<!-- DEBUT liste des etudiants -->
		<div class="card card-nav-tab tab-content">
			<div class="card-header text-center" style="background: #0A74AE">
                <!-- <h4 class="title"> <i class="material-icons">group</i></h4>
                <p class="category"> {{trans('file.listEtudiant')}}</p> -->
            </div>
			<div class="card-content table-responsive  tab-pane active " id="settings" >
				<table id="example" class="table" style="width:100%; background: #fff;">

			        <thead>
			            <tr> 
			                <th>{{trans('file.nom')}}</th>
			                <th>{{trans('file.prenom')}}</th>
			                <th></th>
			            </tr>
			        </thead>
			        <tbody>
			        	@foreach($etudiants as $etudiant)
				            <tr>
				                <td style=""> 
				                	<a href="/etudiants/show/{{$etudiant->id}}"> 
				                		{{$etudiant->nom}}
				                	</a>
				                </td>
				                <td style="">
				                	<a href="/etudiants/show/{{$etudiant->id}}">
				                		{{$etudiant->prenom}}

				                	</a>
				                </td>
				                <td class="td-actions text-right " style="">
				                	<a href="/etudiants/edit/{{$etudiant->id}}">
		                                <button type="button" rel="tooltip" title="" class=" btn btn-primary btn-simple btn-xs" data-original-title="{{trans('file.modifier')}}">
		                                    <i class="material-icons">edit</i>
		                                </button>
				                	</a>
				                	<a href="javascript:void(0)"
				                		id="delete_product" data-id="{{$etudiant->id}}"  
				                	>	
		                                <button type="button" rel="tooltip" title="" class="btn btn-danger btn-simple btn-xs" data-original-title="{{trans('file.supprimer')}}">
		                                    <i class="material-icons">delete</i>
		                                </button>
				                	</a>
	                            </td>
				            </tr>
			            @endforeach

			        </tbody>
			        <tfoot>
			            <tr>
			                <th style="">{{trans('file.nom')}}</th>
			                <th style="">{{trans('file.prenom')}}</th>
			                <th style=""></th>
			            </tr>
			        </tfoot>
			    </table>
			</div>
		</div>
	<!-- FIN Liste des étudiant -->	