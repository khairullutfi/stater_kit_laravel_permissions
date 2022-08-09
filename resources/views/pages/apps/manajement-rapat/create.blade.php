@extends('layouts.app')

@section('title')
Create Manajement Rapat
@endsection

@section('content')
<div class="card card-custom card-sticky" id="kt_page_sticky_card">
    <div class="card-header">
        <div class="card-title">
            <h3 class="card-label">Tambah Manajement Rapat
                <i class="mr-2"></i>
                <small class="">Isi Form dibawah ini </small>
            </h3>
        </div>
        <div class="card-toolbar">
            <a href="#" class="btn btn-light-primary font-weight-bolder mr-2">
                <i class="ki ki-long-arrow-back icon-sm"></i>Back</a>
            <div class="btn-group">
                <a href="/apps/rapat/anggota" class="btn btn-primary font-weight-bolder" id="kt_sweetalert_demo_6">
                    <i class="ki ki-check icon-sm"></i>Save Form</a>
                <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
                <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">

                </div>
            </div>
        </div>
    </div>
    <div class="card-body">
        <!--begin::Form-->
        <form class="form" id="kt_form">
            <div class="row">
                <div class="col-xl-1"></div>
                <div class="col-xl-10">
                    <div class="my-5">
                        <h3 class="text-dark font-weight-bold mb-10">Users Info:</h3>
                        <div class="row">
                            <div class="form-group col-lg-6">
                                <label>Employ Number: </label>
                                <input class="form-control form-control-solid" readonly type="text" value="3032157" />
                            </div>
                            <div class="form-group col-lg-6">
                                <label>Nama</label>
                                <input class="form-control form-control-solid" readonly type="text" value="Watson" />
                            </div>
                            <div class="form-group col-lg-6">
                                <label>Company Code</label>
                                <input class="form-control form-control-solid" readonly type="text" value="1123111" />
                            </div>
                            <div class="form-group col-lg-6">
                                <label>Company Name</label>
                                <input class="form-control form-control-solid" readonly type="text"
                                    value="PT Pupuk Indonesia" />
                            </div>
                            <div class="form-group col-lg-6">
                                <label>Unit Kerja</label>
                                <input class="form-control form-control-solid" readonly type="text"
                                    value="Sekretariat Perusahaan & Tata Kelola" />
                            </div>
                        </div>


                    </div>
                    <div class="separator separator-dashed my-10"></div>
                    <div class="my-52">
                        <h3 class="text-dark font-weight-bold mb-10">Deskripsi Rapat & Waktu Rapat:</h3>
                        <div class="form-group row">
                            <label class="col-3 col-form-label">Jenis Rapat</label>
                            <div class="col-9">
                                <input class="form-control" type="text" placeholder="Masukkan Jenis Rapat"
                                    id="example-text-input" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-3 col-form-label">Judul Rapat</label>
                            <div class="col-9">
                                <input class="form-control" type="text" placeholder="Masukkan Judul Rapat"
                                    id="example-text-input" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-3 col-form-label">Materi Rapat</label>
                            <div class="col-9">
                                <input class="form-control" type="file" placeholder="Masukkan Materi Rapat"
                                    id="example-text-input" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-3 col-form-label">Deskripsi / Catatan Rapat</label>
                            <div class="col-9">
                                <textarea class="form-control" type="text"
                                    placeholder="Masukkan Deskripsi / Catatan Rapat" id="example-text-input"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-12 col-form-label">Tanggal</label>
                            <div class="col-12 ">
                                <div class="input-group date">
                                    <input type="text" class="form-control" id="kt_datepicker_2" readonly="readonly"
                                        placeholder="Select date" />
                                    <div class="input-group-append">
                                        <span class="input-group-text">
                                            <i class="la la-calendar-check-o"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-12 col-form-label">Waktu Mulai</label>
                            <div class="col-12 ">
                                <div class="input-group timepicker">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="la la-clock-o"></i>
                                        </span>
                                    </div>
                                    <input class="form-control" id="kt_timepicker_3_modal" readonly="readonly"
                                        placeholder="Select time" type="text" />
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-12 col-form-label">Waktu Selesai</label>
                            <div class="col-12 ">
                                <div class="input-group timepicker">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="la la-clock-o"></i>
                                        </span>
                                    </div>
                                    <input class="form-control" id="kt_timepicker_3_modal" readonly="readonly"
                                        placeholder="Select time" type="text" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="separator separator-dashed my-10"></div>
                    <div class="my-52">
                        <h3 class="text-dark font-weight-bold mb-10">Booking Rapat:</h3>
                        <div class="row">
                            <div class="form-group col-lg-6">
                                <select class="form-control selectpicker" id="pilihrapat" name="param">
                                    <option value="offline">Rapat Offline</option>
                                    <option value="online">Rapat Online</option>
                                    <option value="onfile">Rapat Online & Offline</option>
                                </select>
                            </div>
                        </div>

                        <div class="offline box form-group row mt-4">
                            <div class="form-group col-lg-6">
                                <label>Nama Ruangan:</label>
                                <select class="form-control form-control-solid select2" id="kt_select2_1" name="param">
                                    <option value="AK">Alaska</option>
                                    <option value="HI">Hawaii</option>
                                    <option value="CA">California</option>
                                    <option value="NV">Nevada</option>
                                    <option value="OR">Oregon</option>
                                </select>
                            </div>
                            <div class="form-group col-lg-6">
                                <label>Lantai: </label>
                                <input class="form-control form-control-solid" readonly type="text" value="1" />
                            </div>
                            <div class="form-group col-lg-6">
                                <label>Fasilitas: </label>
                                <input class="form-control form-control-solid" readonly type="text"
                                    value="Ac, Kipas, Tv" />
                            </div>
                            <div class="form-group col-lg-6">
                                <label>Kapasitas: </label>
                                <input class="form-control form-control-solid" readonly type="text" value="10 Orang" />
                            </div>
                        </div>

                        <div class="online box form-group row mt-4">
                            <div class="form-group col-lg-6">
                                <label>Link Rapat: </label>
                                <input class="form-control" type="text"
                                    value="https://pupuk-indonesia.zoom.us/j/94237774494?pwd=WkFnS3JlNFBtNDBDQVg3WS9VMjhwUT09"
                                    id="example-text-input" />
                            </div>
                        </div>

                        <div class="onfile box form-group row mt-4">
                            <div class="form-group col-lg-6">
                                <label>Link Rapat: </label>
                                <input class="form-control" type="text"
                                    value="https://pupuk-indonesia.zoom.us/j/94237774494?pwd=WkFnS3JlNFBtNDBDQVg3WS9VMjhwUT09"
                                    id="example-text-input" />
                            </div>
                            <div class="form-group col-lg-6">
                                <label>Nama Ruangan:</label>
                                <select class="form-control form-control-solid selectpicker" data-live-search="true"
                                    data-size="4" name="param">
                                    <option value="AK">Alaska</option>
                                    <option value="HI">Hawaii</option>
                                    <option value="CA">California</option>
                                    <option value="NV">Nevada</option>
                                    <option value="OR">Oregon</option>
                                </select>
                            </div>
                            <div class="form-group col-lg-6">
                                <label>Lantai: </label>
                                <input class="form-control form-control-solid" readonly type="text" value="1" />
                            </div>
                            <div class="form-group col-lg-6">
                                <label>Fasilitas: </label>
                                <input class="form-control form-control-solid" readonly type="text"
                                    value="Ac, Kipas, Tv" />
                            </div>
                            <div class="form-group col-lg-6">
                                <label>Kapasitas: </label>
                                <input class="form-control form-control-solid" readonly type="text" value="10 Orang" />
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-xl-2"></div>
            </div>
        </form>
        <!--end::Form-->
    </div>
