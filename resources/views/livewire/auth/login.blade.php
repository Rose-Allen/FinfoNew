<div>
    <!--begin::Form-->
    <form class="form w-100" method="POST" wire:submit.prevent="login">
    <!--begin::Body-->
    <div class="card-body">
        <!--begin::Heading-->
        <div class="text-start mb-10">
            <!--begin::Title-->
            <h1 class="text-dark mb-3 fs-3x" data-kt-translate="sign-in-title">Sign In</h1>
            <!--end::Title-->
            <!--begin::Text-->
            <div class="text-gray-400 fw-semibold fs-6" data-kt-translate="general-desc">Get mini CRM By Timur production</div>
            <!--end::Link-->
        </div>
        <!--begin::Heading-->
        <!--begin::Input group=-->
        <div class="fv-row mb-8">
            <!--begin::Email-->
            <input id="bin"
                   type="text"
                   class="form-control form-control-solid @error('bin') is-invalid @enderror"
                   name="bin"
                   wire:model="bin"
                   value="{{ old('bin') }}"
                   placeholder="Bin"
                   autocomplete="bin" required>
            @error('bin')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <!--end::Email-->
        </div>
        <!--end::Input group=-->
        <div class="fv-row mb-7">
            <!--begin::Password-->
            <input id="password"
                   placeholder="Password"
                   type="password"
                   class="form-control form-control-solid @error('password') is-invalid @enderror"
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
        <!--end::Input group=-->
        <!--begin::Wrapper-->
        <div class="d-flex flex-stack flex-wrap gap-3 fs-base fw-semibold mb-10">
            <div></div>
            <!--begin::Link-->
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="remember"  wire:model="remember" id="remember" {{ old('form.remember') ? 'checked' : '' }}>

                <label class="form-check-label" for="remember">
                    {{ __('Remember Me') }}
                </label>
            </div>
            <!--end::Link-->
        </div>
        <!--end::Wrapper-->
        <!--begin::Actions-->
        <div class="d-flex flex-stack">
            <!--begin::Submit-->
            <button id="kt_sign_in_submit" class="btn btn-primary me-2 flex-shrink-0" type="submit">
                <!--begin::Indicator label-->
                <span class="indicator-label" data-kt-translate="sign-in-submit">Sign In</span>
                <!--end::Indicator label-->
                <!--begin::Indicator progress-->
                <span class="indicator-progress">
                    <span data-kt-translate="general-progress">Please wait...</span>
                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                </span>
                <!--end::Indicator progress-->
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
{{--    <script>--}}
{{--        document.addEventListener('livewire:load', function (){--}}
{{--            $('#bin').inputmask('999999999999');--}}

{{--            $('#bin').on('keyup', function (){--}}
{{--                let input = $(this).val();--}}
{{--                input = input.replace('_', '');--}}
{{--                if(String(input).length == 12){--}}
{{--                    Livewire.emit('getData', input);--}}
{{--                }--}}
{{--            })--}}
{{--        });--}}
{{--    </script>--}}
@endpush
