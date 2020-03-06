
                    <div class="form-group">
                        <input placeholder="Enter Name" type="text" name='name' class="form-control  @error('name') is-invalid @enderror" value="{{ $farmer->exists()?$farmer->name:old('name') }}">
                        @error('name')
                            <span class="invalid-feedback text-warning" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input placeholder="Enter Location" type="text" name='location' class="form-control   @error('location') is-invalid @enderror" value="{{ $farmer->exists()?$farmer->location:old('location') }}">
                        @error('location')
                            <span class="invalid-feedback text-warning" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input placeholder="Enter Farm Size" type="text" name='farm_size' class="form-control   @error('farm_size') is-invalid @enderror" value="{{ $farmer->exists()?$farmer->farm_size:old('farm_size') }}">
                        @error('farm_size')
                            <span class="invalid-feedback text-warning" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input placeholder="Enter Produce" type="text" name='produce' class="form-control   @error('produce') is-invalid @enderror" value="{{ $farmer->exists()?$farmer->produce:old('produce') }}">
                        @error('produce')
                            <span class="invalid-feedback text-warning" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input placeholder="Enter Phone Number" type="text" name='phone' class="form-control    @error('phone') is-invalid @enderror" value="{{ $farmer->exists()?$farmer->phone:old('phone') }}">
                        @error('phone')
                            <span class="invalid-feedback text-warning" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input type="submit" value="{{$farmer->exists()?'Save Farmer':'Register Farmer'}}" class="btn btn-primary btn-xl d-block col-xl-12">
                    </div>
