<div class="mb-10 fv-row">
    <!--begin::Label-->
    <label class="form-label mb-7">Category predefined variants for new products.</label>
    <div id="predefinedVariants">
        <div class="form-group">
            <div class="d-flex flex-column gap-3">
                @forelse($predefinedVariants as $key => $predefinedVariant)
                    <div class="d-flex flex-wrap align-items-center text-gray-600 gap-5 mb-7" data-repeater-item>
                        <label>
                            <input type="text" name="predefined_variants[{{$key}}][name]" placeholder="Name"
                                   class="form-control w-200 w-md-300px"
                                   readonly
                                   value="{{old('predefined_variants.'.$key.'.name',$predefinedVariant->name)}}">
                        </label>
                        <label>
                            <div
                                class="input-group extra-price w-100 w-md-200px">
                                <input type="text" name="predefined_variants[{{$key}}][price]"
                                       placeholder="Price: 0.00" class="form-control text-end"
                                       data-control="inputMask"
                                       value="{{old('predefined_variants.'.$key.'.price',$predefinedVariant->price)}}">
                                <span class="input-group-text">AED</span>
                            </div>
                        </label>
                    </div>
                @empty
                @endforelse
            </div>
        </div>
    </div>
</div>
@push('scripts')

@endpush