</div>
@endsection
@push('addon-script')
<script>
    var KTSelect2 = function() {
    // Private functions
    var demos = function() {
    // basic
    $('#kt_select2_1').select2({
    placeholder: "Select a state"
    });

    }

   return {
    init: function() {
        demos();

        }
    };
}();
jQuery(document).ready(function() {
    KTSelect2.init();
});
</script>
<script>
    $(document).ready(function(){
      $("#pilihrapat").change(function(){
        $(this).find("option:selected").each(function(){
            var optionValue = $(this).attr("value");
            if(optionValue){
                $(".box").not("." + optionValue).hide();
                $("." + optionValue).show();
            } else{
                $(".box").hide();
            }
        });
    }).change();
});

$("#kt_sweetalert_demo_6").click(function(e) {
    Swal.fire({
        position: "top-right",
        icon: "success",
        title: "Your work has been saved",
        showConfirmButton: false,
        timer: 1500
    });
});
</script>
<script>
    var KTBootstrapDatepicker = function () {

        var arrows;
        if (KTUtil.isRTL()) {
            arrows = {
            leftArrow: '<i class="la la-angle-right"></i>',
            rightArrow: '<i class="la la-angle-left"></i>'
            }
        } else {
            arrows = {
            leftArrow: '<i class="la la-angle-left"></i>',
            rightArrow: '<i class="la la-angle-right"></i>'
            }
        }

        // Private functions
        var demos = function () {
        // input group layout
        $('#kt_datepicker_2').datepicker({
            rtl: KTUtil.isRTL(),
            todayHighlight: true,
            orientation: "bottom left",
            templates: arrows
        });
        }

        return {
        // public functions
        init: function() {
        demos();
        }
        };
        }();

        jQuery(document).ready(function() {
             KTBootstrapDatepicker.init();
        });
</script>
<script>
    // Class definition

    var KTBootstrapTimepicker = function () {

    // Private functions
    var demos = function () {

        // default time
        $('#kt_timepicker_3, #kt_timepicker_3_modal').timepicker({
            defaultTime: '11:45:20 AM',
            minuteStep: 1,
            showSeconds: true,
            showMeridian: true
        });
    }

    return {
    // public functions
    init: function() {
    demos();
                }
            };
    }();

    jQuery(document).ready(function() {
         KTBootstrapTimepicker.init();
    });
</script>
@endpush