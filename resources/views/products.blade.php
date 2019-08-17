@extends('layout')
@section('title', "Produit")
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
                Produits </h3>
            <span class="kt-subheader__separator kt-hidden"></span>
            <div class="kt-subheader__breadcrumbs">
                <a href="{{ url('/products') }}" class="kt-subheader__breadcrumbs-home"><i class="flaticon2-shelter"></i></a>
                <span class="kt-subheader__breadcrumbs-separator"></span>
                <a href="{{ url('/dashboard') }}" class="kt-subheader__breadcrumbs-link">
                    General </a>
                <span class="kt-subheader__breadcrumbs-separator"></span>
                <a href="{{ url('/products') }}" class="kt-subheader__breadcrumbs-link">
                    Produit </a>

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
                                <a href="{{ url('/AddProduct/0') }}" class="kt-nav__link">
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
       <!-- begin:: Content -->
						<div class="kt-content  kt-grid__item kt-grid__item--fluid" id="kt_content">
							<div class="kt-portlet kt-portlet--mobile">
								<div class="kt-portlet__head kt-portlet__head--lg">
									<div class="kt-portlet__head-label">
										<span class="kt-portlet__head-icon">
											<i class="kt-font-brand flaticon2-line-chart"></i>
										</span>
										<h3 class="kt-portlet__head-title">
											HTML Table
											<small>Datatable initialized from HTML table</small>
										</h3>
									</div>
									<div class="kt-portlet__head-toolbar">
										<div class="kt-portlet__head-wrapper">
											<div class="kt-portlet__head-actions">
												<div class="dropdown dropdown-inline">
													<button type="button" class="btn btn-default btn-icon-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
														<i class="la la-download"></i> Export
													</button>
													<div class="dropdown-menu dropdown-menu-right">
														<ul class="kt-nav">
															<li class="kt-nav__section kt-nav__section--first">
																<span class="kt-nav__section-text">Choose an option</span>
															</li>
															<li class="kt-nav__item">
																<a href="#" class="kt-nav__link">
																	<i class="kt-nav__link-icon la la-print"></i>
																	<span class="kt-nav__link-text">Print</span>
																</a>
															</li>
															<li class="kt-nav__item">
																<a href="#" class="kt-nav__link">
																	<i class="kt-nav__link-icon la la-copy"></i>
																	<span class="kt-nav__link-text">Copy</span>
																</a>
															</li>
															<li class="kt-nav__item">
																<a href="#" class="kt-nav__link">
																	<i class="kt-nav__link-icon la la-file-excel-o"></i>
																	<span class="kt-nav__link-text">Excel</span>
																</a>
															</li>
															<li class="kt-nav__item">
																<a href="#" class="kt-nav__link">
																	<i class="kt-nav__link-icon la la-file-text-o"></i>
																	<span class="kt-nav__link-text">CSV</span>
																</a>
															</li>
															<li class="kt-nav__item">
																<a href="#" class="kt-nav__link">
																	<i class="kt-nav__link-icon la la-file-pdf-o"></i>
																	<span class="kt-nav__link-text">PDF</span>
																</a>
															</li>
														</ul>
													</div>
												</div>
												&nbsp;
												<a href="{{ url('/AddProduct/0') }}"" class="btn btn-brand btn-elevate btn-icon-sm">
													<i class="la la-plus"></i>
													Ajouter Produit
												</a>
											</div>
										</div>
									</div>
								</div>
								<div class="kt-portlet__body">

									<!--begin: Search Form -->
									<div class="kt-form kt-form--label-right kt-margin-t-20 kt-margin-b-10">
										<div class="row align-items-center">
											<div class="col-xl-8 order-2 order-xl-1">
												<div class="row align-items-center">
													<div class="col-md-4 kt-margin-b-20-tablet-and-mobile">
														<div class="kt-input-icon kt-input-icon--left">
															<input type="text" class="form-control" placeholder="Search..." id="generalSearch">
															<span class="kt-input-icon__icon kt-input-icon__icon--left">
																<span><i class="la la-search"></i></span>
															</span>
														</div>
													</div>
													<div class="col-md-4 kt-margin-b-20-tablet-and-mobile">
														<div class="kt-form__group kt-form__group--inline">
															<div class="kt-form__label">
																<label>Status:</label>
															</div>
															<div class="kt-form__control">
																<select class="form-control bootstrap-select" id="kt_form_status">
																	<option value="">All</option>
																	<option value="1">Pending</option>
																	<option value="2">Delivered</option>
																	<option value="3">Canceled</option>
																	<option value="4">Success</option>
																	<option value="5">Info</option>
																	<option value="6">Danger</option>
																</select>
															</div>
														</div>
													</div>
													<div class="col-md-4 kt-margin-b-20-tablet-and-mobile">
														<div class="kt-form__group kt-form__group--inline">
															<div class="kt-form__label">
																<label>Type:</label>
															</div>
															<div class="kt-form__control">
																<select class="form-control bootstrap-select" id="kt_form_type">
																	<option value="">All</option>
																	<option value="1">Online</option>
																	<option value="2">Retail</option>
																	<option value="3">Direct</option>
																</select>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="col-xl-4 order-1 order-xl-2 kt-align-right">
												<a href="" class="btn btn-default kt-hidden">
													<i class="la la-cart-plus"></i> New Order
												</a>
												<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg d-xl-none"></div>
											</div>
										</div>
									</div>

									<!--end: Search Form -->
								</div>
								<div class="kt-portlet__body kt-portlet__body--fit">

									<!--begin: Datatable -->
									<table class="kt-datatable" id="html_table" width="100%">
										<thead>
											<tr>
												<th title="Field #2">Produit</th>
												@if(Auth::user()->type == "su")
                                                    <th title="Field #3">Prix d'achat</th>
                                                @endif
												<th title="Field #4">Prix de vente</th>
												<th title="Field #5">Qty</th>
												<th title="Field #6">Servir par</th>
												<th title="Field #7">Actions</th>
											</tr>
										</thead>
										<tbody>
                                            @foreach($products as $product)
    											<tr id="tr'.{{$product->id}}.'">
    												<td>{{$product->bareCode}}</td>
    												<td>
                                                        <div class="kt-user-card-v2"> 
                                                            <div class="kt-user-card-v2__pic">                                
                                                                <img alt="photo" src=" {{ asset('image/'.$product->img) }}">                            
                                                            </div>                            
                                                            <div class="kt-user-card-v2__details">                                
                                                                <div class="kt-user-card-v2__name">{{$product->name}}
                                                                </div>                                
                                                            </div>                        
                                                        </div>
                                                    </td>
    												@if(Auth::user()->type == "su")
                                                        <td>{{$product->priceA}} DA</td>
                                                    @endif
    												<td>{{$product->priceV}} DA</td>
    												<td>
                                                        <div class="kt-user-card-v2__details"> 
                                                        <input class="form-control" style="width: 80px; text-align: center;"  type="text" value="{{$product->qty}}" id="pQty{{$product->id}}" disabled="disabled">
                                                        </div>
                                                    </td>
    												<td> 
                                                        <div class="kt-user-card-v2">                           
                                                            <div class="kt-user-card-v2__pic">                              
                                                                <div class="kt-badge kt-badge--xl kt-badge--brand">{{($product->user->name)[0]}}</div>  
                                                            </div>                          
                                                            <div class="kt-user-card-v2__details">                              
                                                                <a class="kt-user-card-v2__name" href="#">{{$product->user->name}}</a>  
                                                                <span class="kt-user-card-v2__desc">Admin</span>        
                                                            </div>                      
                                                        </div>
                                                    </td>
    												<td > <span style="overflow: visible; position: relative;  " >
                                                        <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <i class="flaticon-more-1"></i>
                                                        </button>
                                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-md dropdown-menu-fit">
                                                            <ul class="kt-nav">
                                                                <li class="kt-nav__head">
                                                                    Export Options
                                                                    <i class="flaticon2-information" data-toggle="kt-tooltip" data-placement="right" title="Click to learn more..."></i>
                                                                </li>
                                                                <li class="kt-nav__separator"></li>
                                                                <li class="kt-nav__item">
                                                                    <a id="add{{$product->id}}" onclick="add_Product({{$product->id}},{{$product->qty}})"  class="kt-nav__link" data-toggle="modal" data-target="#kt_modal_5">
                                                                        <i class="kt-nav__link-icon flaticon2-add-1"></i>
                                                                        <span class="kt-nav__link-text">Ajouter Au Stock</span>
                                                                    </a>
                                                                </li>
                                                                <li class="kt-nav__item">
                                                                    <a href="#"  onclick="delete_Product({{$product->id}})"   class="kt-nav__link" >
                                                                        <i class="kt-nav__link-icon flaticon2-delete"></i>
                                                                        <span class="kt-nav__link-text">Supprimé</span>
                                                                    </a>
                                                                </li>
                                                                <li class="kt-nav__item">
                                                                    <a href="{{ url('/AddProduct/'.$product->id) }}"  class="kt-nav__link">
                                                                        <i class="kt-nav__link-icon  flaticon-visible"></i>
                                                                        <span class="kt-nav__link-text">Modifier</span>
                                                                    </a>
                                                                </li>
                                                                <li class="kt-nav__item">
                                                                    <a href="{{ url('/details/'.$product->id) }}"  class="kt-nav__link">
                                                                        <i class="kt-nav__link-icon  flaticon-visible"></i>
                                                                        <span class="kt-nav__link-text">Plus de détails</span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </span>
                                                    </td>
    											</tr>
                                            @endforeach 
										</tbody>
									</table>

									<!--end: Datatable -->
								</div>
							</div>
						</div>
                        <!-- end:: Content -->
                        

                        
        <!--Begin::Section--
        <div class="row">
            <div class="col-xl-12">
                <div class="kt-portlet kt-portlet--height-fluid kt-portlet--mobile ">
                    <div class="kt-portlet__head kt-portlet__head--lg kt-portlet__head--noborder kt-portlet__head--break-sm">
                        <div class="kt-portlet__head-label">
                            <h3 class="kt-portlet__head-title">
                                Produits
                            </h3>
                        </div>
                    </div>
                    <div class="kt-portlet__body kt-portlet__body--fit">
                        <!--begin: Datatable --><!--
                        <div class="kt-portlet__body kt-portlet__body--fit">
                            <div class="kt-datatable kt-datatable--default kt-datatable--scroll kt-datatable--loaded" id="kt_datatable_latest_orders" style="">
                                <table class="kt-datatable__table" id="productTable" >
                                    <thead class="kt-datatable__head">
                                        <tr class="kt-datatable__row" style="left: 0px;">
                                            <th data-field="RecordID" class="kt-datatable__cell kt-datatable__cell--sort">
                                                <span >
                                                <label class="kt-checkbox kt-checkbox--single kt-checkbox--all kt-checkbox--solid">#</span></th>
                                            <th data-field="ShipName" data-autohide-disabled="false" class="kt-datatable__cell kt-datatable__cell--sort">
                                                <span >Produit</span>
                                            </th>
                                            @if(Auth::user()->type == "su")
                                                <th data-field="ShipDate" class="kt-datatable__cell kt-datatable__cell--sort">
                                                    <span >Prix d'achat</span>
                                                </th>
                                            @endif
                                            <th data-field="ShipDate" class="kt-datatable__cell kt-datatable__cell--sort"><span >Prix de vente</span></th>
                                            <th data-field="Status" class="kt-datatable__cell kt-datatable__cell--sort"><span >Qty</span></th>
                                            <th data-field="Type" class="kt-datatable__cell kt-datatable__cell--sort"><span >Servir par</span></th>
                                            <th data-field="Actions" data-autohide-disabled="false" class="kt-datatable__cell kt-datatable__cell--sort"><span >Actions</span></th>
                                        </tr>
                                    </thead>
                                    <tbody class="kt-datatable__body ps ps--active-y" >
                                        @foreach($products as $product)
                                            <tr data-row="0" id="tr'.{{$product->id}}.'" class="kt-datatable__row" style="left: 0px;">
                                                <td class="kt-datatable__cell" data-field="RecordID">
                                                    <span >
                                                        <label class="kt-checkbox kt-checkbox--single kt-checkbox--solid"><strong>{{$product->bareCode}}</strong></label>
                                                    </span>
                                                </td>
                                                <td data-field="ShipName" data-autohide-disabled="false" style="text-align: center;" class="kt-datatable__cell">
                                                    <span >                        
                                                        <div class="kt-user-card-v2"> 
                                                            <div class="kt-user-card-v2__pic">                                
                                                                <img alt="photo" src=" {{ asset('image/'.$product->img) }}">                            
                                                            </div>                            
                                                            <div class="kt-user-card-v2__details">                                
                                                                <div class="kt-user-card-v2__name">{{$product->name}}
                                                                </div>                                
                                                            </div>                        
                                                        </div>
                                                    </span>
                                                </td>
                                                @if(Auth::user()->type == "su")
                                                    <td data-field="ShipDate" class="kt-datatable__cell" style="text-align: center;">
                                                        <span >
                                                            <span class="kt-font-bold">{{$product->priceA}} DA</span>
                                                        </span>
                                                    </td>
                                                @endif
                                                <td data-field="ShipDate" class="kt-datatable__cell" style="text-align: center;">
                                                    <span >
                                                        <span class="kt-font-bold">{{$product->priceV}} DA</span>
                                                    </span>
                                                </td>
                                                <td data-field="Status" class="kt-datatable__cell">
                                                    <div class="kt-user-card-v2__details"> 
                                                        <input class="form-control" style="width: 80px; text-align: center;"  type="text" value="{{$product->qty}}" id="pQty{{$product->id}}" disabled="disabled">
                                                    </div>
                                                </td>
                                                <td data-field="Type" class="kt-datatable__cell">
                                                    <span >
                                                        <div class="kt-user-card-v2">                           
                                                            <div class="kt-user-card-v2__pic">                              
                                                                <div class="kt-badge kt-badge--xl kt-badge--brand">{{($product->user->name)[0]}}</div>  
                                                            </div>                          
                                                            <div class="kt-user-card-v2__details">                              
                                                                <a class="kt-user-card-v2__name" href="#">{{$product->user->name}}</a>  
                                                                <span class="kt-user-card-v2__desc">Admin</span>        
                                                            </div>                      
                                                        </div>
                                                    </span>
                                                </td>
                                                <td data-field="Actions" data-autohide-disabled="false" class="kt-datatable__cell" style="text-align: center;">
                                                    <span style="overflow: visible; position: relative;  " >
                                                        <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <i class="flaticon-more-1"></i>
                                                        </button>
                                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-md dropdown-menu-fit">
                                                            <!--begin::Nav--><!--
                                                            <ul class="kt-nav">
                                                                <li class="kt-nav__head">
                                                                    Export Options
                                                                    <i class="flaticon2-information" data-toggle="kt-tooltip" data-placement="right" title="Click to learn more..."></i>
                                                                </li>
                                                                <li class="kt-nav__separator"></li>
                                                                <li class="kt-nav__item">
                                                                    <a id="add{{$product->id}}" onclick="add_Product({{$product->id}},{{$product->qty}})"  class="kt-nav__link" data-toggle="modal" data-target="#kt_modal_5">
                                                                        <i class="kt-nav__link-icon flaticon2-add-1"></i>
                                                                        <span class="kt-nav__link-text">Ajouter Au Stock</span>
                                                                    </a>
                                                                </li>
                                                                <li class="kt-nav__item">
                                                                    <a href="#"  onclick="delete_Product({{$product->id}})"   class="kt-nav__link" >
                                                                        <i class="kt-nav__link-icon flaticon2-delete"></i>
                                                                        <span class="kt-nav__link-text">Supprimé</span>
                                                                    </a>
                                                                </li>
                                                                <li class="kt-nav__item">
                                                                    <a href="{{ url('/AddProduct/'.$product->id) }}"  class="kt-nav__link">
                                                                        <i class="kt-nav__link-icon  flaticon-visible"></i>
                                                                        <span class="kt-nav__link-text">Modifier</span>
                                                                    </a>
                                                                </li>
                                                                <li class="kt-nav__item">
                                                                    <a href="{{ url('/details/'.$product->id) }}"  class="kt-nav__link">
                                                                        <i class="kt-nav__link-icon  flaticon-visible"></i>
                                                                        <span class="kt-nav__link-text">Plus de détails</span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </span>
                                                </td>
                                            </tr>
                                        @endforeach
                                        <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                                            <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                                        </div>
                                        <div class="ps__rail-y" style="top: 0px; height: 446px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 155px;"></div>
                                        </div>
                                    </tbody>
                                </table>
                                <div class="kt-datatable__pager kt-datatable--paging-loaded kt-align-right">
                                    <div class="kt-datatable__pager-info">
                                        <div class="col-lg-6 kt-align-right">
                                            <button type="submit" class="btn btn-brand">Submit</button>
                                            <span class="kt-margin-left-10">or <a href="#" class="kt-link kt-font-bold">Cancel</a></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <!--end: Datatable -->
                       <!-- </div>
                    </div>
                </div>
            </div>
        </div>

        <!--End::Section-->

    </div>


    <!--begin::Modal-->
    <div class="modal fade" id="kt_modal_5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ajouter Au stock</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <input type="hidden" class="form-control" id="idp">
                        <div class="form-group" style="width: 80px;">
                            <label for="recipient-name" class="form-control-label">Qty:</label>
                            <input type="number" class="form-control" id="Qty"  disabled="disabled">
                        </div>
                        +
                        <div class="form-group" style="width: 80px;">
                            <label for="recipient-name" class="form-control-label">Ajouter au stock:</label>
                            <input type="number" class="form-control" id="addQty" min="1" >
                        </div>
                        <div class="form-group" style="width: 80px;">
                            <label for="recipient-name" class="form-control-label">Qty:</label>
                            <input type="number" class="form-control" id="newQty"  disabled="disabled">
                        </div>

                        
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" id="closeModal" data-dismiss="modal">Close</button>
                    <button type="button" id="addStock" class="btn btn-primary">Ajouter</button>
                </div>
            </div>
        </div>
    </div>

    <!--end::Modal-->

