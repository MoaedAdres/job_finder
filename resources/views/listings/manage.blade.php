<x-layout>
    <div class="mx-4">
        <x-card class="p-10">
            <header>
                <h1 class="text-3xl text-center font-bold my-6 uppercase">
                    Manage Gigs
                </h1>
            </header>
            <table class="w-full table-auto rounded-sm">
                <tbody>
                    @unless ($listings->isEmpty())

                        @foreach ($listings as $listing)
                            <tr class="border-gray-300">
                                <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                                    <a href="/listings/{{ $listing->id }}">
                                        {{ $listing->title }}
                                    </a>
                                </td>
                                <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                                    <a href="/listings/{{ $listing->id }}/edit" class="text-blue-400 px-6 py-2 rounded-xl"><i
                                            class="fa-solid fa-pen-to-square"></i>
                                        Edit</a>
                                </td>
                                <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                                    <form method="POST" action="/listings/{{ $listing->id }}">
                                        @csrf
                                        @method('DELETE')
                                        <button class="text-red-600">
                                            <i class="fa-solid fa-trash-can"></i>
                                            Delete
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr class="border-gray-300">
                            <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                                <p class="text-center"> No Listing Found </p>
                            </td>
                        </tr>
                    @endunless

                </tbody>
            </table>
        </x-card>

        <div class="flex flex-row justify-center mt-2"> <a href="/listings/create"
                class=" bg-[#ca3535] rounded-xl text-white text-2xl hover:bg-[#ce1616] border-[2px] border-[#ca3535] flex items-center justify-center gap-2"><i class="fa-solid fa-add"></i>
                Post a Job </a> </div>
    </div>
</x-layout>