<form wire:submit.prevent="addToCart" class="d-flex align-items-center mt-4">
    <input wire:model="quantity" type="number" class="input-text me-4">
    <button style="z-index: 0" type="submit" class="button">Add to Cart</button>
</form>