<script type="text/javascript">
    $(document).ready(function() {
        $('#productTable').DataTable();
    });
</script>
<script type="text/javascript">
    function delete_Product(id) {
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
                      url: "{{URL::to('/deleteProduct') }}",
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
                            $('#tr'+id).remove();
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
    }

    function add_Product(id,qty) {
        $('#Qty').val("")
        $('#idp').val("")
        $('#addQty').val(1)
        $('#newQty').val("")
        $('#Qty').val(qty)
        $('#Qty').attr({"min" : qty });
        $('#idp').val(id)
    }

    $('#addStock').on( "click",function () {
        if($('#addQty').val() !=""){
        var id = $('#idp').val()
        var qty = $('#addQty').val()
        $.ajax({
              type: "POST",
              url: "{{URL::to('/AddStock') }}",
              dataType: "json",
              data:{'id':id,
                    'qty':qty},
              headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
              success:function(data){
                if(data){
                    swal.fire(
                        'Eroor',
                        "une erreur s'est produite veuillez réessayer svp.",
                        'error'
                    )
                }else{
                    $('#pQty'+id).val($('#newQty').val())
                    $('#closeModal').click();
                    swal.fire(
                        'Ajouter Stock',
                        'le produit a éte bien mis a joure.',
                        'success'
                    )
                }
              }
        })
        }else{
            swal.fire(
                        'Eroor',
                        "une erreur s'est produite veuillez réessayer svp.",
                        'error'
                    )
        }
    })

    $("#addQty").on("change",function(){
        var qty = $('#Qty').val();
        $('#newQty').val(parseInt(qty)+parseInt($('#addQty').val()))
    })

    $("#addQty").on("mouseut, keyup ",function(){
        var qty = $('#Qty').val();
        $('#newQty').val(parseInt(qty)+parseInt($('#addQty').val()))
    })
    
</script>
@endsection
