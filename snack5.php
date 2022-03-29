<!--## Snack 5
Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e
suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo.
-->

<?php
  $paragrafo = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat ipsa eum, debitis eaque tempora quae perferendis eius voluptatum quos culpa. Consequatur excepturi vel culpa tempore quae ratione doloremque praesentium deleniti!
  Explicabo expedita velit, dolor, soluta necessitatibus magni nemo nulla a dolore sit incidunt illum ipsam consectetur officiis, nobis magnam at tenetur. Praesentium omnis unde error perspiciatis molestiae quisquam eius. Id!
  Maxime quos aut eos ut distinctio consectetur temporibus incidunt eveniet culpa odio in error dolor autem, inventore provident? Cum illum totam quod sint rerum recusandae quisquam veritatis architecto dolorem repudiandae?
  Ullam, quibusdam officiis, dolore quod quos aspernatur praesentium distinctio aut sapiente id, magni iure repellat reprehenderit soluta. Quae nemo deserunt rerum quibusdam voluptatibus perferendis similique. Dolor aut harum quas alias.
  Rem, inventore? Perferendis fuga iusto eligendi repellendus cum excepturi ipsam sapiente consequatur, incidunt illo adipisci exercitationem, distinctio cumque totam cupiditate molestiae asperiores blanditiis neque beatae nobis! Corporis natus est maxime!
  Suscipit ex perferendis quaerat ratione nihil. Expedita soluta molestiae tenetur laudantium libero error nihil vel consectetur voluptatem, veritatis aliquid incidunt quas labore ratione, provident rem sint ex! Consequuntur, blanditiis similique.
  Beatae perferendis quibusdam veritatis, eveniet id in esse voluptas perspiciatis ab molestias. Vero, recusandae sapiente consectetur quo hic tenetur eum obcaecati repellendus in, blanditiis omnis vitae adipisci itaque distinctio. Nobis?
  Ullam aut, ab eligendi maxime enim dolore suscipit nemo dignissimos tempore est exercitationem mollitia, asperiores magnam itaque consectetur possimus beatae soluta praesentium. Voluptate eligendi soluta dolore, ipsum magnam eaque consequatur.
  Dolor cum quis adipisci? Provident ut animi optio odit et nobis praesentium perferendis voluptates voluptatum tenetur qui excepturi, facilis accusamus sunt! Temporibus pariatur veritatis rerum! Architecto debitis nulla quaerat culpa!
  Harum vitae autem nemo distinctio, quasi ratione architecto, ipsam error hic voluptates maxime facilis explicabo atque corrupti ea sit nisi accusantium quos ullam et! Eos voluptatum consectetur perspiciatis tempore harum!
  Ullam inventore esse magnam praesentium fugiat atque minus minima, qui vel ratione iure modi velit voluptate repellendus asperiores accusantium sunt. Quam deleniti ab optio veritatis debitis voluptatibus excepturi. Aspernatur, hic?
  Harum laudantium exercitationem consectetur laboriosam nulla doloremque qui quia architecto officiis, ab iusto enim quasi, fugit ea, maiores eveniet corporis et nobis eaque quaerat dignissimos rem. Odit mollitia at impedit.
  Placeat consequuntur eligendi nobis distinctio quis ratione sunt, porro ea tempore odio temporibus quasi id minus consectetur commodi dolorum aut. Velit ad, unde similique odit et delectus nemo ipsa accusantium.
  Nemo ipsum doloribus numquam repudiandae? Architecto, quod, doloremque corporis, nobis excepturi voluptas vero hic placeat ea consectetur expedita sunt similique. Omnis vero a quidem reprehenderit repellat enim ratione in dignissimos.
  Incidunt ut, quaerat modi repellendus commodi iusto eaque laborum odit culpa dolor ducimus cupiditate facere obcaecati eveniet, nostrum alias et amet delectus aspernatur exercitationem sequi excepturi accusantium voluptas dicta? Dolores!
  Necessitatibus rem velit sunt minus libero inventore, minima accusamus commodi impedit placeat dignissimos eum eos. Voluptatem natus delectus deleniti? Eum accusantium quis facere, odio ducimus ab harum quaerat dignissimos rerum.
  Eos sapiente quis a nam commodi aliquid ex fuga repellat ipsum voluptatem accusamus quisquam magnam unde, cum odio, eius perferendis possimus laudantium quod similique cupiditate maiores cumque placeat ratione. Asperiores.
  Sunt odit vero facilis illum. Adipisci quos repellat, voluptatibus, tenetur vitae harum iure laborum nemo atque animi repellendus minima nam est expedita illum cumque ut ullam fuga quod temporibus aperiam?
  Delectus reiciendis magnam praesentium repudiandae cum sit libero ab similique ex quis voluptatum autem deleniti ducimus minima et consequatur nemo harum reprehenderit, voluptas porro ipsam aliquam voluptatem officiis non. Officia!
  Nulla perspiciatis explicabo vel nostrum, ducimus animi, dolorem, minus perferendis distinctio laboriosam aliquid aut molestiae. Voluptates officiis earum commodi excepturi reiciendis doloribus harum voluptatem, laborum porro illum ipsam reprehenderit maxime.";

  $arr = explode('. ', $paragrafo);

  for($i=0; $i<count($arr); $i++){
    echo $i .". " .$arr[$i];
    echo "<br>";
  }

  
?>