<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
          {{ __('Post') }}
      </h2>
  </x-slot>
  
  <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

          <form action="{{ route('post.store') }}" method="post" enctype="multipart/form-data" class="max-w-sm mx-auto">
              @csrf
              <div class="mb-5">
                  <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                      Judul
                  </label>
                  <input type="text" id="title" name="title"
                      class="shadow-xs bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-xs-light"
                      required />
              </div>

              <div class="mb-5">
                  <label for="body" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                      Artikel
                  </label>
                  <textarea id="body" name="body" rows="4"
                      class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                      placeholder="Let your mind imagine"></textarea>
              </div>

              <div class="mb-5">
                  <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="image">
                      Upload Thumbnail
                  </label>
                  <input type="file" id="image" name="image" accept="image/*"
                      class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400">
              </div>

              <button type="submit"
                  class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                  Post
              </button>
          </form>

      </div>
  </div>
</x-app-layout>
