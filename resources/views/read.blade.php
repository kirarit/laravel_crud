@include('inc.header');
<div class="container">
  <div class="row">
        <legend>Read Article</legend>
     <h2 class="lead">{{$articles->title}}</h2>
     
      <p>{{$articles->description}}</p>

   </div>
</div>        
@include('inc.footer');