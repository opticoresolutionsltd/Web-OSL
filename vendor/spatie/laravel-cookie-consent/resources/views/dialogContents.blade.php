<div class="js-cookie-consent cookie-consent fixed bottom-0 left-0 inset-x-0 pb-6 z-50">
    <div class="max-w-2xl px-6">
        <div class="p-4 md:p-2 rounded-xl bg-white shadow-2xl">
            <div class="flex items-center justify-between flex-wrap">
                <div class="max-w-full flex-1 items-center md:w-0 md:inline">
                    <p class="md:ml-3 text-sm text-black cookie-consent__message">
                        {!! trans('cookie-consent::texts.message') !!}
                    </p>
                </div>
                <div class="mt-2 flex-shrink-0 w-full sm:mt-0 sm:w-auto">
                    <button class="js-cookie-consent-agree cookie-consent__agree cursor-pointer flex items-center justify-center px-3 py-2 rounded-md text-xs font-medium text-white bg-[#144A87] hover:bg-[#2C709B]">
                        {{ trans('cookie-consent::texts.agree') }}
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
