<div x-data="{ showToast: false, message: '', variant: 'success' }"
    x-on:toast.window="console.log($event.detail); showToast = true; message = $event.detail.title; variant = $event.detail.variant; setTimeout(() => showToast = false, 3000)">
    <div x-show="showToast" x-transition class="fixed bottom-4 right-4 p-4 rounded-lg shadow-lg"
        :class="{
            'bg-green-500 text-white': variant === 'success',
            'bg-red-500 text-white': variant === 'error'
        }">
        <span x-text="message"></span>
    </div>
</div>
