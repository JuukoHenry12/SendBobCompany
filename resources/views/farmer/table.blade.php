<table class="table table-dark col-xl-12">
    <thead>
        <th>Name</th>
        <th>Produce</th>
        <th>Location</th>
        <th>phone Numbers</th>
        <th>Farmer size</th>
        <th>Delete</th>
        <th>Edit</th>
    </thead>
    <tbody>
        @foreach ($farmers as $farmer)

            <tr>
                <td>{{$farmer->name}}</td>
                <td>{{$farmer->produce}}</td>
                <td>{{$farmer->location}}</td>
                <td>{{$farmer->phone}}</td>
                <td>{{$farmer->farm_size}}</td>
                 <td>
                   {!! Form::open(['action'=>['FarmerController@destroy',$farmer -> id],'method' =>'POST']) !!}
                       {!! Form::hidden('_method', 'DELETE') !!}
                       {!! Form::submit('Delete',['class'=>'btn btn-primary']) !!}
                </td>
                <td> {!! Form::close() !!}
                   <button class="btn btn-primary"><a href="{{route('farmers.edit',$farmer->id)}}">Edit</a></button></td>



            </tr>

        @endforeach
    </tbody>
</table>

{{ $farmers->links() }}

