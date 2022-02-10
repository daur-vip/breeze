<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Запись к врачу') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">


                    <table class="border-collapse w-full border border-slate-400 dark:border-slate-500 bg-white dark:bg-slate-800 text-sm shadow-sm">
                        <thead>
                          <tr>
                            <th class="w-1/2 border border-slate-300 dark:border-slate-600 font-semibold p-4 text-slate-900 dark:text-slate-200 text-left">State</th>
                            <th class="w-1/2 border border-slate-300 dark:border-slate-600 font-semibold p-4 text-slate-900 dark:text-slate-200 text-left">City</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td class="border border-slate-300 dark:border-slate-700 p-4 text-slate-500 dark:text-slate-400">Indiana</td>
                            <td class="border border-slate-300 dark:border-slate-700 p-4 text-slate-500 dark:text-slate-400">Indianapolis</td>
                          </tr>
                          <tr>
                            <td class="border border-slate-300 dark:border-slate-700 p-4 text-slate-500 dark:text-slate-400">Ohio</td>
                            <td class="border border-slate-300 dark:border-slate-700 p-4 text-slate-500 dark:text-slate-400">Columbus</td>
                          </tr>
                          <tr>
                            <td class="border border-slate-300 dark:border-slate-700 p-4 text-slate-500 dark:text-slate-400">Michigan</td>
                            <td class="border border-slate-300 dark:border-slate-700 p-4 text-slate-500 dark:text-slate-400">Detroit</td>
                          </tr>
                        </tbody>
                      </table>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
