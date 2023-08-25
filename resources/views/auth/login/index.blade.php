<x-auth-layout>
    <x-auth-form-wrapper title="{{__('login.title')}}" description="{{__('login.description')}}">
        <form method="POST" action="{{route('login')}}" >
            @csrf
            <x-form.input name='username' placeholder="{{__('placeholder.emailorusername')}}" />
            <x-form.input name='password' type='password' placeholder="{{__('placeholder.password')}}" />
            <div class="flex items-center justify-between">
                <x-checkbox label="{{__('login.remember')}}" />
                <div class="inline-flex items-center mt-6 ">
                    <a href="
                    {{route('password.resetrequest')}}
                    "

                        class="text-blue-600 font-medium text-sm">{{__('login.forgot_password')}}</a>
                </div>
            </div>
            <div class="w-full relative">
                <x-form.button>
                    {{__('utils.log_in')}}
                </x-form.button>
                <a href="{{$url}}" class="absolute  left-[50%] -translate-x-[50%] translate-y-2 border border-2 border-gray-400 hover:bg-blue-600 rounded w-full flex items-center justify-center h-10 bg-[#4899d8] text-white">{{__('utils.google')}}</a>
            </div>
        </form>
        <div class="translate-y-8">
            <x-form-footer-wrapper  text="{{__('login.no_acc')}}">
                <a href="{{route('register.index')}}" class="font-bold pl-1">{{__('login.sign_up')}}</a>
            </x-form-footer-wrapper>
        </div>

    </x-auth-form-wrapper>
    <x-auth-lang-change-wrapper>
        <x-lang-change />

    </x-auth-lang-change-wrapper>
</x-auth-layout>