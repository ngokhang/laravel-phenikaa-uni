<article>
    <!-- Smile, breathe, and go slowly. - Thich Nhat Hanh -->
    <h3>Title : {{ $post->title }}</h3>
    <div>
        <span>Author: </span>
        <a href="#">
            {{ $post->user->name }}
        </a>
    </div>
    <div>
        <p>{{ $post->content }}</p>
    </div>

</article>

<hr>

<div>
    <p><strong>Comments</strong></p>
    @if (count($post->comments) <= 0) 
        <h3>Nothing</h3>
    @endif
    <x-comment :commentData="$commentData"/>
</div>