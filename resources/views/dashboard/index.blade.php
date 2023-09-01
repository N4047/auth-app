<x-dashboard-layout>
    <title>{{__('utils.user_profile')}}</title>
    <div class="flex flex-col items-center justify-center" x-data="{ show: false }">
        <p class="md:text-xl my-8 text-center">{{__('dashboard.welcome')}} <span
                class="italic font-bold">{{$user->username}}</span></p>
        <form method="POST" action="{{route('user.update')}}" class="mt-5" enctype="multipart/form-data">
            @csrf
            <div >
                <x-form.input-file name='thumbnail' thumbnail="{{$user->thumbnail}}" type='file'
                    placeholder="{{__('utils.image')}}" />
            </div>
            <div  class="md:w-full mt-16">
                <x-form.input name='username' placeholder="{{__('placeholder.new_username')}}" />
            </div>
            <x-form.button>{{__('utils.submit')}}</x-form.button>
        </form>
    </div>

</x-dashboard-layout>