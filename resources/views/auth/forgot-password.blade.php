<x-guest-layout>
    <div dir="rtl">
    <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
        {{ __('رمز عبور خود را فراموش کرده‌اید؟ مشکلی نیست. فقط آدرس ایمیل خود را به ما اطلاع دهید تا یک لینک بازنشانی رمز عبور برای شما ایمیل کنیم که به شما امکان می‌دهد رمز عبور جدیدی انتخاب کنید.') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('ایمیل')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>
</div>
        <div class="flex items-center justify-end mt-4">
            <x-primary-button>
                {{ __('لینک بازنشانی رمز عبور ایمیل') }}
            </x-primary-button>
        </div>
    </form>

</x-guest-layout>
