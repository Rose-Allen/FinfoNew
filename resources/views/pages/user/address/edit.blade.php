@extends('layouts.app')
@section('title', 'Address')
@section('style')
    <!--begin::Vendor Stylesheets(used for this page only)-->
    <link href="{{ asset('assets/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet"
          type="text/css"/>
    <!--end::Vendor Stylesheets-->
@endsection
@section('content')

    <!--begin::Content wrapper-->
    <div class="d-flex flex-column flex-column-fluid">
        <!--begin::Toolbar-->
        <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-0">
            <!--begin::Toolbar container-->
            <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
                <!--begin::Page title-->
                <div class="page-title d-flex flex-column justify-content-center me-3">
                    <!--begin::Title-->
                    <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
                        Create address</h1>
                    <!--end::Title-->
                    <!--begin::Breadcrumb-->
                    <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-muted">
                            <a href="" class="text-muted text-hover-primary">Clients</a>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-400 w-5px h-2px"></span>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-muted">
                            <a href="" class="text-muted text-hover-primary">address</a>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-400 w-5px h-2px"></span>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-muted">
                            create
                        </li>
                        <!--end::Item-->
                    </ul>
                    <!--end::Breadcrumb-->
                </div>
                <!--end::Page title-->
            </div>
            <!--end::Toolbar container-->
        </div>
        <!--end::Toolbar-->
        <!--begin::Content-->
        <div id="kt_app_content" class="app-content flex-column-fluid">
            <!--begin::Content container-->
            <div id="kt_app_content_container" class="app-container container-xxl">
                <!--begin::Card-->
                <div class="card">
                    <!--begin::Card header-->
                    <div class="card-header border-0 pt-6">
                        <!--begin::Card title-->
                        <div class="card-title">
                            Edit address
                        </div>
                        <!--begin::Card title-->
                    </div>
                    <!--end::Card header-->
                    <!--begin::Card body-->
                    <div class="card-body py-4">
                        <form class="form" action="{{route('user.addresses.update', $address->id)}}" method="post">
                        @csrf
                        @method('patch')
                        <!--begin::Input group-->
                            <div class="fv-row mb-7 fv-plugins-icon-container">
                                <!--begin::Label-->
                                <label class="fs-6 fw-semibold form-label mt-3" for="address">
                                    <span class="required">Address</span>
                                </label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input id="address" type="text" class="form-control form-control-solid" name="address"
                                       value="{{$address->address}}">
                                @error('address')
                                <div class="text-danger">{{$message}}</div>
                            @enderror
                            <!--end::Input-->
                                <div class="fv-plugins-message-container invalid-feedback"></div>
                            </div>
                            <!--end::Input group-->
                            <!--begin::Row-->
                            <div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">
                                <!--begin::Col-->
                                <div class="col">
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-7 fv-plugins-icon-container">
                                        <!--begin::Label-->
                                        <label for="flat" class="fs-6 fw-semibold form-label mt-3">
                                            <span class="required">Flat</span>
                                        </label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input id="flat" type="text" class="form-control form-control-solid"
                                               name="flat" value="{{$address->flat}}">

                                        @error('flat')
                                        <div class="text-danger">{{$message}}</div>
                                    @enderror
                                    <!--end::Input-->
                                        <div class="fv-plugins-message-container invalid-feedback"></div>
                                    </div>
                                    <!--end::Input group-->
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col">
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-7">
                                        <!--begin::Label-->
                                        <label for="home" class="fs-6 fw-semibold form-label mt-3">
                                            <span class="required">Home</span>
                                        </label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input id="home" type="text" class="form-control form-control-solid" name="home"
                                               value="{{$address->home}}">
                                        @error('home')
                                        <div class="text-danger">{{$message}}</div>
                                    @enderror
                                    <!--end::Input-->
                                    </div>
                                    <!--end::Input group-->
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Row-->
                            <!--begin::Row-->
                            <div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">
                                <!--begin::Col-->
                                <!--begin::Col-->
                                <div class="col" data-select2-id="select2-data-115-7j1b">
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-7 fv-plugins-icon-container">
                                        <!--begin::Label-->
                                        <label for="country_id" class="fs-6 fw-semibold form-label mt-3">
                                            <span class="required">Country</span>
                                        </label>
                                        <!--end::Label-->
                                        <div class="w-100">
                                            <div class="form-floating border rounded">
                                                <!--begin::Select2-->
                                                <select id="country_id"
                                                        class="form-select form-select-solid lh-1 py-3 select2-hidden-accessible"
                                                        name="country_id">
                                                    @foreach($countries as $country)
                                                        <option value="{{$country->id}}"
                                                            {{$country->id == $address->country_id ? 'selected' : '' }}
                                                        >{{$country->name}}</option>
                                                    @endforeach
                                                </select>
                                                <!--end::Select2-->
                                            </div>
                                        </div>
                                        <div class="fv-plugins-message-container invalid-feedback"></div>
                                    </div>
                                    <!--end::Input group-->
                                </div>
                                <!--end::Col-->
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col" data-select2-id="select2-data-115-7j1b">
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-7 fv-plugins-icon-container">
                                        <!--begin::Label-->
                                        <label for="city_id" class="fs-6 fw-semibold form-label mt-3">
                                            <span class="required">City</span>
                                        </label>
                                        <!--end::Label-->
                                        <div class="w-100">
                                            <div class="form-floating border rounded">
                                                <!--begin::Select2-->
                                                <select id="city_id"
                                                        class="form-select form-select-solid lh-1 py-3 select2-hidden-accessible"
                                                        name="city_id">
                                                    @foreach($cities as $city)
                                                        <option value="{{$city->id}}"
                                                            {{$city->id == $address->city_id ? 'selected' : '' }}
                                                        >{{$city->name}}</option>
                                                    @endforeach
                                                </select>
                                                <!--end::Select2-->
                                            </div>
                                        </div>
                                        <div class="fv-plugins-message-container invalid-feedback"></div>
                                    </div>
                                    <!--end::Input group-->
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Row-->
                            <!--begin::Separator-->
                            <div class="separator mb-6"></div>
                            <!--end::Separator-->
                            <!--begin::Action buttons-->
                            <div class="d-flex justify-content-end">
                                <!--begin::Button-->
{{--                                <button type="reset" data-kt-contacts-type="cancel" class="btn btn-light me-3"--}}
{{--                                        --}}{{--                                        onclick="window.location.href ='{{ route('client.addresses.index',$client->id)}}';">--}}
{{--                                        Cancel--}}
{{--                                </button>--}}
                                <!--end::Button-->
                                <!--begin::Button-->
                                <button type="submit" class="btn btn-primary">
                                    Изменить
                                </button>
                                <!--end::Button-->
                            </div>
                            <!--end::Action buttons-->
                        </form>

                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Card-->
            </div>
            <!--end::Content container-->
        </div>
        <!--end::Content-->
    </div>
    <!--end::Content wrapper-->

@endsection

@push('scripts')
    <!--begin::Vendors Javascript(used for this page only)-->
    <script src="{{ asset('assets/plugins/custom/datatables/datatables.bundle.js') }}"></script>
    <!--end::Vendors Javascript-->
    <!--begin::Custom Javascript(used for this page only)-->
    <script src="{{ asset('assets/js/widgets.bundle.js') }}"></script>
    <script src="{{ asset('assets/js/custom/widgets.js') }}"></script>
    <script src="{{ asset('assets/js/custom/apps/chat/chat.js') }}"></script>
    <script src="{{ asset('assets/js/custom/utilities/modals/create-app.js') }}"></script>
    <script src="{{ asset('assets/js/custom/utilities/modals/users-search.js') }}"></script>
    <!--end::Custom Javascript-->
@endpush
