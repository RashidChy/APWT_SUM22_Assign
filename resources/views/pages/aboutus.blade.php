@extends('layouts.UserNav')
@section('content')
<center>
    <h1>About US : </h1>
    <br>
    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Atque officia, a deserunt vitae laborum laboriosam ipsa velit, voluptatibus aperiam tempora dolor autem? Rem, voluptatum culpa! Ipsam laboriosam sequi laborum, nam necessitatibus temporibus quibusdam, quos libero incidunt tempora pariatur, qui expedita in? Suscipit eos ab, ipsam est neque facilis dolor nihil, repellat rerum unde minus ullam sequi nam corrupti eum delectus quod corporis. Incidunt porro earum sunt delectus repudiandae quidem voluptatum, saepe unde molestias accusamus magni at iure doloribus maiores quisquam nobis et repellat. Fugiat ullam eos tenetur iusto pariatur. Doloribus esse ullam reprehenderit, eum distinctio consectetur? Rem, natus. Ipsum maiores eius ipsam non tenetur blanditiis optio vero, quas sapiente voluptas nisi atque cum a? Eligendi unde commodi maxime accusantium obcaecati praesentium ea repellat ex recusandae officiis soluta repudiandae, corporis nulla doloribus aperiam tempore, saepe est dolor. Sequi animi doloremque earum eos. Minima et, iste ipsam error magni alias a provident dignissimos? Dolores sapiente provident odit, velit ipsa itaque nulla ad incidunt asperiores maiores aspernatur perspiciatis omnis tempora nam obcaecati laudantium! Nesciunt officiis dolorem quae aliquam nam ut et perspiciatis amet id temporibus enim repellat autem, sed magni cumque. Perferendis, tenetur unde ex quod molestiae consequatur itaque! Mollitia corporis quas ad veritatis dolores! Sequi vero quasi aliquam quod numquam nam consectetur, laboriosam minus at autem dignissimos doloremque natus cupiditate placeat, ut corrupti. Aperiam dicta laboriosam quidem repudiandae sunt nam dolore! Eveniet repellat harum reprehenderit quaerat saepe accusamus illo aliquam, rem, soluta exercitationem debitis quae earum hic in labore! Tempore eaque officiis iusto facere nostrum distinctio voluptatum fuga veniam sed aut id, consequatur laboriosam quis, harum dignissimos illum ullam perspiciatis quam iure natus eos? Neque molestiae corrupti, ratione iusto harum perspiciatis cupiditate culpa nulla molestias earum distinctio fuga, tenetur esse dolores doloribus temporibus deleniti laudantium ab accusantium veniam. Eveniet id voluptatem, doloremque quam facere pariatur veniam. Placeat illum neque dolores fugit quidem recusandae? Quia omnis nulla cum odio distinctio quasi animi? Quaerat, ipsam fugit fugiat inventore reprehenderit sint. Velit corrupti quaerat provident sint, commodi ipsa, animi deleniti eos ab ipsam vitae reiciendis sit aspernatur modi a? Dolore voluptatibus error earum odit cumque eligendi commodi, praesentium accusantium dolores nisi soluta dignissimos delectus a natus aliquam, aliquid explicabo? Beatae soluta impedit sequi ex repellat asperiores dignissimos accusamus atque, molestiae nisi reiciendis voluptate tenetur obcaecati inventore nulla assumenda architecto culpa modi, quos deleniti! Odit, eum nostrum ex ratione, labore praesentium sint quaerat quis reiciendis nesciunt maxime. Nemo expedita culpa eaque enim nobis at obcaecati officiis corporis ut suscipit. Accusantium ipsum iure qui deserunt architecto. Officiis fuga voluptatum vitae quo rem fugit animi soluta exercitationem sed itaque! Minus laboriosam consectetur soluta numquam perferendis explicabo quaerat atque, hic repellendus unde illum provident voluptas eum quisquam sequi ipsa nam neque fugiat tempora voluptates omnis enim cupiditate in. Modi sit accusantium aliquid iusto voluptate debitis tempora commodi, labore impedit in, rem alias quia laborum. Sapiente et laboriosam repudiandae dolorum vitae? Itaque dolor iusto omnis quibusdam fugit, natus animi aperiam iste sequi consequatur eos velit saepe minima, quae provident accusantium.</p>
</center>
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
@endsection