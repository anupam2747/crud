
@include('include/head');
<h1>User List</h1>
    @if (session('status'))
        <h6 class="alert alert-success">{{ session('status') }}</h6>
    @endif
<table border="1px">
    <tr>
        <td>Id</td>
        <td>First Name</td>
        <td>Last Name</td>
        <td>Email</td>
        <td>Mobile</td>
        <td>Address</td> 
        <td>Edit</td>  
        <td>Delete</td>  
    </tr>

    @foreach($details as $row)
    
    <tr>
        <td>{{$loop->iteration}}</td>
        <td>{{$row['firstname']}}</td>
        <td>{{$row['lastname']}}</td>
        <td>{{$row['email']}}</td>
        <td>{{$row['mobile']}}</td>
        <td>{{$row['address']}}</td>
        <td><a href="{{ route('edit',['id'=>$row['id']]) }}" class="btn btn-info">Edit</td>
        <!-- <td><a href="/deletedetails/{{$row['id']}}">delete</td> -->
        <!-- <td><a href="{{ route('deletedata.index',['id'=>$row['id']]) }}">delete</a></td> -->
        <td>
            <form method="POST" action="{{ route('deletedata.index',['id'=>$row['id']]) }}">
                @csrf
                <input name="_method" type="hidden" value="DELETE">
                <button type="submit" class="show_confirm btn btn-danger" title='Delete'>Delete</button>
            </form>
         </td>
    </tr>
   
         @endforeach
</table>

{{ $details->links() }}

<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
<script type="text/javascript">

     $('.show_confirm').click(function(event) {
          var form =  $(this).closest("form");
          var name = $(this).data("name");
          event.preventDefault();
          swal({
              title: `Are you sure you want to delete this record?`,
              text: "If you delete this, it will be gone forever.",
              icon: "warning",
              buttons: true,
              dangerMode: true,
          })
          .then((willDelete) => {
            if (willDelete) {
              form.submit();
            }
          });
      });
  
</script>
  @include('include/footer');