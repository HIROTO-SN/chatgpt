<div class="relative" x-data="{
    text: '',
    temporaryMessage: '',
    sending: false
}">
    <div>
        <ul class="mt-16 space-y-5 min-h-[65vh]">
            <li class="flex justify-start">
                <span class="flex-shrink-0 mr-2 inline-flex items-center justify-center">
                    <img src="{{ auth()->user()->profile_photo_url }}" class="w-8 h-8 rounded-full"
                        alt="{{ auth()->user()->name }}" />
                </span>
                <div class="message bg-gray-300 text-black max-w-lg rounded-lg">
                  Hello World
                </div>
                <span
                    class="flex-shrink-0 ml-2 inline-flex items-center justify-center size-[38px] rounded-full bg-gray-600">
                    <span class="text-sm font-medium text-white leading-none">AI</span>
                </span>
            </li>
        </ul>
    </div>
</div>
