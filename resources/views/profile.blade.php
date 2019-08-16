@extends('layout')
@section('title',  Auth::user()->name )
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
                Utilisateurs </h3>
            <span class="kt-subheader__separator kt-hidden"></span>
            <div class="kt-subheader__breadcrumbs">
                <a href="{{ url('/products') }}" class="kt-subheader__breadcrumbs-home"><i class="flaticon2-shelter"></i></a>
                <span class="kt-subheader__breadcrumbs-separator"></span>
                <a href="{{ url('/dashboard') }}" class="kt-subheader__breadcrumbs-link">
                    General </a>
                <span class="kt-subheader__breadcrumbs-separator"></span>
                <a href="{{ url('/products') }}" class="kt-subheader__breadcrumbs-link">
                    Utilisateur </a>

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
<!-- begin:: Content -->
<div class="kt-content  kt-grid__item kt-grid__item--fluid" id="kt_content">

    <!--Begin::App-->
    <div class="kt-grid kt-grid--desktop kt-grid--ver kt-grid--ver-desktop kt-app">

        <!--Begin:: App Aside Mobile Toggle-->
        <button class="kt-app__aside-close" id="kt_user_profile_aside_close">
            <i class="la la-close"></i>
        </button>

        <!--End:: App Aside Mobile Toggle-->

        <!--Begin:: App Aside-->
        <div class="kt-grid__item kt-app__toggle kt-app__aside" id="kt_user_profile_aside">

            <!--Begin::Portlet-->
            <div class="kt-portlet kt-portlet--height-fluid-">
                <div class="kt-portlet__head kt-portlet__head--noborder">
                </div>
                <div class="kt-portlet__body">

                    <!--begin::Widget -->
                    <div class="kt-widget kt-widget--user-profile-2">
                        <div class="kt-widget__head">
                            <div class="kt-widget__info">
                                <div class="kt-widget__username">
                                    {{Auth::user()->name}}
                                </div>
                                <span class="kt-widget__desc">
                                    Admin
                                </span>
                            </div>
                        </div>
                        <div class="kt-widget__body">
                            <div class="kt-widget__content">
                                <div class="kt-widget__stats kt-margin-r-20">
                                    <div class="kt-widget__icon">
                                        <i class="flaticon-coins"></i>
                                    </div>
                                    <div class="kt-widget__details">
                                        <span class="kt-widget__title">Aujourd'hui</span>
                                        <span class="kt-widget__value"><span>DA</span>{{$amount['toDay'][0]['amount']}}</span>
                                    </div>
                                </div>
                                <div class="kt-widget__stats">
                                    <div class="kt-widget__icon">
                                        <i class="flaticon-coins"></i>
                                    </div>
                                    <div class="kt-widget__details">
                                        <span class="kt-widget__title">Hier</span>
                                        <span class="kt-widget__value"><span>DA</span>{{$amount['yesterday'][0]['amount']}}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="kt-widget__item">
                                <div class="kt-widget__contact">
                                    <span class="kt-widget__label">Phone:</span>
                                    <div class="kt-widget__data">{{Auth::user()->telephone}}</div>
                                </div>
                            </div>
                        </div>
                       
                    </div>

                    <!--end::Widget -->

                    <!--begin::Navigation -->
                    <ul class="kt-nav--bold kt-nav--bold kt-nav--md-space kt-margin-t-20 kt-margin-b-20 kt-hidden" role="tablist">
                        <li class="kt-nav__item kt-nav__item--active">
                            <a class="kt-nav__link active" data-toggle="tab" href="#kt_profile_tab_personal_information" role="tab">
                                <span class="kt-nav__link-icon"><i class="flaticon2-calendar-3"></i></span>
                                <span class="kt-nav__link-text">Personal Information</span>
                            </a>
                        </li>
                        <li class="kt-nav__item">
                            <a class="kt-nav__link" data-toggle="tab" href="#kt_profile_tab_account_information" role="tab">
                                <span class="kt-nav__link-icon"><i class="flaticon2-protected"></i></span>
                                <span class="kt-nav__link-text">Acccount Information</span>
                            </a>
                        </li>
                        <li class="kt-nav__item">
                            <a class="kt-nav__link" href="#" role="tab" data-toggle="kt-tooltip" title="" data-placement="right" data-original-title="This feature is coming soon!">
                                <span class="kt-nav__link-icon"><i class="flaticon2-hourglass-1"></i></span>
                                <span class="kt-nav__link-text">Payments</span>
                            </a>
                        </li>
                        <li class="kt-nav__separator"></li>
                        <li class="kt-nav__item">
                            <a class="kt-nav__link" href="#" role="tab" data-toggle="kt-tooltip" title="" data-placement="right" data-original-title="This feature is coming soon!">
                                <span class="kt-nav__link-icon"><i class="flaticon2-bell-2"></i></span>
                                <span class="kt-nav__link-text">Statements</span>
                            </a>
                        </li>
                        <li class="kt-nav__item">
                            <a class="kt-nav__link" href="#" role="tab" data-toggle="kt-tooltip" title="" data-placement="right" data-original-title="This feature is coming soon!">
                                <span class="kt-nav__link-icon"><i class="flaticon2-medical-records-1"></i></span>
                                <span class="kt-nav__link-text">Audit Log</span>
                            </a>
                        </li>
                    </ul>

                    <!--end::Navigation -->
                </div>
            </div>

            <!--End::Portlet-->
        </div>

        <!--End:: App Aside-->

        <!--Begin:: App Content-->
       <div class="kt-grid__item kt-grid__item--fluid kt-app__content">
            <div class="row">
                <div class="col-xl-12">
                    <div class="kt-portlet">
                        <div class="kt-portlet__head">
                            <div class="kt-portlet__head-label">
                                <h3 class="kt-portlet__head-title">Personal Information <small>update your personal informaiton</small></h3>
                            </div>
                            
                        </div>
                        
                        <form class="kt-form kt-form--label-right" action="{{ url('/updateUser') }}" method="get" id="updateUser">
                            <div class="kt-portlet__body">
                                <div class="kt-section kt-section--first">
                                    <div class="kt-section__body">
                                        <div class="form-group row">
                                            <label class="col-xl-3 col-lg-3 col-form-label">Nom d'utilisateur :</label>
                                            <div class="col-lg-9 col-xl-6">
                                                <input class="form-control" name="" id="" type="text" value="{{Auth::user()->userName}}" disabled="disabled">
                                            </div>
                                        </div>
                                        @if(isset($err))
                                            @if(!$err)
                                                <div class="alert alert-success">Profil a été mis à jour avec succès</div>
                                            @else
                                                <div class="alert alert-danger">{{$err}}</div>
                                            @endif
                                        @endif
                                        <div id="err"></div>
                                        <div class="form-group row">
                                            <label class="col-xl-3 col-lg-3 col-form-label">Nom & Prenom :</label>
                                            <div class="col-lg-9 col-xl-6">
                                                <input class="form-control" name="Uname" id="Uname" type="text" value="{{Auth::user()->name}}">
                                            </div>
                                        </div>
                                        <div id="errPass"></div>
                                        <div class="form-group row">
                                            <label class="col-xl-3 col-lg-3 col-form-label">Mot de passe :</label>
                                            <div class="col-lg-9 col-xl-6">
                                                <input class="form-control" name="Upassword" id="Upassword" type="password" value="">
                                            </div>
                                        </div>
                                        <div class="form-group row" >
                                            <label class="col-xl-3 col-lg-3 col-form-label">Nouveau mot de passe :</label>
                                            <div class="col-lg-9 col-xl-6">
                                                <input class="form-control" name="Npassword" id="Npassword" type="password" value="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-xl-3 col-lg-3 col-form-label">Confirmation du nouveau mot de passe :</label>
                                            <div class="col-lg-9 col-xl-6">
                                                <input class="form-control" name="Cpassword" id="Cpassword" type="password" value="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-xl-3 col-lg-3 col-form-label">Telephonne :</label>
                                            <div class="col-lg-9 col-xl-6">
                                                <div class="input-group">
                                                    <div class="input-group-prepend"><span class="input-group-text"><i class="la la-phone"></i></span></div>
                                                    <input type="text" class="form-control" name="Uphone" id="Uphone" value="{{Auth::user()->telephone}}" placeholder="Phone" aria-describedby="basic-addon1">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="kt-portlet__foot">
                                <div class="kt-form__actions">
                                    <div class="row">
                                        <div class="col-lg-3 col-xl-3">
                                        </div>
                                        <div class="col-lg-9 col-xl-9">
                                            <input  type="Submit" class="btn btn-success" value="Modifier">
                                            <button type="reset" class="btn btn-secondary">Annuler</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!--End:: App Content-->
    </div>

    <!--End::App-->
