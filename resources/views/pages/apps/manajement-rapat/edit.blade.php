@extends('layouts.app')

@section('title')
Tambah anggota rapat
@endsection

@section('content')
<div class="col-lg-12 mt-4">
    <!--begin::Advance Table Widget 4-->
    <div class="card card-custom card-stretch gutter-b">
        <!--begin::Header-->
        <div class="card-header border-0 py-5">
            <h3 class="card-title align-items-start flex-column">
                <span class="card-label font-weight-bolder text-dark">Tambah Anggota Rapat</span>
                <span class="text-muted mt-3 font-weight-bold font-size-sm">More than 400+ new members</span>
            </h3>
            <div class="card-toolbar">
                <a href="#" class="btn btn-info font-weight-bolder font-size-sm mr-3" data-toggle="modal"
                    data-target="#kt_select_modal">Tambah Anggota</a>
                <a href="#" class="btn btn-danger font-weight-bolder font-size-sm">Cancle</a>
            </div>
        </div>
        <!--end::Header-->
        <!--begin::Body-->
        <div class="card-body pt-0 pb-3">
            <div class="tab-content">
                <!--begin::Table-->
                <div class="table-responsive">
                    <table class="table table-head-custom table-head-bg table-borderless table-vertical-center">
                        <thead>
                            <tr class="text-left text-uppercase">
                                <th style="min-width: 250px" class="pl-7">
                                    <span class="text-dark-75">Nik</span>
                                </th>
                                <th style="min-width: 100px">Nama</th>
                                <th style="min-width: 100px">Organisasi</th>
                                <th style="min-width: 100px">Company</th>
                                <th style="min-width: 130px">Status</th>
                                <th style="min-width: 80px"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="pl-0 py-8">
                                    <div class="d-flex align-items-center">
                                        <div class="symbol symbol-50 symbol-light mr-4">
                                            <span class="symbol-label">
                                                <img src="/assets/media/svg/avatars/001-boy.svg"
                                                    class="h-75 align-self-end" alt="" />
                                            </span>
                                        </div>
                                        <div>
                                            <span href="#"
                                                class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">2313111133</span>

                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <span class="text-dark-75 font-weight-bolder d-block font-size-lg">Ketchup</span>
                                </td>
                                <td>
                                    <span class="text-dark-75 font-weight-bolder d-block font-size-lg">Sekretariat
                                        Perusahaan & Tata Kelola</span>
                                </td>
                                <td>
                                    <span class="text-dark-75 font-weight-bolder d-block font-size-lg">PT Pupuk
                                        Indonesia</span>
                                </td>
                                <td class="pr-0 text-right">
                                    <a href="#" class="btn btn-light-success font-weight-bolder font-size-sm">Hadir</a>
                                </td>
                            </tr>
                            <tr>
                                <td class="pl-0 py-8">
                                    <div class="d-flex align-items-center">
                                        <div class="symbol symbol-50 symbol-light mr-4">
                                            <span class="symbol-label">
                                                <img src="/assets/media/svg/avatars/001-boy.svg"
                                                    class="h-75 align-self-end" alt="" />
                                            </span>
                                        </div>
                                        <div>
                                            <span href="#"
                                                class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">2313111133</span>

                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <span class="text-dark-75 font-weight-bolder d-block font-size-lg">Ketchup</span>
                                </td>
                                <td>
                                    <span class="text-dark-75 font-weight-bolder d-block font-size-lg">Sekretariat
                                        Perusahaan & Tata Kelola</span>
                                </td>
                                <td>
                                    <span class="text-dark-75 font-weight-bolder d-block font-size-lg">PT Pupuk
                                        Indonesia</span>
                                </td>
                                <td class="pr-0 text-right">
                                    <a href="#" class="btn btn-light-success font-weight-bolder font-size-sm">Hadir</a>
                                </td>
                            </tr>
                            <tr>
                                <td class="pl-0 py-8">
                                    <div class="d-flex align-items-center">
                                        <div class="symbol symbol-50 symbol-light mr-4">
                                            <span class="symbol-label">
                                                <img src="/assets/media/svg/avatars/001-boy.svg"
                                                    class="h-75 align-self-end" alt="" />
                                            </span>
                                        </div>
                                        <div>
                                            <span href="#"
                                                class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">2313111133</span>

                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <span class="text-dark-75 font-weight-bolder d-block font-size-lg">Ketchup</span>
                                </td>
                                <td>
                                    <span class="text-dark-75 font-weight-bolder d-block font-size-lg">Sekretariat
                                        Perusahaan & Tata Kelola</span>
                                </td>
                                <td>
                                    <span class="text-dark-75 font-weight-bolder d-block font-size-lg">PT Pupuk
                                        Indonesia</span>
                                </td>
                                <td class="pr-0 text-right">
                                    <a href="#" class="btn btn-light-success font-weight-bolder font-size-sm">Hadir</a>
                                </td>
                            </tr>
                            <tr>
                                <td class="pl-0 py-8">
                                    <div class="d-flex align-items-center">
                                        <div class="symbol symbol-50 symbol-light mr-4">
                                            <span class="symbol-label">
                                                <img src="/assets/media/svg/avatars/001-boy.svg"
                                                    class="h-75 align-self-end" alt="" />
                                            </span>
                                        </div>
                                        <div>
                                            <span href="#"
                                                class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">2313111133</span>

                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <span class="text-dark-75 font-weight-bolder d-block font-size-lg">Ketchup</span>
                                </td>
                                <td>
                                    <span class="text-dark-75 font-weight-bolder d-block font-size-lg">Sekretariat
                                        Perusahaan & Tata Kelola</span>
                                </td>
                                <td>
                                    <span class="text-dark-75 font-weight-bolder d-block font-size-lg">PT Pupuk
                                        Indonesia</span>
                                </td>
                                <td class="pr-0 text-right">
                                    <a href="#" class="btn btn-light-success font-weight-bolder font-size-sm">Hadir</a>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
                <!--end::Table-->
            </div>
        </div>
        <!--end::Body-->
    </div>
    <!--end::Advance Table Widget 4-->
</div>


<div class="modal fade" id="kt_select_modal" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Anggota Rapat</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i aria-hidden="true" class="ki ki-close"></i>
                </button>
            </div>
            <form class="form">
                <div class="modal-body">

                    <div class="form-group row">
                        <label class="col-form-label text-right col-lg-3 col-sm-12">Nik - Nama</label>
                        <div class="col-lg-9 col-md-9 col-sm-12">
                            <select class="form-control selectpicker" data-live-search=" true" data-size="4">
                                <option>13213213 - alya</option>
                                <option>12311233 - Ketchup</option>
                                <option>12111111 - Relish</option>
                            </select>
                        </div>
                    </div>
                    <div class=" form-group row">
                        <label class="col-form-label text-right col-lg-3 col-sm-12">Organisasi</label>
                        <div class="col-lg-9 col-md-9 col-sm-12">
                            <input type="text" class="form-control" readonly value="PT pupk indonesia" />
                        </div>
                    </div>
                    <div class=" form-group row">
                        <label class="col-form-label text-right col-lg-3 col-sm-12">Unit Kerja</label>
                        <div class="col-lg-9 col-md-9 col-sm-12">
                            <input type="text" class="form-control" readonly
                                value="Sekretariat Perusahaan & Tata Kelola" />
                        </div>
                    </div>

                </div>
                <div class=" modal-footer">
                    <button type="button" class="btn btn-primary mr-2" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-secondary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
@push('addon-script')

@endpush