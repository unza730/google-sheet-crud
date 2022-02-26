<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
    <style>
    body{
      height: 100vh;
    width: 100%;
    background-image: url("https://wallpaperaccess.com/full/472038.jpg"); 
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    backdrop-filter: blur(7px);
    color: white;
    }
    .mainn {
    /* margin: 5px;
    padding: 5px; */
    background-color: rgba(75, 71, 71, 0.515);
     /* background-color: rgba(0, 0, 0, 0.459); */
    color: white;
    /* min-height: 86vh; */
    /* color: white; */
    border-top: 2px solid gray;
     border-left: 2px solid gray;
     
}
    .lab{
      color: #FFC600 !important;
      /* color: #612897 !important; */
      font-weight: bold;
    }

    </style>
  </head>
  <body>
<div class="container">
<div class="row">
<div class="col-md-4 col-md-offset-3  mt-5 p-3 bg-dark">
    <form action="" method="POST">
     @csrf
  <div class="mb-3">
    <label for="name" class="form-label bg-dark text-light lab">Name</label>
    <input type="text" class="form-control" id="name" aria-describedby="emailHelp" name="name">
  </div>
  <div class="mb-3">
    <label for="agentname" class="form-label bg-dark text-light lab">Agent Name</label>
    <input type="text" class="form-control" id="agentname" name="agentname">
  </div>
   <div class="mb-3">
    <label for="noofsheetdb" class="form-label bg-dark text-light lab">No of sheetdb</label>
    <input type="number" class="form-control" id="noofsheetdb" name="noofsheetdb">
  </div>
   <div class="mb-3">
    <label for="sheetdbstatus" class="form-label bg-dark text-light lab">sheetdb Status</label>
    <input type="text" class="form-control" id="sheetdbstatus" name="sheetdbstatus">
  <button type="submit" class="btn btn-outline-info mt-2">Submit</button>
  </div>
</form>
@if (session()->has('status'))
<div class="alert alert-success">
{{session('status')}}
</div>
@endif
 </div>
    <div class="col-md-8 col-md-offset-3 mt-5">
    <h4>sheetdb Status</h4><hr>
    <table class="table  mainn">
  <thead>
    <tr>
      <th scope="col">S.No</th>
      <th scope="col">Name</th>
      <th scope="col">Agent Name</th>
      <th scope="col">No of Tasks</th>
      <th scope="col">Task Status</th>
       <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($data as $data)
    <tr>
      <th scope="row">{{$data->id}}</th>
      <td>{{$data->name}}</td>
      <td>{{$data->agentname}}</td>
      <td>{{$data->nooftask}}</td>
      <td>{{$data->taskstatus}}</td>
      <td>
      <a href="{{ url('/edit', $data->id) }}" class="btn btn-outline-primary btn-sm">Edit</a>
      <a href="{{ url('/delete', $data->id) }}" class="btn btn-outline-danger btn-sm">Delete</a>
     
      </td>
    </tr>
   @endforeach

   </tbody>
</table>
    </div>
</div>

</div>
<script>
			const scriptURL = 'https://script.google.com/macros/s/AKfycbyN4gjsOlmxPsGcka_D3yXbGEIbHumcODcJZ9dDBXdgrOgkNWf-m1E1f4CoXHQx0RH3RQ/exec'
			const form = document.forms['crudform']
		  
			form.addEventListener('submit', e => {
			  e.preventDefault()
			  fetch(scriptURL, { method: 'POST', body: new FormData(form)})
				.then(response => console.log('Success!', response))
				.catch(error => console.error('Error!', error.message))
			})
		  </script>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>