<h1><a href="{{route('login')}}">logout</a></h1>

      <br>
      <hr>
      <h1>Admin Panel</h1>
      <hr>
      <br>
      <hr>


<table class="table">
      <thead class="thead-dark">
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Name</th>
          <th scope="col">Email</th>
        </tr>
      </thead>
      <tbody>
           @foreach($info as $item) 
            <tr>
                  <td>
                        <a class="text-decoration-none" href="/profile/{{$item->id}}/{{$item->name}}/{{$item->email}}/{{$item->created_at}}">{{$item->id}}</a>
                  </td>
                  <td>
                        <a class="text-decoration-none" href="/profile/{{$item->id}}/{{$item->name}}/{{$item->email}}/{{$item->created_at}}">{{$item->name}}</a>
                  </td>
                  <td>{{$item->email}}</td>
            </tr>
           @endforeach 
        
      </tbody>
    </table>
    
