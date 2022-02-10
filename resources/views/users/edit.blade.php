<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Изменение данных пользователя') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <x-validation-errors />
                    <x-success-message />

                    {{ print_r($user) }}
                    <form method="POST" action="{{ route('users.update', $user) }}" autocomplete="off">
                        @csrf
                        @method('PUT')
                        <div class="grid grid-cols-2 gap-6">
                            <div class="grid grid-rows-4 gap-2">
                                <div>
                                    <x-label for="name" :value="__('ФИО')" />
                                    <x-input id="name" class="block mt-1 w-full" type="text" name="name" autofocus value="{{ $user->name }}"/>
                                </div>
                                <div>
                                    <x-label for="email" :value="__('Email')" />
                                    <x-input id="email" class="block mt-1 w-full" type="email" name="email" autofocus value="{{ $user->email }}" />
                                </div>
                                <div>
                                    <x-label for="birthday" :value="__('Дата рождения')" />
                                    <x-input id="birthday" class="block mt-1 w-full" type="date" name="birthday"
                                        autofocus value="{{ $user->birthday }}" />
                                </div>
                                <div>
                                    <div>
                                        <x-label for="phone1" :value="__('Телефон №1')" />
                                        <x-input id="phone1" class="block mt-1 w-full" type="text" name="phone1"
                                            autofocus value="{{ $user->phone1 }}"/>
                                    </div>
                                    <div>
                                        <x-input id="is_whatsapp1" type="checkbox" /> 
                                        <label for="is_whatsapp1">
                                            <span class="font-medium text-sm text-gray-700">На этом номере имеется WhatsApp</span>
                                        </label>
                                    </div>
                                </div>

                            </div>
                            <div class="grid grid-rows-4 gap-2">
                                <div>
                                    <x-label for="country" :value="__('Роль пользователя')" />
                                    <select id="country" name="country" autocomplete="country-name"
                                        class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                                        @foreach ($roles as $id => $role)

                                            <option @if ($id == $user->role)
                                                selected="selected"
                                        @endif
                                        value="{{ $id }}">{{ $role }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div>
                                    <x-label for="password" :value="__('Пароль')" />
                                    <x-input id="password" class="block mt-1 w-full" type="password"
                                        name="password" autocomplete="new-password" />
                                </div>
                                <div>
                                    <x-label for="iin" :value="__('ИИН')" />
                                    <x-input id="iin" class="block mt-1 w-full" type="text" name="iin" autofocus />
                                </div>
                                <div>
                                    <div>
                                        <x-label for="phone2" :value="__('Телефон №2')" />
                                        <x-input id="phone2" class="block mt-1 w-full" type="text" name="phone1"
                                            autofocus />
                                    </div>
                                    <div>
                                        <x-input id="is_whatsapp2" type="checkbox" />
                                        <label for="is_whatsapp2">
                                            <span class="font-medium text-sm text-gray-700">На этом номере имеется
                                                WhatsApp</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center justify-end mt-4">
                            <x-button class="ml-3">
                                {{ __('Update') }}
                            </x-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
