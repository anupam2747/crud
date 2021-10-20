<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Crud</title>
  </head> 
  <body>
    
        <div class="container">
            <div class="card" style="margin-top:40px;">
                <div class="card-body">
                <!-- <form class="row g-3" action="/formsubmit" method="post"> -->
               
                 <form class="row g-3" action="{{ (empty($data['id'])) ? route('formsubmit') : route('formupdate',['id'=>$data['id']] )}}" method="post"> 
                    @csrf
                   
                <div class="col-md-6">
                    <label for="inputfname" class="form-label">First Name</label>
                    <input type="text" class="form-control" id="inputfname" name="fname" value="{{ isset($data->firstname) ? $data->firstname : ''}}">
                </div>
                <div class="col-md-6">
                    <label for="inputsname" class="form-label">Last Name</label>
                    <input type="text" class="form-control" id="inputsname" name="lname" value="{{isset($data->lastname) ? $data->lastname : ''}}">
                </div>
                <div class="col-md-6">
                    <label for="inputEmail4" class="form-label">Email</label>
                    <input type="email" class="form-control" id="inputEmail4" name="email" value="{{isset($data->email) ? $data->email : '' }}">
                </div>
                <div class="col-md-6">
                    <label for="inputPassword4" class="form-label">Mobile</label>
                    <input type="number" class="form-control" id="inputPassword4" name="mobile" value="{{isset($data->mobile) ? $data->mobile : ''}}">
                </div>
                <div class="col-12">
                    <label for="inputAddress" class="form-label">Address</label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" name="address" value="{{isset($data->address) ? $data->address : ''}}">
                </div>
                 
                <div class="col-12">
                    <button type="submit" class="btn btn-primary">{{isset($check) ? $check : 'Submit'}}</button>
                </div>
                </form>
             </div>
            </div>
         </div>
  </body>
</html>