</div>
<script type="text/javascript">
    $("#updateUser").submit(function(e){
        var Uname     = $('#Uname').val();
        var Upassword = $('#Upassword').val();
        var Npassword = $('#Npassword').val();
        var Cpassword = $('#Cpassword').val();
        var Uphone    = $('#Uphone').val();
        if (Upassword.length > 0 && Upassword.length < 5) {
            $('#errPass').empty()
            $('#errPass').append('<div class="alert alert-danger">le mot de passe doit comporter au moins 6 caractères</div>')
            e.preventDefault();
        }else if(Upassword.length > 5){
            if (Npassword.length < 5 || Cpassword.length < 5) {
                $('#errPass').empty()
                $('#errPass').append('<div class="alert alert-danger">nouveau mot de passe et confirmation doit comporter au moins 6 caractères</div>')
                e.preventDefault();
            }else if (Npassword != Cpassword ) {
                $('#errPass').empty()
                $('#errPass').append('<div class="alert alert-danger">nouveau mot de passe et confirmation ne sont pas identiques</div>')
                e.preventDefault();
            }
        }
        if( Uname == "" || Uphone == "") {
            $('#err').empty()
            $('#err').append('<div class="alert alert-danger">le nom et le téléphone sont obligatoires</div>')
            e.preventDefault();
        }
    });
</script>
<!-- end:: Content -->
@endsection
