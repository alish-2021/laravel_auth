@extends('layouts.app')

<form action="/auth/public/article/save" method="POST">
   @csrf
   <input type="text" name="title" placeholder="Title Article">
   <br>
   <textarea name="text" type="text"></textarea>
   <br> <br>
   <button type="submit">Create Article</button>
</form>