
                    <div class="form-group">
                        <input placeholder="Enter Name of Vendor" type="text" name='name' class="form-control   @error('name') is-invalid @enderror" value="{{ $vendor->exists()?$vendor->name:old('name') }}">
                        @error('name')
                            <span class="invalid-feedback text-warning" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input placeholder="Enter Location" type="text" name='location' class="form-control   @error('location') is-invalid @enderror" value="{{ $vendor->exists()?$vendor->location:old('location') }}">
                        @error('location')
                            <span class="invalid-feedback text-warning" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                     <div class="form-group">
                        <input type="text" placeholder="Enter the product sold"
                         name='product_sold'
                         class="form-control  @error('phone') is-invalid @enderror" value="{{ $vendor->exists()?$vendor->phone:old('phone') }}"
                        >
                    </div>


                    <div class="form-group">
                        <input placeholder="Enter Phone Number" type="text" name='phone' class="form-control   @error('phone') is-invalid @enderror" value="{{ $vendor->exists()?$vendor->phone:old('phone') }}">
                        @error('phone')
                            <span class="invalid-feedback text-warning" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input type="submit" value="{{$vendor->exists()?'Save Vendor':'Register Vendor'}}" class="btn btn-primary btn-xl d-block col-xl-12">
                    </div>
