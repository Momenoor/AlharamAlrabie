@php
    use Illuminate\Support\Arr;
        $predefinedVariants = old('predefinedVariants',optional($product->category)->predefinedVariants??[])->toArray();
        $variants = old('variants',$product->variants)->toArray();
        foreach ($predefinedVariants as $key => &$var) {
            if (array_key_exists($key, $variants)) {
                // Set the price value from variants
                $var['price'] = Arr::pull($variants[$key], 'price');
            }
        }
@endphp
<div class="mb-10 fv-row">
    <!--begin::Label-->
    <label class="form-label mb-7">Category predefined variants for new products.</label>
    <div id="predefinedVariants">
        <div class="form-group" data-repeater-list="predefinedVariants">
            <div class="d-flex flex-column gap-3">
                <div id="repeated_init_empty"
                     data-repeated-init-empty='false'>
                    @forelse($predefinedVariants as $key => $predefinedVariant)
                        <div class="d-flex flex-wrap align-items-center text-gray-600 gap-5 mb-7" data-repeater-item>
                            <label>
                                <input type="text" name="name" placeholder="Name" class="form-control w-200 w-md-300px"
                                       readonly value="{{$predefinedVariant['name']}}">
                            </label>
                            <label>
                                <div
                                    class="input-group extra-price w-100 w-md-200px">
                                    <input type="text" name="price" placeholder="Price: 0.00" class="form-control"
                                           value="{{$predefinedVariant['price']}}">
                                    <span class="input-group-text">AED</span>
                                </div>
                            </label>
                            <button
                                class="border border-secondary btn btn-icon btn-flex btn-light-danger"
                                data-repeater-delete type="button">
                                <i class="ki-duotone ki-trash fs-5">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                    <span class="path4"></span>
                                    <span class="path5"></span>
                                </i>
                            </button>
                        </div>
                    @empty
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</div>
