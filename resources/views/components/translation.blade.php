<x-splade-data default="{ {{$name.'_tomato_translations_en'}}: form.{{$name}}?.en, {{$name.'_tomato_translations_ar'}}: form.{{$name}}?.fr, {{$name.'_tomato_translations_fr'}}: form.{{$name}}?.fr}">
    @if($type === 'text')
    <label class="block">
        <span class="block text-sm font-medium leading-6 text-gray-950 dark:text-white">{{$label}}</span>
        <div class="flex rounded-lg border border-gray-300 dark:border-gray-700 shadow-sm dark:text-white">
            <input class="{{ collect([
    "fi-input block w-full border-none bg-transparent py-1.5 text-base text-gray-950 outline-none transition",
    "duration-75 placeholder:text-gray-400 disabled:text-gray-500 disabled:[-webkit-text-fill-color:theme(colors.gray.500)]",
    "disabled:placeholder:[-webkit-text-fill-color:theme(colors.gray.400)] dark:text-white dark:placeholder:text-gray-500 dark:disabled:text-gray-400",
    "dark:disabled:[-webkit-text-fill-color:theme(colors.gray.400)] dark:disabled:placeholder:[-webkit-text-fill-color:theme(colors.gray.500)] sm:text-sm",
    "sm:leading-6 ps-3 pe-3 focus:ring-2 ring-primary-500 focus:ring-2 focus:ring-primary-500 rounded-lg"
])->implode(' ') }}" v-model="data.{{$name.'_tomato_translations_ar'}}" @input="form.{{$name.'_tomato_translations_ar'}} = data.{{$name.'_tomato_translations_ar'}}"  type="text" placeholder="{{$label . ' '. __('AR')}}" />
        </div>
        <div class="flex rounded-lg mt-4 border border-gray-300 dark:border-gray-700 shadow-sm dark:text-white">
            <input class="{{ collect([
    "fi-input block w-full border-none bg-transparent py-1.5 text-base text-gray-950 outline-none transition",
    "duration-75 placeholder:text-gray-400 disabled:text-gray-500 disabled:[-webkit-text-fill-color:theme(colors.gray.500)]",
    "disabled:placeholder:[-webkit-text-fill-color:theme(colors.gray.400)] dark:text-white dark:placeholder:text-gray-500 dark:disabled:text-gray-400",
    "dark:disabled:[-webkit-text-fill-color:theme(colors.gray.400)] dark:disabled:placeholder:[-webkit-text-fill-color:theme(colors.gray.500)] sm:text-sm",
    "sm:leading-6 ps-3 pe-3 focus:ring-2 ring-primary-500 focus:ring-2 focus:ring-primary-500 rounded-lg"
])->implode(' ') }}" v-model="data.{{$name.'_tomato_translations_en'}}" @input="form.{{$name.'_tomato_translations_en'}} = data.{{$name.'_tomato_translations_en'}}" type="text" placeholder="{{$label . ' '. __('EN')}}" />
        </div>
        <div class="flex rounded-lg mt-4 border border-gray-300 dark:border-gray-700 shadow-sm dark:text-white">
            <input class="{{ collect([
    "fi-input block w-full border-none bg-transparent py-1.5 text-base text-gray-950 outline-none transition",
    "duration-75 placeholder:text-gray-400 disabled:text-gray-500 disabled:[-webkit-text-fill-color:theme(colors.gray.500)]",
    "disabled:placeholder:[-webkit-text-fill-color:theme(colors.gray.400)] dark:text-white dark:placeholder:text-gray-500 dark:disabled:text-gray-400",
    "dark:disabled:[-webkit-text-fill-color:theme(colors.gray.400)] dark:disabled:placeholder:[-webkit-text-fill-color:theme(colors.gray.500)] sm:text-sm",
    "sm:leading-6 ps-3 pe-3 focus:ring-2 ring-primary-500 focus:ring-2 focus:ring-primary-500 rounded-lg"
])->implode(' ') }}" v-model="data.{{$name.'_tomato_translations_fr'}}" @input="form.{{$name.'_tomato_translations_fr'}} = data.{{$name.'_tomato_translations_fr'}}" type="text" placeholder="{{$label . ' '. __('FR')}}" />
        </div>
    </label>
    @elseif($type === 'textarea')
        <label class="block">
            <span class="block text-sm font-medium leading-6 text-gray-950 dark:text-white">{{$label}}</span>
            <div class="flex rounded-lg border border-gray-300 dark:border-gray-700 shadow-sm dark:text-white">
                <textarea class="{{ collect([
    "fi-input block w-full border-none bg-transparent py-1.5 text-base text-gray-950 outline-none transition",
    "duration-75 placeholder:text-gray-400 disabled:text-gray-500 disabled:[-webkit-text-fill-color:theme(colors.gray.500)]",
    "disabled:placeholder:[-webkit-text-fill-color:theme(colors.gray.400)] dark:text-white dark:placeholder:text-gray-500 dark:disabled:text-gray-400",
    "dark:disabled:[-webkit-text-fill-color:theme(colors.gray.400)] dark:disabled:placeholder:[-webkit-text-fill-color:theme(colors.gray.500)] sm:text-sm",
    "sm:leading-6 ps-3 pe-3 focus:ring-2 ring-primary-500 focus:ring-2 focus:ring-primary-500 rounded-lg"
])->implode(' ') }}" v-model="data.{{$name.'_tomato_translations_ar'}}" @input="form.{{$name.'_tomato_translations_ar'}} = data.{{$name.'_tomato_translations_ar'}}"  placeholder="{{$label . ' '. __('AR')}}" />
            </div>
            <div class="flex rounded-lg mt-4 border border-gray-300 dark:border-gray-700 shadow-sm dark:text-white">
                <textarea class="{{ collect([
    "fi-input block w-full border-none bg-transparent py-1.5 text-base text-gray-950 outline-none transition",
    "duration-75 placeholder:text-gray-400 disabled:text-gray-500 disabled:[-webkit-text-fill-color:theme(colors.gray.500)]",
    "disabled:placeholder:[-webkit-text-fill-color:theme(colors.gray.400)] dark:text-white dark:placeholder:text-gray-500 dark:disabled:text-gray-400",
    "dark:disabled:[-webkit-text-fill-color:theme(colors.gray.400)] dark:disabled:placeholder:[-webkit-text-fill-color:theme(colors.gray.500)] sm:text-sm",
    "sm:leading-6 ps-3 pe-3 focus:ring-2 ring-primary-500 focus:ring-2 focus:ring-primary-500 rounded-lg"
])->implode(' ') }}" v-model="data.{{$name.'_tomato_translations_en'}}" @input="form.{{$name.'_tomato_translations_en'}} = data.{{$name.'_tomato_translations_en'}}"  placeholder="{{$label . ' '. __('EN')}}" />
            </div>
            <div class="flex rounded-lg mt-4 border border-gray-300 dark:border-gray-700 shadow-sm dark:text-white">
                <textarea class="{{ collect([
    "fi-input block w-full border-none bg-transparent py-1.5 text-base text-gray-950 outline-none transition",
    "duration-75 placeholder:text-gray-400 disabled:text-gray-500 disabled:[-webkit-text-fill-color:theme(colors.gray.500)]",
    "disabled:placeholder:[-webkit-text-fill-color:theme(colors.gray.400)] dark:text-white dark:placeholder:text-gray-500 dark:disabled:text-gray-400",
    "dark:disabled:[-webkit-text-fill-color:theme(colors.gray.400)] dark:disabled:placeholder:[-webkit-text-fill-color:theme(colors.gray.500)] sm:text-sm",
    "sm:leading-6 ps-3 pe-3 focus:ring-2 ring-primary-500 focus:ring-2 focus:ring-primary-500 rounded-lg"
])->implode(' ') }}" v-model="data.{{$name.'_tomato_translations_fr'}}" @input="form.{{$name.'_tomato_translations_fr'}} = data.{{$name.'_tomato_translations_fr'}}"  placeholder="{{$label . ' '. __('FR')}}" />
            </div>
        </label>
   @endif
</x-splade-data>
