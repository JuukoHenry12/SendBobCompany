<table class="table table-dark col-xl-12">
    <thead>
        <th>Name</th>
        <th>Produce Sold</th>
        <th>Location</th>
         <th>phone</th>
        <th>Delete</th>
         <th>Edit</th>
    </thead>
    <tbody>
        @foreach ($vendors as $vendor)

            <tr>
                <td>{{$vendor->name}}</td>
                <td>{{$vendor->product_sold}}</td>
                <td>{{$vendor->location}}</td>
                <td>{{$vendor->phone}}</td>
                <td>
                   {!! Form::open(['action'=>['VendorController@destroy',$vendor -> id],'method' =>'POST']) !!}
                       {!! Form::hidden('_method', 'DELETE') !!}
                       {!! Form::submit('Delete',['class'=>'btn btn-primary']) !!}
                </td>
                <td> {!! Form::close() !!}
                   <button class="btn btn-primary"><a href="{{route('vendors.edit',$vendor->id)}}">Edit</a></button></td>
            </tr>

        @endforeach
    </tbody>

</table>
