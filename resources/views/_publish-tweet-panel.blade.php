<div class="border border-yellow-400 rounded-lg px-8 py-6 mb-8">
    <form method="POST" action="/tweets">
                    @csrf

                    <textarea
                        name="body"
                        class="w-full"
                        placeholder="Wazzup?"

                    ></textarea>

        <hr class="my-4">

        <footer class="flex justify-between">
            <img
                src="{{auth()->user()->avatar}}"
                alt="your avatar"
                class="rounded-full mr-2"
            >


            <button
                type="submit"
                class="bg-red-500 rounded-lg shadow py-2 px-2 text-white"
            >
                TweetG
            </button>
        </footer>
    </form>

    @error('body')
        <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
    @enderror
</div>
