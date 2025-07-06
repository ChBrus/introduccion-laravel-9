<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-row justify-between items-center">
            <h2 class="font-semibold text-2xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Posts') }}
            </h2>
            <a
                class="bg-indigo-600 text-white text-sm px-2 py-2 rounded hover:bg-indigo-700 transition duration-200"
                href="{{ route('posts.create') }}"
            >
                Crear
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                
                    <table class="mb-4">
                        @foreach ($posts as $post)
                            <tr class="border-b border-gray-200 dark:border-gray-700">
                                <td class="px-6 py-4">{{ $post->title }}</td>
                                <td class="px-6 py-4">
                                    <a href="{{ route('posts.edit', $post) }}" class="dark:text-indigo-300 px-4 py-2">Editar</a>
                                </td>
                                <td class="px-6 py-4">
                                    <form action="{{ route('posts.destroy', $post) }}" method="post">
                                        @csrf
                                        @method('DELETE')

                                        <button
                                            type="submit"
                                            value="Eliminar"
                                            class="bg-gray-200 text-gray-800 rounded px-4 py-2"
                                            onclick="return confirm('¿Estás seguro de que deseas eliminar este post?')"
                                        >
                                            Eliminar
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                    {{ $posts->links() }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>