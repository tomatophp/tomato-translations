<x-splade-modal class="font-main">
    <h1 class="text-2xl font-bold mb-4">
        {{trans('tomato-admin::global.crud.edit')}} {{trans('tomato-translations::global.single')}} #{{$model['id']}}
    </h1>


    <x-splade-form class="flex flex-col space-y-4 mb-4" action="{{route('admin.translations.update', $model['id'])}}" method="post" :default="$model">

        <x-splade-textarea class="w-full" name="key" type="text"  placeholder="{{trans('tomato-translations::global.key')}}" label="{{trans('tomato-translations::global.key')}}" :disabled="true"/>
        @php
            $jsonFolder = File::files(lang_path());
            $counter = 0;
            $langRows = [];
        @endphp
        @foreach($jsonFolder as $getLangName)
            @php $langName = str_replace('.json', '', $getLangName->getFilename()); @endphp

            <x-splade-textarea class="w-full" name="{{$langName}}" type="text"  placeholder="{{trans('tomato-translations::global.'.$langName)}}" label="{{trans('tomato-translations::global.'.$langName)}}" />
        @endforeach
        <x-splade-submit label="{{trans('tomato-admin::global.crud.update')}} {{trans('tomato-translations::global.single')}}" :spinner="true" />
    </x-splade-form>
</x-splade-modal>
