<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Posts') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class=" p-6 bg-white overflow-hidden shadow-xl sm:rounded-lg">

              <table>
                  <thead>
                      <tr>
                          <th>Title</th>
                          <th>Action</th>
                      </tr>
                  </thead>
                  <tbody>
                    @foreach($posts as $post)
                        <tr>
                            <td>{{$post->title}}</td>
                            @canTeamPermission('delete')
                            <td><a href="">Deletar</a></td>
                            @endcanTeamPermission
                        </tr>
                    @endforeach
                  </tbody>
              </table>

            </div>
        </div>
    </div>
</x-app-layout>
