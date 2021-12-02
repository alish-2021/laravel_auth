@extends('layouts.page')

@foreach ($articles as $article)
   <div>
      <a href="/auth/public/article/{{ $article->id }}">{{ $article->title }}</a>
      <p>{{ $article->text }}</p>
   </div>
@endforeach