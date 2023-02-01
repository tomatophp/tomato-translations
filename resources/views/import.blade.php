<x-splade-modal class="font-main">
    <h1 class="text-2xl font-bold mb-4">
        {{trans('tomato-translations::global.import')}}
    </h1>


    <x-splade-form class="flex flex-col space-y-4 mb-4" action="{{route('admin.translations.import')}}" method="post">

        <x-splade-file class="w-full" name="excel"  placeholder="{{trans('tomato-translations::global.excel')}}"  filepond/>

        <x-splade-submit label="{{trans('tomato-translations::global.import')}}" :spinner="true" />
    </x-splade-form>
</x-splade-modal>
