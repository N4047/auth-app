@props(['name', 'placeholder','thumbnail'])

<x-form.field>
    <div class="flex flex-col items-start ">
        <label for="{{ $name }}" class="cursor-pointer relative">
            <p
                class="text-center w-[50%] h-14  top-0  absolute  left-[50%] -translate-x-[50%] -translate-y-[80%]  rounded w-full flex items-center justify-center h-10 bg-blue-600 hover:bg-[#4899d8] text-white">
                {{__('utils.add_image')}}
            </p>
            <div class="mt-4 ">

                <img id="{{ $name }}-preview" src="{{$thumbnail}}" alt="Selected Image"
                    class="translate-y-4 rounded w-[300px] h-[600px] md:w-[600px] md-h-[600px]">
            </div>
            <input type="file" name="{{ $name }}" id="{{ $name }}" class="sr-only" accept=".jpg, .jpeg, .png"
                onchange="previewImage(this);">
        </label>
    </div>
</x-form.field>

<script>
    function previewImage(input) {
        const preview = document.getElementById('{{ $name }}-preview');
        if (input.files && input.files[0]) {
            const reader = new FileReader();
            reader.onload = function(e) {
                preview.src = e.target.result;
                preview.classList.remove('hidden');
            };
            reader.readAsDataURL(input.files[0]);
        }
    }
</script>