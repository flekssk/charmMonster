<span
        class="controlButton cartButton mobileCartButton"
        data-products="{{ json_encode(\App\Extensions\Cart\CartFacade::getProducts()->productsToOrder()) }}"
>
    <i class="fa fa-shopping-cart"></i>
</span>

<style>
    .headerContainer .headerControlPanel .control.cartControlBlock .cartButton:before {
        content: '{{ \App\Extensions\Cart\CartFacade::getProducts()->count() }}';
    }
</style>