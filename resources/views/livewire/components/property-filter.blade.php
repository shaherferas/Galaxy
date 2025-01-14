<!-- resources/views/components/property-filter-form.blade.php -->

<section class="ftco-section ftco-no-pb" >
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="search-wrap-1">
                    <form  method="GET" action="{{ route('properties') }}"  id="propertyForm"
                           class="search-property-1">
                        <div class="row">
                            <div class="row">
                                <div class="col-lg align-items-end">
                                    <div class="form-group">
                                        <div class="form-field">
                                            <div class="select-wrap">
                                                <div class="icon">
                                                    <span class="ion-ios-arrow-down"></span>
                                                </div>
                                                <select name="actionType" id="actionType" class="form-control" style="width: fit-content">
                                                    <option value="">Action Type</option>
                                                    <option value="buy" {{ request('buy') == 'buy' ? 'selected' : '' }}>buy</option>
                                                    <option value="sell" {{ request('sell') == 'sell' ? 'selected' : '' }}>sell</option>
                                                    <option value="rent" {{ request('rent') == 'New rent' ? 'selected' : '' }}>rent</option>

                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg align-items-end" >
                                    <div class="form-group">
                                        <div class="form-field">
                                            <div class="select-wrap">
                                                <div class="icon">
                                                    <span class="ion-ios-arrow-down"></span>
                                                </div>
                                                <select class="form-control" wire:key="property-filter"
                                                        name="estateSelections"  wire:change="onEstateSelectionChange($event.target.value)" wire:model="estateSelections" style="width: fit-content">
                                                    <option value="">Estate Selections</option>
                                                    @foreach($estateSelections as $type)
                                                        <option wire:key="estateSelections-{{ $type->id }}" value="{{ $type->id }}">{{ $type->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-lg align-items-end">
                                    <div class="form-group">
                                        <div class="form-field">
                                            <div class="select-wrap">
                                                <div class="icon">
                                                    <span class="ion-ios-arrow-down"></span>
                                                </div>
                                                <select name="propertyType" id="propertyType" wire:model="propertyTypes"  class="form-control" style="width: fit-content">
                                                    <option value="">Property Types</option>
                                                    @foreach($propertyTypes as $sub)
                                                        <option value="{{ $sub->id }}">{{ $sub->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg align-items-end">
                                    <div class="form-group">

                                        <div class="form-field">
                                            <div class="select-wrap">
                                                <div class="icon">
                                                    <span class="ion-ios-arrow-down"></span>
                                                </div>
                                                <select name="country" id="country" class="form-control" style="width: fit-content">
                                                    <option value="">Country</option>
                                                    @foreach($countries as $country)
                                                        <option value="{{ $country->id }}" {{ request('country') == $country->id ? 'selected' : '' }}>
                                                            {{ $country->name }}
                                                        </option>

                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            <div class="col-lg align-items-end">
                                <div class="form-group">
                                    <div class="form-field">
                                        <div class="select-wrap">
                                            <div class="icon">
                                                <span class="ion-ios-arrow-down"></span>
                                            </div>
                                            <select name="price_range" id="price_range" class="form-control"   wire:model="price_range">
                                                <option value="" {{ request('price_range') === null ? 'selected' : '' }}>Min Price</option>
                                                <option value="0-1" {{ request('price_range') == "0-1" ? 'selected' : '' }}>0 – 1M</option>
                                                <option value="1-5" {{ request('price_range') == "1-5" ? 'selected' : '' }}>1M – 5M</option>
                                                <option value="5-10" {{ request('price_range') == "5-10" ? 'selected' : '' }}>5M – 10M</option>
                                                <option value="10-20" {{ request('price_range') == "10-20" ? 'selected' : '' }}>10M – 20M</option>
                                                <option value="20-50" {{ request('price_range') == "20-50" ? 'selected' : '' }}>20M – 50M</option>
                                                <option value="50+" {{ request('price_range') == "50+" ? 'selected' : '' }}>50M+</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-lg align-self-end">
                                <div class="form-group">
                                    <div class="form-field position-relative  ">
                                        <input

                                            type="submit"
                                            value="Search Property"
                                            class="btn btn-outline-dark w-100 b-1 px-4" style="padding-block: 10px"
                                        />
                                    </div>

                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
