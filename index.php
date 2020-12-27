<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student App</title>
</head>

<nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.html">Link Ur Code</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.html">Home</a>
          </li>
         
        </ul>
      </div>
    </div>
  </nav>


<body>
    <h1>STUDENT APP</h1>
    <table class="table table-borderless">
        <tr>
            <td>Name</td>
            <td><input id="name" type="text" class="form-control"></td>
        </tr>
        <tr>
            <td>Roll No</td>
            <td><input id="rollno" type="text" class="form-control"></td>
        </tr>
        <tr>
            <td>Admission No</td>
            <td><input id="admissionno" type="text" class="form-control"></td>
        </tr>
       <tr>
           <td></td>
           <td><Button onclick="mybuttonclick()" class="btn btn-secondary">Submit</Button></td>
       </tr>
    </table>

    <script>

        function mybuttonclick(){

             var getName=document.getElementById("name").value

             var getRollno=document.getElementById("rollno").value

             var getAdmissinNo=document.getElementById("admissionno").value

             console.log(getName)

             console.log(getRollno)

             console.log(getAdmissinNo)

        }
    </script>
</body>
</html>