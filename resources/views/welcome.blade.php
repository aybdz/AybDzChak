@extends('layout')
@section('title', "Welcome")
@section('styles')
@endsection
@section('scripts')
@endsection
@section('content')
<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor">
    <!-- begin:: Subheader -->
    <div class="kt-subheader   kt-grid__item" id="kt_subheader">
        <div class="kt-subheader__main">
            <h3 class="kt-subheader__title">
                Dashboard </h3>
            <span class="kt-subheader__separator kt-hidden"></span>
            <div class="kt-subheader__breadcrumbs">
                <a href="{{ url('/dashboard') }}" class="kt-subheader__breadcrumbs-home"><i class="flaticon2-shelter"></i></a>
                <span class="kt-subheader__breadcrumbs-separator"></span>
                <a href="" class="kt-subheader__breadcrumbs-link">
                    General </a>
                <span class="kt-subheader__breadcrumbs-separator"></span>
                <a href="" class="kt-subheader__breadcrumbs-link">
                    Dashboard </a>

                <!-- <span class="kt-subheader__breadcrumbs-link kt-subheader__breadcrumbs-link--active">Active link</span> -->
            </div>
        </div>
        <div class="kt-subheader__toolbar">
            <div class="kt-subheader__wrapper">
                <a href="#" class="btn kt-subheader__btn-primary">
                    Actions &nbsp;

                    <!--<i class="flaticon2-calendar-1"></i>-->
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--sm">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <rect id="bound" x="0" y="0" width="24" height="24" />
                            <rect id="Rectangle-8" fill="#000000" x="4" y="5" width="16" height="3" rx="1.5" />
                            <path d="M7.5,11 L16.5,11 C17.3284271,11 18,11.6715729 18,12.5 C18,13.3284271 17.3284271,14 16.5,14 L7.5,14 C6.67157288,14 6,13.3284271 6,12.5 C6,11.6715729 6.67157288,11 7.5,11 Z M10.5,17 L13.5,17 C14.3284271,17 15,17.6715729 15,18.5 C15,19.3284271 14.3284271,20 13.5,20 L10.5,20 C9.67157288,20 9,19.3284271 9,18.5 C9,17.6715729 9.67157288,17 10.5,17 Z" id="Combined-Shape" fill="#000000" opacity="0.3" />
                        </g>
                    </svg> </a>
                <div class="dropdown dropdown-inline" data-toggle="kt-tooltip" title="Quick actions" data-placement="left">
                    <a href="#" class="btn btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--success kt-svg-icon--md">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <polygon id="Shape" points="0 0 24 0 24 24 0 24" />
                                <path d="M5.85714286,2 L13.7364114,2 C14.0910962,2 14.4343066,2.12568431 14.7051108,2.35473959 L19.4686994,6.3839416 C19.8056532,6.66894833 20,7.08787823 20,7.52920201 L20,20.0833333 C20,21.8738751 19.9795521,22 18.1428571,22 L5.85714286,22 C4.02044787,22 4,21.8738751 4,20.0833333 L4,3.91666667 C4,2.12612489 4.02044787,2 5.85714286,2 Z" id="Combined-Shape" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                <path d="M11,14 L9,14 C8.44771525,14 8,13.5522847 8,13 C8,12.4477153 8.44771525,12 9,12 L11,12 L11,10 C11,9.44771525 11.4477153,9 12,9 C12.5522847,9 13,9.44771525 13,10 L13,12 L15,12 C15.5522847,12 16,12.4477153 16,13 C16,13.5522847 15.5522847,14 15,14 L13,14 L13,16 C13,16.5522847 12.5522847,17 12,17 C11.4477153,17 11,16.5522847 11,16 L11,14 Z" id="Combined-Shape" fill="#000000" />
                            </g>
                        </svg>

                        <!--<i class="flaticon2-plus"></i>-->
                    </a>
                    <div class="dropdown-menu dropdown-menu-fit dropdown-menu-md dropdown-menu-right">

                        <!--begin::Nav-->
                        <ul class="kt-nav">
                            <li class="kt-nav__head">
                                Add anything or jump to:
                                <i class="flaticon2-information" data-toggle="kt-tooltip" data-placement="right" title="Click to learn more..."></i>
                            </li>
                            <li class="kt-nav__separator"></li>
                            <li class="kt-nav__item">
                                <a href="{{ url('/AddProduct/0') }}" class="kt-nav__link" target="_blank">
                                    <i class="kt-nav__link-icon flaticon2-drop"></i>
                                    <span class="kt-nav__link-text">Ajouter Produit</span>
                                </a>
                            </li>
                            <li class="kt-nav__item">
                                <a href="#" data-toggle="modal" data-target="#userModel" class="kt-nav__link">
                                    <i class="kt-nav__link-icon flaticon2-user"></i>
                                    <span class="kt-nav__link-text">Ajouter Utilisateur</span>
                                </a>
                            </li>
                            <li class="kt-nav__item">
                                <a href="#" data-toggle="modal" data-target="#clientModel"  class="kt-nav__link">
                                    <i class="kt-nav__link-icon flaticon2-group"></i>
                                    <span class="kt-nav__link-text">Ajouter Client</span>
                                </a>
                            </li>
                            <li class="kt-nav__item">
                                <a href="#" class="kt-nav__link">
                                    <i class="kt-nav__link-icon flaticon2-new-email"></i>
                                    <span class="kt-nav__link-text">Support Case</span>
                                    <span class="kt-nav__link-badge">
                                        <span class="kt-badge kt-badge--success">5</span>
                                    </span>
                                </a>
                            </li>
                            <li class="kt-nav__separator"></li>
                            <li class="kt-nav__foot">
                                <a class="btn btn-label-brand btn-bold btn-sm" href="#">Upgrade plan</a>
                                <a class="btn btn-clean btn-bold btn-sm" href="#" data-toggle="kt-tooltip" data-placement="right" title="Click to learn more...">Learn more</a>
                            </li>
                        </ul>

                        <!--end::Nav-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
     <div class="kt-content  kt-grid__item kt-grid__item--fluid" id="kt_content">
        <!--Begin::Section-->
		<div class="row">
			<div class="col-xl-12">
				<div class="kt-portlet kt-portlet--height-fluid kt-portlet--mobile ">
					<div class="kt-portlet__head kt-portlet__head--lg kt-portlet__head--noborder kt-portlet__head--break-sm">
						<div class="kt-portlet__head-label">
							<h3 class="kt-portlet__head-title">
								<br>
							</h3>
						</div>
						<div class="kt-portlet__head-toolbar">
							<div class="dropdown dropdown-inline">
								<button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<i class="flaticon-more-1"></i>
								</button>
								<div class="dropdown-menu dropdown-menu-right dropdown-menu-md dropdown-menu-fit">

									<!--begin::Nav-->
									<ul class="kt-nav">
										<li class="kt-nav__head">
											Export Options
											<i class="flaticon2-information" data-toggle="kt-tooltip" data-placement="right" title="Click to learn more..."></i>
										</li>
										<li class="kt-nav__separator"></li>
										<li class="kt-nav__item">
											<a href="#" class="kt-nav__link">
												<i class="kt-nav__link-icon flaticon2-drop"></i>
												<span class="kt-nav__link-text">Activity</span>
											</a>
										</li>
										<li class="kt-nav__item">
											<a href="#" class="kt-nav__link">
												<i class="kt-nav__link-icon flaticon2-calendar-8"></i>
												<span class="kt-nav__link-text">FAQ</span>
											</a>
										</li>
										<li class="kt-nav__item">
											<a href="#" class="kt-nav__link">
												<i class="kt-nav__link-icon flaticon2-link"></i>
												<span class="kt-nav__link-text">Settings</span>
											</a>
										</li>
										<li class="kt-nav__item">
											<a href="#" class="kt-nav__link">
												<i class="kt-nav__link-icon flaticon2-new-email"></i>
												<span class="kt-nav__link-text">Support</span>
												<span class="kt-nav__link-badge">
													<span class="kt-badge kt-badge--success">5</span>
												</span>
											</a>
										</li>
										<li class="kt-nav__separator"></li>
										<li class="kt-nav__foot">
											<a class="btn btn-label-danger btn-bold btn-sm" href="#">Upgrade plan</a>
											<a class="btn btn-clean btn-bold btn-sm" href="#" data-toggle="kt-tooltip" data-placement="right" title="Click to learn more...">Learn more</a>
										</li>
									</ul>
									<!--end::Nav-->
								</div>
							</div>
						</div>
					</div>
					<div class="container">
						<div class="col-lg-6 pull-right">
							
							<H1 class="form-text text-muted pull-right" id="totalCart">
								Total : {{Cart::subTotal()}} DA 
								<input type="hidden" id="totalCartVal" value="{{Cart::subTotal()}}">
							</H1>
						</div>
						<div class="col-lg-6">
								<div class="input-group">
									<input type="text" class="form-control" aria-label="Text input with checkbox" placeholder="Code Barre"  name="bareCode" id="bareCode">
										<div class="input-group-append">
											<span class="input-group-text">
													<label class="kt-checkbox kt-checkbox--single kt-checkbox--primary">
															<input type="checkbox" checked="">
																	<span></span>
													</label>
											</span>
										</div>
								</div>
							<span class="form-text text-muted">S'il vous plaît entrez votre le code barre ici</span>
						</div>
						
					</div>
					<div class="kt-portlet__body kt-portlet__body--fit" style=" padding-top: 20px;">

						<!--begin: Datatable -->

						<div class="kt-portlet__body kt-portlet__body--fit">
							<div class="kt-datatable kt-datatable--default kt-datatable--scroll kt-datatable--loaded" id="kt_datatable_latest_orders" style="">
								<table class="kt-datatable__table" style="display: block; ">
									<thead class="kt-datatable__head">
										<tr class="kt-datatable__row" style="left: 0px;">
											<th data-field="RecordID" class="kt-datatable__cell kt-datatable__cell--sort">
												<span style="width: 150px;">
												<label class="kt-checkbox kt-checkbox--single kt-checkbox--all kt-checkbox--solid">#</span></th>
											<th data-field="ShipName" data-autohide-disabled="false" class="kt-datatable__cell kt-datatable__cell--sort"><span style="width: 200px;">Produit</span></th>
											<th data-field="ShipDate" class="kt-datatable__cell kt-datatable__cell--sort"><span style="width: 100px;">Prix</span></th>
											<th data-field="Status" class="kt-datatable__cell kt-datatable__cell--sort"><span style="width: 100px;">Qty</span></th>
											<th data-field="Type" class="kt-datatable__cell kt-datatable__cell--sort"><span style="width: 200px;">Servir par</span></th>
											<th data-field="Actions" data-autohide-disabled="false" class="kt-datatable__cell kt-datatable__cell--sort"><span style="width: 80px;">Actions</span></th>
										</tr>
									</thead>
									<tbody class="kt-datatable__body ps ps--active-y" id="tabProduct" style="max-height: 446px;">
										@foreach(Cart::content() as $product)
											<tr  id="row{{$product->rowId}}" data-row="0" class="kt-datatable__row" style="left: 0px;">
												<td class="kt-datatable__cell" data-field="RecordID">
													<span style="width: 150px;">
														<label class="">{{$product->options->bareCode}}</label>
													</span>
												</td>
												<td data-field="ShipName" data-autohide-disabled="false" class="kt-datatable__cell">
													<span style="width: 200px;">                        
														<div class="kt-user-card-v2">                            
															<div class="kt-user-card-v2__pic">                                
																<img alt="photo" src="{{ asset('image/'.$product->options->img) }}">                            
															</div>                            
															<div class="kt-user-card-v2__details">                                
																<div class="kt-user-card-v2__name">{{$product->name}}
																</div>                                
										                    </div>                        
													    </div>
												    </span>
												</td>
												<td data-field="ShipDate" class="kt-datatable__cell">
													<span style="width: 100px;">
														<span class="kt-font-bold">{{$product->price}} DA</span>
													</span>
												</td>
												<td data-field="Status" class="kt-datatable__cell">
													<div class="kt-user-card-v2__details" > 
														<input class="form-control pQty" data-id="{{$product->rowId}}" type="number" value="{{$product->qty}}" id="{{'pQty'.$product->rowId}}">
													</div>
												</td>
												<td data-field="Type" class="kt-datatable__cell"><span style="width: 200px;">
														<div class="kt-user-card-v2">							
															<div class="kt-user-card-v2__pic">								
																<div class="kt-badge kt-badge--xl kt-badge--brand">{{(Auth::user()->name)[0]}}</div>	
															</div>				
															<div class="kt-user-card-v2__details">			
																<a class="kt-user-card-v2__name" href="#">{{Auth::user()->name}}</a>	
																<span class="kt-user-card-v2__desc">Admin</span>		
															</div>						
														</div>
													</span>
												</td>
												<td data-field="Actions" data-autohide-disabled="false" class="kt-datatable__cell">
													<span style="overflow: visible; position: relative; width: 80px; " >
														<a href="#"     class="btn btn-danger btn-elevate btn-circle btn-icon deletePrduct" data-rowid="{{$product->rowId}}" >
															<i class="kt-nav__link-icon flaticon-delete"></i>
														</a>
								                    </span>
								                </td>
								            </tr>
							            @endforeach
								    </tbody>
								</table>
								<br>
								<div class="container">
									<button  class="btn btn-brand btn-lg pull-right" id="ConfirmCmd"><i class="kt-nav__link-icon flaticon2-check-mark"></i> Confirmé la Commande</button>

									<a href="{{ url('cancelOrder') }}" class="kt-link btn-lg kt-font-bold float-left"><i class="kt-nav__link-icon flaticon2-cancel-music"></i> Annuler la commande</a>
									<center>
									<button class="btn btn-dark btn-lg " id="addItemClientBtn"><i class="kt-nav__link-icon flaticon-user-ok"></i> Confirmé la commande de Client</button></center>
								</div>
							</div>
						<!--end: Datatable -->
						</div>
					</div>
				</div>
			</div>
		</div>

		<!--End::Section-->
	</div>
	

     <!--begin::Modal-->
    <div class="modal fade" id="addItemClient" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Liste des clients</h5>
                    <button type="button" class="close" data-dismiss="modal" id="closeAddItemClient" aria-label="Close">
                    </button>
                </div>
                <div class="modal-body">
                	<!--begin: Datatable -->
                    <div class=" kt-portlet__body kt-portlet__body--fit">
                        <div class="kt-datatable kt-datatable--default kt-datatable--scroll kt-datatable--loaded" id="kt_datatable_latest_orders" style="">
		                    <table class=" kt-datatable__table" id="addClientTable" >
		                        <thead class="kt-datatable__head coll">
		                            <tr class="kt-datatable__row" >
		                                <th data-field="ShipName" data-autohide-disabled="false" class="kt-datatable__cell kt-datatable__cell--sort">
		                                    <span >#</span>
		                                </th>
		                                <th data-field="ShipName" data-autohide-disabled="false" class="kt-datatable__cell kt-datatable__cell--sort">
		                                    <span >Nom & Prénom</span>
		                                </th>
		                                <th data-field="ShipDate" class="kt-datatable__cell kt-datatable__cell--sort"><span >Téléphonne</span></th>
		                                <th data-field="RecordID" class="kt-datatable__cell kt-datatable__cell--sort">
		                                    <span >
		                                    <label class="kt-checkbox kt-checkbox--single kt-checkbox--all kt-checkbox--solid">Crédit</span></th>
		                                <th data-field="Actions" data-autohide-disabled="false" class="kt-datatable__cell kt-datatable__cell--sort"><span >Actions</span></th>
		                            </tr>
		                        </thead>
		                        <tbody class="kt-datatable__body ps ps--active-y" >
		                            @foreach($clients as $client)
		                                <tr data-row="0" id="tr'.{{$client->id}}.'" class="kt-datatable__row" style="left: 0px;">
		                                    <td class="kt-datatable__cell" data-field="RecordID">
		                                        <span >
		                                            <label class=""><strong>{{$client->hash}}</strong></label>
		                                        </span>
		                                    </td>
		                                    <td class="kt-datatable__cell" data-field="RecordID">
		                                        <span >
		                                            <label class=""><strong>{{$client->name}}</strong></label>
		                                        </span>
		                                    </td>
		                                    <td data-field="ShipDate" class="kt-datatable__cell" style="text-align: center;">
		                                        <span >
		                                            <span class="kt-font-bold">{{$client->telephonne}} </span>
		                                        </span>
		                                    </td>
		                                    <td class="kt-datatable__cell" >
		                                        <span >
		                                            <label class=""><strong>{{$client->credit .' DA'}} </strong></label>
		                                        </span>
		                                    </td>
		                                    <td data-field="Actions" data-autohide-disabled="false" class="kt-datatable__cell" style="text-align: center;">
		                                        <span style="overflow: visible; position: relative;  " >
		                                            <a class="btn btn-clean btn-sm btn-icon btn-icon-md addToModel" data-id="{{$client->id}}" data-name="{{$client->name}}" data-credit="{{$client->credit}}" data-phone="{{$client->telephonne}}" data-toggle="modal" data-target="#ConfirmeCommande">
		                                                <i class="flaticon-user-add"></i>
		                                            </a>
		                                        </span>
		                                    </td>
		                                </tr>
		                            @endforeach
		                        </tbody>
		                    </table>
		                </div>
		            </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="ConfirmeCommande" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg " role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Confirmation de la commande</h5>
                    <button type="button" class="close" data-dismiss="modal" id="CloseConfirmeCommande" aria-label="Close">
                    </button>
                </div>
                <div class="modal-body">
                	<div class="kt-portlet kt-portlet--height-fluid">
						<div class="kt-portlet__body">
							<div class="kt-widget kt-widget--user-profile-3">
								<div class="kt-widget__top">
									<div class="kt-widget__content">
										<div class="kt-widget__head">
											
										</div>
										<div class="row kt-widget__subhead">
										    <h3 class="col-4" href="#"  id="ClientName" ></h3>
											<h3 class="col-4" href="#" id="ClientPhone"></h3>
											<h3 class="col-4 credit-c" href="#"  id="ClientCredit"></h3>
										</div>
									</div>
								</div>
								<div class="kt-widget__bottom">
									<br>
									<form class="form-inline">
										<input type="hidden" id="IdClient">

									<div class="col-lg-4">
									<div class="labelforcommand" for="totalCmd">Total</div>
									  <div class="input-group">
									  <input type="text" class="form-control" id="totalCmd" disabled="disabled">
									    <div class="input-group-prepend">
									      <div class="input-group-text">DA</div>
									    </div>
									  </div>
									</div>
									  
									<div class="col-lg-4">
									<div class="labelforcommand" for="verse">Versement</div>
									  <div class="input-group">
									  <input type="text" class="form-control" placeholder="Versement" id="verse" >
									    <div class="input-group-prepend">
									      <div class="input-group-text">DA</div>
									    </div>
									  </div>
                                    </div>
									  

									<div class="col-lg-4">
									  <div class="labelforcommand">Restant</div>
									  <div class="input-group">
									    <input type="text" class="form-control" id="reste" disabled="disabled" >
									    <div class="input-group-prepend">
									      <div class="input-group-text">DA</div>
									    </div>
									   </div>
									</div>

									</form>
									
								</div>
							</div>
							<div class=" text-center btn-pop-footer">
						<a rel="nofollow"  id="cmdConfirmation" class="btn btn-small btn-brand col-6"><i class="kt-nav__link-icon flaticon2-check-mark"></i> Confirmé la Commande</a></div>
						</div>
						
						
					</div>
                </div>
            </div>
        </div>
    </div>

     <!--begin::Modal-->
    <div class="modal fade" id="modalMoreProduct" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Liste des Produits</h5>
                    <button type="button" class="close" id="closeModalMoreProduct" data-dismiss="modal" id="closeAddItemClient" aria-label="Close">
                    </button>
                </div>
                <div class="modal-body">
                	<!--begin: Datatable -->
                    
                        <div class="kt-datatable kt-datatable--default kt-datatable--scroll kt-datatable--loaded" id="kt_datatable_latest_orders" style="">
		                    <table class=" kt-datatable__table" id="addClientTable" >
		                        <thead class="kt-datatable__head coll">
		                            <tr class="kt-datatable__row" >
		                                <th style="width:15%;" class="first-table-item">#</th>
		                                <th style="width:40%;">Produit</th>
		                                <th style="width:15%;">Prix</th>
		                                <th style="width:15%;">Qty</th>
		                                <th style="width:15%;">Actions</th>
		                            </tr>
		                        </thead>
		                        <tbody class="kt-datatable__body ps ps--active-y" id="tabMoreProduct" >
		                           
		                        </tbody>
		                    </table>
						</div>
						
                </div>
            </div>
        </div>
    </div>
