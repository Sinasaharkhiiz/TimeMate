<x-guest-layout>
    <div dir="rtl">
    <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
        {{ __('این یک بخش امن از برنامه است. لطفاً قبل از ادامه، رمز عبور خود را تأیید کنید.') }}
    </div>

    <form method="POST" action="{{ route('password.confirm') }}">
        @csrf

        <!-- Password -->
        <div>
            <x-input-label for="password" :value="__('رمز عبور')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>
        </div>
        <div class="flex justify-end mt-4">
            <x-primary-button>
                {{ __('تایید') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
