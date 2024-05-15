<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" >
  </head>
  <body>
    <div class="conteiner">
      <div class="row">
        <div class="col">
          <h1>pesquisar</h1>
          <nav class="navbar navbar-light bg-light">
  <form class="form-inline" method="post" action="pesquisar.php">
    <input class="form-control mr-sm-2" type="search" placeholder="buscar " aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">pesquisa</button>
  </form>
</nav>
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Nome</th>
      <th scope="col">Email</th>
      <th scope="col">Açoes </th>
    
    
    </tr>
  </thead>
  
</table>
        </div>
      </div>
    </div>
  
  </body>
</html>