<button type="button" id="moreBtn" data-toggle="modal" data-target="#modalMoreProduct" class="kt-nav__link" hidden>more</button>
    <!--end::Modal-->
 <script type="text/javascript">
 	
 	$(document).ready(function(){
 		$('#ConfirmCmd').on('click',function() {
 			var tc = $('#totalCartVal').val();
 			var t = tc.replace(",", "");
 			if (parseFloat(t) == 0)
			{
				swal.fire(
                    'Eroor!',
                    "aucun produit n'a été ajouté.",
                    'error'
                )
			}else{
	 			swal.fire({
	                title: 'Êtes-vous sure de vouloire confirmer cette commande ?',
	                text: "Vous ne pourrez pas revenir en arrière!",
	                type: 'warning',
	                showCancelButton: true,
	                confirmButtonText: 'Oui, Confirmé!',
	                cancelButtonText: 'Non, annulez!',
	                reverseButtons: true
	            }).then(function(result){
	                if (result.value) {
	                    $.ajax({
	                      type: "POST",
	                      url: "{{URL::to('/confirmerCommande') }}",
	                      dataType: "json",
	                      headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
	                      success:function(data){
	                        if(data){
	                            swal.fire(
	                                'Eroor',
	                                "une erreur s'est produite veuillez réessayer svp.",
	                                'error'
	                            )
	                        }else{
	                        	swal.fire({
								  position: 'top-end',
								  type: 'success',
								  title: 'La commande a été bien enregistré !',
								  showConfirmButton: false,
								  timer: 1000
								})
	                            $('#tabProduct').load(' #tabProduct');
								$('#totalCart').load(' #totalCart');   
	                        }
	                      }

	                    })
	                    
	                    // result.dismiss can be 'cancel', 'overlay',
	                    // 'close', and 'timer'
	                } else if (result.dismiss === 'cancel') {
	                }
	            });
	        }

 		})

 		$('#addItemClientBtn').on('click', function (e) {
 			var tc = $('#totalCartVal').val();
 			var t = tc.replace(",", "");
 			if (parseFloat(t) == 0)
			{
				$('#closeAddItemClient').click();
				swal.fire(
                    'Eroor!',
                    "aucun produit n'a été ajouté.",
                    'error'
                )
			}else{
				$('#addItemClient').modal('show')
			}
 		})

 		$('#cmdConfirmation').on('click',function () {
 			swal.fire({
                title: 'Êtes-vous sure de vouloire confirmer cette commande ?',
                text: "Vous ne pourrez pas revenir en arrière!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Oui, Confirmé!',
                cancelButtonText: 'Non, annulez!',
                reverseButtons: true
            }).then(function(result){
                if (result.value) {
					var idClient = 	$('#IdClient').val();
					var verse    =  $('#verse').val();
					var totalCmd =	$('#totalCmd').val();
					var reste    =	$('#reste').val();
                    $.ajax({
                      type: "POST",
                      url: "{{URL::to('/ClientCommande') }}",
                      dataType: "json",
					  data:{    
					  		'idClient':idClient,
							'verse'	  :verse,
							'totalCmd':totalCmd,
							'reste'	  :reste
		                   },
                      headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
                      success:function(data){
                        if(data){
                            swal.fire(
                                'Eroor',
                                "une erreur s'est produite veuillez réessayer svp.",
                                'error'
                            )
                        }else{
                            $('#tabProduct').load(' #tabProduct');
							$('#totalCart').load(' #totalCart');
							$('#CloseConfirmeCommande').click();   
                        }
                      }

                    })
                    
                    // result.dismiss can be 'cancel', 'overlay',
                    // 'close', and 'timer'
                } else if (result.dismiss === 'cancel') {

                }
            });
 		})

 		$('#verse').on('mouseout, keyup ,change',function () {
 			var tc = $('#totalCartVal').val();
 			var t = tc.replace(",", "");
 			$('#reste').val();
 			 if ( parseInt(parseFloat(t)-parseFloat($('#verse').val())) < 0) {
	            $('#verse').val('')
	            $('#verse').val(t)
	            swal.fire(
                    'Eroor',
                    "attention le montant insert est supérieur de la commande ! ",
                    'error'
                )
	        }
 		})

 		$('.addToModel').on('click', function () {
 			$('#ClientName').empty();
 			$('#ClientName').append(' <i class="la la-user"></i>'+$(this).data('name'));
 			$('#ClientPhone').empty();
 			$('#ClientPhone').append('<i class="la la-phone"></i> '+$(this).data('phone'));
 			$('#ClientCredit').empty();
 			$('#ClientCredit').append('<i class="la la-money"></i> '+$(this).data('credit')+' DA');
 			$('#totalCmd').val($('#totalCartVal').val());
 			$('#reste').val($('#totalCartVal').val());
 			$('#IdClient').val($(this).data('id'))
 			$('#closeAddItemClient').click();
 		})
        $('#addClientTable').DataTable();
	  	$('#bareCode').on("mouseout, keyup ",delay(function(){
	  		var id = $('#bareCode').val();
	 		$.ajax({
              type: "POST",
              url: "{{URL::to('/addCart') }}",
              dataType: "json",
              data:{'id':id},
              headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
              success:function(data){
                if(!data.err ){
                	var cart = $.map(data.product, function(value, index) {
					    return [value];
					});
                	$('#tabProduct').empty();
                	var op = '';
                	var source = "{!! asset('image/') !!}";
                	for(var i =0;i<cart.length;i++)
                	{
                		op += '<tr  id="row'+cart[i].rowId+'" data-row="0" class="kt-datatable__row" style="left: 0px;">'
						op += '<td class="kt-datatable__cell" data-field="RecordID"><span style="width: 150px;">'
						op += '<label class="kt-checkbox kt-checkbox--single kt-checkbox--solid">'+cart[i].id+'</label></span></td>'
						op += '<td data-field="ShipName" data-autohide-disabled="false" class="kt-datatable__cell"><span style="width: 200px;"><div class="kt-user-card-v2"><div class="kt-user-card-v2__pic">'                                
						op += '<img alt="photo" src="'+source+'/'+cart[i].options.img+'"></div>'
						op += '<div class="kt-user-card-v2__details">'                                
						op += '<div class="kt-user-card-v2__name">'+cart[i].name+'</div></div></div></span></td>'
						op += '<td data-field="ShipDate" class="kt-datatable__cell"><span style="width: 100px;">'
						op += '<span class="kt-font-bold">'+cart[i].price+'.00 DA</span></span></td>'
						op += '<td data-field="Status" class="kt-datatable__cell"><div class="kt-user-card-v2__details" ><input class="form-control pQty" data-id="'+cart[i].rowId+'" type="number" value="'+cart[i].qty+'" ></div></td>'
						op += '<td data-field="Type" class="kt-datatable__cell"><span style="width: 200px;">'
						op += '<div class="kt-user-card-v2"><div class="kt-user-card-v2__pic">'							
						op += '<div class="kt-badge kt-badge--xl kt-badge--brand">{{(Auth::user()->name)[0]}}           </div></div>'				
						op += '<div class="kt-user-card-v2__details">'			
						op += '<a class="kt-user-card-v2__name" href="#">{{Auth::user()->name}}</a>'	
						op += '<span class="kt-user-card-v2__desc">Admin</span></div></div></span></td>'
						op += '<td data-field="Actions" data-autohide-disabled="false" class="kt-datatable__cell">'
						op += '<span style="overflow: visible; position: relative; width: 80px; " >'
						op += '<a href="#" data-rowid="'+cart[i].rowId+'"   class="btn btn-danger btn-elevate btn-circle btn-icon deletePrduct" >'
						op += '<i class="kt-nav__link-icon flaticon-delete"></i></a></span></td></tr>';
                	}
					$('#tabProduct').append(op);
					//$('#tabProduct').load(' #tabProduct');
					$('#totalCart').load(' #totalCart');   
                }else if (data.err == 'more') {
                	$('#tabMoreProduct').empty();
                	var cart = $.map(data.product, function(value, index) {
					    return [value];
					});
					var opm = '';
                	var source = "{!! asset('image/') !!}";
                	console.log(data.product)
                	for(var i =0;i<cart.length;i++)
                	{
                		opm += '<tr  class="kt-datatable__row">'
						
						opm += '<td style="width:15%; padding-right: 10px;" class="first-table-item">'+cart[i].bareCode+'</td>'
						
						opm += '<td style="width:40%; padding-left: 0px;" data-field="ShipName" data-autohide-disabled="false" class="kt-datatable__cell"><div class="kt-user-card-v2"><div class="kt-user-card-v2__pic" >'                                
						opm += '<img alt="photo" src="'+source+'/'+cart[i].img+'"></div>'                          
						opm += '<div class="kt-user-card-v2__name">'+cart[i].name+'</div></div></td>'
						
						opm += '<td  style="width:15%; padding-right: 10px;"><span class="kt-font-bold">'+cart[i].priceV+'.00 DA</span></td>'
						
						opm += '<td style="width:15%; padding-right: 10px;"><input class="form-control" style="width: 80px; text-align: center;"  type="number" value="'+cart[i].qty+'" disabled="disabled"></td>'
						
						opm += '<td style="width:15%; padding-right: 10px;"><a href="#"   class="btn btn-success  btn-elevate btn-circle btn-icon addMorePrduct" data-id='+cart[i].id+'><i class="kt-nav__link-icon flaticon2-add-1"></i></a></td>'
						
						opm += '</tr>';
                	}
					$('#tabMoreProduct').append(opm);
					$('#moreBtn').click()
                }else{
                	if (data.message == 'stock')
                	{
                		swal.fire(
	                        'Eroor',
	                        "le produit ñ est plus dans le stock",
	                        'error'
	                    )
                	}
                	
                	
                }
                $('#bareCode').val("");
              }
        	})
	 	},500)
	  )
	});
	$('body').on('click','.addMorePrduct',function () {
		var id = $(this).data('id');
		$.ajax({
              type: "POST",
              url: "{{URL::to('/addCartPlus') }}",
              dataType: "json",
              data:{'id':id},
              headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
              success:function(data){
                if(!data.err ){
                	var cart = $.map(data.product, function(value, index) {
					    return [value];
					});
                	$('#tabProduct').empty();
                	var op = '';
                	var source = "{!! asset('image/') !!}";
                	for(var i =0;i<cart.length;i++)
                	{
                		op += '<tr  id="row'+cart[i].rowId+'" data-row="0" class="kt-datatable__row" style="left: 0px;">'
						op += '<td class="kt-datatable__cell" data-field="RecordID"><span style="width: 150px;">'
						op += '<label class="kt-checkbox kt-checkbox--single kt-checkbox--solid">'+cart[i].options.bareCode+'</label></span></td>'
						op += '<td data-field="ShipName" data-autohide-disabled="false" class="kt-datatable__cell"><span style="width: 200px;"><div class="kt-user-card-v2"><div class="kt-user-card-v2__pic">'                                
						op += '<img alt="photo" src="'+source+'/'+cart[i].options.img+'"></div>'
						op += '<div class="kt-user-card-v2__details">'                                
						op += '<div class="kt-user-card-v2__name">'+cart[i].name+'</div></div></div></span></td>'
						op += '<td data-field="ShipDate" class="kt-datatable__cell"><span style="width: 100px;">'
						op += '<span class="kt-font-bold">'+cart[i].price+'.00 DA</span></span></td>'
						op += '<td data-field="Status" class="kt-datatable__cell"><div class="kt-user-card-v2__details" ><input class="form-control pQty" data-id="'+cart[i].rowId+'" type="number" value="'+cart[i].qty+'" ></div></td>'
						op += '<td data-field="Type" class="kt-datatable__cell"><span style="width: 200px;">'
						op += '<div class="kt-user-card-v2"><div class="kt-user-card-v2__pic">'							
						op += '<div class="kt-badge kt-badge--xl kt-badge--brand">{{(Auth::user()->name)[0]}}           </div></div>'				
						op += '<div class="kt-user-card-v2__details">'			
						op += '<a class="kt-user-card-v2__name" href="#">{{Auth::user()->name}}</a>'	
						op += '<span class="kt-user-card-v2__desc">Admin</span></div></div></span></td>'
						op += '<td data-field="Actions" data-autohide-disabled="false" class="kt-datatable__cell">'
						op += '<span style="overflow: visible; position: relative; width: 80px; " >'
						op += '<a href="#" data-rowid="'+cart[i].rowId+'"   class="btn btn-danger btn-elevate btn-circle btn-icon deletePrduct" >'
						op += '<i class="kt-nav__link-icon flaticon-delete"></i></a></span></td></tr>';
                	}
					$('#tabProduct').append(op);
					//$('#tabProduct').load(' #tabProduct');
					$('#totalCart').load(' #totalCart'); 
					$('#closeModalMoreProduct').click();
                }else{
                	if (data.message == 'stock')
                	{
                		swal.fire(
	                        'Eroor',
	                        "le produit ñ est plus dans le stock",
	                        'error'
	                    )
                	}
                	
                	
                }
                $('#bareCode').val("");
              }
        	})
	})

	function delay(callback, ms) {
	  var timer = 0;
	  return function() {
	    var context = this, args = arguments;
	    clearTimeout(timer);
	    timer = setTimeout(function () {
	      callback.apply(context, args);
	    }, ms || 0);
	  };
	}
 	
	 	$('body').on('mouseout, keyup ,blur,change','.pQty',function () {
			var id  = $(this).data('id');
			var qty = $(this).val();
			if (qty != '') {
		 		$.ajax({
		          type: "POST",
		          url: "{{URL::to('/addCartStock') }}",
		          dataType: "json",
		          data:{'id':id, 'qty':qty},
		          headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
		          success:function(data){
		          	console.log(data)
		            if(data.err){
		            	if (data.message=='stock')
		            	{
		            		swal.fire(
		                        'Eroor',
		                        "le produit ñ est plus dans le stock (max = "+data.qty+" )",
		                        'error'
		                    )
		                    $("#pQty"+id).val(data.cQty);
		            	}else{
		            		swal.fire(
			                    'Eroor',
			                    "une erreur s'est produite veuillez réessayer svp.",
			                    'error'
			                )
		            	}
		            }else{

							$('#totalCart').load(' #totalCart');   
		            }
		          }
		    	})
	    	}
	 	})

 	
 	$('body').on('click','.deletePrduct',function () {
        var id  = $(this).data('rowid');
 		swal.fire({
            title: 'Êtes-vous sûr?',
            text: "Vous ne pourrez pas revenir en arrière!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Oui, supprimez-le!',
            cancelButtonText: 'Non, annulez!',
            reverseButtons: true
        }).then(function(result){
            if (result.value) {
                $.ajax({
                  type: "POST",
                  url: "{{URL::to('/deleteItem') }}",
                  dataType: "json",
                  data:{'id':id},
                  headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
                  success:function(data){
                    if(data){
                        swal.fire(
                            'Eroor',
                            "une erreur s'est produite veuillez réessayer svp.",
                            'error'
                        )
                    }else{
                        $('#row'+id).remove();
                        swal.fire(
                            'Supprimé!',
                            'Votre Produit a été supprimé.',
                            'success'
                        )
                    }
                  }

                })
                
                // result.dismiss can be 'cancel', 'overlay',
                // 'close', and 'timer'
            } else if (result.dismiss === 'cancel') {
                swal.fire(
                    'Annulé',
                    'Votre produit est en sécurité :)',
                    'error'
                )

            }
        });
 	})
        
    
 </script>
@endsection
