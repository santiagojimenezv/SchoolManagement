<section id="blog">
    <div class="bg-success-subtle">
        <div class="container p-5">
            <h1 class="text-center">Blog Institucional</h1>
            <div class="row">
                @foreach ($posts as $post)
                    <div class="card mb-3" >
                        <div class="card-body">
                            <h3 class="card-title">{!! $post['title'] !!}</h3>
                            <p class="card-subtitle mb-2 text-muted">{!! $post->autor->fullName() !!}</p>
                            <a href="#" class=" btn-primary text-end"></a>
                            <div class="card-footer text-muted">{!! $post->date->format('d M Y') !!}</div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
