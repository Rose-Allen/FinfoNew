{{--<div>--}}
{{--    <div class="row justify-content-center">--}}
{{--        <div class="col-md-8">--}}
{{--            <div class="card">--}}
{{--                <div class="card-body">--}}
{{--                    <form method="POST"  wire:submit.prevent="register"  >--}}

{{--                        <div class="row mb-3">--}}
{{--                            <label for="bin" class="col-md-4 col-form-label text-md-end">{{ __('Бин') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="bin" type="text" class="bin form-control @error('bin') is-invalid @enderror" name="bin" wire:model="bin" value="{{ old('bin') }}" required autocomplete="bin" autofocus>--}}

{{--                                @error('bin')--}}
{{--                                <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="row mb-3">--}}
{{--                            <label for="company_name" class="col-md-4 col-form-label text-md-end">{{ __('Название Компании') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="company_name" type="text" class="form-control @error('company_name') is-invalid @enderror" name="company_name" wire:model="company_name" value="{{ old('company_name') }}" required autocomplete="company_name" autofocus>--}}

{{--                                @error('company_name')--}}
{{--                                <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="row mb-3">--}}
{{--                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"  wire:model="email"  value="{{ old('email') }}" required autocomplete="email">--}}

{{--                                @error('email')--}}
{{--                                <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="row mb-3">--}}
{{--                            <label for="phone" class="col-md-4 col-form-label text-md-end">{{ __('Номер телефона') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="phone" type="text" class="phone form-control @error('phone') is-invalid @enderror" name="phone"  wire:model="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus>--}}

{{--                                @error('phone')--}}
{{--                                <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="row mb-3">--}}
{{--                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password"  wire:model="password"  required autocomplete="new-password">--}}

{{--                                @error('password')--}}
{{--                                <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="row mb-3">--}}
{{--                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" wire:model="password_confirmation" required autocomplete="new-password">--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="row mb-0">--}}
{{--                            <div class="col-md-6 offset-md-4">--}}
{{--                                <button type="submit" class="btn btn-primary">--}}
{{--                                    Регистрация--}}
{{--                                </button>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </form>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
<div>
    <!--begin::Form-->

    <form class="form w-100" method="POST" wire:submit.prevent="register">
        <!--begin::Body-->
        <div class="card-body">
            <!--begin::Heading-->
            <div class="text-start mb-10">
                <!--begin::Title-->
                <h1 class="text-dark mb-3 fs-3x" data-kt-translate="sign-in-title">Register</h1>
                <!--end::Title-->
                <!--begin::Text-->
                <div class="text-gray-400 fw-semibold fs-6" data-kt-translate="general-desc">Get mini CRM By Timur
                    production
                </div>
                <!--end::Link-->
            </div>
            <!--begin::Heading-->
            <!--begin::Input group=-->
            <div class="fv-row mb-8">
                <!--begin::Bin-->
                <input id="bin"
                       type="text"
                       class="form-control form-control-solid"
                       name="bin"
                       wire:model="bin"
                       value="{{ old('bin') }}"
                       placeholder="Bin"
                       autocomplete="bin" required>
                @error('bin')
                <span class="bin" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <!--end::Bin-->
            </div>
            <div class="fv-row mb-8">
                <!--begin::CompanyName-->
                <input id="company_name"
                       placeholder="Company name"
                       type="text"
                       class="form-control form-control-solid
                   @error('company_name') is-invalid @enderror"
                       name="company_name"
                       wire:model="company_name" value="{{ old('company_name') }}"
                       required autocomplete="company_name"
                       autofocus>
                @error('company_name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <!--begin::CompanyName-->
            </div>
            <div class="fv-row mb-8">
                <!--begin::Email-->
                <input id="email"
                       placeholder="Email"
                       type="email"
                       class="form-control form-control-solid @error('email') is-invalid @enderror"
                       name="email"
                       wire:model="email"
                       value="{{ old('email') }}"
                       required autocomplete="email">
                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <!--end::Email-->
            </div>
            <div class="fv-row mb-8">
                <!--begin::Phone-->
                <input id="phone"
                       placeholder="Phone"
                       type="text"
                       class="form-control form-control-solid @error('phone') is-invalid @enderror"
                       name="phone"
                       wire:model="phone"
                       value="{{ old('phone') }}"
                       required autocomplete="phone" autofocus>
                @error('phone')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <!--end::Phone-->
            </div>
            <div class="fv-row mb-8">
                <!--begin::Password-->
                <input id="password"
                       placeholder="Password"
                       type="password"
                       class="form-control form-control-solid"
                       name="password"
                       wire:model="password"
                       autocomplete="current-password" required>
                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <!--end::Password-->
            </div>
            <div class="fv-row mb-8">
                <!--begin::PasswordConfirm-->
                <input id="password-confirm"
                       placeholder="Password"
                       type="password"
                       class="form-control form-control-solid"
                       name="password_confirmation"
                       wire:model="password_confirmation"
                       required autocomplete="new-password">
                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <!--end::PasswordConfirm-->
            </div>
            <!--end::Input group=-->
            <!--begin::Actions-->
            <div class="d-flex flex-stack">
                <!--begin::Submit-->
                <button id="kt_sign_in_submit" class="btn btn-primary me-2 flex-shrink-0" type="submit">
                    <!--begin::Indicator label-->
                    <span class="indicator-label" data-kt-translate="sign-in-submit">Register</span>
                    <!--end::Indicator label-->
                </button>
                <!--end::Submit-->
            </div>
            <!--end::Actions-->
        </div>
        <!--begin::Body-->
    </form>
    <!--end::Form-->
</div>
@push('script')
    <script>
        document.addEventListener('livewire:load', function () {
            $('#bin').inputmask('999999999999');

            $('#bin').on('keyup', function () {
                let input = $(this).val();
                input = input.replace('_', '');
                if (String(input).length == 12) {
                    Livewire.emit('getData', input);
                }
            })
        });
    </script>
@endpush
