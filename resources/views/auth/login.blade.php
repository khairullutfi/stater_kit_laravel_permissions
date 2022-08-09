@extends('layouts.login')

@section('content')


<!--begin::Main-->
<div class="d-flex flex-column flex-root">
    <!--begin::Login-->
    <div class="login login-1 login-signin-on d-flex flex-column flex-lg-row flex-column-fluid bg-white" id="kt_login">
        <!--begin::Aside-->
        <div class="login-aside d-flex flex-column flex-row-auto" style="background-color: #F2C98A;">
            <!--begin::Aside Top-->
            <div class="d-flex flex-column-auto flex-column pt-lg-40 pt-15">
                <!--begin::Aside header-->
                <a href="#" class="text-center mb-10">
                    <img src="/images/logo-pupuk.png" class="max-h-70px" alt="" />
                </a>
                <!--end::Aside header-->
                <!--begin::Aside title-->
                <h3 class="font-weight-bolder text-center font-size-h4 font-size-h1-lg" style="color: #986923;">
                    Manajement Rapat
                    <br />PT Pupuk Indonesia
                </h3>
                <!--end::Aside title-->
            </div>
            <!--end::Aside Top-->
            <!--begin::Aside Bottom-->
            <div class="aside-img d-flex flex-row-fluid bgi-no-repeat bgi-position-y-bottom bgi-position-x-center"
                style="background-image: url(/assets/media/svg/illustrations/login-visual-1.svg)"></div>
            <!--end::Aside Bottom-->
        </div>
        <!--begin::Aside-->
        <!--begin::Content-->
        <div
            class="login-content flex-row-fluid d-flex flex-column justify-content-center position-relative overflow-hidden p-7 mx-auto">
            <!--begin::Content body-->
            <div class="d-flex flex-column-fluid flex-center">
                <!--begin::Signin-->
                <div class="login-form login-signin">
                    <!--begin::Form-->
                    <form class="form" method="POST" action="{{ route('login') }}">
                        @csrf
                        <!--begin::Title-->
                        <div class="pb-13 pt-lg-0 pt-5">
                            <h3 class="font-weight-bolder text-dark font-size-h4 font-size-h1-lg">Selamat datang
                                diHalaman Login</h3>
                            <span class="text-muted font-weight-bold font-size-h4">Baru Disini?
                                <a href="javascript:;" id="kt_login_signup"
                                    class="text-primary font-weight-bolder">Login Akun</a></span>
                        </div>
                        <!--begin::Title-->
                        <!--begin::Form group-->
                        <div class="form-group">
                            <label class="font-size-h6 font-weight-bolder text-dark">Employ Nomer</label>
                            <input
                                class="form-control form-control-solid h-auto py-6 px-6 rounded-lg @error('email') is-invalid @enderror"
                                type="text" value="{{ old('email') }}" placeholder="Employ Number" id="email"
                                name="email" required />
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <!--end::Form group-->
                        <!--begin::Form group-->
                        <div class="form-group">
                            <div class="d-flex justify-content-between mt-n5">
                                <label class="font-size-h6 font-weight-bolder text-dark pt-5">Password</label>
                                @if (Route::has('password.request'))
                                <a href="javascript:;"
                                    class="text-primary font-size-h6 font-weight-bolder text-hover-primary pt-5"
                                    id="kt_login_forgot">Forgot Password ?</a>
                                @endif
                            </div>
                            <input class="form-control form-control-solid h-auto py-6 px-6 rounded-lg" id="password"
                                type="password" placeholder="Password" name="password" required
                                autocomplete="current-password" />
                        </div>
                        <!--end::Form group-->
                        <!--begin::Action-->
                        <div class="form-group">
                            <button type="submit" class="btn btn-block btn-primary rounded submit p-3 px-5">Ayo
                                Login</button>
                        </div>
                </div>
                <!--end::Action-->
                </form>
                <!--end::Form-->
            </div>
            <!--end::Signin-->
            <!--begin::Signup-->
            <!--end::Forgot-->
        </div>
        <!--end::Content body-->

        <!--end::Content footer-->
    </div>
    <!--end::Content-->
</div>
<!--end::Login-->
@endsection

@push('addon-script')
<script>
    // secction alert dengan swall alert 2
    const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 4000
    });
    @if (session('message'))
    Toast.fire({
        icon: 'error',
        title: '{{session('message')}}'
    });
    @endif
</script>
@endpush